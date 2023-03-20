<?php
include("header.php");
?>


<body >
    
        <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active p-3">
            <img src="mus1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="mus2.jpg" class="d-block w-100" alt="there's a image">
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>      

<div id="column">
        <div class="container overflow-hidden text-center" >
            <div class="row gy-5">
              <div class="col-6">
              <img src="mus3.jpg"" alt="there's a image">
                <div class="p-3"><audio controls autoplay>
        <source src="todh.mp3" type="audio/mpeg">
    </audio><br>Todh-prince narula</div>
              </div>
              <div class="col-6">
                <div class="p-3">
                <img src="mus4.jpg"alt="there's a image">    
                <audio controls autoplay>
        <source src="chandlier.mp3"  type="audio/mpeg">
    </audio><br>Sia</div>
              </div>
              <div class="col-6">
                <div class="p-3">
                <img src="mus5.jpg"alt="there's a image">     
                <audio controls autoplay>
        <source src="players.mp3" type="audio/mpeg">
    </audio><br>Baadsha/karan aujla</div>
              </div>
              <div class="col-6">
                <div class="p-3">
                <img src="mus6.jpg"alt="there's a image">    
                <audio controls autoplay>
        <source src="bolbol.mp3" type="audio/mpeg">
    </audio><br>sharuk khan</div>
              </div>
            </div>
          </div>
</div>
    </body>



<?php

include("footer.php");
      
?>