<?php

ob_start();

?>
    <!--PAGE PROJET-->

    <h1>Projets Bonome</h1>

<div class="masonry">
    <div class="masonry-item">
<div class="overlay-image">
 <a href="projets/?id=1">
  <img class="image" src="../img/amis01.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Atelier Des Amis</div>
  </div>
 </a>
</div>
 </div>


    <div class="masonry-item">
<div class="overlay-image">
  <a href="projets/?id=2">
  <img class="image" src="../img/dior01.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Dior</div>
  </div>
 </a>
</div>
 </div>

     <div class="masonry-item">
<div class="overlay-image">
  <a href="projets/?id=3">
  <img class="image" src="../img/eclaireur03.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Eclaireur</div>
  </div>
 </a>
</div>
 </div>

      <div class="masonry-item">
<div class="overlay-image">
 <a href="projets/?id=7">
  <img class="image" src="../img/affiche01.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Affiche</div>
  </div>
 </a>
</div>
 </div>

      <div class="masonry-item">
<div class="overlay-image">
 <a href="projets/?id=5">
  <img class="image" src="../img/richard01.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Richard</div>
  </div>
 </a>
</div>
 </div>

      <div class="masonry-item">
<div class="overlay-image">
 <a href="projets/?id=6">
  <img class="image" src="../img/woody12.png" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Woody</div>
  </div>
 </a>
</div>
 </div>

      <div class="masonry-item">
<div class="overlay-image">
 <a href="projets/?id=4">
  <img class="image" src="../img/gru01.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Gru</div>
  </div>
 </a>
</div>
 </div>

      <div class="masonry-item">
<div class="overlay-image">
 <a href="projets/?id=8">
  <img class="image" src="../img/bocal01.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Bocal</div>
  </div>
 </a>
</div>
 </div>

  <div class="masonry-item">
<div class="overlay-image">
 <a href="projets/?id=9">
  <img class="image" src="../img/bonome01.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Bonome</div>
  </div>
 </a>
</div>
 </div>


 </div>




   <!--/PAGE PROJET-->

<?php

$content = ob_get_clean();

require __DIR__.'/layout-main.php';
