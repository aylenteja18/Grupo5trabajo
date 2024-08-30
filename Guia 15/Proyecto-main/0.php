
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            *{
    margin:0px;
    padding:0px;
    border:0;
    font-size: 100%;
    vertical-align: baseline;
}
body{
    text-align: center;
    font-family: sans-serif;
    
}
.header{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
}
.head{
    display:flex;
    align-items: center;
    justify-content: space-between;
    height: 63px;
    background: #171717;
    position: fixed;
    width: 100%;
    z-index:100;
}
.navbar{
    display:flex;
    margin-right: 100px;
 
}
.logo{
    margin-left: 30px;
}
.logo a{
    text-decoration: none;
    color: #FFF;
    text-transform: uppercase;
    font-size: 20px;
    
}
.navbar a{
    display: block;
    padding:23px 20px;
    color:#FFF;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 20px;
}
.navbar a:hover{
     background: #3f3f3f;
     
}
.icon{
    height: 50px;
    width: 50px;
}
.content{
    height: 50vh;
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    
}
.of2{
    padding:30px;
    background: #1f1d1d;
    
}
.box-container{
    display:flex;
    justify-content: center;
    flex-wrap: wrap;
    text-align: center;
}
.box-container .box{
    height: 11rem;
    width: 17rem;
    background: #101010;
    text-align: center;
    border-radius: 1rem;
    box-shadow: 0 1.2rem 8rem rgba(0, 0, 0,.5);
    margin:2rem;
}
.box-container .box i{
    height: 3rem;
    width: 3rem;
    line-height: 3rem;
    text-align: center;
    border-radius:50%;
    color:#FFF;
    background:#9c27b0;
    font-size: 2rem;
    margin: 1rem 0;
}
.box-container .box h3{
    font-size: 50px;
    color: #9c27b0;
}
.box-container .box p{
    font-size:16px;
    padding: 0 15px;
}
.titulo{
    margin-top: 250px;
        font-size:60px;
        font-weight: 600;
        text-transform: uppercase;
        color:white;
}
.map{
    height: 250px;
    width: 350px;
    border-radius: 50%;
    box-shadow: 0 .3rem 5rem rgba(0, 0, 0,.5);
    margin-top: 35px;
}
body{
    text-align: center;
    font-family: sans-serif;
    
}
.header{
    display: grid;
    grid-template-areas: "t"
    "p" ;
    justify-content: center;
    align-items: center;
    
}
.header h2{
grid-area: t;
}
.header .asd{
    grid-area: p;
    }
   
.header{
    height: 60vh !important;
    background-attachment: fixed;
    background: url("https://tiempo.hn/wp-content/uploads/2020/06/0f4c7e8f76f6c292b0834d4e2e5c36b7-1.jpg") no-repeat center;
    background-size: cover;
}
.head{
    display:flex;
    align-items: center;
    justify-content: space-between;
    height: 63px;
    background: #171717;
    position: fixed;
    width: 100%;
    z-index:100;
}
.navbar{
    display:flex;
    margin-right: 100px;
}
.logo{
    margin-left: 30px;
}
.logo a{
    text-decoration: none;
    color: #FFF;
    text-transform: uppercase;
    font-size: 20px;
    
}
.navbar a{
    display: block;
    padding:23px 20px;
    color:#FFF;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 20px;
}
.navbar a:hover{
     background: #3f3f3f;
     
}

