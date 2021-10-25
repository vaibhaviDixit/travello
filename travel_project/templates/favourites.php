  <?php

        include 'user_header.php';

        $active='add';

    ?>



<div class="container-fluid mt-5 pt-5" >


    <section class="packages" id="packages">
<h1 class="heading">      
  <span>M</span>
  <span>y</span>
  &nbsp;&nbsp;&nbsp;
  <span>F</span>
  <span>a</span>
  <span>v</span>
  <span>o</span>
   <span>r</span>
    <span>i</span>
     <span>t</span>
      <span>e</span>
       <span>s</span>

  <br/><br/>
</h1>

<div class="box-container">
  <?php


      foreach ($favArray as $key => $value) {

        $pckgId=$value['pckgId'];
        // pra($favArray);


            $packages=mysqli_query($con,"select * from package where id='$pckgId' ");

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
                  <div class="price">&#8377; <?php  echo $pckgRow['packagePrice']; ?><span style="font-size: .4rem;color:gray;">/person /night</span> </div>
                  <div class="view-like">
                    <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
                    <div class="like-wrapper">
                      <a href="javascript:void(0);" data-id="<?php echo $pckgRow['id'] ?> " class="like-button <?php

                        foreach ($favArray as $key => $value) {

                           $pckgId=$value['pckgId'];
                           if($pckgRow['id']==$pckgId){ echo "is-active"; $active='remove'; }
                           
                        }

                        ?>" onclick="manageFav('<?php echo $pckgRow['id']; ?>','<?php echo $active; ?>')" >
                        <i class="material-icons not-liked bouncy">favorite_border</i>
                        <i class="material-icons is-liked bouncy">favorite</i>
                        <span class="like-overlay"></span>
                      </a>
                  </div>
                  </div>
                 <a href="destination-details.php#book"><button class="book-btn">Book Now</button></a>
              </div>
          </div>
          <!-- box ends -->

          <?php

              }
            }
          }
           ?>
</div>

</section>
      <?php

        include 'user_footer.php';

    ?>