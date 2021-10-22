
<?php
	include 'top.php';


	$msg="";
	$packageName="";
	$chechkIn="";
	$checkOut="";
	$adults="";
	$children="";
	$id="";
	$packagePrice="";
	$image_status='required';


	if(isset($_GET['id']) && $_GET['id']>0){
		$id=getSafeVal($_GET['id']);

		$row=mysqli_fetch_assoc( mysqli_query($con,"select * from package where id='$id' ") );

		$packageName=$row['packageName'];
		$packagePrice=$row['packagePrice'];
		$packageDesc=$row['packageDesc'];
		$packageType=$row['packageType'];


	}


if (isset($_POST['submit'])) {
	// $packageName=getSafeVal($_POST['packageName']);
	// $packageDesc=getSafeVal($_POST['packageDesc']);
	// $packagePrice=getSafeVal($_POST['packagePrice']);
 // 	$packageType=getSafeVal($_POST['packageType']);				

	mysqli_query($con,"INSERT INTO `booking`(`id`, `packageId`, `packagePrice`, `checkIn`, `checkOut`, `adults`, `children`, `total`, `paid`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]') ");
	// redirect('ListBooking.php');
			
			
}
		
		
	
	


?>

<script type="text/javascript">
	

</script>

		
			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Manage Bookings</h1>
				
					</div>
					<hr>

					<?php 
					if(strlen( $msg ) > 0){
					?>
					<div class="alert alert-danger" role="alert" >  <?php echo $msg;  ?> </div>
					<?php
						}

					?>					


					<form method="post" >
						<div class="row">
							 <div class="col-sm-6 mb-3">
							    	
							    	<label for="pc" class="form-label">Package Name<span class="redStar">*</span></label>
							       		<select class="form-select mb-3" id="pc" name="pc" required onchange="nameChange()">
											  <?php
											  	$pck=mysqli_query($con,"select * from package");
											    if(mysqli_num_rows($pck)>0){
											      while ($pckRow=mysqli_fetch_assoc($pck)) {

												      	if($pckRow['id']==$packageName){
												      		echo "<option selected value='".$pckRow['id']."'>".$pckRow['packageName']."</option>";
												    	}
												    	else{
												    		echo "<option  value='".$pckRow['id']."'>".$pckRow['packageName']."</option>";
												    	}
													}
												}
											  ?>
								
											  
									</select> 
							       	
							 </div>
						

							 <div class="col-sm-6 mb-3">
							    	<label for="packagePrice" class="form-label">Package Price<span class="redStar">*</span></label>
							       <input type="text" class="form-control" rows="3" id="packagePrice" required name="packagePrice" readonly value="">
							 </div>

						</div>


						<div class="row">
							 
									
							<div class="col-sm-3 mb-3">
				           		   <label for="checkIn" class="form-label">Check In<span class="redStar">*</span></label>
				                    <input type="date" name="checkIn" id="checkIn" required>
				                
				            </div>
				             <div class="col-sm-3 mb-3">
				                    <label for="checkOut" class="form-label">Check Out<span class="redStar">*</span></label>
				                    <input type="date" name="checkOut" id="checkOut" required>
				             </div> 
				         
				      
				                <div class="col-sm-3 mb-3">
				                    <label for="adults" class="form-label">Adults<span class="redStar">*</span></label>
				                    <input type="number" id="adults" name="adults" value="1" min="1" required>
				                </div>
				                <div class="col-sm-3 mb-3">
				                   <label for="children" class="form-label">Children<span class="redStar">*</span></label>
				                    <input type="number" id="children" name="children" value="0" min="0" required>
				                </div>
				     
										
						</div>

						<div class="row">
							<div class="col-sm-3 mb-3">
				           		   <label for="totalPrice" class="form-label">Total Amount<span class="redStar">*</span></label>
				                    <input type="text" name="totalPrice" id="totalPrice" required >
				                
				            </div>
							<div class="col-sm-3 mb-3">
				           		   <label for="payamt" class="form-label">Pay Amount<span class="redStar">*</span></label>
				                    <input type="text" name="payamt" id="payamt" required>
				                
				            </div>
				            	<div class="col-sm-3 mb-3">
				           		   <label for="amtLeft" class="form-label">Left Amount<span class="redStar">*</span></label>
				                    <input type="text" name="amtLeft" id="amtLeft" required readonly >
				                
				            </div>


							
						</div>

						
							 <input type="submit" name="submit" class="btn btn-success" value="Submit">

					</form>


				</div>
			</main>


<script type="text/javascript">

	function nameChange(){
			pcname=$("#pc").val();
			 $.ajax({  
                   type:"POST",  
                   url:"getPckPrice.php",  
                   data:"id="+pcname,
                   success:function(result){

                      msg=jQuery.parseJSON(result);

                     if(msg.status=="success"){
                       $("#packagePrice").val(msg.price);
                     }
                     
                   }
                   
             });

     }

 $("#payamt").on("change",function(){
  
     		total=parseInt($("#totalPrice").val());
     		pay=parseInt($("#payamt").val());
     		amt=total-pay;
     		$("#amtLeft").val(amt);
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
  $("#checkIn").attr("min",mindt);
  $("#checkOut").attr("min",mindt);

})


   $("#checkIn").on("change",function(){
     bookingData();
     })
    $("#checkOut").on("change",function(){
      bookingData();
    })
    
    $("#adults").on("change",function(){
     bookingData();
     })
    $("#children").on("change",function(){
      bookingData();
    })

  
  function bookingData(){
    checkIn=$("#checkIn").val();
    checkOut=$("#checkOut").val();
    adults=$("#adults").val();
    children=$("#children").val();


        var date1 = new Date(checkIn);
        var date2 = new Date(checkOut);
  
      // calculate the time difference of two dates
      var Difference_In_Time = date2.getTime() - date1.getTime();
      // calculate the no. of days between two dates
      var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);


     chPrice=0;
      packagePrice=$("#packagePrice").val();
      if(children<1){
        adultPrice=parseInt(packagePrice)*parseInt(Difference_In_Days)*parseInt(adults);
        Total=adultPrice;
      }
      else{
        chPrice=parseInt(children)*parseInt(Difference_In_Days)*(parseInt(packagePrice)/2);
        adultPrice=parseInt(packagePrice)*parseInt(Difference_In_Days)*parseInt(adults);
        Total=adultPrice+chPrice;
      }

      $("#totalPrice").val(Total);
         

  
  }


	

</script>

<?php

include 'footer.php';
?>
