# Helpdesk Wilayah - CodeIgniter 4

## 📌 Tentang Aplikasi

Ini adalah contoh project sederhana menggunakan **CodeIgniter 4 (CI4)** dengan **PHP 8.3**, yang menampilkan data **kecamatan** dan **desa** dari database MySQL.  
Dibuat untuk keperluan pembelajaran dan pengembangan awal sistem helpdesk atau informasi wilayah.

---

## 🧱 Fitur Utama

- Menggunakan struktur **MVC (Model - View - Controller)**
- Tampilan responsive dengan **Bootstrap 5**
- Menampilkan data dari 2 tabel: `kecamatan` dan `desa`
- Contoh relasi database dasar (desa → kecamatan)

---

## 💾 Kebutuhan Server

- PHP 8.1 atau lebih baru (**disarankan PHP 8.3**)
- Ekstensi PHP yang aktif:
  - `intl`
  - `mbstring`
  - `json` (default)
  - `mysqlnd`
  - `curl`

---

## 🗃️ Struktur Database

```sql
CREATE TABLE kecamatan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_kecamatan VARCHAR(100) NOT NULL
);

CREATE TABLE desa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_desa VARCHAR(100) NOT NULL,
    kecamatan_id INT,
    FOREIGN KEY (kecamatan_id) REFERENCES kecamatan(id)
);
