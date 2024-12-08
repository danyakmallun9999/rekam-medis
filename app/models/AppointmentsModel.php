<?php

use MongoDB\Client;

class AppointmentsModel
{
    private $client;
    private $db;
    private $collection;

    public function __construct()
    {
        // Koneksi ke MongoDB
        $this->client = new Client("mongodb://localhost:27017");
        $this->db = $this->client->emr_system; // Nama database
        $this->collection = $this->db->appointments; // Nama koleksi
    }

    public function getAppointments()
    {
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
                '$project' => [
                    '_id' => 1,
                    'appointment_date' => 1,
                    'appointment_time' => 1,
                    'status' => 1,
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

    public function deleteAppointment($id)
    {
        $result = $this->collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
        return $result->getDeletedCount() > 0;
    }

    public function getAppointmentsCount()
    {
        return $this->collection->countDocuments();
    }

    public function addAppointment($data)
    {
        $result = $this->collection->insertOne([
            'patient_id' => $data['patient_id'],
            'doctor_id' => $data['doctor_id'],
            'appointment_date' => $data['appointment_date'],
            'appointment_time' => [
                'start' => $data['start'], // Masukkan waktu mulai
                'end' => $data['end'] // Masukkan waktu berakhir
            ],
            'status' => $data['status'],
            'notes' => $data['notes'],
        ]);

        return $result->getInsertedCount() > 0;
    }

    public function searchAppointment()
    {
        $search = $_POST["search"];

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
                    'patient_info.name' => new \MongoDB\BSON\Regex($search, 'i') // Case-insensitive search berdasarkan nama pasien
                ]
            ],
            [
                '$project' => [
                    '_id' => 1,
                    'appointment_date' => 1,
                    'appointment_time' => 1,
                    'status' => 1,
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

    public function getAppointmentById($id)
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
                    '_id' => new MongoDB\BSON\ObjectId($id) // Case-insensitive search berdasarkan nama pasien
                ]
            ],
            [
                '$project' => [
                    '_id' => 1,
                    'appointment_date' => 1,
                    'appointment_time' => 1,
                    'status' => 1,
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

    public function updateAppointment($id, $data)
    {
        $updateData = [
            'patient_id' => $data['patient_id'],
            'doctor_id' => $data['doctor_id'],
            'appointment_date' => $data['appointment_date'],
            'appointment_time' => [
                'start' => $data['start_time'],
                'end' => $data['end_time']
            ],
            'status' => $data['status'],
            'notes' => $data['notes']
        ];

        $this->collection->updateOne(
            ['_id' => new MongoDB\BSON\ObjectId($id)],
            ['$set' => $updateData]
        );
    }
}
