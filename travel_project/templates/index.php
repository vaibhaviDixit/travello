  <?php
        ob_start();
        include 'user_header.php';

    ?>


    <section id="home" class="home">
      <div class="search-box">
        <button class="btn-search"><i class="fa fa-search"></i></button>
        <input type="text" class="input-search" placeholder="Type to Search...">
      </div>
    
        <div class="swiper-container">

        <!-- swiper slides -->
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background:linear-gradient(50deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.6));">
              <div class="video-container">
                <video src="..\asset\img_user\vid-1.mp4" id="video-slider" loop autoplay muted></video>
              </div>
                <div class="headline">
                  <h1>Adventure is Worthwhile</h1>
                  <p>Dicover new places with us, Adventure awaits</p>
                  <a href="#packages" class="discover-btn">discover more</a>
                </div>
                    
            </div>
            
            <div class="swiper-slide" style="background:linear-gradient(50deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.6));">
              <div class="video-container">
                <video src="..\asset\img_user\vid-2.mp4" id="video-slider" loop autoplay muted></video>
              </div>
                <div class="headline">
                  <h1>Adventure is Worthwhile</h1>
                  <p class="tagline">Dicover new places with us, Adventure awaits</p>
                  <a href="#packages" class="discover-btn">discover more</a>
                </div>
                    
            </div>
            <div class="swiper-slide" style="background:linear-gradient(50deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.6));">
              <div class="video-container">
                <video src="..\asset\img_user\vid-3.mp4" id="video-slider" loop autoplay muted></video>
              </div>
                <div class="headline">
                  <h1>Adventure is Worthwhile</h1>
                  <p>Dicover new places with us, Adventure awaits</p>
                  <a href="#packages" class="discover-btn">discover more</a>
                 </div>
                    
            </div>
            <div class="swiper-slide" style="background:linear-gradient(50deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.6));">
              <div class="video-container">
                <video src="..\asset\img_user\vid-4.mp4" id="video-slider" loop autoplay muted></video>
              </div>
                <div class="headline">
                  <h1>Adventure is Worthwhile</h1>
                  <p>Dicover new places with us, Adventure awaits</p>
                  <a href="#packages" class="discover-btn">discover more</a>
                    </div>
                    
            </div>
            <div class="swiper-slide" style="background:linear-gradient(50deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.6));">
              <div class="video-container">
                <video src="..\asset\img_user\vid-5.mp4" id="video-slider" loop autoplay muted></video>
              </div>
                <div class="headline">
                  <h1>Adventure is Worthwhile</h1>
                  <p>Dicover new places with us, Adventure awaits</p>
                  <a href="#packages" class="discover-btn">discover more</a>
                  </div>     
            </div>
     </div>
        <!-- !swiper slides -->
        <!-- next / prev arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      
    </div>
    <!-- partial -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js'></script><script  src="..\asset\js_user\script.js"></script>
  </section>


<?php
  
  //store recently viewed data in cookie and fetch if it is present in cookie

    if(isset($_COOKIE['recentlyViewed'])){
      ?>
<section class="recently-viewed">
  <br>
  <div class="heading text-center">    
    <span>R</span><span>e</span><span>c</span><span>e</span><span>n</span><span>t</span><span>l</span><span>y</span>
    &nbsp; &nbsp;<span>V</span><span>i</span><span>e</span><span>w</span><span>e</span><span>d</span>
  </div>
  <div class="viewed-box">
      <?php

       $rcarr=unserialize($_COOKIE['recentlyViewed']);
      $countRc=count($rcarr);
      $countSt=$countRc-4;
      if($countRc>4){
        $rcarr=array_slice($rcarr, $countSt,$countRc);
      }
     

      

      foreach ($rcarr as $key => $value) {
        
      $rec=mysqli_query($con,"select * from package where id='$value' ");

             if(mysqli_num_rows($rec)>0){
               while ($rcPckg=mysqli_fetch_assoc($rec)) {

?>


  <!-- <h2>Recently Viewed</h2> -->
  
    <div class="view-items">
      <img src="<?php echo SITE_PACKAGE_IMAGE.$rcPckg['packagePhoto'];  ?>" href="#"> 
      <div class="item-details">
        <h4><i id="map" class="fa fa-map-marker"></i>  <?php  echo $rcPckg['packageName']; ?>  </h4>
          <div class="stars">
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="price">&#8377; <?php  echo $rcPckg['packagePrice']; ?><span style="font-size: .4rem;color:gray;">/person /night</span></div>   
        <div style="margin-top: 1rem;"> <a class="book-btn" href="destination-details.php?id=<?php echo $rcPckg['id'];  ?>">Book Now</a> </div>
      
    </div>
    
 </div>


<?php 

  }
}
}
?>
</div>
</section>
<?php
}

