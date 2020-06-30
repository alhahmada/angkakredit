<script>
    function optionC11(obj) {
        console.log($(obj).val())
        var strC11 = $(obj).val();
        var iddropdownC11 = "#C13-" + obj.id.split("-")[1];
        switch (strC11) {
            case "Buku Sendiri":
                var strC11 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Buku Referensi">Buku Referensi</option>
                <option value="Monograf">Monograf</option>`
                break;

            case "Buku Berbagai Penulis":
                var strC11 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>`
                break;

            case "Jurnal":
                var strC11 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Internasional Bereputasi dan Berfaktor Dampak">Jurnal internasional bereputasi (terindeks pada database internasional bereputasi dan berfaktor dampak)</option>r
                <option value="Internasional Bereputasi">Jurnal internasional terindeks pada basis data internasional bereputasi</option>
                <option value="Internasional Tidak Bereputasi">Jurnal internasional terindeks pada basis data internasional di luar kategori 2</option>
                <option value="Jurnal Nasional Terakreditasi Dikti"> Jurnal Nasional terakreditasi Dikti</option>
                <option value="Jurnal Nasional Terakreditasi Dikti Peringkat 1 dan 2"> Jurnal nasional terakreditasi Kemenristekdikti peringkat 1 dan 2</option>
                <option value="Jurnal Bahasa resmi PBB terindeks pada Basis Data yang diakui Dikti"> Jurnal Nasional berbahasa Inggris atau bahasa resmi (PBB) terindeks pada basis data yang diakui Kemenristekdikti (CABI atau ICI)</option>
                <option value="Jurnal Nasional Terakreditasi Peringkat 3 dan 4">Jurnal Nasional Terakreditasi Peringkat 3 dan 4</option>
                <option value="Jurnal Nasional berbahasa Indonesia terindeks yang diakui Dikti (peringkat 5 dan 6)">Jurnal Nasional Berbahasa Indonesia terindeks pada Basis Data yang diakui Dikti (Peringkat 5 dan 6)</option>
                <option value="Jurnal Nasional">Jurnal Nasional</option>
                <option value="Jurnal Ilmiah Bahasa Resmi PBB yang tidak memenuhi syarat Jurnal Internasional">Jurnal Ilmiah yang ditulis dalam bahasa resmi PBB namun tidak memenuhi syarat sebagai jurnal Internasional</option>
                `
                break;

            default:
                break;

        }
        $(iddropdownC11).html(strC11)
    }


    var rowC1 = 0;

    $(function() {
        $('table.C1 tbody').sortable();

        $('#addRowC1').click(function() {

            var htmlC1 =
                '<tr>' +
                '<td><label for="C11">' +
                '<select style = "width : 50%;" id="C11-' + rowC1 + '" name="C11[]" onchange="optionC11(this)">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '<option value="Buku Sendiri">Hasil Penelitian atau Pemikiran Dalam Bentuk Buku</option>' +
                '<option value="Buku Berbagai Penulis">Hasil Penelitian atau Pemikiran Dalam Bentuk Buku yang Berisi Berbagai Tulisan dari Berbagai Penulis (Book Chapter)</option>' +
                '<option value="Jurnal">Hasil Penelitian atau Pemikiran Dalam Bentuk Jurnal</option>' +
                '</select></label>' +
                '</td>' +

                '<td><input type="text" name="C12[]"></td>' +

                '<td><label for="C13">' +
                '<select style = "width : 50%;" id="C13-' + rowC1++ + '" name="C13[]">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '</select></label>' +
                '</td>' +

                '<td><input type="text" name="C14[]"></td>' +

                '<td><input type="file" accept="application/pdf" name="C15[]"></td>' +
                '<td><button class="removeC1">-</button></td>' +
                '</tr>';

            $('table.C1 tbody').append(htmlC1);
        });

        $(document).on('click', '.removeC1', function() {
            $(this).parents('tr').remove();
        });

        $('#getValues').click(function() {
            var values = [];
            $('input[name="name"]').each(function(i, elem) {
                values.push($(elem).val());
            });
            alert(values.join(', '));
        });
    });
</script>




<script>
    function optionC21(obj) {
        console.log($(obj).val())
        var strC21 = $(obj).val();
        var iddropdownC21 = "#C23-" + obj.id.split("-")[1];
        switch (strC21) {
            case "Dipresentasikan Dimuat Dalam Prosiding Ber ISSN/ISBN":
                var strC21 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Internasional Terindeks pada Scimagojr dan Scopus">Internasional Terindeks pada Scimagojr dan Scopus</option>
                <option value="Internasional Terindeks pada SCOPUS, IEEE Explore, SPIE">Internasional Terindeks pada SCOPUS, IEEE Explore, SPIE</option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>`
                break;
            case "Poster Dalam Prosiding yang Dipublikasikan":
                var strC21 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>`
                break;
            case "Seminar/Simposium/Lokakarya Tidak Dimuat Prosiding":
                var strC21 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>`
                break;
            case "Tidak Disajikan Dalam Seminar/Simposium/Lokakarya, Dimuat Dalam Prosiding":
                var strC21 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>`
                break;
            case "Koran/Majalah":
                var strC21 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Semua Jenjang">Semua Jenjang/Tingkat</option>`
                break;
            default:
                break;

        }
        $(iddropdownC21).html(strC21)
    }

    var rowC2 = 0;

    $(function() {
        $('table.C2 tbody').sortable();

        $('#addRowC2').click(function() {

            var htmlC2 =
                '<tr>' +
                '<td><label for="C21">' +
                '<select style = "width : 50%;" id="C21-' + rowC2 + '" name="C21[]" onchange="optionC21(this)">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '<option value="Dipresentasikan Dimuat Dalam Prosiding Ber ISSN/ISBN">Dipresentasikan Secara Oral dan dimuat dalam Prosiding yang dipublikasikan (Ber ISSN/ISBN)</option>' +
                '<option value="Poster Dalam Prosiding yang Dipublikasikan">Disajikan Dalam Bentuk Poster dan Dimuat dalam Prosiding yang dipublikasikan</option>' +
                '<option value="Seminar/Simposium/Lokakarya Tidak Dimuat Prosiding">Disajikan dalam seminar/simposium/lokakarya, tidak dimuat dalam Prosiding yang dipublikasikan</option>' +
                '<option value="Tidak Disajikan Dalam Seminar/Simposium/Lokakarya, Dimuat Dalam Prosiding">Hasil Penelitian/Pemikiran yang tidak disajikan dalam Seminar/Simposium/Lokakarya, tetapi dimuat dalam Prosiding</option>' +
                '<option value="Koran/Majalah">Hasil Penelitian/Pemikiran yang disajikan dalam koran/majalah populer/umum</option>' +
                '</select></label>' +
                '</td>' +

                '<td><input type="text" name="C22[]"></td>' +

                '<td><label for="C23">' +
                '<select style = "width : 50%;" id="C23-' + rowC2++ + '" name="C23[]">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '</select></label>' +
                '</td>' +

                '<td><input type="text" name="C24[]"></td>' +

                '<td><input type="file" accept="application/pdf" name="C25[]"></td>' +
                '<td><button class="removeC2">-</button></td>' +
                '</tr>';

            $('table.C2 tbody').append(htmlC2);
        });

        $(document).on('click', '.removeC2', function() {
            $(this).parents('tr').remove();
        });

        $('#getValues').click(function() {
            var values = [];
            $('input[name="name"]').each(function(i, elem) {
                values.push($(elem).val());
            });
            alert(values.join(', '));
        });
    });
