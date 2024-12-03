<?php
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
}