?>


<!-- packages section starts  -->
<section class="packages" id="packages">

  <br/><br/>

  <h1 class="heading"> 
  <?php

    $cate=mysqli_query($con,"select * from category where status =1");
    if(mysqli_num_rows($cate)>0){
      while ($cateRow=mysqli_fetch_assoc($cate)) {

        $cateName=$cateRow['name'];
        $catId=$cateRow['id'];
            for ($i=0; $i <strlen($cateName); $i++) {
                if($cateName[$i]==" "){
                  echo "&nbsp;";
                } 
                else{

                 echo "<span>".$cateName[$i]."</span>"; 
                }
              }
            ?>
             <div class="box-container">
            <?php

            $packages=mysqli_query($con,"select * from package where packageType='$catId' ");

             if(mysqli_num_rows($packages)>0){
               while ($pckgRow=mysqli_fetch_assoc($packages)) {
                ?>
               
          <div class="box">
             <img src="<?php echo SITE_PACKAGE_IMAGE.$pckgRow['packagePhoto'];  ?>" alt="">
              <div class="content">
                  <h4><i id="map" class="fa fa-map-marker"></i> <?php  echo $pckgRow['packageName']; ?> </h4>
                  <p><?php  echo $pckgRow['packageDesc']; ?></p>
                  <div class="stars">
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star "></i>
                      <i class="fa fa-star "></i>
                  </div>
                  <div class="price">&#8377; <?php  echo $pckgRow['packagePrice']; ?><span style="font-size: .4rem;color:gray;">/person /night</span></div>
                  <div class="view-like">
                    <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
                    <div class="like-wrapper">
                      <a href="javascript:void(0);" class="like-button <?php
                        foreach ($favArray as $key => $value) {

                           $pckgId=$value['pckgId'];
                           if($pckgRow['id']==$pckgId){ echo "is-active"; }
                        }

                        ?>" onclick="manageFav('<?php echo $pckgRow['id']; ?>','add')" >
                        <i class="material-icons not-liked bouncy">favorite_border</i>
                        <i class="material-icons is-liked bouncy">favorite</i>
                        <span class="like-overlay"></span>
                      </a>
                  </div>
                  </div>
                  <?php 
                      if(isset($_SESSION['CURRENT_USER_ID'])){
                  ?>
                   
                      <?php
                    }
                    else{
                      ?>
                       <a href="login.php"><button class="book-btn">Book Now</button></a>
                      <?php
                    }
                  ?>
                 
              </div>
          </div>
          <!-- box ends -->

          <?php
      
                }
                
                ?>
          <!-- box container ends -->
         <div class="view-more"><a class="view-more-btn" href="viewmore.php">View More</a></div>

          <?php
            }
            else{
              echo "<br/>Data not found!<br/><br/>";
            }

          ?>

          </div>
         

      <?php
      

      }
    }
  ?>  




  

</section>

<!-- packages section ends -->

<section class="services" id="services">
  <div class="heading">
      <span>s</span>
      <span>e</span>
      <span>r</span>
      <span>v</span>
      <span>i</span>
      <span>c</span>
      <span>e</span>
      <span>s</span>
  </div>

  <div class="box-container">
      <div class="box">
          <img src="..\asset\img_user\s1.png">
          <h3>Affordable Hotels</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
      </div>
      <div class="box">
        <img src="..\asset\img_user\s2.png">
          <h3>Food and Drinks</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
      </div>
      <div class="box">
        <img src="..\asset\img_user\s3.png">
          <h3>Safty Guide</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
      </div>
      <div class="box">
          <img src="..\asset\img_user\s4.png">
          <h3>Around the World</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
      </div>
      <div class="box">
        <img src="..\asset\img_user\s5.png">
          <h3>Fastest Travel</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
      </div>
      <div class="box">
        <img src="..\asset\img_user\s6.png">
          <h3>Adventures</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
      </div>

  </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="offers" id="offers">

  <div class="heading">
      <span>E</span>
      <span>x</span>
      <span>c</span>
      <span>l</span>
      <span>u</span>
      <span>s</span>
      <span>i</span>
      <span>v</span>
      <span>e</span>
      <span class="space"></span>
      <span>d</span>
      <span>e</span>
      <span>a</span>
      <span>l</span>
      <span>s</span>
  </div>
  <p id="o">Checkout for the best discounts and deals here</p>
  <div class="o-card">
    <div class="offer">
      <h4>Get Upto 5% Cashback when you complete an experience</h4>
      <p id="coupon"><i id="c-icon" class="fa fa-ticket"></i>Coupon Code: 2EFDFD</p>
   </div>
  <div class="offer">
      <h4>Book any Experience and Get 30% off + 20% Off</h4>
      <p id="coupon"><i id="c-icon" class="fa fa-ticket"></i>Coupon Code: A2FDFD</p>
  </div>
  <div class="offer">
    <h4>Book any Experience and Get 30% off + 20% Off</h4>
    <p id="coupon"><i id="c-icon" class="fa fa-ticket"></i>Coupon Code: A2FDFD</p>
