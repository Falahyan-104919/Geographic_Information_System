<?php

class Webci3_Model extends CI_Model
{
    public function getloc()
    {
        return $this->db->get('lokasi')->result_array();
    }

    public function tambahDatalokasi()
    {
        $data = [

            "nama_lokasi" => $this->input->post('nama_lokasi', true),
            "lat" => $this->input->post('lat', true),
            "lng" => $this->input->post('lng', true),


        ];

        $this->db->insert('lokasi', $data);
    }

    public function hapusDatalokasi($id)
    {
        $this->db->where('id_lokasi', $id);
        $this->db->delete('lokasi');
    }

    public function getlokasiById($id)
    {
        return $this->db->get_where('lokasi', ['id_lokasi' => $id])->row_array();
    }


    public function ubahlokasi()
    {
        $data = [
            "id_lokasi" => $this->input->post('id_lokasi', true),
            "nama" => $this->input->post('nama', true),
            "lat" => $this->input->post('lat', true),
            "lng" => $this->input->post('lng', true),

        ];
        $this->db->where('id_lokasi', $this->input->post('id_lokasi'));
        $this->db->update('lokasi', $data);
    }

    public function cariDatalokasi()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('lokasi')->result_array();
    }
}