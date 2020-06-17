<div class="container-fluid">
    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">Database User</h1>
            <style>
                .head-content {
                    font-size: 30px;
                    color: #4e73df;
                    font-weight: bold;
                    font-family: Cambria;
                }

                .head-sub-content {
                    font-size: 22px;
                    color: black;
                    font-weight: bold;
                    font-family: Cambria;
                }

                .body-content {
                    font-size: 16px;
                    color: black;
                    font-family: 'Times New Roman';
                }

                .button-tabel {
                    margin-right: 10rem;
                    float: right;
                }
            </style>
        </div>
    </div>


    <!-- Pencarian -->
    <div class="container pt-4 pb-4" style="width: 80%;">
        <div class="row" style="position: relative; margin-right: 2rem;">
            <input style="width: 75%; position: relative; margin-right: 2 rem;" type="text" placeholder="Cari Dosen Berdasarkan Nama atau NIP ..."></input>
            <button type="button" class="btn btn-primary btn-sm" style="width: 15%; margin-left: 3rem;">Cari Dosen</button>
        </div>
    </div>


    <!-- Tabel Dosen -->
    <div class="container pb-2 pt-4" style="width: 100%; margin-left: 0.25rem; margin-right: 0.25rem;">
        <table class="greyGridTable">
            <thead>
                <tr>
                    <th style="width: 5%;">No.</th>
                    <th style="width: 14%;">NIP</th>
                    <th style="width: 20%;">Nama Dosen</th>
                    <th style="width: 15%;">Email</th>
                    <th style="width: 8%;">Angka Kredit</th>
                    <th style="width: 15%;">Jabatan</th>
                    <th style="width: 8%;">Pangkat</th>
                    <th style="width: 15%;">Golongan</th>
                </tr>
            </thead>
            <tbody style="font-size: 14px; color: black;">
                <?php $no = 1;
                foreach ($dosen as $key => $data) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data['nip']; ?></td>
                        <td><?= $data['nama_lengkap']; ?></td>
                        <td><?= $data['email']; ?></td>
                        <td><?= $data['angka_kredit']; ?></td>
                        <td><?= $data['jabatan_fungsi']; ?></td>
                        <td><?= $data['pangkat']; ?></td>
                        <td><?= $data['golongan_ruang']; ?></td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>


</div>