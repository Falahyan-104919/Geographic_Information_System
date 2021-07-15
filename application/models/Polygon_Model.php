<?php

class Polygon_Model extends CI_Model
{
    public function getpolygon()
    {
        return $this->db->get('polygon')->result_array();
    }

    public function tambahDatapolygon()
    {
        $data = [

            "nama_polygon" => $this->input->post('nama_polygon', true),
            "cord" => $this->input->post('cord', true),


        ];

        $this->db->insert('polygon', $data);
    }

    public function hapusDatapolygon($id)
    {
        $this->db->where('id_polygon', $id);
        $this->db->delete('polygon');
    }

    public function getpolygonById($id)
    {
        return $this->db->get_where('polygon', ['id_polygon' => $id])->row_array();
    }


    public function ubahpolygon()
    {
        $data = [
            "id_lokasi" => $this->input->post('id_polygon', true),
            "nama" => $this->input->post('nama_polygon', true),
            "lat" => $this->input->post('cord', true),

        ];
        $this->db->where('id_polygon', $this->input->post('id_polygon'));
        $this->db->update('polygon', $data);
    }

    public function cariDatapolygon()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nama_polygon', $keyword);
        return $this->db->get('polygon')->result_array();
    }
}