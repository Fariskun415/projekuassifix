# LAPORAN UAS

## Implementasi Metode MOORA Untuk Sistem Pendukung Keputusan Pemilihan Sales Terbaik Pada PD Anugrah Abadi Baru

### Disusun Oleh:
**Muhammad Faris Yuda Aditia**  
**220605110115**

### PROGRAM STUDI TEKNIK INFORMATIKA  
FAKULTAS SAINS DAN TEKNOLOGI  
UNIVERSITAS ISLAM NEGERI MAULANA MALIK IBRAHIM MALANG  
2024

---

## A. Tugas

### Progres 1 (Selesai):
- Membuat database.
- Tampilan dashboard yang berisi informasi tentang kasus yang dibahas.
- Tampilan kriteria + CRUD.
- Tampilan alternatif + CRUD.

### Progres 2 (Selesai):
- Tampilan matriks keputusan + CRUD.
- Hasil normalisasi.

### Progres 3:
- Semua fitur selesai.

---

## B. Pengerjaan

### 1. Membuat Database

Saya menggunakan **phpMyAdmin** untuk membuat database dengan nama `uassi`.

#### a. Tabel `tb_periode`
Tabel ini digunakan untuk mengelompokkan penilaian berdasarkan waktu. Relasi:
- `kode_periode` menjadi **foreign key** di tabel `tb_matriks_keputusan`.
- Digunakan pada beberapa view: `tb_view_normalisasi`, `tb_view_optimasi`, dan `tb_view_nilai_preferensi`.

#### b. Tabel `tb_alternatif`
Mewakili setiap alternatif yang memiliki penilaian terhadap berbagai kriteria pada matriks keputusan. Relasi:
- `kode_alternatif` menjadi **foreign key** di tabel `tb_matriks_keputusan`.

#### c. Tabel `tb_kriteria`
Berisi kriteria yang digunakan dalam penilaian. Relasi:
- `kode_kriteria` menjadi **foreign key** di tabel `tb_matriks_keputusan`.

#### d. Tabel `tb_subkriteria`
Digunakan untuk memberikan acuan nilai pada kriteria. Relasi:
- `kode_kriteria` menjadi **foreign key** di tabel `tb_subkriteria`.

#### e. Tabel `tb_matriks_keputusan`
Berisi penilaian setiap alternatif terhadap kriteria pada periode tertentu. Relasi:
- `kode_alternatif`, `kode_kriteria`, dan `kode_periode` sebagai **foreign key**.
- Kolom tambahan: `nilai`, `created_at`, dan `updated_at`.

---

### 2. Tampilan Dashboard
Tampilan ini berisi informasi terkait kasus yang dibahas secara ringkas.

---

### 3. Tampilan Kriteria + CRUD

#### a. View Kriteria:
Menampilkan tabel kriteria.

#### b. Add Kriteria:
Form untuk menambahkan kriteria baru.

#### c. Edit Kriteria:
Form untuk mengedit kriteria yang sudah ada.

---

### 4. Tampilan Alternatif + CRUD

#### a. View Alternatif:
Menampilkan daftar alternatif.

#### b. Add Alternatif:
Form untuk menambahkan alternatif baru.

#### c. Edit Alternatif:
Form untuk mengedit data alternatif.

---

## PROGRES 2

### 5. Tampilan Matriks Keputusan + CRUD

#### a. View Matriks Keputusan:
Menampilkan tabel matriks keputusan.

#### b. Add Matriks Keputusan:
Form untuk menambahkan data matriks keputusan baru.

#### c. Edit Matriks Keputusan:
Form untuk mengedit data matriks keputusan.

---

### 6. Hasil Normalisasi

