<?php
class Pemesanan_model extends CI_Model
{
    public function create_booking($film_id, $kursi_id)
    {
        $data = array(
            'film_id' => $film_id,
            'kursi_id' => $kursi_id,
            'waktu_pemesanan' => date('Y-m-d H:i:s')
        );

        $this->db->insert('pemesanan', $data);
    }
}
