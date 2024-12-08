<?php

use MongoDB\BSON\UTCDateTime;

class Staff extends Controller
{
    public function index()
    {
        $appointmentsModel = $this->model('AppointmentsModel');

        $model = $this->model('PatientModel');

        $data["patient_count"] = $model->getPatientCount();
        $data["appointment_count"] = $appointmentsModel->getAppointmentsCount();
        $data["judul"] = "Staff Pendaftaran";
        $data["user"] = "Staff Pendaftaran";
        $this->render('staff/index', $data);
    }

    public function janji_temu()
    {
        $appointmentsModel = $this->model('AppointmentsModel');
        $appointments = $appointmentsModel->getAppointments();

        $model = $this->model('DoctorModel');
        $doctors = $model->getAllDoctors();

        $data["judul"] = "Janji Temu";
        $data["user"] = "Petugas Pendaftaran";
        $data["doctors"] = $doctors;
        $data["appointments"] = $appointments;

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

    public function hapus_appointment($id)
    {
        $model = $this->model('AppointmentsModel');

        // Hapus pasien berdasarkan ID
        $model->deleteAppointment($id);

        // Redirect kembali ke halaman daftar pasien
        header('Location: ' . BASEURL . '/staff/janji_temu');
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

    public function edit_pasien($id)
    {
        $model = $this->model('PatientModel');

        // Ambil data pasien berdasarkan ID
        $patient = $model->getPatientById($id);

        // Jika data pasien tidak ditemukan, redirect ke daftar pasien
        if (!$patient) {
            header('Location: ' . BASEURL . '/staff/daftar_pasien');
            exit;
        }

        // Siapkan data untuk view
        $data["judul"] = "Edit Pasien";
        $data["user"] = "Staff Pendaftaran";
        $data["patient"] = $patient;

        $this->render('staff/edit_pasien', $data);
    }


    public function updatePatient()
    {
        $model = $this->model('PatientModel');

        // Ambil data dari form
        $data = [
            'name' => $_POST['full_name'],
            'birth_date' => new UTCDateTime(strtotime($_POST['birth_date']) * 1000),
            'gender' => $_POST['gender'],
            'contact_number' => $_POST['contact_number'],
            'address' => $_POST['address'],
        ];

        // Update data pasien
        $model->updatePatient($_POST['_id'], $data);

        // Redirect ke halaman daftar pasien
        header('Location: ' . BASEURL . '/staff/daftar_pasien');
        exit;
    }

    public function search_patients()
    {
        $model = $this->model('PatientModel');

        // Cari data pasien berdasarkan filter
        $patients = $model->searchPatients();

        $data["judul"] = "Daftar Pasien";
        $data["user"] = "Staff Pendaftaran";
        $data["patients"] = $patients;

        // Render tampilan daftar pasien
        $this->render('staff/daftar_pasien', $data);
    }

    public function search_appointment()
    {
        $doctorModel = $this->model('DoctorModel');
        $doctors = $doctorModel->getAllDoctors();

        $appointmentModel = $this->model('AppointmentsModel');
        $appointments = $appointmentModel->searchAppointment();

        $data["judul"] = "Janji Temu";
        $data["user"] = "Petugas Pendaftaran";
        $data['doctors'] = $doctors;
        $data["appointments"] = $appointments;

        $this->render('staff/janji_temu', $data);
    }

    public function edit_appointment($id)
    {
        $appointmentsModel = $this->model('AppointmentsModel');
        $appointments = $appointmentsModel->getAppointmentById($id);

        if (!$appointments) {
            header('Location: ' . BASEURL . '/staff/janji_temu');
            exit;
        }

        $doctorModel = $this->model('DoctorModel');
        $doctors = $doctorModel->getAllDoctors();
        $patientModel = $this->model('PatientModel');
        $patients = $patientModel->getAllPatients();
        $data["judul"] = "Janji Temu";
        $data["user"] = "Petugas Pendaftaran";


        $data["patients"] = $patients;
        $data["doctors"] = $doctors;
        $data["appointments"] = $appointments;


        $this->render('staff/edit_appointment', $data);
    }

    public function updateAppointment()
    {
        $model = $this->model('AppointmentsModel');

        $data = [
            'patient_id' => $_POST['patient_id'],
            'doctor_id' => $_POST['doctor_id'],
            'appointment_date' => new MongoDB\BSON\UTCDateTime(strtotime($_POST['appointment_date']) * 1000),
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'status' => $_POST['status'],
            'notes' => $_POST['notes']
        ];

        // Update data pasien
        $model->updateAppointment($_POST['_id'], $data);

        // Redirect ke halaman daftar pasien
        header('Location: ' . BASEURL . '/staff/janji_temu');
        exit;
    }


    public function tambah_janji_temu()
    {
        $patientsModel = $this->model('PatientModel');
        $doctorsModel = $this->model('DoctorModel');

        $data["judul"] = "Tambah Janji Temu";
        $data["user"] = "Staff Pendaftaran";
        $data["patients"] = $patientsModel->getAllPatients();
        $data["doctors"] = $doctorsModel->getAllDoctors();

        $this->render('staff/tambah_janji_temu', $data);
    }

    public function addAppointment()
    {
        $model = $this->model('AppointmentsModel');

        // Ambil data dari form
        $data = [
            'patient_id' => $_POST['patient_id'],
            'doctor_id' => $_POST['doctor_id'],
            'appointment_date' => new MongoDB\BSON\UTCDateTime(strtotime($_POST['appointment_date']) * 1000),
            'start' => $_POST['start_time'], // Masukkan waktu mulai
            'end' => $_POST['end_time'], // Masukkan waktu berakhir
            'status' => $_POST['status'],
            'notes' => $_POST['notes'],
        ];

        // Simpan janji temu ke database
        $model->addAppointment($data);

        // Redirect ke halaman daftar janji temu
        header('Location: ' . BASEURL . '/staff/janji_temu');
        exit;
    }
}
