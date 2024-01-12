<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
    padding: 0;
    margin: 0;
    text-decoration: none;
    box-sizing: border-box;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

    
}

header{
    position: fixed;
 
    width: 100%;
    min-width: 700px;
    padding: 5px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:#039F6E;
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

</style>
<body>
    
    <header>
   
        <img src="imagenes/logo3.png" class="logo">
       <ul class="cont-ul">
           
       
           <li ><a href="index.html">INICIO</a></li>
           
           <li class="develop">
               LUGARES
               <ul class="ul-second">
                   <li class="back">AGUATYA</li>
                   <li class="front"> <a href="puca.html">PUCALLPA</a>
                       
                   </li>
                   <li>CONTAMANA</li>
               </ul>
           </li>
           <li>UBICACION</li>
           <li>  <a href="contacto.html">CONTACTO</a></li>
       </ul>
   </header>
</body>
</html>