<?php

include 'user_header.php';
if(isset($_POST['submit'])){

	$check_in=$_POST['check-in-date'];
    $check_out=$_POST['check-out-date'];
    $adults=$_POST['adults'];
    $children=$_POST['children'];
    $total=$_POST['total'];
    $package=$_POST['package'];
    $adultPrice=$_POST['adultPrice'];
    $childrenPrice=$_POST['childrenPrice'];
    $days=$_POST['days'];


 //    $email=$_SESSION['CURRENT_USER'];
	// $userRow=mysqli_fetch_assoc(mysqli_query($con,"select * from user where email='$email' "));
	// $name=$userRow['name'];
	// $mobile=$userRow['mobile'];
	// $zip="";
	// $adrs="";

	// $pckRow=mysqli_fetch_assoc(mysqli_query($con,"select * from package where id='$package' "));
	// $discount=$pckRow['discount'];
	
	// $payAmt="";
	// if($discount==0){
	// 	$payAmt=$total;
	// }
	// else{
	// 	$payAmt=(intval($discount)/100)*$total;

	// }

}else{
	// redirect("index.php");
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
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <form method="post" >
						<div class="row">
							 <div class="col-sm-6 mb-3">
							    	<label for="name" class="form-label">Your Name<span class="redStar">*</span></label>
							       <input type="text" class="form-control" rows="3" id="name" required name="name" value="<?php echo $name; ?>">
							 </div>

							 <div class="col-sm-6 mb-3">
							    	<label for="mobile" class="form-label">Phone<span class="redStar">*</span></label>
							       <input type="text" class="form-control" rows="3" id="mobile" required name="mobile" value="<?php echo $mobile; ?>">
							 </div>

						</div>

						<div class="row">
							 <div class="col-sm-6 mb-3">
							    	<label for="email" class="form-label">Email<span class="redStar">*</span></label>
							       <input type="email" class="form-control" rows="3" id="email" required readonly name="email" value="<?php echo $email; ?>">
							 </div>
							 <div class="col-sm-6 mb-3">
							    	<label for="zip" class="form-label">Zip Code<span class="redStar">*</span></label>
							       <input type="text" class="form-control" rows="3" id="zip" required name="zip" value="<?php echo $zip; ?>">
							 </div>
						</div>

						<div class="row">
							 
								
								<div class="col-sm-12 mb-3">
										<label for="adrs" class="form-label">Address<span class="redStar">*</span></label>
										<textarea class="form-control" rows="3"  id="adrs" name="adrs" required><?php echo $adrs; ?></textarea>
									      	
								</div>
								
							</div>

						
							 <input type="submit" name="submit" class="btn btn-success" value="Submit">

					</form>
      </div>
    </div>
  </div>
<!-- Address Details ends -->

<!-- payment accordian starts -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Payment Proceed
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        hihihihihi
      </div>
    </div>
  </div>
  <!-- payment accordian ends -->

</div>
				
		</div>

		<div class="innerRight col-md-3">
			<h5>Your Booking</h5>
			<hr>
			<div class="card bookingInfo" >
				<div class="text-center">
					<div >
						<h6>VAISHNO DEVI</h6>
				    </div>

					<div > <img src="media/package/244305377_Goa-Beach-Hollant.jpg"> </div>
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
						<tr><td>Discount</td><td><?php echo $discount; ?></td></tr>
						<tr><td>Pay Amount</td><td><?php echo $payAmt; ?></td></tr>
					</table>
					

				</div>

		


			</div>
			
		</div>

	</div>


</section>





<?php

include 'user_footer.php';

?>