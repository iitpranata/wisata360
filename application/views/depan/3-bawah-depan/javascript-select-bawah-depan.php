<script type="text/javascript">
$(document).ready(function() {
    $('select').change(function() {
        var str = $(this).val();
        var res = str.split("."); 
        if (res[0] == '1') {
            var title3 = '1';
        } else if (res[0] == '2') {
            var title3 = '2';
        } else if (res[0] == '3') {
            var title3 = '3';
        } else if (res[0] == '4') {
            var title3 = '4';
        } else if (res[0] == '5') {
            var title3 = '5'
        }
        $('.wisata_hasil_bintang').html('Kenapa anda memberi ' + title3 + ' bintang?');

    });
});      
</script>