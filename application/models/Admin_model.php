<?php defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function reservasi()
    {
        $query = "  SELECT
                    data_user.*,
                    reservasi.*,
                    reservasi.id as id_reservasi,
                    layanan.id,
                    layanan.layanan
                    FROM
                    reservasi
                    LEFT JOIN
                    data_user
                    ON
                    data_user.id = reservasi.id_user
                    LEFT JOIN
                                    layanan ON layanan.id = reservasi.terapi
                                    ORDER BY
                                    reservasi.id DESC";

        $res = $this->db->query($query);
        return $res->result_array();
    }

    public function pemeriksaan($date)
    {
        $query = "SELECT
                    reservasi.*,
					data_user.*,
                    reservasi.status status_reservasi,
                    reservasi.id id_reservasi,
                    data_user.id as iduser,
					layanan.layanan
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
                    LEFT JOIN
					layanan
					ON
					layanan.id = reservasi.terapi
                    WHERE
                    reservasi.tanggal_terapi LIKE '%" . $date . "%'
                    GROUP BY reservasi.tanggal_terapi,data_user.id
                    ";

        $res = $this->db->query($query);
        return $res->result_array();
    }
    public function pembayaran($date)
    {
        $query = "SELECT
                    *,
                    reservasi.status status_reservasi,
                    nota.status_pembayaran status_payment,
                    reservasi.id id_reservasi,
                    data_user.id as iduser
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
                    LEFT JOIN
                    nota
                    ON nota.id_reservasi = reservasi.id
                    LEFT JOIN 
                    history_transaksi
                    ON history_transaksi.id_reservasi = reservasi.id
                    WHERE
                    reservasi.tanggal_terapi LIKE '%" . $date . "%'
                    AND 
                    reservasi.status = 1
                  
                    GROUP BY reservasi.tanggal_terapi,data_user.id
                    ORDER BY reservasi.id asc
                    ";

        $res = $this->db->query($query);
        return $res->result_array();
    }

    public function resep($id_reservasi)
    {
        $query = "SELECT
                    *
                    FROM
                    resep
                    LEFT JOIN
                    data_obat ON data_obat.id = resep.id_vitamin
                    WHERE
                    resep.id_reservasi = " . $id_reservasi . "";
        $res = $this->db->query($query)->result_array();
        return $res;
    }
    public function layanan($id_reservasi)
    {
        $query = "SELECT
                    *
                    FROM
                    reservasi
                    LEFT JOIN
                    layanan ON layanan.id = reservasi.terapi
                    WHERE
                    reservasi.id = " . $id_reservasi . "";
        $res = $this->db->query($query)->result_array();
        return $res;
    }
}
