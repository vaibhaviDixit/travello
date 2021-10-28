<?php

include 'user_header.php';
if(isset($_POST['total'])){

	$check_in=$_POST['check-in-date'];
    $check_out=$_POST['check-out-date'];
    $adults=$_POST['adults'];
    $children=$_POST['children'];
    $total=$_POST['total'];
    $package=$_POST['package'];
    $adultPrice=$_POST['adultPrice'];
    $childrenPrice=$_POST['childrenPrice'];
    $days=$_POST['days'];

    $package=mysqli_query($con,"select * from package where id='$package' ");
    $packageRow=mysqli_fetch_assoc($package);

    $dis=floatval(($packageRow['discount']));
    $disType=$packageRow['disType'];
    $payAmt=$_POST['total'];
    if($dis >0){
    	if($disType=="cash"){
    		$payAmt=intval($payAmt)-$dis;
    	}
    	if($disType=="per"){
    		$damt=$payAmt*(($dis)/100);
    		$payAmt=$payAmt-$damt;

    	}

    }
}
else{
	redirect("index.php");
}



?>



<section id="bookingProcess" style="padding-top: 10% !important;" class="container-fluid">
	
	<div class="outer row ">
		<div class="innerLeft col-md-8">
			<h5>Booking Submission</h5>
			<hr>
<div class="accordion accordion-flush" id="accordionExample">

<!-- Address Details starts -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Address Details
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <form method="post" >
						<div class="row">
							 <div class="col-sm-6 mb-3">
							    	<label for="name" class="form-label">Your Name<span class="redStar">*</span></label>
							       <input type="text" class="form-control" rows="3" id="name" required name="name" value="<?php echo $currentUserDetails['name']; ?>">
							 </div>

							 <div class="col-sm-6 mb-3">
							    	<label for="mobile" class="form-label">Phone<span class="redStar">*</span></label>
							       <input type="text" class="form-control" rows="3" id="mobile" required name="mobile" value="<?php echo $currentUserDetails['mobile']; ?>" readonly>
							 </div>

						</div>

						<div class="row">
							 
								
								<div class="col-sm-12 mb-3">
										<label for="adrs" class="form-label">Address<span class="redStar">*</span></label>
										<textarea class="form-control" rows="3"  id="adrs" name="adrs" required><?php echo $currentUserDetails['address']; ?></textarea>
									      	
								</div>
								
							</div>
							<div class="row">
								<div class="col-sm-4 mb-3">
							    	<input type="text" class="form-control form-control-sm" rows="3" id="coupon" name="coupon" placeholder="Coupon Code">
								</div>
								<div class="col-sm-4 mb-3">
							    	<button class="btn btn-sm btn-primary" type="button" onclick="applyCoupon()">Apply Coupon</button>
								</div>
							</div>

							<input type="submit" name="payNow" class="btn btn-success" value="Proceed To Payment">

			</form>
      </div>
    </div>
  </div>
<!-- Address Details ends -->

</div>
				
		</div>

		<div class="innerRight col-md-3">
			<h5>Your Booking</h5>
			<hr>
			<div class="card bookingInfo" >
				<div class="text-center">
					<div >
						<h6><?php  echo $packageRow['packageName'];?></h6>
				    </div>

					<div > <img src="<?php  echo SITE_PACKAGE_IMAGE.$packageRow['packagePhoto']; ?>"> </div>
				</div>
				<hr>
				<div class="tbl">
					<table class=" table-sm fs-6">
						<tr><td>Departure Date</td><td><?php echo date("d/m/Y", strtotime($check_in)); ?></td></tr>
						<tr><td>Duration</td><td><?php echo $days; ?> Days</td></tr>
						<tr><td>Adults</td><td><?php echo $adults; ?></td></tr>
						<tr><td>Children</td><td><?php echo $children; ?></td></tr>
					</table>
					

				</div>
				<hr>
				<div class="tbl">
					<table class=" table-sm fs-6">
						<tr><td>Adult Price</td><td><?php echo $adultPrice; ?></td></tr>
						<tr><td>Children Price</td><td><?php echo $childrenPrice; ?></td></tr>
						<tr><td>Subtotal</td><td><?php echo $total; ?></td></tr>
						<tr><td>Discount</td><td><?php echo $packageRow['discount']; if($disType=='cash'){
							echo "&#8377;";}if($disType=='per'){echo "%";} ?></td></tr>

						<tr class="text-success"><td>Total</td><td><?php echo $payAmt; ?></td></tr>

						<tr class="text-success couponMsg"><td>Coupon</td><td><span class="couponCode"></span></td></tr>

						<tr class="text-success couponMsg"><td>Pay Amount</td><td><span class="finalPrice"></span></td></tr>
					</table>
					

				</div>

		


			</div>
			
		</div>

	</div>


</section>


<script type="text/javascript">
	
	function applyCoupon(){
		coupon=$("#coupon").val();
		if(coupon==""){
			swal("Failed", "Please enter Coupon Code!", "error");
		}
		else{
			jQuery.ajax({
				url:'applyCoupon.php',
				type:'post',
				data:'coupon='+coupon+'&bookPrice='+<?php echo $payAmt; ?>,
				success:function(result){
					console.log(result);
					data=jQuery.parseJSON(result);
					if(data.status=="success"){
						swal("Success",data.msg,"success");
						$(".couponMsg").show();
						$(".couponCode").html(coupon);
						$(".finalPrice").html(data.couponApplied);
					}
					if(data.status=="error"){
						swal("Failed",data.msg, "error");
					}
				}


			})
		}
		
	}

</script>


<?php

include 'user_footer.php';

?>

<script type="text/javascript">
  
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>