<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+GeoJSON:</h3>

<p>En esta página vemos el detalle de <strong><?php print($datos['properties']['place']);?></strong></p>
<p>Magnitud: <?php print($datos['properties']['mag']);?> </p>
<p>Epicentro: <?php print($datos['properties']['place']);?> </p>
<p>Riesgo tsunami: <?php if($datos['properties']['tsunami'] ==0 );?>No</p>
<pre><?php print_r($datos)?></pre>


<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los datos más importantes del movimiento sístimo que se observa en detalle.</p>
</div>

</section>
<?php include('footer.php');?>
