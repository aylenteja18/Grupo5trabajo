<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RICHTER</title>
    <link rel="stylesheet" href="decoracion.css">
</head>
<body>
    <header class="cabecera" id="pan" >
    
         <nav id="sideNav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="mostrarmenu()">&times;</a>
        <a href="inicio.php">Inicio</a>
        <a href="datos.php">Nosotros</a>
        <a href="datos.php">Contactanos</a>
        <a href="mision-vision.php">Mision-Vision</a>
        <a href="ambientes.php">Ambientes y convenios</a>
        <a href="cont.php">Servicios y actividades</a>
         <a href="historia.php">Historia</a>
        
    </nav> 
   </div>
     <div class="menu-icon" onclick="mostrarmenu()">&#9776;</div>
    
     <div class="logo">
            <img src="media/logo.png" alt="Logo">
    
</header>
   
</body>
<script>
    function mostrarmenu() {
    var sideNav = document.getElementById("sideNav");
    var cabecera = document.getElementById("pan");
    if (sideNav.style.width === "250px") {
        sideNav.style.width = "0";
        cabecera.style.backgroundColor="transparent";
    } else {
        sideNav.style.width = "250px";
        cabecera.style.backgroundColor="rgb(71, 65, 57)";
    }
}
window.addEventListener('scroll', function() {
    const cabecera = document.querySelector('.cabecera');
    if (window.scrollY > 0) { 
        cabecera.classList.add('scrolled');
    } else { 
        cabecera.classList.remove('scrolled');
    }
});
</script>
</html>
