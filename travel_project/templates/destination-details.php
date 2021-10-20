
<?php

ob_start();
        include 'user_header.php';

    ?>

<!-- 

    
    <div class="fixed-book">
      <div class="go-book">
        <p class="price">$90 <span>$120</span>  </p> 
        <a  class="book-link" href="#book">Book Now</a>
      </div>
     
       <p class="contact"> <i class="fa fa-phone"></i> Enquire on Call </p>
      
    </div>
   
    <div class="destination">
        <div class="destination-details">
            <h1>Nearby Jibhi Waterfall Camp</h1>
            <p><i id="map" class="fa fa-map-marker"></i>Jibhi, Himachal Pradesh</p>
           
                <iframe  src="https://www.youtube.com/embed/8UcLeRwpXHk?controls=0"
                 title="YouTube video player" frameborder="0" 
                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                 allowfullscreen ></iframe>
                 <div class="gallery">
                    <img src="..\asset\img_user\jibhi1.jpg">
                
                    <img src="..\asset\img_user\jibhi1.jpg">
                
                 
                    <img src="..\asset\img_user\jibhi2.jpg">
                 
                    <img src="..\asset\img_user\jibhi3.jpg">
                  
                    <img src="..\asset\img_user\jibhi4.jpg">
                   
                               
                </div>
                
              
              
            
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

                  <p id="about-description">Being one of the secluded villages in Himachal Pradesh, the placid atmosphere of Jibhi makes it a perfect destination for camping. Cool breeze, lovely views of the sunset, quiet mountains- the much-needed trio for a perfect retreat. The campsite is endowed with an exceptional backdrop of virescent ranges and snow-clad peaks. Away from the crowded city, you can find solitude in meadows lush surrounded by enchanting lush of wilderness. The serene ambience lets you revel in the true spirit of nature. While the early sunshine caresses your face, you can trek in the path filled with the great burst of twigs and leaves. The sonorous melodies of birds and bulging canopies accompanies you while trekking. The milieu of dark elucidates with the warmth of the bonfire and you can pack cornucopia of experiences while leaving. The cascading waterfalls view adds stars to your overall experience.</p>
              </div>
              <div class="things-to-do">
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
   -->

   <?php

   if(isset($_GET['id'])){
     $pckId=getSafeVal($_GET['id']);
      $packages=mysqli_query($con,"select * from package where id='$pckId' ");

      $rec=unserialize($_COOKIE['recentlyViewed']);
      $rec[]=$pckId;
      if($key=array_search($pckId, $rec)!==false){
        unset($rec['$key']);
      }
      setcookie('recentlyViewed',serialize($rec),time()+60*60*24*365);
   }
   else{
    redirect("index.php");
   }


 

   ?>
  
    <section class="book pt-2" id="book">

      <h1 class="head">
          <span>b</span>
          <span>o</span>
          <span>o</span>
          <span>k</span>
          <span class="space"></span>
          <span>n</span>
          <span>o</span>
          <span>w</span>
      </h1>
  
      <div class="content">
          <div class="booking-form">
            <form action="" method="post">
            <p id="red-msg">Please select valid check-in and check-out date</p>
            <div class="dates">
                <div class="check">
                    <p><i class="fa fa-calendar"></i> Check-in Date </p>
                    <input type="date" name="check-in-date" id="check-in-date">
                </div>
                <div class="check">
                    <p><i class="fa fa-calendar"></i> Check-out Date </p>
                    <input type="date" name="check-out-date" id="check-out-date">
                </div> 
            </div>
            <div class="passengers">
                <div class="passenger">
                    <h3 id="p-ac">Adults</h3><p>(18 Years and Above 18Years)</p>
                    <input type="number" id="adults" name="adults" value="1" min="1">
                </div>
                <div class="passenger">
                    <h3 id="p-ac">Children </h3><p>(Below 18Years)</p>
                    <input type="number" id="children" name="children" value="0" min="0">
                </div>
      
            </div>
            <div class="display-total">
                <p>Total Price:</p>
            </div>
            <button type="button" name="book-btn" class="book-btn" id="book-btn">BOOK NOW</button>
          </form>
          </div>
  
      </div>
  
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  
  $("#book-btn").on("click",function(e){

    checkIn=$("#check-in-date").val();
    checkOut=$("#check-out-date").val();

    alert(checkOut);


    e.preventDefault();

  })

$(document).ready(function(){

  date = new Date();

  y=date.getFullYear();
  m=date.getMonth()+1;
  d=date.getDate();
 
  if(d<10){
    d='0'+d;
  }
  if(m<10){
    m='0'+m;
  }
  
   mindt=y+"-"+m+"-"+d;

  alert(mindt);
  $("#check-in-date").attr("min",mindt);

})
  


</script>
  <!-- 
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
    
  </section> -->
  <!-- book section ends -->
  <!-- <footer class="footer">-->

 
  <?php

  include 'user_footer.php';


?>
  





            </body>
            </html>