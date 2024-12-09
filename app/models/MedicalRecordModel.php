<?php

use MongoDB\Client;

class MedicalRecordModel
{
    private $client;
    private $db;
    private $collection;


    public function __construct()
    {
        // Koneksi ke MongoDB
        $this->client = new Client("mongodb://localhost:27017");
        $this->db = $this->client->emr_system; // Nama database
        $this->collection = $this->db->medical_records; // Nama koleksi
    }

    public function getMedicalRecordById($id)
    {
        // return $this->collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

        return $this->collection->aggregate([
            [
                '$lookup' => [
                    'from' => 'patients',
                    'localField' => 'patient_id',
                    'foreignField' => '_id',
                    'as' => 'patient_info',
                ],
            ],
            [
                '$lookup' => [
                    'from' => 'doctors',
                    'localField' => 'doctor_id',
                    'foreignField' => '_id',
                    'as' => 'doctor_info',
                ],
            ],
            [
                '$match' => [
                    'patient_info._id' => $id // Case-insensitive search berdasarkan nama pasien
                ]
            ],
            [
                '$project' => [
                    '_id' => 1,
                    'notes' => 1,
                    'diagnosis' => 1,
                    'visit_date' => 1,
                    'treatment' => 1,
                    'patient' => [
                        '$arrayElemAt' => ['$patient_info', 0],
                    ],
                    'doctor' => [
                        '$arrayElemAt' => ['$doctor_info', 0],
                    ],
                ],
            ],
        ]);
    }
}
