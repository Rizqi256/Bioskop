<?php
class Base extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Film_model');
        $this->load->model('Kursi_model');
        $this->load->model('Pemesanan_model');
    }

    public function index()
    {
        $data['films'] = $this->Film_model->get_all_films();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('film_list', $data);
        $this->load->view('templates/footer');
    }

    public function pilih_kursi($film_id)
    {
        $data['film'] = $this->Film_model->get_film_by_id($film_id);
        $data['seats'] = $this->Kursi_model->get_available_seats($film_id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pilih_kursi', $data);
        $this->load->view('templates/footer');
    }

    public function pesan_kursi($film_id, $kursi_id)
    {
        // Cek apakah kursi yang akan dipesan masih tersedia
        if ($this->Kursi_model->is_seat_available($film_id, $kursi_id)) {
            $this->Pemesanan_model->create_booking($film_id, $kursi_id);
            redirect('base');
        } else {
            // Handle kasus ketika kursi sudah dipesan oleh orang lain
            // Anda bisa menampilkan pesan kesalahan atau mengarahkan pengguna ke halaman lain
            echo "Kursi sudah dipesan oleh orang lain.";
        }
    }
}
