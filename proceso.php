<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Turismo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <style>
       
       @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');
* {
    padding: 0;
    margin: 0;
    text-decoration: none;
    box-sizing: border-box;
   


}

header {

    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    position: sticky;
    top: 0;
    z-index: 100;
    width: 100%;
    min-width: 700px;
    padding: 5px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #039F6E;
}

.loba{
    position: absolute;
    top: 32px;
    right: 84%;
    height: 100px;
  

}

.loba h1 {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.logo{
    height: 100px;
    
   
    margin-left: 50px;
}
.cont-ul li a {
 color: #fff;


}
.cont-ul {
 right: 100px;
 display: flex;
 justify-content: space-between;
 align-items: center;
 align-items: center;
 margin-right: 50px;
 position: absolute;
}
.cont-ul   li {
    list-style: none;
    cursor: pointer;
    padding: 20px;
    transition: all 0.3s ease 0s;
  
}

header    li:hover{
    color: rgb(3, 53, 82);
}

.cont-ul    li:hover {
    background-color:#B3FADF;
}
.ul-second {
    display: none;
    position: absolute;
    transform: translateY(20px);
}
.ul-second > li{

border-bottom: solid 1px #fff;
text-align: center;
background-color: #039F6E;
padding: 20px;
width: 190px;
transform: translateX(-20px);
}
.ul-second > li:hover{
    background-color:#B3FADF;
}

.develop:hover > .ul-second {
    display: block;
}
.ul-third{
    position: absolute;
    transform: translateX(100%);
    right: 0;
    top: 40%;
    display: none;
    background-color: #B3FADF;
}

.ul-third > li {
    padding: 20px;
    border-bottom: solid 1px #fff;
}
.front:hover > .ul-third {
    display: block;
}








        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #039F6E;
            color: white;
        }

        /* Your additional styles */
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 800px;
            margin: 40px auto;
        }

        .image-container img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }



        .footerd{
  
  background-color: white;
  border: black 1px solid;
  position: relative;
  top: 100px;
  
}
/*:::::Pie de Pagina*/
.pie-pagina{
  width: 100%;
  background-color: #0a141d;
  
}

.box h2 {

  font-family: 'Open Sans', sans-serif;
}
.box p {
  font-family: 'Open Sans', sans-serif;
}
.pie-pagina .grupo-1{
  width: 100%;
  max-width: 1200px;
  margin: auto;
  display:grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap:50px;
  padding: 45px 0px;
}
.pie-pagina .grupo-1 .box figure{
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.pie-pagina .grupo-1 .box figure img{
  width: 250px;
}
.pie-pagina .grupo-1 .box h2{
  color: #fff;
  margin-bottom: 25px;
  font-size: 20px;
}
.pie-pagina .grupo-1 .box p{
  color: #efefef;
  margin-bottom: 10px;
}
.pie-pagina .grupo-1 .red-social a{
  display: inline-block;
  text-decoration: none;
  width: 45px;
  height: 45px;
  line-height: 45px;
  color: #fff;
  margin-right: 10px;
  background-color: #0d2033;
  text-align: center;
  transition: all 300ms ease;
}
.pie-pagina .grupo-1 .red-social a:hover{
  color: aqua;
}
.pie-pagina .grupo-2{
  background-color: #0a1a2a;
  padding: 15px 10px;
  text-align: center;
  color: #fff;
}
.pie-pagina .grupo-2 small{
  font-size: 15px;
}
@media screen and (max-width:800px){
  .pie-pagina .grupo-1{
      width: 90%;
      grid-template-columns: repeat(1, 1fr);
      grid-gap:30px;
      padding: 35px 0px;
  }
}
    </style>
</head>
<body>
      <!-- este es menu  -->
      <header>
   
   <a href="index.html"><img src="imagenes/logo3.png" class="logo"  ></a>

    
   <ul class="cont-ul">
       
   
       <li ><a href="index.html">INICIO</a></li>
       
       <li class="develop">
       <a href="">LUGARES</a>
           <ul class="ul-second">
               <li class="back" ><a href="aguaytia.html">AGUAYTIA</a> </li> 
               <li class="front"> <a href="puca.html">PUCALLPA</a>
                   
               </li>
               <li>  <a href="contamana.html">CONTAMANA</a></li>
           </ul>
       </li>
       <li> <a href="ubicacion.html">UBICACION</a></li>
       <li>  <a href="contacto.html">CONTACTO</a></li>
   </ul>
</header>
<!-- fin-->

    <div class="image-container">
        <img src="imagenes/loba.png" alt="Image" />
    </div>

    <table>
        <tr>
            <th colspan="2">Datos Enviados</th>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><?php echo $_POST['nombre']; ?></td>
        </tr>
        <tr>
            <td>horario:</td>
            <td><?php echo $_POST['horario']; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $_POST['email']; ?></td>
        </tr>
        <tr>
            <td>Mensaje:</td>
            <td><?php echo $_POST['mensaje']; ?></td>
        </tr>
    </table>

    <div class="footerd">
        <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="imagenes/logo3.png" alt="Logo de SLee Dw">
                        </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>SOBRE NOSOTROS</h2>
                    <p>
                        Loba Tours es una empresa de turismo con sede en UCAYALI.</p>
                    <p>Nuestro objetivo es ofrecer servicios turísticos de alta calidad y personalizados, adaptados a las necesidades y preferencias individuales de cada viajero.</p>
                  
                </div>
                <div class="box">
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </div>
                </div>
    
                
            </div>
            <div class="grupo-2">
                <small>&copy; 2024 <b>SLee Dw</b> <ul><li> kevin</li>
                <li>amarilis</li>
            aldair</ul></small>
            </div>
        </footer>
    </div>     
    











</body>
</html>
