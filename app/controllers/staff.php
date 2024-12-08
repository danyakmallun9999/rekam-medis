<?php

use MongoDB\BSON\UTCDateTime;

/**
 * Class Staff
 * Controller untuk menangani fitur-fitur pada halaman Staff Pendaftaran
 */
class Staff extends Controller
{
    /**
     * Halaman utama staff
     */
    public function index()
    {
        $appointmentsModel = $this->model('AppointmentsModel');
        $patientModel = $this->model('PatientModel');

        $data = [
            "patient_count" => $patientModel->getPatientCount(),
            "appointment_count" => $appointmentsModel->getAppointmentsCount(),
            "judul" => "Staff Pendaftaran",
            "user" => "Staff Pendaftaran",
        ];

        $this->render('staff/index', $data);
    }

    /**
     * Halaman daftar janji temu
     */
    public function janji_temu()
    {
        $appointmentsModel = $this->model('AppointmentsModel');
        $doctorModel = $this->model('DoctorModel');

        $data = [
            "judul" => "Janji Temu",
            "user" => "Petugas Pendaftaran",
            "doctors" => $doctorModel->getAllDoctors(),
            "appointments" => $appointmentsModel->getAppointments(),
        ];

        $this->render('staff/janji_temu', $data);
    }

    /**
     * Halaman daftar pasien
     */
    public function daftar_pasien()
    {
        $patientModel = $this->model('PatientModel');

        $data = [
            "judul" => "Daftar Pasien",
            "user" => "Staff Pendaftaran",
            "patients" => $patientModel->getAllPatients(),
        ];

        $this->render('staff/daftar_pasien', $data);
    }

    /**
     * Halaman untuk menambah pasien baru
     */
    public function tambah_pasien()
    {
        $data = [
            "judul" => "Tambah Pasien",
            "user" => "Staff Pendaftaran",
        ];

        $this->render('staff/tambah_pasien', $data);
    }

    /**
     * Menambah pasien ke dalam database
     */
    public function addPatient()
    {
        $patientModel = $this->model('PatientModel');

        $customId = $patientModel->generateCustomId();
        $data = [
            '_id' => $customId,
            'name' => $_POST['full_name'],
            'birth_date' => new UTCDateTime(strtotime($_POST['birth_date']) * 1000),
            'gender' => $_POST['gender'],
            'contact_number' => $_POST['contact_number'],
            'address' => $_POST['address'],
        ];

        $patientModel->addPatient($data);

        header('Location: ' . BASEURL . '/staff/daftar_pasien');
        exit;
    }

    /**
     * Halaman untuk mengedit data pasien
     */
    public function edit_pasien($id)
    {
        $patientModel = $this->model('PatientModel');
        $patient = $patientModel->getPatientById($id);

        if (!$patient) {
            header('Location: ' . BASEURL . '/staff/daftar_pasien');
            exit;
        }

        $data = [
            "judul" => "Edit Pasien",
            "user" => "Staff Pendaftaran",
            "patient" => $patient,
        ];

        $this->render('staff/edit_pasien', $data);
    }

    /**
     * Memperbarui data pasien di database
     */
    public function updatePatient()
    {
        $patientModel = $this->model('PatientModel');

        $data = [
            'name' => $_POST['full_name'],
            'birth_date' => new UTCDateTime(strtotime($_POST['birth_date']) * 1000),
            'gender' => $_POST['gender'],
            'contact_number' => $_POST['contact_number'],
            'address' => $_POST['address'],
        ];

        $patientModel->updatePatient($_POST['_id'], $data);

        header('Location: ' . BASEURL . '/staff/daftar_pasien');
        exit;
    }

    /**
     * Menghapus data pasien dari database
     */
    public function hapus_pasien($id)
    {
        $patientModel = $this->model('PatientModel');
        $patientModel->deletePatient($id);

        header('Location: ' . BASEURL . '/staff/daftar_pasien');
        exit;
    }

    /**
     * Pencarian pasien berdasarkan filter tertentu
     */
    public function search_patients()
    {
        $patientModel = $this->model('PatientModel');
        $patients = $patientModel->searchPatients();

        $data = [
            "judul" => "Daftar Pasien",
            "user" => "Staff Pendaftaran",
            "patients" => $patients,
        ];

        $this->render('staff/daftar_pasien', $data);
    }

    /**
     * Halaman untuk menambah janji temu baru
     */
    public function tambah_janji_temu()
    {
        $patientsModel = $this->model('PatientModel');
        $doctorsModel = $this->model('DoctorModel');

        $data = [
            "judul" => "Tambah Janji Temu",
            "user" => "Staff Pendaftaran",
            "patients" => $patientsModel->getAllPatients(),
            "doctors" => $doctorsModel->getAllDoctors(),
        ];

        $this->render('staff/tambah_janji_temu', $data);
    }

    /**
     * Menambah janji temu baru ke dalam database
     */
    public function addAppointment()
    {
        $appointmentModel = $this->model('AppointmentsModel');

        $data = [
            'patient_id' => $_POST['patient_id'],
            'doctor_id' => $_POST['doctor_id'],
            'appointment_date' => new UTCDateTime(strtotime($_POST['appointment_date']) * 1000),
            'start' => $_POST['start_time'],
            'end' => $_POST['end_time'],
            'status' => $_POST['status'],
            'notes' => $_POST['notes'],
        ];

        $appointmentModel->addAppointment($data);

        header('Location: ' . BASEURL . '/staff/janji_temu');
        exit;
    }

    /**
     * Halaman untuk mengedit janji temu
     */
    public function edit_appointment($id)
    {
        $appointmentsModel = $this->model('AppointmentsModel');
        $appointment = $appointmentsModel->getAppointmentById($id);

        if (!$appointment) {
            header('Location: ' . BASEURL . '/staff/janji_temu');
            exit;
        }

        $doctorModel = $this->model('DoctorModel');
        $patientModel = $this->model('PatientModel');

        $data = [
            "judul" => "Edit Janji Temu",
            "user" => "Petugas Pendaftaran",
            "patients" => $patientModel->getAllPatients(),
            "doctors" => $doctorModel->getAllDoctors(),
            "appointments" => $appointment,
        ];

        $this->render('staff/edit_appointment', $data);
    }

    /**
     * Memperbarui janji temu di database
     */
    public function updateAppointment()
    {
        $appointmentModel = $this->model('AppointmentsModel');

        $data = [
            'patient_id' => $_POST['patient_id'],
            'doctor_id' => $_POST['doctor_id'],
            'appointment_date' => new UTCDateTime(strtotime($_POST['appointment_date']) * 1000),
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'status' => $_POST['status'],
            'notes' => $_POST['notes'],
        ];

        $appointmentModel->updateAppointment($_POST['_id'], $data);

        header('Location: ' . BASEURL . '/staff/janji_temu');
        exit;
    }

    /**
     * Menghapus janji temu dari database
     */
    public function hapus_appointment($id)
    {
        $appointmentModel = $this->model('AppointmentsModel');
        $appointmentModel->deleteAppointment($id);

        header('Location: ' . BASEURL . '/staff/janji_temu');
        exit;
    }

    /**
     * Pencarian janji temu berdasarkan filter tertentu
     */
    public function search_appointment()
    {
        $doctorModel = $this->model('DoctorModel');
        $appointmentModel = $this->model('AppointmentsModel');

        $data = [
            "judul" => "Janji Temu",
            "user" => "Petugas Pendaftaran",
            'doctors' => $doctorModel->getAllDoctors(),
            "appointments" => $appointmentModel->searchAppointment(),
        ];

        $this->render('staff/janji_temu', $data);
    }
}
