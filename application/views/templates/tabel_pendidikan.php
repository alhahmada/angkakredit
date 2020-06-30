<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>
    $(function() {
        $(document).on('click', '.hapus', function() {
            var id = $(this).closest('tr').attr('id');
            var tbl = $(this).closest('tr').attr('itemid');
            if (confirm("Apakah Anda Yakin Menghapus Poin Pengajuan ini ?")) {
                $.ajax({
                    url: "<?= base_url('/dosen/hapus_pengajuan/'); ?>" + tbl + "/" + id,
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        alert("Data Dihapus dari Pengajuan");
                    }
                })
                $(this).parents('tr').remove();
            }
        });
    });
</script>

<script>
    var htmlA1 =
        '<tr>' +
        '<td><label for="A11">' +
        '<select id="A11" name="A11[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Magister">Magister</option>' +
        '<option value="Doktor">Doktor</option>' +
        '</select></label>' +

        '<td><input type="text" name="A12[]"></td>' +
        '<td><input type="text" name="A13[]"></td>' +

        '<td><input type="text" name="A14[]"></td>' +
        '<td><input type="file" accept="application/pdf" name="A15[]"></td>' +
        '<td><button class="removeA1">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.A1 tbody').sortable();

        $('#addRowA1').click(function() {
            $('table.A1 tbody').append(htmlA1);
        });

        $(document).on('click', '.removeA1', function() {
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
    var htmlA2 =
        '<tr>' +
        '<td><input type="text" name="A21[]"></td>' +
        '<td><input type="text" name="A22[]"></td>' +
        '<td>' +
        '<select id="A23" name="A23[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ganjil">Ganjil</option>' +
        '<option value="Genap">Genap</option>' +
        '</select></label>' +
        '</td>' +
        '<td><input type="file" accept="application/pdf" name="A24[]"></td>' +
        '<td><button class="removeA2">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.A2 tbody').sortable();

        $('#addRowA2').click(function() {
            $('table.A2 tbody').append(htmlA2);
        });

        $(document).on('click', '.removeA2', function() {
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
    var htmlB1 =
        '<tr>' +
        '<td><input type="text" name="B11[]"></td>' +
        '<td>' +
        '<select id="B12" name="B12[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ganjil">Ganjil</option>' +
        '<option value="Genap">Genap</option>' +
        '</select></label>' +
        '</td>' +
        '<td>' +
        '<select id="B13" name="B13[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="1">1</option>' +
        '<option value="2">2</option>' +
        '<option value="3">3</option>' +
        '<option value="4">4</option>' +
        '<option value="5">5</option>' +
        '<option value="6">6</option>' +
        '<option value="7">7</option>' +
        '<option value="8">8</option>' +
        '<option value="9">9</option>' +
        '<option value="10">10</option>' +
        '<option value="11">11</option>' +
        '<option value="12">12</option>' +
        '</select></label>' +
        '</td>' +
        '<td><input type="text" name="B14[]"></td>' +
        '<td><input type="file" accept="application/pdf" name="B15[]"></td>' +
        '<td><button class="removeB1">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.B1 tbody').sortable();

        $('#addRowB1').click(function() {
            $('table.B1 tbody').append(htmlB1);
        });

        $(document).on('click', '.removeB1', function() {
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
    var htmlB2 =
        '<tr>' +
        '<td><input type="text" name="B21[]"></td>' +
        '<td><input type="file" accept="application/pdf" name="B22[]"></td>' +
        '<td><button class="removeB2">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.B2 tbody').sortable();

        $('#addRowB2').click(function() {
            $('table.B2 tbody').append(htmlB2);
        });

        $(document).on('click', '.removeB2', function() {
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
    var htmlB3 =
        '<tr>' +
        '<td><input type="text" name="B31[]"></td>' +

        '<td>' +
        '<select id="B32" name="B32[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ganjil">Ganjil</option>' +
        '<option value="Genap">Genap</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="file" accept="application/pdf" name="B33[]"></td>' +
        '<td><button class="removeB3">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.B3 tbody').sortable();

        $('#addRowB3').click(function() {
            $('table.B3 tbody').append(htmlB3);
        });

        $(document).on('click', '.removeB3', function() {
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
    function optionB41(obj) {
        console.log($(obj).val())
        var str1 = $(obj).val();
        var iddropdown = "#B44-" + obj.id.split("-")[1];
        switch (str1) {
            case "Disertasi":
                var str1 = `
            <option value="" selected disabled hidden> ... </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>`
                break;
            case "Thesis":
                var str1 = `
            <option value="" selected disabled hidden> ... </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>`
                break;
            case "Skripsi":
                var str1 = `
            <option value="" selected disabled hidden> ... </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>`
                break;
            case "Laporan Akhir":
                var str1 = `
            <option value="" selected disabled hidden> ... </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>`
                break;
            default:
                break;

        }
        $(iddropdown).html(str1)
    }

    var rowB4 = 0;

    $(function() {
        $('table.B4 tbody').sortable();

        $('#addRowB4').click(function() {

            var htmlB4 =
                '<tr>' +
                '<td><label for="B41">' +
                '<select id="B41-' + rowB4 + '" name="B41[]" onchange="optionB41(this)">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '<option value="Skripsi">Skripsi</option>' +
                '<option value="Laporan Akhir">Laporan Akhir</option>' +
                '<option value="Disertasi">Disertasi</option>' +
                '<option value="Thesis">Thesis</option>' +
                '</select></label>' +
                '</td>' +

                '<td><label for="B42">' +
                '<select style = "width : 100%;" id="B42-' + rowB4 + '" name="B42[]">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '<option value="Utama">Pembimbing Utama</option>' +
                '<option value="Pendamping">Pendamping</option>' +
                '</select></label>' +
                '</td>' +

                '<td><input type="text" name="B43[]"></td>' +

                '<td><label for="B44">' +
                '<select id="B44-' + rowB4++ + '" name="B44[]">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '</td>' +

                '<td><input type="file" accept="application/pdf" name="B45[]"></td>' +
                '<td><button class="removeB4">-</button></td>' +
                '</tr>';

            $('table.B4 tbody').append(htmlB4);
        });

        $(document).on('click', '.removeB4', function() {
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
    function optionB51(obj) {
        console.log($(obj).val())
        var strB51 = $(obj).val();
        var iddropdownB51 = "#B53-" + obj.id.split("-")[1];
        switch (strB51) {
            case "Ketua Penguji":
                var strB51 = `
            <option value="" selected disabled hidden> ... </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>`
                break;
            case "Anggota Penguji":
                var strB51 = `
            <option value="" selected disabled hidden> ... </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>`
                break;
            default:
                break;

        }
        $(iddropdownB51).html(strB51)
    }

    var rowB5 = 0;


    $(function() {
        $('table.B5 tbody').sortable();

        $('#addRowB5').click(function() {

            var htmlB5 =
                '<tr>' +
                '<td><label for="B51">' +
                '<select id="B51-' + rowB5 + '" name="B51[]" onchange="optionB51(this)">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '<option value="Ketua Penguji">Ketua Penguji</option>' +
                '<option value="Anggota Penguji">Anggota Penguji</option>' +
                '</select></label>' +
                '</td>' +

                '<td><input type="text" name="B52[]"></td>' +

                '<td><label for="B53">' +
                '<select id="B53-' + rowB5++ + '" name="B53[]">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '</select></label></td>' +

                '<td><input type="file" accept="application/pdf" name="B54[]"></td>' +
                '<td><button class="removeB5">-</button></td>' +

                '</>';

            $('table.B5 tbody').append(htmlB5);
        });

        $(document).on('click', '.removeB5', function() {
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
    var htmlB6 =
        '<tr>' +
        '<td><input type="text" name="B61[]"></td>' +
        '<td><input type="text" name="B62[]"></td>' +
        '<td><input type="file" accept="application/pdf" name="B63[]"></td>' +
        '<td><button class="removeB6">-</button></td>' +

        '</tr>';

    $(function() {
        $('table.B6 tbody').sortable();

        $('#addRowB6').click(function() {
            $('table.B6 tbody').append(htmlB6);
        });

        $(document).on('click', '.removeB6', function() {
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
    var htmlB7 =
        '<tr>' +
        '<td><input type="text" name="B71[]"></td>' +
        '<td><input type="text" name="B72[]"></td>' +

        '<td>' +
        '<select id="B73" name="B73[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ganjil">Ganjil</option>' +
        '<option value="Genap">Genap</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="B74[]"></td>' +

        '<td><input type="file" accept="application/pdf" name="B75[]"></td>' +
        '<td><button class="removeB7">-</button></td>' +

        '</tr>';

    $(function() {
        $('table.B7 tbody').sortable();

        $('#addRowB7').click(function() {
            $('table.B7 tbody').append(htmlB7);
        });

        $(document).on('click', '.removeB7', function() {
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
    var htmlB8 =
        '<tr>' +
        '<td><label for="B81">' +
        '<select id="B81" name="B81[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Buku Ajar">Buku Ajar</option>' +
        '<option value="Diklat/Modul">Diklat/Modul</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="B82[]"></td>' +

        '<td>' +
        '<select id="B83" name="B83[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ganjil">Ganjil</option>' +
        '<option value="Genap">Genap</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="B84[]"></td>' +
        '<td><input type="file" accept="application/pdf" name="B85[]"></td>' +
        '<td><button class="removeB8">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.B8 tbody').sortable();

        $('#addRowB8').click(function() {
            $('table.B8 tbody').append(htmlB8);
        });

        $(document).on('click', '.removeB8', function() {
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
    var htmlB9 =
        '<tr>' +

        '<td><input type="text" name="B91[]"></td>' +
        '<td><input type="text" name="B92[]"></td>' +

        '<td>' +
        '<select id="B93" name="B93[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ganjil">Ganjil</option>' +
        '<option value="Genap">Genap</option>' +
        '</select></label>' +
        '</td>' +


        '<td><input type="file" accept="application/pdf" name="B94[]"></td>' +
        '<td><button class="removeB9">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.B9 tbody').sortable();

        $('#addRowB9').click(function() {
            $('table.B9 tbody').append(htmlB9);
        });

        $(document).on('click', '.removeB9', function() {
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
    var htmlB10 =
        '<tr>' +
        '<td><label for="B101">' +
        '<select id="B101" name="B101[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Direktur">Direktur</option>' +
        '<option value="Wakil Direktur">Wakil Direktur</option>' +
        '<option value="Kepala Program Studi">Kepala Program Studi</option>' +
        '<option value="Sekretaris Program Studi">Sekretaris Program Studi</option>' +
        '<option value="Kepala Bagian">Kepala Bagian</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="B102[]"></td>' +

        '<td>' +
        '<select id="B103" name="B103[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ganjil">Ganjil</option>' +
        '<option value="Genap">Genap</option>' +
        '</select></label>' +
        '</td>' +


        '<td><input type="file" accept="application/pdf" name="B104[]"></td>' +
        '<td><button class="removeB10">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.B10 tbody').sortable();

        $('#addRowB10').click(function() {
            $('table.B10 tbody').append(htmlB10);
        });

        $(document).on('click', '.removeB10', function() {
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
    var htmlB11 =
        '<tr>' +
        '<td><label for="B111">' +
        '<select id="B111" name="B111[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Bimbing Pencangkokan">Bimbing Pencangkokan</option>' +
        '<option value="Bimbing Reguler">Bimbing Reguler</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="B112[]"></td>' +

        '<td>' +
        '<select id="B113" name="B113[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ganjil">Ganjil</option>' +
        '<option value="Genap">Genap</option>' +
        '</select></label>' +
        '</td>' +


        '<td><input type="file" accept="application/pdf" name="B114[]"></td>' +
        '<td><button class="removeB11">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.B11 tbody').sortable();

        $('#addRowB11').click(function() {
            $('table.B11 tbody').append(htmlB11);
        });

        $(document).on('click', '.removeB11', function() {
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
    var htmlB12 =
        '<tr>' +
        '<td><label for="B121">' +
        '<select id="B121" name="B121[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Datasering">Datasering</option>' +
        '<option value="Pencangkokan">Pencangkokan</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="B122[]"></td>' +

        '<td>' +
        '<select id="B123" name="B123[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ganjil">Ganjil</option>' +
        '<option value="Genap">Genap</option>' +
        '</select></label>' +
        '</td>' +


        '<td><input type="file" accept="application/pdf" name="B124[]"></td>' +
        '<td><button class="removeB12">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.B12 tbody').sortable();

        $('#addRowB12').click(function() {
            $('table.B12 tbody').append(htmlB12);
        });

        $(document).on('click', '.removeB12', function() {
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
    var htmlB13 =
        '<tr>' +
        '<td><label for="B131">' +
        '<select id="B131" name="B131[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="> 960 jam">Lebih dari 960 jam</option>' +
        '<option value="641-960 jam">641-960 jam</option>' +
        '<option value="481-640 jam">481-640 jam</option>' +
        '<option value="161-480 jam">161-480 jam</option>' +
        '<option value="81-160 jam">81-160 jam</option>' +
        '<option value="31-80 jam">31-80 jam</option>' +
        '<option value="10-30 jam">10-30 jam</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="file" accept="application/pdf" name="B132[]"></td>' +
        '<td><button class="removeB13">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.B13 tbody').sortable();

        $('#addRowB13').click(function() {
            $('table.B13 tbody').append(htmlB13);
        });

        $(document).on('click', '.removeB13', function() {
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