</script>







<script>
    var htmlC3 =
        '<tr>' +

        '<td><input type="text" name="C31[]"></td>' +
        '<td><input type="text" name="C32[]"></td>' +

        '<td><input type="file" accept="application/pdf" name="C33[]"></td>' +
        '<td><button class="removeC3">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.C3 tbody').sortable();

        $('#addRowC3').click(function() {
            $('table.C3 tbody').append(htmlC3);
        });

        $(document).on('click', '.removeC3', function() {
            $(this).parents('tr').remove();
        });

        $('#getValues').click(function() {
            var values = [];
            $('input[name="name"]').each(function(i, elem) {
                values.push($(elem).val());
            });
            alert(values.join(', '));
        });
    });
</script>




<script>
    var htmlC4 =
        '<tr>' +

        '<td><input type="text" name="C41[]"></td>' +
        '<td><input type="text" name="C42[]"></td>' +
        '<td><input type="text" name="C43[]"></td>' +

        '<td><input type="file" accept="application/pdf" name="C44[]"></td>' +
        '<td><button class="removeC4">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.C4 tbody').sortable();

        $('#addRowC4').click(function() {
            $('table.C4 tbody').append(htmlC4);
        });

        $(document).on('click', '.removeC4', function() {
            $(this).parents('tr').remove();
        });

        $('#getValues').click(function() {
            var values = [];
            $('input[name="name"]').each(function(i, elem) {
                values.push($(elem).val());
            });
            alert(values.join(', '));
        });
    });
