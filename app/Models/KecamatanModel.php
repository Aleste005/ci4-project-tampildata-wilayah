<?php
/**
 * Author  : Almuhajir, Este
 * Project : Helpdesk CI4 - Konsep CI3
 * Company : Badan Kepegawaiann Aceh
 */
namespace App\Models;
use CodeIgniter\Model;

class KecamatanModel extends Model
{
    // Model untuk mengelola data kecamatan
    protected $table = 'kecamatan';
    protected $primaryKey = 'id';

    // Ambil semua data dari tabel kecamatan
    public function getSemuadataKecamatan()
    {
        return $this->db->query("SELECT * FROM kecamatan")->getResultArray();
    }

    // Ambil data kecamatan berdasarkan id
    public function getSeleksiById($id)
    {
        return $this->db->query("SELECT * FROM kecamatan WHERE id = $id")->getRowArray();
    }

    // Simpan data kecamatan // belum selesai saya deploykan tunggu aja klo ada perubahan/ waktu 
    public function simpanDataKecamatan($data)
    {
        $nama  = $data['nama_kecamatan'];
        $kode  = $data['kode_kecamatan'];

        $sql = "INSERT INTO kecamatan (nama_kecamatan, kode_kecamatan) 
                VALUES ('$nama', '$kode')";

        $this->db->query($sql);
        return $this->db->insertID();
    }

    // Update data kecamatan
    public function updateDataKecamatan($id, $data)
    {
        $nama  = $data['nama_kecamatan'];
        $kode  = $data['kode_kecamatan'];

        $sql = "UPDATE kecamatan 
                SET nama_kecamatan = '$nama', 
                    kode_kecamatan = '$kode' 
                WHERE id = $id";

        return $this->db->query($sql);
    }

    // Hapus data kecamatan
    public function hapusDataKecamatan($id)
    {
        $sql = "DELETE FROM kecamatan WHERE id = $id";
        return $this->db->query($sql);
    }
}
