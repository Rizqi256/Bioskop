<?php
class Kursi_model extends CI_Model
{
    public function get_available_seats($film_id)
    {
        $query = $this->db->query("
        SELECT kursi.id, kursi.nomor_kursi
        FROM kursi
        WHERE kursi.id NOT IN (
            SELECT kursi_id FROM pemesanan WHERE film_id = $film_id
        )
    ");

        return $query->result_array();
    }


    public function is_seat_available($film_id, $kursi_id)
    {
        // Memeriksa apakah kursi masih tersedia
        $this->db->where('film_id', $film_id);
        $this->db->where('kursi_id', $kursi_id);
        $query = $this->db->get('pemesanan');
        return $query->num_rows() == 0;
    }

    public function reserve_seat($kursi_id)
    {
        $data = array(
            'status' => 'booked' // Anda dapat menggunakan kolom status untuk menandai kursi
        );

        $this->db->where('id', $kursi_id);
        $this->db->update('kursi', $data);
    }
}
