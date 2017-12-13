<!doctype html>
<html>
<head>
  <title>Mas gestión </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style/estilo.css">
 
  </head>
<body>
 <div class="container">

  <?php include 'cabezera.html'; ?>
<div class="titu">
    <h2>Teléfono: 928 85 11 84</h2>
    </div>
   
<section class="conta">

  
  <div class="tab1">
    <h2>Puerto Del Rosario</h2>
    <p>Horario</p>
    <p> De 7:30h a 15:30 de Lunes a Viernes</p>
    <p>Dirección</p>
    <p>Hermanos Machado,22</p>
    <p>35600 Puerto Del Rosario</p>  
    <p>Teléfono:<span class="rojo2"> 928 85 11 84</span></p>
    <p>Fax: <span class="rojo2">928 53 22 82</span></p>
    <p>Correo Electronico</p>
    <p><a href="mailto:asesoria@max-gestion.com">asesoria@max-gestion.com</a></p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2084.9667452172666!2d-13.863489482654302!3d28.495138911035024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc47c635d6f623b7%3A0x15f3d0d3e3fad836!2sCalle+Hermanos+Machado%2C+22%2C+35600+Puerto+del+Rosario%2C+Las+Palmas!5e0!3m2!1ses!2ses!4v1493195294627"></iframe>
</div>
  <div class="tab1" id="tabe">
    <h2> Corralejo</h2>
    <p>Horario</p>
    <p> De 7:30h a 15:30 de Lunes a Viernes</p>
    <p>Dirección</p>
    <p>Calle Galicia, 33</p>
    <p>35660 Corralejo</p>    
    <p>Teléfono:<span class="rojo2"> 928 85 11 84</span></p>
    <p>Fax: <span class="rojo2">928 53 22 82</span></p>
    <p>Correo Electronico </p>
    <p><a href="mailto:asesoria@max-gestion.com">asesoria@max-gestion.com</a></p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1470.820519628654!2d-13.865606641506197!3d28.742834237488207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc4634ff0b02be9b%3A0x17fd652ca682eca4!2sCalle+Galicia%2C+33%2C+35660+Corralejo%2C+Las+Palmas!5e0!3m2!1ses!2ses!4v1497612352338"></iframe>
</div>
      
    
    


  <div class="tab2">
    <h2>Contacto</h2>
  <form action="sendbymail.php" method="post">
    <div>
        <label for="nombre">Nombre</label><br>
        <input class="empresa" type="text" name="nombre" />
    </div>
    <div>
    <div>
        <label for="empresa">Empresa</label><br>
        <input class="empresa" type="text" name="empresa"/>
    </div>
    <div>
        <label for="telefono">Numero de teléfono</label><br>
        <input class="empresa" type="text" name="telefono" />
    </div>
        <label for="email">E-mail:</label><br>
        <input class="empresa" type="text" name="email" placeholder="ejemplo@correo.com" />
    </div>

    <div>
        <label for="mensaje">Consulta</label><br>
        <textarea id="mensaje" name="mensaje"></textarea>
    <div class="button">
        <input id="submit" type="submit" name="submit" value="Enviar">  
</form>
</div>
 
</section>
<div class="final">
  <p><b>A los efectos de lo dispuesto en la Ley Orgánica 15/1999, de 13 de Diciembre, de Protección de Datos de Carácter Personal (L.O.P.D.), le informamos que para acceder a algunos de los servicios que a través de este sitio web ofrece max-gestion.com deberá proporcionarnos los datos de carácter personal que se indican. Le informamos que, mediante la cumplimentación del presente formulario, sus datos personales quedarán incorporados y serán tratados por MAXORATA DE GESTION Y ASESORAMIENTO, S.L., autorizando a esta sociedad para el tratamiento de dichos datos con el fin de poderle prestar y ofrecer nuestros servicios así como para atender sus consultas. Asismismo, le informamos de la posibilidad de que puede ejercitar los derechos de información, acceso, rectificación, cancelación y oposición de sus datos de carácter pesonal, garantizados por la legislación vigente, al responsable del tratamiento MAXORATA DE GESTIÓN Y ASESORAMIENTO, S.L., en la dirección correspondiente a la calle Hermanos Machado, número 22, código postal 35600, Puerto del Rosario - Fuerteventura - Las Palmas.</b></p></div>
<?php include 'footer.html'; ?>

</div>  

 </body> 

 </html>




