<script type="text/javascript">
    $(function() {
        $(".datepicker").datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true,
        });
        $("#tgl_mulai").on('changeDate', function(selected) {
            var startDate = new Date(selected.date.valueOf());
            $("#tgl_akhir").datepicker('setStartDate', startDate);
            if ($("#tgl_mulai").val() > $("#tgl_akhir").val()) {
                $("#tgl_akhir").val($("#tgl_mulai").val());
            }
        });
    });
</script>