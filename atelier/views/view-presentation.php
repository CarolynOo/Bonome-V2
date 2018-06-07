
<!DOCTYPE html>
<html lang="fr">
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
<body>

  <header>
      <nav id="mainNav">
      <a class="" href="../index.php">Projets</a>
      <a class="js-scrollTo" href="#page-one">Présentation Bonome</a>
      <a class="js-scrollTo" href="#page-two">Compétences</a>
      <a class="js-scrollTo" href="#page-three">Contact</a>
    </nav>
  </header>

  <!--PRESENTATION ATELIER-->

  <main class="main">

    <div id="page-one">
      <h3>Présentation Bonome</h3>
        <div class="flexContainer">
          <div class="boys">
          <img src="../../img/aubin.png" alt="aubin">
          <h2>Aubin</h2>
        </div>

        <div class="presentation">
          <p>Né de l’association de deux personnes aux sensibilités différentes, Bonome tire partie des différentes natures complémentaires de
            ses créateurs.
            <br><br>
            Forts de leurs différentes expériences acquises, ces deux là ont décidé d'allier leurs compétences pour proposer leur propre vision
            de l'architecture et du design, une alternative vouée à accompagner le client dans la réalisation de son idée, d'une simple envie à
          un projet abouti. </p> 
          
        </div>
        <div class="boys">
          <img  src="../../img/francois.png" alt="francois">
          <h2>François</h2>
        </div>
        </div>


      <div class="flexContainer">
        <div class="adjectif">
          <img src="../../img/curieux.png" alt="curieux">
          <h2>Curieux</h2>
          <p>Il sait écouter pour mieux concrétiser vos envies.</p>
        </div>

          <div class="adjectif">
           <img src="../../img/inventif.png" alt="inventif">
           <h2>Inventif</h2>
           <p>Il saura allier simplicité et technicité dans
           des projets au plus proche de l'utilisateur.</p>
         </div>           

           <div class="adjectif">
             <img src="../../img/consciencieux.png" alt="consciencieux">
             <h2>Consciencieux</h2>
             <p>Il vous accompagnera tout au long de vos projets,
             vous apportant conseil et créativité.</p>
           </div>

             <div class="adjectif">
              <img src="../../img/multiple.png" alt="multiple">
              <h2>Multiple</h2>
              <p>Fort des compétences de ses deux fondateurs: Aubin et François</p>
            </div>
            
            </div>
            <div class="arrow"><a i class="fa fa-arrow-down fa-2x js-scrollTo" href="#page-two"></a> </div>

          </div>


          <!--/PRESENTATIONS ATELIER-->




          <!--PRESENTATION COMPETENCES-->
          <div id="page-two">

            <h3>Compétences</h3>
            

            <div class="flexContainer">

              <div class="competence">
                <img src="../../img/archi.png" alt="archi">
                <h2>Architecture</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quia quod iste cumque debitis numquam saepe, veniam error. Perferendis nulla nam alias id minus iure optio error voluptatem accusantium facilis!</p>
              </div>

              <div class="competence">
               <img src="../../img/design.png" alt="design">
               <h2>Design</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste debitis distinctio expedita officia a quo repellendus, omnis accusamus, maxime consequatur illum. Laudantium nesciunt quas numquam? Natus doloremque libero excepturi iusto!</p>
             </div>

             <div class="competence">
               <img src="../../img/graphisme.png" alt="graphisme">
               <h2>Graphisme</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut dicta iste officiis debitis eveniet iusto sapiente, exercitationem, a, labore, aperiam vero repellat soluta ullam vel excepturi sit ducimus minima?</p>
             </div>
           </div>


           <div class="arrow">
            <a class="fa fa-arrow-down fa-2x js-scrollTo" href="#page-three"></a>
          </div>

        </div>
        <!--/PRESENTATION COMPETENCES-->

        <!--FORMULAIRE DE CONTACT-->
        <div id="page-three">
          <h3>Contact</h3>
          <div class="flexformulaire">
           
<div class="question">

         
             <p>Une idée, un projet en tête, une rencontre ? N'hésitez pas...</p>

             </div>
         
   <div class="formulaire">
           <div id="wrapper">
            <div class="contactform" id="down">
           
                <div id="form_contact">
                  <form action="#" id="contact" method="POST">
                    <p>
                      <label for="nom" class="nom">Nom</label>
                      <br /><input id="nom" name="nom" type="text" size="80">
                      <span id="msg_nom"></span>
                    </p>
                    <p>
                      <label for="sujet" class="sujet">Sujet</label>
                      <br /><input id="sujet" name="sujet" type="text" size="280">
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

<div class="arrow">
            <a class="fa fa-arrow-up fa-2x js-scrollTo" href="#page-one"></a>
          </div>

                </div>
                
               

            </div>
          </div>
          <div>
        </div>
        </div>

        
      </div>
 </main>




    <!--/FORMULAIRE DE CONTACT-->


    <script src="../../js/presentation.js"></script>
    <script src="../../js/masonry.pkgd.min.js"></script>

  </body>

  </html>




