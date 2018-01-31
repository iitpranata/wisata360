<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/getmdl-select.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['Ulasan', 'Nilai'],
        <?php $query = $this->db->query("SELECT `ulasan_objek_wisata__ulasan`, COUNT(`ulasan_objek_wisata__ulasan`) AS `value_occurrence` FROM `objek_wisata__ulasan` GROUP BY `ulasan_objek_wisata__ulasan` ORDER BY `ulasan_objek_wisata__ulasan` DESC LIMIT 2");
		foreach($query->result() as $row){ ?>
        ['<?php if($row->ulasan_objek_wisata__ulasan == "1"){echo "POSITIF";}else{echo "NEGATIF";}?>', <?php echo $row->value_occurrence ?>],
    <?php } ?>
    ]);

    var options = {
        title: 'Sentimen Analisis Objek Wisata Kota Bengkulu',
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
    }
</script>
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );
} );
</script>
<?php 
    if($this->uri->segment(2) == "tambah_objek_wisata")
    {
?>

<script>
  function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#foto360').attr('src', e.target.result);
        }

              reader.readAsDataURL(input.files[0]);
          }
      }

      $("#fotovr").change(function(){
          readURL(this);
      });

    var fileInputTextDiv = document.getElementById('file_input_text_div');
    var fileInput = document.getElementById('file_input_file');
    var fileInputText = document.getElementById('file_input_text');
    fileInput.addEventListener('change', changeInputText);
    fileInput.addEventListener('change', changeState);

    function changeInputText() {
        var str = fileInput.value;
        var i;
        if (str.lastIndexOf('\\')) {
            i = str.lastIndexOf('\\') + 1;
        } else if (str.lastIndexOf('/')) {
            i =  str.lastIndexOf('/') + 1;
        }
        fileInputText.value = str.slice(i, str.length);
    }

    function changeState() {
        if (fileInputText.value.length != 0) {
            if (!fileInputTextDiv.classList.contains("is-focused")) {
                fileInputTextDiv.classList.add('is-focused');
            }
        } else {
            if (fileInputTextDiv.classList.contains("is-focused")) {
                fileInputTextDiv.classList.remove('is-focused');
            }
        }
    }
       
</script>
<?php
    }
?>
  </body>
</html>