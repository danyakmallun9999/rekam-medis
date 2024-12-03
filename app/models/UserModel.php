<?php

use MongoDB\Client;

class UserModel
{
    private $client;
    private $db;
    private $collection;

    public function __construct()
    {
        // Koneksi ke MongoDB
        $this->client = new Client("mongodb://localhost:27017"); // Ganti dengan URI MongoDB Anda
        $this->db = $this->client->emr_system; // Nama database
        $this->collection = $this->db->users; // Nama koleksi
    }

    // Mengambil semua data user
    public function getAllUsers()
    {
        $users = $this->collection->find();
        return iterator_to_array($users); // Konversi hasil ke array
    }

    // Mengambil user berdasarkan role
    public function getUserByRole($role)
    {
        $user = $this->collection->findOne(['role' => $role]);
        return $user;
    }

    public function getUserByUsername($username)
    {
        return $this->collection->findOne(['username' => $username]);
    }
}
