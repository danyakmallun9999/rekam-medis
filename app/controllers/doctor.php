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

        $data = [
            "judul" => "Halaman Utama Dokter",
            "user" => "Dr. Johan",
            "patient_count" => $patientModel->getPatientCount(),
            "appointment_count" => $appointmentModel->getAppointmentsCount(),
        ];

        $this->render('doctor/index', $data);
    }

    public function daftar_pasien_diagnosa()
    {
        $data = [
            "judul" => "Daftar Pasien",
            "user" => "Dr. Johan",
        ];

        $this->render('doctor/daftar_pasien_diagnosa', $data);
    }

    public function janji_temu_pasien()
    {
        $doctorModel = $this->model('DoctorModel');
        $appointmentModel = $this->model('AppointmentsModel');

        $data = [
            "doctors" => $doctorModel->getAllDoctors(),
            "appointments" => $appointmentModel->getAppointments(),
            "appointment_count" => $appointmentModel->getAppointmentsCount(),
            "judul" => "Janji Temu",
            "user" => "Dr. Johan",
        ];

        $this->render('doctor/janji_temu_pasien', $data);
    }

    public function catatan_rekam_medis()
    {
        $patientModel = $this->model('PatientModel');

        $data = [
            "judul" => "Rekam Medis",
            "user" => "Dr. Johan",
            "patients" => $patientModel->getAllPatients(),
        ];

        $this->render('doctor/catatan_rekam_medis', $data);
    }

    public function search_patients()
    {
        $patientModel = $this->model('PatientModel');
        $patients = $patientModel->searchPatients();

        $data = [
            "judul" => "Rekam Medis",
            "user" => "Dr. Johan",
            "patients" => $patients,
        ];

        $this->render('doctor/catatan_rekam_medis', $data);
    }

    public function search_appointment_patients()
    {
        $appointmentModel = $this->model('AppointmentsModel');
        $appointments = $appointmentModel->searchAppointment();

        $data = [
            "judul" => "Janji Temu",
            "user" => "Dr. Johan",
            "appointments" => $appointments,
            "appointment_count" => $appointmentModel->getAppointmentsCount(),
        ];

        $this->render('doctor/janji_temu_pasien', $data);
    }

    public function detail_rekam_medis($id)
    {
        $medicalRecordModel = $this->model('MedicalRecordModel');
        $patientModel = $this->model('PatientModel');

        $data = [
            "patient" => $patientModel->getPatientById($id),
            "medical_records" => $medicalRecordModel->getMedicalRecordById($id),
            "judul" => "Detail Rekam Medis",
            "user" => "Dr. Johan",
        ];

        $this->render('doctor/detail_rekam_medis', $data);
    }

    public function diagnosa()
    {
        $data = [
            "judul" => "Diagnosa",
            "user" => "Dr. Johan",
        ];

        $this->render('doctor/diagnosa', $data);
    }
}
