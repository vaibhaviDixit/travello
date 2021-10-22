<?php

include 'top.php';
?>
<head>
<link rel="stylesheet" href="..\..\asset\css_user\bootstrap.min.css">
<!-- <link rel="stylesheet" href="..\..\asset\css_user\style.css">
 <link rel="stylesheet" href="..\..\asset\css_user\destination-details-css.css"/> -->

 </head>
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
                    <!-- <a class="view-details" href=".destination-details.php"><i class="fa fa-eye"></i> View Details</a> -->
                    <!-- <div class="like-wrapper">
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
                  </div> -->
                  </div>
                 <a href="destination-details.php?id=<?php echo $pckgRow['id'];  ?>"><button class="book-btn">Book Now</button></a>
              </div>
          </div>
          <!-- box ends -->

          <?php
      
                }
                
                ?>
          <!-- box container ends -->
         <!-- <div class="view-more"><a class="view-more-btn" href="viewmore.php">View More</a></div> -->

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