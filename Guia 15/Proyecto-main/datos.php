<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicación</title>
    <link rel="stylesheet" href="datos.css">
</head>
<body>
    <?php
 require 'head.php';?>
    <div class="top-space"></div>
    <div class="main-container">
       <div class="location-and-map">
            <div class="location">
                <h1>UBICACIÓN</h1>
                <p>AV LOS ROBLES MONTERREY Y CERRO PASCANA<br>
                TROPIXA - MOBLE ROBLES<br>
                COCHABAMBA, BOLIVIA</p>
            </div>    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799145072!2d-74.25987368757023!3d40.69767006346101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2467f1e3b59db%3A0x2e5ddc4c4e9b8f5e!2sNueva%20York%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sbo!4v1686078536170!5m2!1ses-419!2sbo" 
            width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>   
        <div class="hours-container">
            <h2 class="hours-title">Horarios De Atención</h2>
            <div class="hours">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Mañana</th>
                            <th>Tarde</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lunes - Viernes</td>
                            <td>8:30am - 12:00pm</td>
                            <td>2:30pm - 6:30pm</td>
                        </tr>
                        <tr>
                            <td>Domingo</td>
                            <td colspan="2">Cerrado</td>
                        </tr>
                        <tr>
                            <td>Sábado</td>
                            <td>8:30am - 12:00pm</td>
                            <td>Cerrado</td>
                        </tr>
                        <tr>
                            <td>Feriados</td>
                            <td colspan="2">Cerrado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contact-us" id="contactanos">
            <h2>Contáctanos</h2>
            <p>Teléfono: 4 423 947<br>Correo Electrónico: contacto@industriasrichter.com</p>
        </div>
    </div>
    <?php
 require 'footer.php';
 ?>
</body>
</html>