</script>


<script>
    var htmlC5 =
        '<tr>' +

        '<td><input type="text" name="C51[]"></td>' +
        '<td><input type="text" name="C52[]"></td>' +
        '<td><input type="text" name="C53[]"></td>' +

        '<td><input type="file" accept="application/pdf" name="C54[]"></td>' +
        '<td><button class="removeC5">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.C5 tbody').sortable();

        $('#addRowC5').click(function() {
            $('table.C5 tbody').append(htmlC5);
        });

        $(document).on('click', '.removeC5', function() {
            $(this).parents('tr').remove();
        });

        $('#getValues').click(function() {
            var values = [];
            $('input[name="name"]').each(function(i, elem) {
                values.push($(elem).val());
            });
            alert(values.join(', '));
        });
    });
</script>


<script>
    var htmlC6 =
        '<tr>' +

        '<td><label for="C61">' +
        '<select style = "width : 50%;" id="C61" name="C61[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Teknologi Dipatenkan">Rancangan Karya Teknologi yang Dipatenkan</option>' +
        '<option value="Seni Terdaftar HaKI">Seni yang terdaftar di HaKI</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="C62[]"></td>' +

        '<td><label for="C63">' +
        '<select style = "width : 60%;" id="C63" name="C63[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Internasional Diimplementasikan Industri">Internasional dan Sudah Diimplementasikan di Industri</option>' +
        '<option value="Internasional">Internasional</option>' +
        '<option value="Nasional Diimplementasikan Industri">Nasional dan Sudah Diimplementasikan di Industri</option>' +
        '<option value="Nasional">Nasional</option>' +
        '<option value="Nasional Paten Sederhana Dirjen Kekayaan Intelektual Kemenkumham">Nasional, paten sederhana, bersertifikat dari Dirjen Kekayaan Intelektual Kemenkumham</option>' +
        '<option value="Karya ciptaan, desain industri, indikasi geografis Dirjen Kekayaan Intelektual Kemenkumham">Karya ciptaan, desain industri, indikasi geografis bersertifikat dari Dirjen Kekayaan Intelektual Kemenkumham</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="C64[]"></td>' +

        '<td><input type="file" accept="application/pdf" name="C65[]"></td>' +
        '<td><button class="removeC6">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.C6 tbody').sortable();

        $('#addRowC6').click(function() {
            $('table.C6 tbody').append(htmlC6);
        });

        $(document).on('click', '.removeC6', function() {
            $(this).parents('tr').remove();
        });

        $('#getValues').click(function() {
            var values = [];
            $('input[name="name"]').each(function(i, elem) {
                values.push($(elem).val());
            });
            alert(values.join(', '));
        });
    });
</script>



<script>
    var htmlC7 =
        '<tr>' +

        '<td><label for="C71">' +
        '<select style = "width : 60%;" id="C71" name="C71[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Teknologi Tidak Dipatenkan">Rancangan Karya Teknologi yang Tidak Dipatenkan</option>' +
        '<option value="Seni Tidak Terdaftar HaKI">Seni yang tidak terdaftar di HaKI</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="C72[]"></td>' +

        '<td><label for="C73">' +
        '<select style = "width : 70%;" id="C73" name="C73[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Internasional">Internasional</option>' +
        '<option value="Nasional">Nasional</option>' +
        '<option value="Lokal">Lokal</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="C74[]"></td>' +

        '<td><input type="file" accept="application/pdf" name="C75[]"></td>' +
        '<td><button class="removeC7">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.C7 tbody').sortable();

        $('#addRowC7').click(function() {
            $('table.C7 tbody').append(htmlC7);
        });

        $(document).on('click', '.removeC7', function() {
            $(this).parents('tr').remove();
        });

        $('#getValues').click(function() {
            var values = [];
            $('input[name="name"]').each(function(i, elem) {
                values.push($(elem).val());
            });
            alert(values.join(', '));
        });
    });