.titulo{
    margin-top: 80px;
        font-size:60px;
        font-weight: 600;
        text-transform: uppercase;
        color:white;
}
p{
    margin-bottom: 40px;
    font-size:18px;
    padding: 0 100px;
    color:white;
}
.btn{
    display: inline;
    margin-top: 15px;
    padding: 10px 20px;
    border: 2px solid #9c27b0;
    color:#FFF;
    text-decoration: none;
    background: #9c27b0;
    
}
.btn-home{
    display:flex;
    align-items: center;
}
.btn-home a{
    margin: 0 10px;
    
}
.btn:hover{
    background: none;
}
.content{
    height: 50vh;
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    
}
.of{
    padding:30px;
    background: #1f1d1d;
    
}
.box-container{
    display:flex;
    justify-content: center;
    flex-wrap: wrap;
    text-align: center;
}
.box-container .box{
    height: 11rem;
    width: 17rem;
    background: #101010;
    text-align: center;
    border-radius: 1rem;
    box-shadow: 0 .3rem 5rem rgba(0, 0, 0,.5);
    margin:2rem;
}
.box-container .box i{
    height: 3rem;
    width: 3rem;
    line-height: 3rem;
    text-align: center;
    border-radius:50%;
    color:#FFF;
    background:#9c27b0;
    font-size: 2rem;
    margin: 1rem 0;
}
.box-container .box h3{
    font-size: 20px;
    color: #9c27b0;
}
.box-container .box p{
    font-size:16px;
    padding: 0 15px;
}
.about{
    background:#171717; 
}
.price{
    background: url("https://i.pinimg.com/originals/fb/0c/a7/fb0ca777def09e7401823defc748f79c.jpg") no-repeat center;
    background-attachment: fixed;
    text-align: center;
    background-size: cover;
    
}
.contacto{
    
     padding-top: 20px;
   background: #171717;
     padding-bottom: 0;
}
.icon{
    height: 50px;
    width: 50px;
    background: none;
    box-shadow: 0 .3rem 5rem rgba(0, 0, 0,.5);
    border-radius: 50%;
}


        </style>
    </head>
    <body>
        <div class="head">
            <div class="logo">
                <a href="5.php">INICIAR SESION</a>
            </div>
            <nav class="navbar">

        <a href="1.php" >Personas Aparecidas</a>
        <a href="2.php" >Personas Desaparecidas</a>
        <a href="3.php" >Registrar Desaparecido</a>
        <a href="#contact" >Contacto</a>
            </nav>
        </div>
        <header class="header">
            <h2 class="titulo">Apoco si mi warzone?</h2>
            <div class="asd">
            <p >Bienvenido a nuestra pagina, Nosotros somos Apocosi mi warzone? y nos dedicamos a registrar y reportar a personas desaparecidas</p>
      
                <a href="1.php" class="btn">Saber Más</a>
                <div class="btn-home">
     
            
        </div>
    </div>
        </header>
        <section class="content of">
            <h2 class="titulo">Personas Aparecidas</h2>
            <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla 
                maximus, augue eu ullamcorper molestie, lacus eros bibendum 
                tortor, a faucibus est tellus et elit. Nam suscipit hendrerit 
                faucibus. Sed commodo, enim eget placerat mattis, urna enim 
                sodales urna, nec varius justo neque et ligula. Ut neque nunc, 
                molestie vitae euismod sed, pulvinar ac lectus. Aenean ac arcu 
                venenatis, suscipit massa ultricies, dignissim risus. Curabitur 
                suscipit, massa sed sodales facilisis, leo augue volutpat enim, 
                ut sollicitudin odio urna quis tortor. Integer lobortis ex id 
                leo efficitur, eu malesuada eros malesuada. Nullam semper orci 
                nunc. Pellentesque quis neque eget nisl aliquam iaculis.</p>
                <a href="info.html" class="btn">Saber Más</a>
        </section>
        <section class="content about">
            <h2 class="titulo">Personas Desaparecidas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla 
                maximus, augue eu ullamcorper molestie, lacus eros bibendum 
                tortor, a faucibus est tellus et elit. Nam suscipit hendrerit 
                faucibus. Sed commodo, enim eget placerat mattis, urna enim 
                sodales urna, nec varius justo neque et ligula. Ut neque nunc, 
                molestie vitae euismod sed, pulvinar ac lectus. Aenean ac arcu 
                venenatis, suscipit massa ultricies, dignissim risus. Curabitur 
                suscipit, massa sed sodales facilisis, leo augue volutpat enim, 
                ut sollicitudin odio urna quis tortor. Integer lobortis ex id 
                leo efficitur, eu malesuada eros malesuada. Nullam semper orci 
                nunc. Pellentesque quis neque eget nisl aliquam iaculis.</p>
            <a class="btn" href="#">Saber más</a>
        </section>
        <section class="content price">
            <article class="contain">
                <h2 class="titulo">Reporte</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla 
                maximus, augue eu ullamcorper molestie, lacus eros bibendum 
                tortor, a faucibus est tellus et elit. Nam suscipit hendrerit 
                faucibus. Sed commodo, enim eget placerat mattis, urna enim 
                sodales urna, nec varius justo neque et ligula. Ut neque nunc, 
                molestie vitae euismod sed, pulvinar ac lectus. Aenean ac arcu 
                venenatis, suscipit massa ultricies, dignissim risus. Curabitur 
                suscipit, massa sed sodales facilisis, leo augue volutpat enim, 
                ut sollicitudin odio urna quis tortor. Integer lobortis ex id 
                leo efficitur, eu malesuada eros malesuada. Nullam semper orci 
                nunc. Pellentesque quis neque eget nisl aliquam iaculis.</p>
                             <a class="btn" href="#">Saber Precio</a>
            </article>
        </section>
            <section class="content of2">
            <h2 class="titulo" id="contact">CONTACTO</h2>
             <figure><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpeI1FB3nFwiBjPzQAwwVvYrua1ZA4FNAkvw&usqp=CAU" alt="MAPA" class="map"></figure>
            <div class="box-container">
                <div class="box">
                    <a href="https://wa.me/62600466"><img class="icon" src="https://www.pngkey.com/png/detail/770-7702598_download-whatsapp-icon-white-vector.png" alt="WHATSAPP"></a>
                    <h3>Whatsapp</h3>
                </div>
                   <div class="box">
                    <a href="https://www.facebook.com/?locale=es_LA"><img class="icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXRLyeXtog9plBuo7UCW8KU82zx7r1JY3DXA&usqp=CAU" alt="FACEBOOK"></a>
                    <h3>Facebook</h3>
                </div>
                   <div class="box">
<a href="https://www.instagram.com/chelo.abld/"><img class="icon" src="https://i.pinimg.com/564x/71/9b/3c/719b3cad44090bdce46a8c31f8dc6b85.jpg" alt="FACEBOOK"></a>
                    <h3>Instagram</h3>
                </div>
                                   <div class="box">
<a href="mailto:ariasbalderramamarcelo@pedropoveda.edu.bo"><img class="icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSip9dcAnk9Hw0PFkPx7nVktr4u5z00SfPMXQ&usqp=CAU" alt="FACEBOOK"></a>
                    <h3>G-Mail</h3>
                </div>
            </div>
            
            </section>
     
        <?php
        // put your code here
        ?>
    </body>
</html>
