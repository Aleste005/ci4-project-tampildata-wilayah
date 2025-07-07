<?php
/**
 * Author  : Almuhajir, Este
 * Project : Helpdesk CI4 - Konsep CI3
 * Company : Badan Kepegawaiann Aceh
 */
// ini wajid ada di setiap model
namespace App\Models;
// untuk mengakses class Model dari CodeIgniter
use CodeIgniter\Model;

class DesaModel extends Model
{
    protected $table = 'desa';
    protected $primaryKey = 'id';

    // Ambil semua data dari tabel desa
    public function getSemuadataDesa()
    {
        return $this->db->query("SELECT * FROM desa")->getResultArray();
    }

    // Ambil data desa berdasarkan ID
    public function getSeleksiById($id)
    {
        return $this->db->query("SELECT * FROM desa WHERE id = $id")->getRowArray();
    }

    // Simpan data desa baru
    public function simpanDataDesa($data)
    {
        $nama     = $data['nama_desa'];
        $kecamatan = $data['kecamatan_id'];

        $sql = "INSERT INTO desa (nama_desa, kecamatan_id) 
                VALUES ('$nama', '$kecamatan')";

        $this->db->query($sql);
        return $this->db->insertID();
    }

    // Update data desa berdasarkan ID
    public function updateDataDesa($id, $data)
    {
        $nama     = $data['nama_desa'];
        $kecamatan = $data['kecamatan_id'];

        $sql = "UPDATE desa 
                SET nama_desa = '$nama', 
                    kecamatan_id = '$kecamatan' 
                WHERE id = $id";

        return $this->db->query($sql);
    }

    // Hapus data desa berdasarkan ID
    public function hapusDataDesa($id)
    {
        $sql = "DELETE FROM desa WHERE id = $id";
        return $this->db->query($sql);
    }
}
