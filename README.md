# 🗺️ Helpdesk Wilayah - CodeIgniter 4 (Gaya CI3)

**Dikonsepkan oleh**: Almuhajir, Este  
**Versi PHP**: 8.3  
**Framework**: CodeIgniter version  v4.6.1.

---

## 📌 Tentang Aplikasi

Ini adalah contoh project sederhana menggunakan **CodeIgniter 4 (CI4)** dengan pendekatan  ala **CodeIgniter 3 (CI3)**.  
Aplikasi ini menampilkan data **kecamatan** dan **desa** dari database MySQL, cocok untuk keperluan **pembelajaran** dan **pengembangan awal** sistem informasi wilayah (helpdesk daerah, administratif desa, dsb).

---

## 🧱 Fitur Utama

- Menggunakan struktur **MVC (Model - View - Controller)**
- Query SQL seperti gaya CI3 (`SELECT * FROM ...`)
- Routing sederhana menggunakan `$routes->get()` (mirip CI3)
- Tampilan responsive menggunakan **Bootstrap 5**
- Menampilkan data dari 2 tabel: `kecamatan` dan `desa`
- Relasi data sederhana: `desa → kecamatan`
- Fungsi dan variabel menggunakan **Bahasa Indonesia** (agar mudah dipahami oleh pemula)

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

### 🔸 Tabel `kecamatan`

| Kolom            | Tipe Data          | Keterangan          |
|------------------|--------------------|---------------------|
| `id`             | INT AUTO_INCREMENT | Primary key         |
| `nama_kecamatan` | VARCHAR(100)       | Nama kecamatan      |

```sql
CREATE TABLE kecamatan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_kecamatan VARCHAR(100) NOT NULL
);

### 🔸 Tabel `desa`

| Kolom           | Tipe Data          | Keterangan                                |
|-----------------|--------------------|-------------------------------------------|
| `id`            | INT AUTO_INCREMENT | Primary key                               |
| `nama_desa`     | VARCHAR(100)       | Nama desa                                 |
| `kecamatan_id`  | INT                | Foreign key ke `kecamatan(id)`            |

```sql
CREATE TABLE desa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_desa VARCHAR(100) NOT NULL,
    kecamatan_id INT,
    FOREIGN KEY (kecamatan_id) REFERENCES kecamatan(id)
);


Tunggu Update Terbaru Ya.....Syukran 

