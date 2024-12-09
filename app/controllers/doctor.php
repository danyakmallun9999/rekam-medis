<?php

class Doctor extends Controller
{
    public function __construct()
    {
        // Middleware untuk memastikan pengguna login dan memiliki role "doctor"
        requireLogin();
        requireRole('doctor');
    }

    public function index()
    {
        $patientModel = $this->model('PatientModel');
        $appointmentModel = $this->model('AppointmentsModel');

        $data["judul"] = "Halaman Utama Dokter";
        $data["user"] = "Dr. Johan";
        $data["patient_count"] = $patientModel->getPatientCount();
        $data["appointment_count"] = $appointmentModel->getAppointmentsCount();
        $this->render('doctor/index', $data);
    }

    public function daftar_pasien_diagnosa()
    {
        $data["judul"] = "Daftar Pasien";
        $data["user"] = "Dr. Johan";
        $this->render('doctor/daftar_pasien_diagnosa', $data);
    }

    public function janji_temu_pasien()
    {
        $data["judul"] = "Janji Temu";
        $data["user"] = "Dr. Johan";
        $this->render('doctor/janji_temu_pasien', $data);
    }

    public function catatan_rekam_medis()
    {
        $patientModel = $this->model('PatientModel');
        $data["judul"] = "Rekam Medis";
        $data["user"] = "Dr. Johan";
        $data["patients"] = $patientModel->getAllPatients();

        $this->render('doctor/catatan_rekam_medis', $data);
    }

    public function detail_rekam_medis($id)
    {
        $patientModel = $this->model('PatientModel');
        $data["patient"] = $patientModel->getPatientById($id);;
        $data["judul"] = "Detail Rekam Medis";
        $data["user"] = "Dr. Johan";
        $this->render('doctor/detail_rekam_medis', $data);
    }

    public function diagnosa()
    {
        $data["judul"] = "Diagnosa";
        $data["user"] = "Dr. Johan";
        $this->render('doctor/diagnosa', $data);
    }
}
