<!DOCTYPE html>
<html lang="en">
<head>
    <meta chars style="display: flex; justify-content: center; align-items: center;"et="UTF-8">
    <meta name="view Moreport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa SMK</title>
    <link rel="stylesheet" href="{{ asset('css/admin/siswa/siswa.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    @extends('navbar/nav-utama')
    <div class="hero">
        <div class="judul-awal">
            <p class="judul1">TABEL SISWA SMK N 1 KAWALI</p>
            <p class="judul2">PERIODE 2022-2024<p>
        </div>
        <div class="tambah_dan_hapus">
            <button class="icon-btn delete-btn"><i class="fas fa-trash-alt"></i></button>
            <button class="tambah" onclick="window.location.href='{{ route('TambahSiswa') }}';"><i class="fas fa-plus"></i>Tambahkan</button>
        </div>

        <!-- Dropdown with CSS only -->
        <div class="tabel">
            <input type="checkbox" id="dropdown1">
            <label class="btn-toggle" for="dropdown1">
                ANGKATAN TAHUN 2023 - 2024
            </label>
            <div class="collapse-content" id="content1" >
                <div class="card card-body">
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NIS</th>
                                    <th>NAMA</th>
                                    <th>JENIS <br> KELAMIN</th>
                                    <th>KELAS</th>
                                    <th>JURUSAN</th>
                                    <th>NEGATIF</th>
                                    <th>POSITIF</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>222310392</td>
                                    <td class="align-left">Alinda Eka Yuniarti</td>
                                    <td><div class="gender-box female">P</div></td>
                                    <td>12 RPL 3</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>
                                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>222310393</td>
                                    <td class="align-left">Andi Rahmat</td>
                                    <td><div class="gender-box male">L</div></td>
                                    <td>12 RPL 2</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                    <td>15</td>
                                    <td>25</td>
                                    <td>
                                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabel">
            <input type="checkbox" id="dropdown2">
            <label class="btn-toggle" for="dropdown2">
                ANGKATAN TAHUN 2022 - 2023
            </label>
            <div class="collapse-content" id="content2">
                <div class="card card-body">
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NIS</th>
                                    <th>NAMA</th>
                                    <th>JENIS <br> KELAMIN</th>
                                    <th>KELAS</th>
                                    <th>JURUSAN</th>
                                    <th>NEGATIF</th>
                                    <th>POSITIF</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>222310392</td>
                                    <td class="align-left">Alinda Eka Yuniarti</td>
                                    <td><div class="gender-box female">P</div></td>
                                    <td>12 RPL 3</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>
                                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>222310393</td>
                                    <td class="align-left">Andi Rahmat</td>
                                    <td><div class="gender-box male">L</div></td>
                                    <td>12 RPL 2</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                    <td>15</td>
                                    <td>25</td>
                                    <td>
                                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabel">
            <input type="checkbox" id="dropdown3">
            <label class="btn-toggle" for="dropdown3">
                ANGKATAN TAHUN 2021 - 2022
            </label>
            <div class="collapse-content" id="content3">
                <div class="card card-body">
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NIS</th>
                                    <th>NAMA</th>
                                    <th>JENIS <br> KELAMIN</th>
                                    <th>KELAS</th>
                                    <th>JURUSAN</th>
                                    <th>NEGATIF</th>
                                    <th>POSITIF</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>222310392</td>
                                    <td class="align-left">Alinda Eka Yuniarti</td>
                                    <td><div class="gender-box female">P</div></td>
                                    <td>12 RPL 3</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>
                                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>222310393</td>
                                    <td class="align-left">Andi Rahmat</td>
                                    <td><div class="gender-box male">L</div></td>
                                    <td>12 RPL 2</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                    <td>15</td>
                                    <td>25</td>
                                    <td>
                                        <button class="icon-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    const content = this.nextElementSibling;
                    setTimeout(function() {
                        content.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 300);  // Delay untuk menunggu animasi dropdown selesai
                }
            });
        });
    </script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>