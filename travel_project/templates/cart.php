<?php

include 'user_header.php';

?>

<div class="container-fluid mt-5 pt-5" >


    <section class="packages" id="packages">
<h1 class="heading">      
  <span>M</span>
  <span>y</span>
  &nbsp;&nbsp;&nbsp;
  <span>C</span>
  <span>a</span>
  <span>r</span>
  <span>t</span>

  <br/><br/>
</h1>
</section>

<div class="cart row ">

<div class="products ">
    
    <div class="product" >
     <img src="..\asset\img_user\p-1.jpg" >
        <div class="product-info" class="col-md-6">
            <h3 class="product-name">Mumbai</h3>
            <div class="price">$90.00 </div>
             <div class="quantity">
                        <span class="dec">-</span>
                        <span class="qty-input" id="qty">1</span>
                        <span class="inc">+</span>
             </div>
             <p class="product-remove btn btn-danger">
                 <i class="fa fa-trash"></i>
                 <span>Remove</span>
             </p>

         </div>
    </div>
   
 

</div>
<div class="cart-total col-md-3">
    
    <p fs-3>3 ITEMS</p>
    <p>
        <span>Subtotal:</span>
        <span>$90</span>
    </p>
    <a href="" class="btn btn-success fs-4">Order</a>

</div>



</div>
<!-- cart ends -->




</div>







<!-- footer -->
<?php

include 'user_footer.php';

?>
