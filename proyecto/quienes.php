<!doctype html>
<html>
<head>
  <title>Mas gestión </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style/estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 


</head>
<body>
  <div class="container">

    <?php include 'cabezera.html'; ?>

    <section class="quien">

      <br><br><br><br>


      <div class="slider">
        <img class="mySlides" src="img\1.JPG">
        <img class="mySlides" src="img\02.JPG">
        <img class="mySlides" src="img\03.JPG">
        <img class="mySlides" src="img\04.JPG">.
        <img class="mySlides" src="img\05.JPG">
        <img class="mySlides" src="img\06.JPG">
        <img class="mySlides" src="img\07.JPG">
        <img class="mySlides" src="img\08.JPG">
        <img class="mySlides" src="img\09.JPG">
        <img class="mySlides" src="img\10.JPG">
        <img class="mySlides" src="img\11.JPG">
        <img class="mySlides" src="img\12.JPG">
      </div>

      <div class="ser">
        <h3>Servicios</h3>

        <br>
        <ol>
          <li>Asesoramiento fiscal.</li>
          <li>Asesoramiento jurídico.</li>
          <li>Asesoramiento contable mercantil.</li>
          <li>Asesoramiento laboral.</li>
          <li>Gestoría.</li>
        </ol>
      </div>

      <div class="todo">

        <h3>Todo ello avalado por</h3>
        <br>

        <ol>
          <li>Un equipo de profesionales, titulados y con dilatada experiencia en cada una de las ramas.</li>
          <li> Mas de 20 empleados.</li>
          <li> Veinticuatro años desarrollando nuestra actividad.</li>
          <li> Mas de quinientos clientes en toda la Isla.</li>
          <li> Respuestas inmediatas, en las relaciones con las instituciones y con la banca</li>
          <li> Oficinas en Puerto del Rosario y Corralejo.</li>
        </ol>
      </div>


    </section>


    <?php include 'footer.html'; ?>

  </div>
  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
     }
     myIndex++;
     if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

</body>
</html>



</div>
</body>

</html>


