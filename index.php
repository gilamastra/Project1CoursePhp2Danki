<?php include "./config.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>./css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css"
      integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA=="
      crossorigin="anonymous"
    />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <meta name="description" content="Descriçao do meu site" />
    <title>Projeto 01</title>
  </head>
  <body>
    <header>
      <div class="center">
        <div class="logo left">
          <a style="text-decoration: none; color: unset" href="./"
            >LogoMarca</a
          >
        </div>
        <nav class="desktop right">
          <ul>
            <li><a href="<?php echo INCLUDE_PATH; ?>/">Home</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">sobre</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>servicos">serviços</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>contato">contatos</a></li>
        
          </ul>
        </nav>
        <nav class="mobile right">
          <div class="botao-menu-mobile">
            <i class="fa fa-bars"></i>
          </div>
          <ul>
           <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">sobre</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>servicos">serviços</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>contato">contatos</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
    </header>


     <?php
     $url = isset($_GET["url"]) ? $_GET["url"] : "home";

     if (file_exists("pages/" . $url . ".php")) {
       include "pages/" . $url . ".php";
     } else {
       include "pages/404.php";
     }
     ?>
   

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
    ></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>



        <footer>
      <div class="center">
        <p>Todos os direitos reservados</p>
      </div>
    </footer>
  </body>
</html>