Menggunakan view `tb_view_normalisasi` untuk normalisasi nilai:
```sql
SELECT
    m.kode_alternatif AS kode_alternatif,
    m.kode_kriteria AS kode_kriteria,
    m.kode_periode AS kode_periode,
    m.nilai AS nilai,
    k.bobot AS bobot,
    CASE
        WHEN k.atribut = 'benefit' THEN m.nilai / sqrt(SUM(POW(m.nilai, 2)) OVER (PARTITION BY m.kode_kriteria, m.kode_periode))
        WHEN k.atribut = 'cost' THEN MIN(m.nilai) OVER (PARTITION BY m.kode_kriteria, m.kode_periode) / m.nilai
    END AS normalisasi_nilai
FROM
    tb_matriks_keputusan m
JOIN
    tb_kriteria k
ON
    (m.kode_kriteria = k.kode_kriteria)
ORDER BY
    m.kode_kriteria, m.kode_alternatif;
```
Perhitungan dilakukan berdasarkan kombinasi `kode_kriteria` dan `kode_periode`.

---

## PROGRES 3 (UAS)

### 7. Lampiran Jurnal
[Jurnal Polinema](https://jurnal.polinema.ac.id/index.php/jtim/article/view/4795)

### 8. Perhitungan Manual
Hasil perhitungan manual dan jurnal hampir sama, meskipun terdapat kesalahan perankingan di jurnal.

### 9. Hasil Nilai Optimasi
Menggunakan view:
```sql
SELECT
    n.kode_alternatif,
    n.kode_periode,
    MAX(CASE WHEN n.kode_kriteria = 'C1' THEN n.normalisasi_nilai * n.bobot ELSE 0 END) AS optimasi_penjualan,
    MAX(CASE WHEN n.kode_kriteria = 'C2' THEN n.normalisasi_nilai * n.bobot ELSE 0 END) AS optimasi_absensi,
    MAX(CASE WHEN n.kode_kriteria = 'C3' THEN n.normalisasi_nilai * n.bobot ELSE 0 END) AS optimasi_kedisiplinan,
    MAX(CASE WHEN n.kode_kriteria = 'C4' THEN n.normalisasi_nilai * n.bobot ELSE 0 END) AS optimasi_skill,
    MAX(CASE WHEN n.kode_kriteria = 'C5' THEN n.normalisasi_nilai * n.bobot ELSE 0 END) AS optimasi_kerjasama_tim
FROM
    tb_view_normalisasi n
GROUP BY
    n.kode_alternatif, n.kode_periode;
```
Menghitung nilai optimasi untuk setiap kriteria berdasarkan alternatif dan periode tertentu.

### 10. Nilai Preferensi / Perankingan
Query untuk view:
```sql
SELECT
    o.kode_alternatif,
    o.kode_periode,
    (o.optimasi_penjualan + o.optimasi_absensi + o.optimasi_kedisiplinan + o.optimasi_skill + o.optimasi_kerjasama_tim) AS total_nilai,
    RANK() OVER (
        PARTITION BY o.kode_periode
        ORDER BY (o.optimasi_penjualan + o.optimasi_absensi + o.optimasi_kedisiplinan + o.optimasi_skill + o.optimasi_kerjasama_tim) DESC
    ) AS rangking
FROM
    tb_view_optimasi o;
```
Hasil menampilkan peringkat untuk setiap alternatif berdasarkan periode yang dipilih.

### Potongan Kode Controller:
```php
public function nilaiPreferensi()
{
    $model = new PerhitunganModel();

    // Ambil data periode
    $data['periodeList'] = $model->getPeriode();

    // Periode yang dipilih
    $selectedPeriode = $this->request->getGet('periode') ?? 'P1';
    $data['selectedPeriode'] = $selectedPeriode;

    // Data nilai preferensi
    $data['nilaiPreferensi'] = $model->getNilaiPreferensi($selectedPeriode);

    // Kirim data ke view
    return view('perhitungan/nilai_preferensi', $data);
}
```
Fungsi ini menampilkan nilai preferensi berdasarkan periode yang dipilih.

---

**Selesai**.

