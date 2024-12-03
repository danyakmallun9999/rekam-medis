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
}
