<?php

ob_start();

?>
    <!--PAGE PROJET-->

    <h1>Projets Bonome</h1>

<div class="masonry">
    <div class="masonry-item">
<div class="overlay-image">
 <a href="URL_LIEN">
  <img class="image" src="img/fake-meubles/resize/medium/1.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Description image 1</div>
  </div>
 </a>
</div>
 </div>


    <div class="masonry-item">
<div class="overlay-image">
 <a href="#">
  <img class="image" src="img/fake-meubles/resize/medium/2.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Description image 2</div>
  </div>
 </a>
</div>
 </div>

     <div class="masonry-item">
<div class="overlay-image">
 <a href="URL_LIEN">
  <img class="image" src="img/fake-meubles/resize/medium/3.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Description image 3</div>
  </div>
 </a>
</div>
 </div>

      <div class="masonry-item">
<div class="overlay-image">
 <a href="URL_LIEN">
  <img class="image" src="img/fake-meubles/resize/medium/4.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Description image 4</div>
  </div>
 </a>
</div>
 </div>

      <div class="masonry-item">
<div class="overlay-image">
 <a href="URL_LIEN">
  <img class="image" src="img/fake-meubles/resize/medium/5.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Description image 5</div>
  </div>
 </a>
</div>
 </div>

      <div class="masonry-item">
<div class="overlay-image">
 <a href="URL_LIEN">
  <img class="image" src="img/fake-meubles/resize/medium/6.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Description image 6</div>
  </div>
 </a>
</div>
 </div>

      <div class="masonry-item">
<div class="overlay-image">
 <a href="URL_LIEN">
  <img class="image" src="img/fake-meubles/resize/medium/7.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Description image 7</div>
  </div>
 </a>
</div>
 </div>

      <div class="masonry-item">
<div class="overlay-image">
 <a href="URL_LIEN">
  <img class="image" src="img/fake-meubles/resize/medium/8.jpg" alt="Alt text" />
  <div class="normal">
   <div class="text"></div>
  </div>
  <div class="hover">
   <div class="text">Description image 8</div>
  </div>
 </a>
</div>
 </div>




 </div>




   <!--/PAGE PROJET-->

<?php

$content = ob_get_clean();

require __DIR__.'/layout-main.php';
