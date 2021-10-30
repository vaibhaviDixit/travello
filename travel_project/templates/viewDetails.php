
<?php

       ob_start();
        include 'user_header.php';

   if(isset($_GET['id'])){
     $pckId=getSafeVal($_GET['id']);
      $packages=mysqli_query($con,"select * from package where id='$pckId' ");
      $packagesRow=mysqli_fetch_assoc($packages);
      $price=$packagesRow['packagePrice'];

      $details=mysqli_query($con,"select * from viewdetails where packageId='$pckId' ");
      $detailsRow=mysqli_fetch_assoc($details);
      if(mysqli_num_rows($details)<=0){
        redirect("index.php");
      }

      $rec=unserialize($_COOKIE['recentlyViewed']);
      // pra($rec);
      foreach ($rec as $key=>$value) {
        if($value==$pckId){
          unset($rec[$key]);
        }
      }
      $rec[]=$pckId;
      // pra($rec);
      setcookie('recentlyViewed',serialize($rec),time()+60*60*24*365);

   }
   else{
    redirect("index.php");
   }

 

   ?>
  
  

   
    <div class="fixed-book">
      <div class="go-book">
        <p class="price">&#8377; <?php echo $packagesRow['packagePrice']; ?> </p> 
        <a  class="book-link" href="#book">Book Now</a>
      </div>
     
       <p class="contact"> <i class="fa fa-phone"></i> Enquire on Call </p>
      
    </div>
  <section class="packages" id="packages">  
    <div class="destination">
        <div class="destination-details">
            <h1><?php echo $packagesRow['packageName']; ?></h1>
            <p><i id="map" class="fa fa-map-marker"></i><?php echo $detailsRow['location']; ?></p>
           
                <iframe  src="<?php echo $detailsRow['link']; ?>?controls=0"
                 title="YouTube video player" frameborder="0" 
                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                 allowfullscreen ></iframe>
                 <div class="gallery">
              
                    <img src="<?php echo SITE_PACKAGE_IMAGE.$detailsRow['photoone']; ?>">
                    <img src="<?php echo SITE_PACKAGE_IMAGE.$detailsRow['phototwo']; ?>">
                    <img src="<?php echo SITE_PACKAGE_IMAGE.$detailsRow['photthree']; ?>">
                    <img src="<?php echo SITE_PACKAGE_IMAGE.$detailsRow['photofour']; ?>">
                   
                               
                </div>
                       
              
        </section>    
            <div class="to-do">
              <div class="about-dest">


              <section class="packages" id="packages">


<h1 class="heading">      
  <span>A</span>
  <span>b</span>
  <span>o</span>
  <span>u</span>
  <span>t</span>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <span>T</span>
  <span>h</span>
  <span>e</span>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <span>p</span>
  <span>l</span>
  <span>a</span>
  <span>c</span>
  <span>e</span>
                </h1>
                </section>

                  <p id="about-description" style="width: 70%; margin: 0 auto; text-align: justify;"><?php echo $detailsRow['description']; ?></p>
              </div>
              <div class="things-to-do" style="width: 70%; margin: 0 auto;">
              <section class="packages" id="packages">


<h1 class="heading">      
  <span>T</span>
  <span>h</span>
  <span>i</span>
  <span>n</span>
  <span>g</span>
  <span>s</span>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <span>T</span>
  <span>o</span>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <span>K</span>
  <span>n</span>
  <span>o</span>
  <span>w</span>
                </h1>
                </section>
                  <ul>
                      <li><i  class="material-icons">access_time</i>Checkin Time - 11:30 AM </li>
                      <li><i  class="material-icons">access_time</i>Checkout Time - 10:00 AM </li>
                      <li><i class="material-icons">info_outline</i>Carry Valid ID proof issued by Government of India</li>
                      <li><i class="material-icons">info_outline</i>Carry RT-PCR Test report prior of 48 hours</li>
                      <li><i class="material-icons">info_outline</i>No refund will be processed if any adventures/activities are cancelled due to an act of God or bad weather conditions</li>
                      <li><i class="material-icons">info_outline</i>Observe COVID-19 safety rules Regional restriction measures in place Further restrictions may be implemented at short notice</li>
                    </ul>       
               </div>
              
          </div>
           
        </div>  
     
       
    </div>
  



  <section class="packages" id="packages">

    <h1 class="head">
    Expore More Places Nearby
    </h1>
  
    <div class="box-container">
        <div class="box">
           <img src="..\asset\img_user\p-1.jpg" alt="">
            <div class="content">
                <h4><i id="map" class="fa fa-map-marker"></i> mumbai </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <div class="view">
                  <a class="view-details" href="#"><i class="fa fa-eye"></i> View Details</a>
                </div>
               
            </div>
        </div>
        <div class="box">
          <img src="..\asset\img_user\p-1.jpg" alt="">
           <div class="content">
               <h4><i id="map" class="fa fa-map-marker"></i> mumbai </h4>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
               <div class="stars">
                   <i class="fa fa-star checked"></i>
                   <i class="fa fa-star checked"></i>
                   <i class="fa fa-star checked"></i>
                   <i class="fa fa-star "></i>
                   <i class="fa fa-star "></i>
               </div>
               <div class="price"> $90.00 <span>$120.00</span> </div>
               <div class="view">
                 <a class="view-details" href="#"><i class="fa fa-eye"></i> View Details</a>
               </div>
              
           </div>
       </div>
       <div class="box">
        <img src="..\asset\img_user\p-1.jpg" alt="">
         <div class="content">
             <h4><i id="map" class="fa fa-map-marker"></i> mumbai </h4>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
             <div class="stars">
                 <i class="fa fa-star checked"></i>
                 <i class="fa fa-star checked"></i>
                 <i class="fa fa-star checked"></i>
                 <i class="fa fa-star "></i>
                 <i class="fa fa-star "></i>
             </div>
             <div class="price"> $90.00 <span>$120.00</span> </div>
             <div class="view">
               <a class="view-details" href="#"><i class="fa fa-eye"></i> View Details</a>
             </div>
            
         </div>
     </div>
     
  </div>
      
    <div class="view-more"><a class="view-more-btn" href="viewmore.php">View More</a></div>
    
  </section>
  <!-- book section ends -->


 
  <?php

  include 'user_footer.php';


?>
  
