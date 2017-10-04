$(document).ready(function(){
    $("#pencarian").hide();
});

// show dan hide pencarian tampilan mobile
$(document).ready(
    function(){
        $("#cari").click(function () {
            $("#pencarian").fadeToggle();
        });
    });