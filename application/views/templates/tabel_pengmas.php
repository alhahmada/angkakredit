<script>
    var htmlD1 =
        '<tr>' +
        '<td><input type="text" name="D11[]"></td>' +
        '<td><input type="text" name="D12[]"></td>' +
        '<td><input type="text" name="D13[]"></td>' +

        '<td><input type="file" accept="application/pdf" name="D14[]"></td>' +
        '<td><button class="removeD1">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.D1 tbody').sortable();

        $('#addRowD1').click(function() {
            $('table.D1 tbody').append(htmlD1);
        });

        $(document).on('click', '.removeD1', function() {
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
    var htmlD2 =
        '<tr>' +
        '<td><input type="text" name="D21[]"></td>' +
        '<td><input type="text" name="D22[]"></td>' +

        '<td><input type="file" accept="application/pdf" name="D23[]"></td>' +
        '<td><button class="removeD2">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.D2 tbody').sortable();

        $('#addRowD2').click(function() {
            $('table.D2 tbody').append(htmlD2);
        });

        $(document).on('click', '.removeD2', function() {
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
    function optionD33(obj) {
        console.log($(obj).val())
        var strD34 = $(obj).val();
        var iddropdownD34 = "#D34-" + obj.id.split("-")[1];
        switch (strD34) {
            case "< 1 Smt":
                var strD34 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>
                <option value="Lokal">Lokal</option>
                <option value="Insidental">Insidental</option>`
                break;
            default:
                var strD34 = `
                <option value="" selected disabled hidden> ... </option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>
                <option value="Lokal">Lokal</option>`
                break;

        }
        $(iddropdownD34).html(strD34)
    }

    var rowD3 = 0;


    $(function() {
        $('table.D3 tbody').sortable();

        $('#addRowD3').click(function() {

            var htmlD3 =
                '<tr>' +
                '<td><input type="text" name="D31[]"></td>' +
                '<td><input type="text" name="D32[]"></td>' +

                '<td><label for="D33">' +
                '<select id="D33-' + rowD3 + '" name="D33[]" onchange="optionD33(this)">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '<option value="1 Smt/lebih">1 Semester/lebih</option>' +
                '<option value="< 1 Smt">Kurang dari 1 Semester</option>' +
                '</select></label>' +
                '</td>' +



                '<td><label for="D34">' +
                '<select id="D34-' + rowD3++ + '" name="D34[]">' +
                '<option value="" selected disabled hidden> ... </option>' +
                '</select></label></td>' +

                '<td><input type="file" accept="application/pdf" name="D35[]"></td>' +
                '<td><button class="removeD3">-</button></td>' +
                '</>';

            $('table.D3 tbody').append(htmlD3);
        });

        $(document).on('click', '.removeD3', function() {
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
    var htmlD4 =
        '<tr>' +
        '<td><label for="D41">' +
        '<select id="D41" name="D41[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Berdasarkan Bidang Keahlian">Berdasarkan Bidang Keahlian</option>' +
        '<option value="Berdasarkan Penugasan PT">Berdasarkan Penugasan PT</option>' +
        '<option value="Berdasarkan fungsi/jabatan">Berdasarkan fungsi/jabatan</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="D42[]"></td>' +


        '<td><input type="file" accept="application/pdf" name="D43[]"></td>' +
        '<td><button class="removeD4">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.D4 tbody').sortable();

        $('#addRowD4').click(function() {
            $('table.D4 tbody').append(htmlD4);
        });

        $(document).on('click', '.removeD4', function() {
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
    var htmlD5 =
        '<tr>' +

        '<td><input type="text" name="D51[]"></td>' +
        '<td><input type="text" name="D52[]"></td>' +

        '<td><input type="file" accept="application/pdf" name="D53[]"></td>' +
        '<td><button class="removeD5">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.D5 tbody').sortable();

        $('#addRowD5').click(function() {
            $('table.D5 tbody').append(htmlD5);
        });

        $(document).on('click', '.removeD5', function() {
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
    var htmlD6 =
        '<tr>' +

        '<td><input type="text" name="D61[]"></td>' +
        '<td><input type="text" name="D62[]"></td>' +

        '<td><input type="file" accept="application/pdf" name="D63[]"></td>' +
        '<td><button class="removeD6">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.D6 tbody').sortable();

        $('#addRowD6').click(function() {
            $('table.D6 tbody').append(htmlD6);
        });

        $(document).on('click', '.removeD6', function() {
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
    var htmlD7 =
        '<tr>' +

        '<td><input type="text" name="D71[]"></td>' +

        '<td><label for="D72">' +
        '<select id="D72" name="D72[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Internasional">Internasional</option>' +
        '<option value="Nasional">Nasional</option>' +
        '</select></label>' +
        '</td>' +

        '<td><label for="D73">' +
        '<select id="D73" name="D73[]">' +
        '<option value="" selected disabled hidden> ... </option>' +
        '<option value="Editor">Editor</option>' +
        '<option value="Dewan Penyunting">Dewan Penyunting</option>' +
        '<option value="Dewan Redaksi">Dewan Redaksi</option>' +
        '</select></label>' +
        '</td>' +

        '<td><input type="text" name="D74[]"></td>' +


        '<td><input type="file" accept="application/pdf" name="D75[]"></td>' +
        '<td><button class="removeD7">-</button></td>' +
        '</tr>';

    $(function() {
        $('table.D7 tbody').sortable();

        $('#addRowD7').click(function() {
            $('table.D7 tbody').append(htmlD7);
        });

        $(document).on('click', '.removeD7', function() {
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