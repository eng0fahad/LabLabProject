<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>lab</title>
  <link rel="stylesheet" href="./src/css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="./src/js/jq.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
</head>

<body>
  <header>
    <a href="index.html">Al-jouf AI</a>
  </header>

  <main>
    <section class="fristSection">
      <div class="startBtn start"><i class="fa-solid fa-play"></i></div>
    </section>
    <div class="textArea" id="title">
      <?php
          echo "<h1>".$_GET['contant'] ."</h1>";
          ?>
    </div>
    <div class="textArea" id="textArea"></div>
    <script src="./src/js/detailsScript.js"></script>
  </main>
  <footer></footer>
</body>

</html>