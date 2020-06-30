<script>
    var htmlE1 =
        '<tr>' +

        '<td><input type="text" name="E11[]"></td>' +

        '<td><label for="E12">' +
        '<select id="E12" name="E12[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ketua/Wakil Ketua">Ketua/Wakil Ketua</option>' +
        '<option value="Anggota">Anggota</option>' +
        '</select></label>' +
        '</td>' +


        '<td><input type="text" name="E13[]"></td>' +


        '<td><input type="file" accept="application/pdf" name="E14[]"></td>' +
        '<td><button class="removeE1">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.E1 tbody').sortable();

        $('#addRowE1').click(function() {
            $('table.E1 tbody').append(htmlE1);
        });

        $(document).on('click', '.removeE1', function() {
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
    var htmlE2 =
        '<tr>' +

        '<td><input type="text" name="E21[]"></td>' +
        '<td><input type="text" name="E22[]"></td>' +

        '<td><label for="E23">' +
        '<select id="E23" name="E23[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Panitia Pusat">Panitia Pusat</option>' +
        '<option value="Panitia Daerah">Panitia Daerah</option>' +
        '</select></label>' +
        '</td>' +

        '<td><label for="E24">' +
        '<select id="E24" name="E24[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ketua/Wakil Ketua">Ketua/Wakil Ketua</option>' +
        '<option value="Anggota">Anggota</option>' +
        '</select></label>' +
        '</td>' +


        '<td><input type="text" name="E25[]"></td>' +


        '<td><input type="file" accept="application/pdf" name="E26[]"></td>' +
        '<td><button class="removeE2">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.E2 tbody').sortable();

        $('#addRowE2').click(function() {
            $('table.E2 tbody').append(htmlE2);
        });

        $(document).on('click', '.removeE2', function() {
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
    var htmlE3 =
        '<tr>' +

        '<td><input type="text" name="E31[]"></td>' +

        '<td><label for="E32">' +
        '<select id="E32" name="E32[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Internasional">Internasional</option>' +
        '<option value="Nasional">Nasional</option>' +
        '</select></label>' +
        '</td>' +

        '<td><label for="E33">' +
        '<select id="E33" name="E33[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Pengurus">Pengurus</option>' +
        '<option value="Anggota, atas permintaan">Anggota, atas permintaan</option>' +
        '<option value="Anggota">Anggota</option>' +
        '</select></label>' +
        '</td>' +


        '<td><input type="text" name="E34[]"></td>' +


        '<td><input type="file" accept="application/pdf" name="E35[]"></td>' +
        '<td><button class="removeE3">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.E3 tbody').sortable();

        $('#addRowE3').click(function() {
            $('table.E3 tbody').append(htmlE3);
        });

        $(document).on('click', '.removeE3', function() {
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
    var htmlE4 =
        '<tr>' +

        '<td><input type="text" name="E41[]"></td>' +
        '<td><input type="text" name="E42[]"></td>' +
        '<td><input type="text" name="E43[]"></td>' +


        '<td><input type="file" accept="application/pdf" name="E44[]"></td>' +
        '<td><button class="removeE4">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.E4 tbody').sortable();

        $('#addRowE4').click(function() {
            $('table.E4 tbody').append(htmlE4);
        });

        $(document).on('click', '.removeE4', function() {
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
    var htmlE5 =
        '<tr>' +

        '<td><input type="text" name="E51[]"></td>' +

        '<td><label for="E52">' +
        '<select id="E52" name="E52[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ketua Delegasi">Ketua Delegasi</option>' +
        '<option value="Anggota">Anggota</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="E53[]"></td>' +


        '<td><input type="file" accept="application/pdf" name="E54[]"></td>' +
        '<td><button class="removeE5">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.E5 tbody').sortable();

        $('#addRowE5').click(function() {
            $('table.E5 tbody').append(htmlE5);
        });

        $(document).on('click', '.removeE5', function() {
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
    var htmlE6 =
        '<tr>' +

        '<td><input type="text" name="E61[]"></td>' +

        '<td><label for="E62">' +
        '<select id="E62" name="E62[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Internasional/Nasional/Regional">Internasional/Nasional/Regional</option>' +
        '<option value="Lingkungan Perguruan Tinggi">Lingkungan Perguruan Tinggi</option>' +
        '</select></label>' +
        '</td>' +

        '<td><label for="E63">' +
        '<select id="E63" name="E63[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ketua">Ketua</option>' +
        '<option value="Anggota/Peserta">Anggota/Peserta</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="E64[]"></td>' +


        '<td><input type="file" accept="application/pdf" name="E65[]"></td>' +
        '<td><button class="removeE6">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.E6 tbody').sortable();

        $('#addRowE6').click(function() {
            $('table.E6 tbody').append(htmlE6);
        });

        $(document).on('click', '.removeE6', function() {
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
    var htmlE7 =
        '<tr>' +

        '<td><label for="E71">' +
        '<select id="E71" name="E71[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Penghargaan/Tanda Jasa Satya Lencana 30 Tahun">Penghargaan/Tanda Jasa Satya Lencana 30 Tahun</option>' +
        '<option value="Penghargaan/Tanda Jasa Satya Lencana 20 Tahun">Penghargaan/Tanda Jasa Satya Lencana 20 Tahun</option>' +
        '<option value="Penghargaan/Tanda Jasa Satya Lencana 10 Tahun">Penghargaan/Tanda Jasa Satya Lencana 10 Tahun</option>' +
        '<option value="Tingkat Internasional">Tingkat Internasional</option>' +
        '<option value="Tingkat Nasional">Tingkat Nasional</option>' +
        '<option value="Tingkat Daerah/Lokal">Tingkat Daerah/Lokal</option>' +
        '</select></label>' +
        '</td>' +


        '<td><input type="text" name="E72[]"></td>' +


        '<td><input type="file" accept="application/pdf" name="E73[]"></td>' +
        '<td><button class="removeE7">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.E7 tbody').sortable();

        $('#addRowE7').click(function() {
            $('table.E7 tbody').append(htmlE7);
        });

        $(document).on('click', '.removeE7', function() {
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
    var htmlE8 =
        '<tr>' +

        '<td><input type="text" name="E81[]"></td>' +

        '<td><label for="E82">' +
        '<select id="E82" name="E82[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="SMTA">SMTA atau setingkat</option>' +
        '<option value="SMTP">SMTP atau setingkat</option>' +
        '<option value="SD">SD atau setingkat</option>' +
        '</select></label>' +
        '</td>' +


        '<td><input type="text" name="E83[]"></td>' +


        '<td><input type="file" accept="application/pdf" name="E84[]"></td>' +
        '<td><button class="removeE8">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.E8 tbody').sortable();

        $('#addRowE8').click(function() {
            $('table.E8 tbody').append(htmlE8);
        });

        $(document).on('click', '.removeE8', function() {
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
    var htmlE9 =
        '<tr>' +

        '<td><label for="E91">' +
        '<select id="E91" name="E91[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Olahraga">Olahraga</option>' +
        '<option value="Humaniora">Humaniora</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="E92[]"></td>' +

        '<td><label for="E93">' +
        '<select id="E93" name="E93[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Internasional">Internasional</option>' +
        '<option value="Nasional">Nasional</option>' +
        '<option value="Daerah/Lokal">Daerah/Lokal</option>' +
        '</select></label>' +
        '</td>' +


        '<td><input type="file" accept="application/pdf" name="E94[]"></td>' +
        '<td><button class="removeE9">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.E9 tbody').sortable();

        $('#addRowE9').click(function() {
            $('table.E9 tbody').append(htmlE9);
        });

        $(document).on('click', '.removeE9', function() {
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
    var htmlE10 =
        '<tr>' +

        '<td><label for="E101">' +
        '<select id="E101" name="E101[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Anggota">Anggota Tim Penilai</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="E102[]"></td>' +


        '<td>' +
        '<select id="E103" name="E103[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Ganjil">Ganjil</option>' +
        '<option value="Genap">Genap</option>' +
        '</select></label>' +
        '</td>' +



        '<td><input type="file" accept="application/pdf" name="E104[]"></td>' +
        '<td><button class="removeE10">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.E10 tbody').sortable();

        $('#addRowE10').click(function() {
            $('table.E10 tbody').append(htmlE10);
        });

        $(document).on('click', '.removeE10', function() {
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