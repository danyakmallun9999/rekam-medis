<?php

use MongoDB\Client;

class PatientModel
{
    private $client;
    private $db;
    private $collection;


    public function __construct()
    {
        // Koneksi ke MongoDB
        $this->client = new Client("mongodb://localhost:27017");
        $this->db = $this->client->emr_system; // Nama database
        $this->collection = $this->db->patients; // Nama koleksi
    }

    public function generateCustomId()
    {
        $lastPatient = $this->collection
            ->find([], ['sort' => ['_id' => -1], 'limit' => 1])
            ->toArray();

        if (!empty($lastPatient)) {
            $lastId = $lastPatient[0]['_id']; // Ambil _id terakhir
            $number = (int)str_replace('PAT-', '', $lastId); // Ambil angka dari format
            $newId = 'PAT-' . str_pad($number + 1, 3, '0', STR_PAD_LEFT); // Tambah 1
        } else {
            $newId = 'PAT-001'; // Jika tidak ada data, mulai dari PAT-001
        }

        return $newId;
    }


    // Mengambil semua data user
    public function getAllPatients()
    {
        $patients = $this->collection->find();
        return iterator_to_array($patients); // Konversi hasil ke array
    }

    public function getPatientCount()
    {
        return $this->collection->countDocuments();
    }

    public function deletePatient($id)
    {
        $this->collection->deleteOne(['_id' => $id]);
    }

    public function addPatient($patientData)
    {
        $this->collection->insertOne($patientData);
    }

    public function getPatientById($id)
    {
        return $this->collection->findOne(['_id' => $id]);
    }

    public function updatePatient($id, $data)
    {
        $this->collection->updateOne(
            ['_id' => $id],
            ['$set' => $data]
        );
    }

    public function searchPatients()
    {
        $search = $_POST["search"];
        // Filter berdasarkan nama pasien
        $patients = $this->collection->find([
            'name' => new \MongoDB\BSON\Regex($search, 'i') // 'i' untuk case-insensitive search
        ]);
        return iterator_to_array($patients); // Konversi hasil ke array
    }
}
