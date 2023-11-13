<?php
class Film_model extends CI_Model
{
    public function get_all_films()
    {
        return $this->db->get('film')->result_array();
    }

    public function get_film_by_id($film_id)
    {
        return $this->db->get_where('film', ['id' => $film_id])->row_array();
    }
}
