<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Penilaian Angka Kredit</h1>
    </div>
</div>

<div class="container">
    <div class="row">


        <!-- Pie Chart -->
        <div class="col-xl-7 col-lg-6">

            <!-- Card Header - Dropdown -->
            <div class="card-body">
                <div class="chart-piee ">


                    <div class="row">
                        <div class="col-lg">

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>Nama Dosen</h6>
                                </div>
                                <div class="col-sm-8">
                                    <h6>Alha Ahmada Belasae</h6>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>NIP</h6>
                                </div>
                                <div class="col-sm-8">
                                    <h6>0972479510981022414</h6>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>Pangkat/Gol Ruang</h6>
                                </div>
                                <div class="col-sm-8">
                                    <h6>Pembina/III C</h6>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>Jabatan Fungsional</h6>
                                </div>
                                <div class="col-sm-8">
                                    <h6>Lektor</h6>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>Unit Kerja</h6>
                                </div>
                                <div class="col-sm-8">
                                    <h6>Politeknik Statistika STIS</h6>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>Angka Kredit </h6>
                                </div>
                                <div class="col-sm-8">
                                    <h6>342</h6>
                                </div>
                            </div>

                        </div>
                    </div>





                </div>
            </div>

        </div>


    </div>
</div>


<div class="container-fluid p-5">

    <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="h5 mb-0 text-gray-800">Resume Pengajuan</h5>
    </div>

    <table class="greyGridTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>Unsur Pengajuan</th>
                <th>Persentase</th>
                <th>Angka Kredit yang Diberikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td class="text-left">Pendidikan dan Pelaksanaan Pendidikan</td>
                <td>X1</td>
                <td>X2</td>
            </tr>
            <tr>
                <td>2.</td>
                <td class="text-left">Penelitian</td>
                <td>X1</td>
                <td>X2</td>
            </tr>
            <tr>
                <td>3.</td>
                <td class="text-left">Pengabdian Masyarakat</td>
                <td>X1</td>
                <td>X2</td>
            </tr>
            <tr>
                <td>4.</td>
                <td class="text-left">Unsur Penunjang</td>
                <td>X1</td>
                <td>X2</td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" class="text-right margin-right-2px">Total Angka Kredit yang Diberikan </th>
                <th>XX..</th>
            </tr>
        </tfoot>
    </table>




    <div class="p-5"></div>

    <div class="container row">
        <div class="col-sm-8">
            <a type="submit" href="<?= base_url('penilai/nilai_penunjang'); ?>" class="float-right btn btn-primary btn-user btn=block">
                Sebelumnya
            </a>
        </div>
        <div class="col-sm-3">
            <a type="submit" href="<?= base_url('penilai/daftar_penilaianAK'); ?>" class="float-right btn btn-primary btn-user btn=block">
                Kirim Hasil Penilaian
            </a>
        </div>
    </div>

    </form>



</div>
</div>