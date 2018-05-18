
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Atelier Bonome</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="../../js/jquery-3.3.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="../../css/style.css" />

</head>
<html>
<body>

  <header>
    <main class="main">

      <nav id="mainNav">
        <a class="" href="../index.php">Projets</a>|
        <a class="js-scrollTo" href="#page-one">Présentation Bonome</a>|
        <a class="js-scrollTo" href="#page-two">Compétences</a>|
        <a class="js-scrollTo" href="#page-three">Contact</a>|

     

      </nav>
    </header>

    <!--PRESENTATION ATELIER-->
    <div id="page-one">
      <h2>Présentation Bonome</h2>


<div class="flexContainer flexSpaceAround">
    <div class="col">
       <h1>Aubin</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem soluta eius, excepturi neque laboriosam, laudantium cumque iste deleniti aut numquam sed quasi error suscipit dolore aperiam deserunt est aspernatur architecto?               </div>
    <div class="col">
       <h1>François</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nam eligendi labore, autem consequuntur delectus sapiente, omnis sit rem, laudantium sint necessitatibus error repellendus ipsum non illo! Id, culpa, doloribus!  </div>
  

</div>

<div class="flexContainer flexSpaceAround">
    <div class="col">
       <h1>BLABLA</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem soluta eius, excepturi neque laboriosam, laudantium cumque iste deleniti aut numquam sed quasi error suscipit dolore aperiam deserunt est aspernatur architecto?               </div>
    <div class="col">
       <h1>BLiBLi</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nam eligendi labore, autem consequuntur delectus sapiente, omnis sit rem, laudantium sint necessitatibus error repellendus ipsum non illo! Id, culpa, doloribus!   </div>           

    <div class="col">
       <h1>BLuBLu</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nam eligendi labore, autem consequuntur delectus sapiente, omnis sit rem, laudantium sint necessitatibus error repellendus ipsum non illo! Id, culpa, doloribus!              </div>

  <div class="col">
       <h1>BLoBLo</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nam eligendi labore, autem consequuntur delectus sapiente, omnis sit rem, laudantium sint necessitatibus error repellendus ipsum non illo! Id, culpa, doloribus!              </div>
  

  

</div>

 <div class="arrow"> <a i class="fa fa-arrow-down fa-2x js-scrollTo" href="#page-two"></a> </div>

    </div>
    <!--/PRESENTATIONS ATELIER-->




    <!--PRESENTATION COMPETENCES-->
    <div id="page-two">
      <h2>Compétences</h2>



<div class="flexContainer flexSpaceAround">
    <div class="col">
       <h1>Architecture</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem soluta eius, excepturi neque laboriosam, laudantium cumque iste deleniti aut numquam sed quasi error suscipit dolore aperiam deserunt est aspernatur architecto?               </div>
    <div class="col">
       <h1>Design</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nam eligendi labore, autem consequuntur delectus sapiente, omnis sit rem, laudantium sint necessitatibus error repellendus ipsum non illo! Id, culpa, doloribus!              </div>
    <div class="col">
        <h1>Graphisme</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel sunt consequatur doloribus, sequi commodi id quia culpa voluptate qui nisi, nesciunt tenetur fuga molestias odio. Sapiente repellendus tempore, commodi veritatis?            </div>
</div>


<div class="arrow bounce">
  <a class="fa fa-arrow-down fa-2x js-scrollTo" href="#page-three"></a>
</div>

    </div>
    <!--/PRESENTATION COMPETENCES-->

    <!--FORMULAIRE DE CONTACT-->
    <div id="page-three">
      <h2>Contact</h2>
    
      <div id="wrapper">

      <div class="contactform" id="down">
        <div class="formulaire">

          <h2>Une idée, un projet en tête, une rencontre ? N'hésitez pas...</h2>

          <div id="form_contact">
            <form action="process.php" id="contact" method="POST">
              <p>
                <label for="nom" class="nom">Nom</label>
                <br /><input id="nom" name="nom" type="text" size="80">
                <span id="msg_nom"></span>
              </p>
              <p>
                <label for="sujet" class="sujet">Sujet</label>
                <br /><input id="sujet" name="sujet" type="text" size="80">
                <span id="msg_sujet"></span>
              </p>
              <p>
                <label for="email">Email</label>
                <br /><input id="email" name="email" type="email" size="80">
                <span id="msg_email"></span>
              </p>
              <p>
                <label for="message">Message</label>
                <br /><textarea id="message" name="message" rows="10" cols="80"></textarea>
                <span id="msg_message"></span>
              </p>
              <p>
                <input type="submit" value="Envoyer" style="" />
              </p>
            </form>
            <span id="msg_all"></span>
          </div>

        </div>
      </div>
    </div>


    <!--/FORMULAIRE DE CONTACT-->

  </main>
  <script src="../../js/presentation.js"></script>
  <script src="../../js/masonry.pkgd.min.js"></script>



</body>
</html>





