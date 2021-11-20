<?php
  
  include 'user_header.php';
  if(isset($_GET['id'])){
    $id=getSafeVal($_GET['id']);
  }
  else{
    redirect(SITE_PATH);
  }
?>
<div class="mt-5 pt-4">
<section class="packages mt-3" id="packages">
   <?php
            $packages=mysqli_query($con,"select package.*,category.name from package,category where package.packageType=category.id and package.packageType=$id;");

             if(mysqli_num_rows($packages)>0){
                $r=mysqli_fetch_assoc($packages);
                $cateName=$r['name'];
                echo "<h1 class='heading'><span class='bullet'>".$cateName."</span></h1>";

            ?>
   <div class="box-container mt-5">
          <?php
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
                    <a class="view-details" href="<?php echo SITE_PATH.'templates/'; ?>viewDetails/<?php echo $pckgRow['id'];  ?>"><i class="fa fa-eye"></i> View Details</a>
                    <div class="like-wrapper">
                      <a href="javascript:void(0);" class="like-button <?php
                        $active='add';
                        foreach ($favArray as $key => $value) {

                           $pckgId=$value['pckgId'];
                           if($pckgRow['id']==$pckgId){ echo "is-active"; $active='remove'; }else{$active='add';}
                        }

                        ?>" onclick="manageFav('<?php echo $pckgRow['id']; ?>','<?php echo $active; ?>')" >
                        <i class="material-icons not-liked bouncy">favorite_border</i>
                        <i class="material-icons is-liked bouncy">favorite</i>
                        <span class="like-overlay"></span>
                      </a>
                  </div>
                  </div>
                  <?php 
                      if(isset($_SESSION['CURRENT_USER_ID'])){
                  ?>
                  <a href="<?php echo SITE_PATH.'templates/'; ?>bookTour/<?php echo $pckgRow['id'];  ?>"><button class="book-btn">Book Now</button></a>
                      <?php
                    }
                    else{
                      ?>
                       <a href="<?php echo SITE_PATH.'templates/'; ?>login"><button class="book-btn">Book Now</button></a>
                      <?php
                    }
                  ?>
                 
              </div>
          </div>
          <!-- box ends -->
          <?php
      
                }
              }
          ?>
        </div>
          <!-- box container ends -->
</section>

</div>
 
<?php
  include 'user_footer.php';
?>