</div>
<div class="offer">
  <h4>Book any Experience and Get 30% off + 20% Off</h4>
  <p id="coupon"><i id="c-icon" class="fa fa-ticket"></i>Coupon Code: A2FDFD</p>
</div>
</div>
  
         
   
</section>

<!-- gallery section ends -->
<section class="review" id="review">

  <div class="heading">
      <span>T</span>
      <span>E</span>
      <span>S</span>
      <span>T</span>
      <span>I</span>
      <span>M</span>
      <span>O</span>
      <span>N</span>
      <span>I</span>
      <span>A</span>
      <span>L</span>
      <span>S</span>
  </div>
  <div class="container">

    <div class="row">
      <?php 
        $reviews=mysqli_query($con,"select reviews.*, user.* from reviews,user ");

        while($ratings=mysqli_fetch_assoc($reviews)){
              
          ?>

      <!-- card starts -->
      <div class="col-sm-12">
        <div  id="customers-testimonials" class="owl-carousel">     
          <div class="item">
            <div class="shadow-effect">
                <img class="img-circle" src="..\asset\img_user\pic2.png" alt="">
                <h4 class="testimonial-name"><?php echo $ratings['name']; ?></h4>
                <div>
                <?php 
                  $st=intval($ratings['stars']);
                  for ($i=0; $i < $st; $i++) { 
                    echo "<i class='fas fa-star' style='color:orange;'></i>";
                  }
                  $gray=5-$st;
                  for($j=0;$j<$gray;$j++){
                    echo "<i class='fas fa-star' style='color:gray;'></i>";
                  }
                ?>
              </div>
                <p><i class="fa fa-quote-left"></i><?php echo $ratings['description']; ?></p> 
            </div>
          </div>

        </div>
      </div>
      <!-- card ends -->

      <?php
       }

      ?>


    </div>
 </div>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script><script  src="..\asset\js_user\script.js"></script>
  
  </section>
  <section class="about" id="about">

    <div class="heading">
        <span>A</span>
        <span>b</span>
        <span>o</span>
        <span>u</span>
        <span>t</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
    </div>
    <p class="about-us">
      From 2012 to 2017, Our leadership team worked with many corporates, colleges, schools and institutions to organise adventure group trips and in these 6 years we understood HOTELS are old and unconventional and people are looking for more experimental places to spend their vacations but hard to discover.
    <br/><br/>After intensive ground work for more than 2 years, we discovered a lot of Camping Sites, Igloos, Homestays, Cottages exist at most uncrowded and virgin destinations , which can't be discovered if you have never been there. We thought to make these stays available by making it more organised keeping in mind amenities, safety and cleanliness.</p>
    <h2>Things we offer to our Customers</h2>
    <div class="features">
      <div class="card">
        <img src="..\asset\img_user\t-f1.png">
        <p>Unique Stays</p>
        
      </div>
      <div class="card">
       <img src="..\asset\img_user\t-f2.png">
       <p>Adventure Sports</p>    
     </div> 
     <div class="card">
        <img src="..\asset\img_user\f3.png">
        <p>Lowest Prices</p>
      </div>
      <div class="card">
        <img src="..\asset\img_user\f4.png">
        <p>Verified and Safe</p>
      </div>
      <div class="card">
        <img src="..\asset\img_user\f5.png">
        <p>24 x 7 Support</p>
      </div>
    </div>
    </section>
    




<?php

include 'user_footer.php';
ob_flush();

?>



