<div class="container-fluid container ">
    <form class="user" id="form" enctype='multipart/form-data' method="post" action="<?= base_url('dosen/test_submit'); ?>">
        <!-- <div class="p-5">
            <table class="greyGridTable A1 p-3">
                <thead>
                    <tr>
                        <th>Tingkatan Pendidikan</th>
                        <th>Universitas/Institusi</th>
                        <th>Tahun Masuk</th>
                        <th>Tahun Keluar</th>
                        <th>Lampirkan Scan Ijazah</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowA1">+ Tambah</button>
        </div> -->

        <div class="container-fluid container p-5">
            <table class="greyGridTable C1">
                <thead>
                    <tr>
                        <th>Jenis Karya*</th>
                        <th>Judul Karya</th>
                        <th>Jenjang/ Tingkat/ Bentuk*</th>
                        <th>Tahun</th>
                        <th>Lampirkan Bukti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowC1">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="pt-4 sm-5">
            <input type="submit" class="float-center" name=submit></input>
        </div>

    </form>
    <div class="pb-5"></div>
</div>
</div>