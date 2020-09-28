<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
  <div class="logo">Re-Read</div>



<div class="header">
  <h1>Re-Read</h1>
  <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
</div>



<div class="row">
  
  <div class="column left">
    <div class="topnav">
      <a href="../index.php">Re-Read</a>
      <a href="libros.php">Libros</a>
      <a href="ebooks.php">eBooks</a>
    </div>
    <h3>Toda la actualidad en eBook</h3>
    <!-- ebookscon descripcion -->
  
    <!-- <div class="ebook"> 
      <a href="https://play.google.com/store/books/details?id=wggTm95cqgcC&rdid=book-wggTm95cqgcC&rdot=1&source=gbs_vpt_read&pcampaignid=books_booksearch_viewport"><img src="../img/ebook_1.jpeg" alt="ebook 1"></a>
      <div>A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div>
    </div> -->
    <?php
    // 1. Conexion con base de datos
    include "../services/connection.php";

    // 2. Seleccion y muestra de los datos de la base de  datos
    $result = mysqli_query($conn, "SELECT Books.Description, Books.img, Books.Title FROM Books WHERE eBook != '0'");
    if (true){
      // datos de salida de cada fila (fila =row)
      while ($row = mysqli_fetch_array($result)) {
        echo "<div class='ebook'>";
        // Añadimos ala imagen a la paguina con la etiqueta img de HTML
        echo "<img src=../img/".$row['img']." alt='".$row['Title']."'>";
        // Añadimos el titulo a la pagina con la etiqueta h2 de HTML
        // echo "<div class='desc'".$row['Title']."</div>";
        echo "</div>";
      }
    }else{
      echo "0 resultados";
    }
    ?>
  </div>
  
  <div class="column right">
    <h2>Side</h2>
    <p>Cien años de soledad.</p>
    <p>Crónica de una muerte anunciada.</p>
    <p>El otoño del patriarca.</p>
    <p>El general en su laberinto.</p>
  </div>
</div>
  
</body>
</html>
