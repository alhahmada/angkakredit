<?php
class Berkas extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
    }






    //INSERT PENGAJUAN
    public function pengajuan($jabatan, $pangkat, $gol, $ak_to, $kurang_ak)
    {
        $data = array(
            'tgl_pengajuan' => date('Y-m-d'),
            'jabatan_fungsi_to' => $jabatan,
            'pangkat_to' => $pangkat,
            'gol_to' => $gol,
            'ak_to' => $ak_to,
            'kurang_ak' => $kurang_ak,
            'nip' => $this->session->userdata('nip')
        );
        $this->db->insert('tbl_pengajuan', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }




    //Content Row Pengajuan Berkas
    public function berkas($data)
    {
        $this->db->insert('tbl_pengajuan_berkas', $data);
        $berkas_id = $this->db->insert_id();
        return $berkas_id;
    }
    public function update_berkas($id_berkas, $tabel, $data)
    {
        $this->db->query("UPDATE tbl_pengajuan_berkas set $tabel='$data' where id_berkas=$id_berkas");
    }

    // Untuk Upload 1 Berkas (Bukan Array) Bk1-Bk18
    public function upload_berkas($varname, $filename)
    {
        $config['upload_path']          = './assets/document/';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = $filename;
        $config['overwrite']            = false;
        $config['max_size']             = 1024000; // 100MB
        $this->upload->initialize($config);
        if ($this->upload->do_upload($varname)) {
            $uploadData = $this->upload->data();
        }
    }

    // Untuk Upload Berkas Array (A1 - E10)
    public function upload_files($filename, $files)
    {
        $config = array(
            'upload_path'   => './assets/document/',
            'allowed_types' => 'pdf',
            'overwrite'     => false,
        );

        $this->load->library('upload', $config);

        $berkas = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['berkas[]']['name'] = $files['name'][$key];
            $_FILES['berkas[]']['type'] = $files['type'][$key];
            $_FILES['berkas[]']['tmp_name'] = $files['tmp_name'][$key];
            $_FILES['berkas[]']['error'] = $files['error'][$key];
            $_FILES['berkas[]']['size'] = $files['size'][$key];

            // $fileName = $title .'_'. $image;

            $berkas[] = $filename[$key];

            $config['file_name'] = $filename[$key];

            $this->upload->initialize($config);

            if ($this->upload->do_upload('berkas[]')) {
                $this->upload->data();
            } else {
                return false;
            }
        }
        return true;
    }
    public function constraint($bab, $id_pengajuan, $ak_maksimal)
    {
        $data = array(
            'sub_bab' => $bab,
            'id_pengajuan' => $id_pengajuan,
            'ak_maksimal' => $ak_maksimal
        );
        $this->db->insert('tbl_constraint', $data);
    }

    //Content Row A. Pendidikan

    public function a1($id_pengajuan, $a11, $a12, $a13, $a14, $a15)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'a11' => $a11,
            'a12' => $a12,
            'a13' => $a13,
            'a14' => $a14,
            'a15' => $a15
        );
        $this->db->insert('tbl_a1', $data);
    }


    public function a2($id_pengajuan, $a21, $a22, $a23, $a24)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'a21' => $a21,
            'a22' => $a22,
            'a23' => $a23,
            'a24' => $a24
        );
        $this->db->insert('tbl_a2', $data);
    }


    //Content Row B. Pelaksanaan Pendidikan

    public function b1($id_pengajuan, $b11, $b12, $b13, $b14, $b15)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b11' => $b11,
            'b12' => $b12,
            'b13' => $b13,
            'b14' => $b14,
            'b15' => $b15
        );
        $this->db->insert('tbl_b1', $data);
    }

    public function b2($id_pengajuan, $b21, $b22)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b21' => $b21,
            'b22' => $b22
        );
        $this->db->insert('tbl_b2', $data);
    }

    public function b3($id_pengajuan, $b31, $b32, $b33)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b31' => $b31,
            'b32' => $b32,
            'b33' => $b33
        );
        $this->db->insert('tbl_b3', $data);
    }

    public function b4($id_pengajuan, $b41, $b42, $b43, $b44, $b45)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b41' => $b41,
            'b42' => $b42,
            'b43' => $b43,
            'b44' => $b44,
            'b45' => $b45
        );
        $this->db->insert('tbl_b4', $data);
    }

    public function b5($id_pengajuan, $b51, $b52, $b53, $b54)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b51' => $b51,
            'b52' => $b52,
            'b53' => $b53,
            'b54' => $b54
        );
        $this->db->insert('tbl_b5', $data);
    }

    public function b6($id_pengajuan, $b61, $b62, $b63)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b61' => $b61,
            'b62' => $b62,
            'b63' => $b63
        );
        $this->db->insert('tbl_b6', $data);
    }

    public function b7($id_pengajuan, $b71, $b72, $b73, $b74, $b75)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b71' => $b71,
            'b72' => $b72,
            'b73' => $b73,
            'b74' => $b74,
            'b75' => $b75
        );
        $this->db->insert('tbl_b7', $data);
    }

    public function b8($id_pengajuan, $b81, $b82, $b83, $b84, $b85)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b81' => $b81,
            'b82' => $b82,
            'b83' => $b83,
            'b84' => $b84,
            'b85' => $b85
        );
        $this->db->insert('tbl_b8', $data);
    }

    public function b9($id_pengajuan, $b91, $b92, $b93, $b94)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b91' => $b91,
            'b92' => $b92,
            'b93' => $b93,
            'b94' => $b94
        );
        $this->db->insert('tbl_b9', $data);
    }

    public function b10($id_pengajuan, $b101, $b102, $b103, $b104)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b101' => $b101,
            'b102' => $b102,
            'b103' => $b103,
            'b104' => $b104
        );
        $this->db->insert('tbl_b10', $data);
    }

    public function b11($id_pengajuan, $b111, $b112, $b113, $b114)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b111' => $b111,
            'b112' => $b112,
            'b113' => $b113,
            'b114' => $b114
        );
        $this->db->insert('tbl_b11', $data);
    }

    public function b12($id_pengajuan, $b121, $b122, $b123, $b124)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b121' => $b121,
            'b122' => $b122,
            'b123' => $b123,
            'b124' => $b124
        );
        $this->db->insert('tbl_b12', $data);
    }

    public function b13($id_pengajuan, $b131, $b132)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'b131' => $b131,
            'b132' => $b132
        );
        $this->db->insert('tbl_b13', $data);
    }


    //Content Row C. Penelitian

    public function c1($id_pengajuan,  $c11, $c12, $c13, $c14, $c15)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'c11' => $c11,
            'c12' => $c12,
            'c13' => $c13,
            'c14' => $c14,
            'c15' => $c15
        );
        $this->db->insert('tbl_c1', $data);
    }
    public function c2($id_pengajuan,  $c21, $c22, $c23, $c24, $c25)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'c21' => $c21,
            'c22' => $c22,
            'c23' => $c23,
            'c24' => $c24,
            'c25' => $c25
        );
        $this->db->insert('tbl_c2', $data);
    }
    public function c3($id_pengajuan,  $c31, $c32, $c33)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'c31' => $c31,
            'c32' => $c32,
            'c33' => $c33
        );
        $this->db->insert('tbl_c3', $data);
    }
    public function c4($id_pengajuan,  $c41, $c42, $c43, $c44)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'c41' => $c41,
            'c42' => $c42,
            'c43' => $c43,
            'c44' => $c44
        );
        $this->db->insert('tbl_c4', $data);
    }
    public function c5($id_pengajuan,  $c51, $c52, $c53, $c54)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'c51' => $c51,
            'c52' => $c52,
            'c53' => $c53,
            'c54' => $c54
        );
        $this->db->insert('tbl_c5', $data);
    }
    public function c6($id_pengajuan,  $c61, $c62, $c63, $c64, $c65)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'c61' => $c61,
            'c62' => $c62,
            'c63' => $c63,
            'c64' => $c64,
            'c65' => $c65
        );
        $this->db->insert('tbl_c6', $data);
    }
    public function c7($id_pengajuan,  $c71, $c72, $c73, $c74, $c75)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'c71' => $c71,
            'c72' => $c72,
            'c73' => $c73,
            'c74' => $c74,
            'c75' => $c75
        );
        $this->db->insert('tbl_c7', $data);
    }

    public function c8($id_pengajuan, $c81, $c82, $c83, $c84)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'c81' => $c81,
            'c82' => $c82,
            'c83' => $c83,
            'c84' => $c84
        );
        $this->db->insert('tbl_c8', $data);
    }



    //Content Row D. Pengabdian Masyarakat

    public function d1($id_pengajuan,  $d11, $d12, $d13, $d14)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'd11' => $d11,
            'd12' => $d12,
            'd13' => $d13,
            'd14' => $d14
        );
        $this->db->insert('tbl_d1', $data);
    }

    public function d2($id_pengajuan,  $d21, $d22, $d23)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'd21' => $d21,
            'd22' => $d22,
            'd23' => $d23
        );
        $this->db->insert('tbl_d2', $data);
    }

    public function d3($id_pengajuan,  $d31, $d32, $d33, $d34, $d35)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'd31' => $d31,
            'd32' => $d32,
            'd33' => $d33,
            'd34' => $d34,
            'd35' => $d35
        );
        $this->db->insert('tbl_d3', $data);
    }

    public function d4($id_pengajuan,  $d41, $d42, $d43)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'd41' => $d41,
            'd42' => $d42,
            'd43' => $d43
        );
        $this->db->insert('tbl_d4', $data);
    }

    public function d5($id_pengajuan,  $d51, $d52, $d53)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'd51' => $d51,
            'd52' => $d52,
            'd53' => $d53
        );
        $this->db->insert('tbl_d5', $data);
    }

    public function d6($id_pengajuan,  $d61, $d62, $d63)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'd61' => $d61,
            'd62' => $d62,
            'd63' => $d63
        );
        $this->db->insert('tbl_d6', $data);
    }

    public function d7($id_pengajuan, $d71, $d72, $d73, $d74, $d75)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'd71' => $d71,
            'd72' => $d72,
            'd73' => $d73,
            'd74' => $d74,
            'd75' => $d75
        );
        $this->db->insert('tbl_d7', $data);
    }


    //Content Row E. Unsur Penunjang

    public function e1($id_pengajuan, $e11, $e12, $e13, $e14)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'e11' => $e11,
            'e12' => $e12,
            'e13' => $e13,
            'e14' => $e14
        );
        $this->db->insert('tbl_e1', $data);
    }

    public function e2($id_pengajuan, $e21, $e22, $e23, $e24, $e25, $e26)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'e21' => $e21,
            'e22' => $e22,
            'e23' => $e23,
            'e24' => $e24,
            'e25' => $e25,
            'e26' => $e26
        );
        $this->db->insert('tbl_e2', $data);
    }

    public function e3($id_pengajuan, $e31, $e32, $e33, $e34, $e35)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'e31' => $e31,
            'e32' => $e32,
            'e33' => $e33,
            'e34' => $e34,
            'e35' => $e35
        );
        $this->db->insert('tbl_e3', $data);
    }


    public function e4($id_pengajuan, $e41, $e42, $e43, $e44)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'e41' => $e41,
            'e42' => $e42,
            'e43' => $e43,
            'e44' => $e44
        );
        $this->db->insert('tbl_e4', $data);
    }

    public function e5($id_pengajuan, $e51, $e52, $e53, $e54)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'e51' => $e51,
            'e52' => $e52,
            'e53' => $e53,
            'e54' => $e54
        );
        $this->db->insert('tbl_e5', $data);
    }

    public function e6($id_pengajuan, $e61, $e62, $e63, $e64, $e65)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'e61' => $e61,
            'e62' => $e62,
            'e63' => $e63,
            'e64' => $e64,
            'e65' => $e65
        );
        $this->db->insert('tbl_e6', $data);
    }

    public function e7($id_pengajuan, $e71, $e72, $e73)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'e71' => $e71,
            'e72' => $e72,
            'e73' => $e73
        );
        $this->db->insert('tbl_e7', $data);
    }

    public function e8($id_pengajuan, $e81, $e82, $e83, $e84)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'e81' => $e81,
            'e82' => $e82,
            'e83' => $e83,
            'e84' => $e84
        );
        $this->db->insert('tbl_e8', $data);
    }

    public function e9($id_pengajuan, $e91, $e92, $e93, $e94)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'e91' => $e91,
            'e92' => $e92,
            'e93' => $e93,
            'e94' => $e94
        );
        $this->db->insert('tbl_e9', $data);
    }

    public function e10($id_pengajuan, $e101, $e102, $e103, $e104)
    {
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'e101' => $e101,
            'e102' => $e102,
            'e103' => $e103,
            'e104' => $e104
        );
        $this->db->insert('tbl_e10', $data);
    }
}
