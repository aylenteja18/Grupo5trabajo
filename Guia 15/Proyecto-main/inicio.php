<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inds. RICHTER</title>
    <link rel="stylesheet" href="decoracion.css">
    <style>
body {
    background-color: rgb(204, 155, 81) !important;
    transition: background-color 1s ease; 
}

#VISION, #MISION {
    background-color: rgb(204, 155, 81);
    width: 100%;
    height: 35vh;
    display: flex;
    flex-direction: row;
    align-content: center;
    align-items: center;
    justify-content: center;
    margin-top: 18vh;
    margin-bottom: 18vh;
    transition: background-color 1s ease; 
}

.fondo, .fondo2 {
    width: 80vw;
    height: 30vh;
    background-color: transparent;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-content: center;
    align-items: center;
    text-align: center;
    overflow: visible;
    border-radius: 2.5vh;
    padding: 3vh;
    transition: background-color 1s ease; 
}

.fondo:hover, .fondo2:hover {
    background-color: rgb(71, 65, 57);
    cursor: pointer;
}

.fondo img, .fondo2 img {
    width: auto;
    height: 150%;
    border-radius: 3vh;
    transition: opacity 1s ease; 
}

.fondo:hover img, .fondo2:hover img {
    opacity: 0.8;
}

.conte {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    width: 40vw;
    color: black;
    transition: color 1s ease;
}

.conte h1 {
    font-size: 8vw;
    font-weight: bold;
    transition: font-size 1s ease; 
}

.conte p {
    font-size: 0px;
    transition: font-size 1s ease; 
}

.fondo:hover .conte, .fondo2:hover .conte {
    color: white;
}

.fondo:hover h1, .fondo2:hover h1 {
    font-size: 3.8vw; 
}

.fondo:hover p, .fondo2:hover p {
    font-size: 1.2vw;
}

.order-now-btn {
    background-color: #fff;
    color: #000;
    font-size: 1.6vw;
    font-weight: bold;
    padding: 1.5vh 3vw;
    border: 0.2vw solid #fff;
    border-radius: 1vh;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
    display: none; 
}

.fondo:hover .order-now-btn, .fondo2:hover .order-now-btn {
    display: block; 
}

.order-now-btn:hover {
    background-color: transparent;
    color: #fff;
}
    </style>
</head>
<body>
    <?php require 'head.php'; ?>

    <div class="menuvideo">
        <video autoplay loop muted>
            <source src="media/uwu.mp4" type="video/mp4">
        </video>
        <a href="">CONOCER MÁS</a>
    </div>

    <section id="MISION">
        <div class="fondo">
            <img src="media/jabon/4.jpeg" alt="Imagen de Jabón">
            <div class="conte">
                <h1>¿Qué Somos?</h1>
                <p>"Somos una empresa dedicada a la elaboración de 
                    <br>productos de limpieza en base 
                    <br>a materia prima reciclada"</p>
                <button class="order-now-btn">Saber Más</button>
            </div>
        </div>
    </section>

    <section id="VISION">
        <div class="fondo2">
            <div class="conte">
                <h1>¿Quienes Somos?</h1>
                <p>"Somos un grupo de emprendedores que treabajan
                    <br> en busca de la reducción de contaminación"</p>
                <button class="order-now-btn">Saber Más</button>
            </div>
            <img src="media/jabon/4.jpeg" alt="Imagen de Jabón">
        </div>
    </section>

    <section id="MISION">
        <div class="fondo">
            <img src="media/jabon/4.jpeg" alt="Imagen de Jabón">
            <div class="conte">
                <h1>¿Desde Cuando Lo Hacemos?</h1>
                <p>“Llevamos más de 30 años en el mercado siendo fabricantes de una alta gama
                     <br> de productos de limpieza para uso doméstico como para uso empresarial a nivel nacional,
                    <br> beneficiando con empleo a más de 50 familias.”</p>
                <button class="order-now-btn">Saber Más</button>
            </div>
        </div>
    </section>

    <section id="VISION">
        <div class="fondo2">
            <div class="conte">
                <h1>¿Dónde Lo Hacemos?</h1>
                <p>AV LOS ROBLES MONTERREY Y CERRO PASCANA<br>
                TROPIXA - MOBLE ROBLES<br>
                COCHABAMBA, BOLIVIA</p>
                <button class="order-now-btn">Saber Más</button>
            </div>
            <img src="media/jabon/4.jpeg" alt="Imagen de Jabón">
        </div>
    </section>

    <?php require 'footer.php'; ?>
</body>
</html>




