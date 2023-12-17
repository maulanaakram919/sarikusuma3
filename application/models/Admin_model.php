<?php defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function reservasi()
    {
        $query = "  SELECT
                    *,
                    reservasi.id as id_reservasi
                    FROM
                    reservasi
                    LEFT JOIN
                    data_user
                    ON
                    data_user.id = reservasi.id_user";

        $res = $this->db->query($query);
        return $res->result_array();
    }

    public function pemeriksaan($date)
    {
        $query = "SELECT
                    *
                    FROM
                    reservasi
                    LEFT JOIN
                    data_user
                    ON
                    data_user.id = reservasi.id_user
                    LEFT JOIN
                    rekam_medis
                    ON
                    rekam_medis.id_user = reservasi.id_user
                    WHERE
                    reservasi.tanggal_terapi LIKE '%" . $date . "%'";
        $res = $this->db->query($query);
        return $res->result_array();
    }
}
