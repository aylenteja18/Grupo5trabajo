<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="proyecto.css">
</head>

<body id="his">
    <section class="head2"></section>
    <?php
   require 'head.php';
    ?>
 <section id="conve">
     <h1 align="center">CONVENIOS</h1>
   <center>
   <p>Con el apoyo de entidades publicas y privadas para realizar el<br>
    <br>PROYECTO DE RECICLAJE DE ACEITE VEGETAL, USADO, MALO Y QUEMADO<br>
    <br>Responsabilidad ambiental<br><br>
    Proveedor principal "Rotoplas"<br><br>
    Segundo proovedor "Industrias Lujan"<p>
    <img id="ghostC"src= "https://www.opinion.com.bo/asset/thumbnail,992,558,center,center/media/opinion/images/2018/12/02/2018N275129.jpg">
    <img id="ghostO"src= "https://scontent.flpb1-2.fna.fbcdn.net/v/t1.6435-9/103495383_252732206152459_6380637831992208047_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=127cfc&_nc_ohc=Odxe83YBfG0Q7kNvgGtVFk4&_nc_ht=scontent.flpb1-2.fna&oh=00_AYABZ9Dnb3-HlCZ3TH-ED7ardsC1E5g8PghBuDsZB5HgrQ&oe=66F07311">
    </center>
 </section>
 <section id="amb">
     <h1 align="center">AMBIENTES</h1>
 <center>
   <p>Dentro del área de producción existe nuestra fabrica<br><br>
   en el cual se encuentra el laboratorio que analiza<br><br>
   cualquier producto, verificar componentes y formulas.<p>
 
   <img id="ghostA" src= "https://www.lostiempos.com/sites/default/files/styles/noticia_detalle/public/media_imagen/2023/7/9/esp_web_1_tiemposssss.jpg?itok=MsBVSy-v">
   </center>
 </section> 
 <?php
 require 'footer.php'
 ;?>
</body>
<script>
    window.addEventListener('scroll', function() {
    const cabecera = document.querySelector('.cabecera');
    if (window.scrollY == 0) { 
        cabecera.classList.add('scrolled');
    }
</script>
</html>