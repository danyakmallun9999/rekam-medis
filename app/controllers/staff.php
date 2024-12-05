<?php

use MongoDB\BSON\UTCDateTime;

class Staff extends Controller
{
    public function index()
    {
        $model = $this->model('PatientModel');
        $data["patient_count"] = $model->getPatientCount();

        $data["judul"] = "Halaman Staff Pendaftaran";
        $data["user"] = "Staff Pendaftaran";
        $this->render('staff/index', $data);
    }

    public function janji_temu()
    {
        $data["judul"] = "Janji Temu";
        $data["user"] = "Petugas Pendaftaran";
        $this->render('staff/janji_temu', $data);
    }

    public function daftar_pasien()
    {
        $model = $this->model('PatientModel');
        $patients = $model->getAllPatients();

        $data["judul"] = "Daftar Pasien";
        $data["user"] = "Staff Pendaftaran";
        $data["patients"] = $patients;
        $this->render('staff/daftar_pasien', $data);
    }

    public function tambah_pasien()
    {
        $data["judul"] = "Tambah Pasien";
        $data["user"] = "Staff Pendaftaran";
        $this->render('staff/tambah_pasien', $data);
    }

    public function hapus_pasien($id)
    {
        $model = $this->model('PatientModel');

        // Hapus pasien berdasarkan ID
        $model->deletePatient($id);

        // Redirect kembali ke halaman daftar pasien
        header('Location: ' . BASEURL . '/staff/daftar_pasien');
        exit;
    }

    public function addPatient()
    {
        // Ambil model
        $model = $this->model('PatientModel');

        // Generate _id custom
        $customId = $model->generateCustomId();

        // Ambil data dari form
        $data = [
            '_id' => $customId,
            'name' => $_POST['full_name'],
            'birth_date' => new UTCDateTime(strtotime($_POST['birth_date']) * 1000), // Konversi ke UTCDateTime
            'gender' => $_POST['gender'],
            'contact_number' => $_POST['contact_number'],
            'address' => $_POST['address'],
        ];

        // Simpan ke database
        $model->addPatient($data);

        // Redirect ke halaman daftar pasien
        header('Location: ' . BASEURL . '/staff/daftar_pasien');
        exit;
    }
}
