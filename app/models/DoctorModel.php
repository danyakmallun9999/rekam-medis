<?php

use MongoDB\Client;

class DoctorModel
{
    private $client;
    private $db;
    private $collection;

    public function __construct()
    {
        // Koneksi ke MongoDB
        $this->client = new Client("mongodb://localhost:27017");
        $this->db = $this->client->emr_system; // Nama database
        $this->collection = $this->db->doctors; // Nama koleksi
    }

    // Mengambil semua data user
    public function getAllDoctors()
    {
        $docters = $this->collection->find();
        return iterator_to_array($docters); // Konversi hasil ke array
    }
}