</script>




<script>
    function optionC8(obj) {
        console.log($(obj).val())
        var strC82 = $(obj).val();
        var iddropdownC8 = "#C82-" + obj.id.split("-")[1];
        switch (strC82) {
            case "Karya Seni":
                var strC82 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Pencipta/Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual">
                    Pencipta/Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual
                </option>
                <option value="Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual">
                    Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual
                </option>
                <option value="Penata Arstistik/Penata Musik/Penata Rias/PenataBusana/ Penata Tari">
                    Penata Arstistik/Penata Musik/Penata Rias/PenataBusana/ Penata Tari
                </option>
                <option value="PenataLampu/PenataSuara/PenataPanggung/IlustratorFoto/Kunduktor">
                    PenataLampu/PenataSuara/PenataPanggung/IlustratorFoto/Kunduktor
                </option>
                <option value="Pendisplay Pameran/Pembuat FotoDokumentasi/Pewarta Foto/Pembawa Acara/Reporter/RedakturPelaksana">
                    Pendisplay Pameran/Pembuat FotoDokumentasi/Pewarta Foto/Pembawa Acara/Reporter/RedakturPelaksana
                </option>
                <option value="Sebagai Pemusik/Pengrawit/Penari/Dalang/Pemeran/Pengarah AcaraTelevisi/Pelaksana Perancangan">
                    Sebagai Pemusik/Pengrawit/Penari/Dalang/Pemeran/Pengarah AcaraTelevisi/Pelaksana Perancangan
                </option>
               `
                break;
            case "Karya Sastra":
                var strC82 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Penulis Naskah Drama/Novel">Penulis Naskah Drama/Novel</option>
                <option value="Penulis Buku Kumpulan Cerpen">Penulis Buku Kumpulan Cerpen</option>
                <option value="Penulis Buku Kumpulan Puisi">Penulis Buku Kumpulan Puisi</option>
                `
                break;
            default:
                break;

        }
        $(iddropdownC8).html(strC82)
    }
    var rowC8 = 0;

    $(function() {
        $('table.C8 tbody').sortable();

        $('#addRowC8').click(function() {

            var htmlC8 =
                '<tr>' +

                '<td><label for="C81">' +
                '<select style = "width : 70%;" id="C81-' + rowC8 + '" onchange=optionC8(this) name="C81[]">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '<option value="Karya Seni">Penelitian atau Karya Seni</option>' +
                '<option value="Karya Sastra">Penelitian atau Karya Sastra</option>' +
                '</select></label>' +
                '</td>' +

                '<td><label for="C82">' +
                '<select style = "width : 60%;" id="C82-' + rowC8 + '" name="C82[]">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '</select></label>' +
                '</td>' +

                '<td><label for="C83">' +
                '<select style = "width : 70%;" id="C83-' + rowC8++ + '" name="C83[]">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '<option value="Internasional">Internasional</option>' +
                '<option value="Nasional">Nasional</option>' +
                '<option value="Lokal">Lokal</option>' +
                '</select></label>' +
                '</td>' +

                '<td><input type="file" accept="application/pdf" name="C84[]"></td>' +
                '<td><button class="removeC8">-</button></td>' +
                '</tr>';

            $('table.C8 tbody').append(htmlC8);
        });

        $(document).on('click', '.removeC8', function() {
            $(this).parents('tr').remove();
        });

        $('#getValues').click(function() {
            var values = [];
            $('input[name="name"]').each(function(i, elem) {
                values.push($(elem).val());
            });
            alert(values.join(', '));
        });
    });
</script>