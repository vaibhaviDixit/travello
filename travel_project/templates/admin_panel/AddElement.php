
<?php
	include 'top.php';


	$msg="";
	$packageName="";
	$packagePrice="";
	$packageDesc="";
	$packageType="";
	$id="";
	$image_status='required';


	if(isset($_GET['id']) && $_GET['id']>0){
		$id=getSafeVal($_GET['id']);

		$row=mysqli_fetch_assoc( mysqli_query($con,"select * from package where id='$id' ") );

		$packageName=$row['packageName'];
		$packagePrice=$row['packagePrice'];
		$packageDesc=$row['packageDesc'];
		$packageType=$row['packageType'];
		

		$image_status="";

	}


if (isset($_POST['submit'])) {
	$packageName=getSafeVal($_POST['packageName']);
	$packageDesc=getSafeVal($_POST['packageDesc']);
	$packagePrice=getSafeVal($_POST['packagePrice']);
 	$packageType=getSafeVal($_POST['packageType']);


        $type=$_FILES['packagePhoto']['type'];
		//if id is not set then insert new package
		if($id==""){

			//add validations on image
			if($type!="image/jpeg" && $type!="image/png" && $type!="image/jpg"){
				$msg="Invalid image format";
			}
			else{

				$packagePhoto=rand(111111111,999999999).'_'.$_FILES['packagePhoto']['name'];
				move_uploaded_file($_FILES['packagePhoto']['tmp_name'],SERVER_PACKAGE_IMAGE.$packagePhoto);

			      mysqli_query($con,"INSERT INTO `package`(`packageName`, `packageDesc`, `packagePrice`, `packageType`, `packagePhoto`) VALUES ('$packageName','$packageDesc','$packagePrice','$packageType','$packagePhoto')");
			  	
			     
				redirect('ListElement.php');

			}
		}
		
		else{
			//if id is set then update exsting package

			$image_condition="";
			if($_FILES['packagePhoto']['name']!=""){

				//add validations on image
				if($type!='image/jpeg' && $type!='image/png' && $type!='image/jpg'){
						$msg="Invalid image format";
				}
				else{
					$packagePhoto=rand(111111111,999999999).'_'.$_FILES['packagePhoto']['name'];
					move_uploaded_file($_FILES['packagePhoto']['tmp_name'],SERVER_PACKAGE_IMAGE.$packagePhoto);


					$image_condition=", packagePhoto='$packagePhoto' ";
		
				}
				

			}
			if($msg==""){
				mysqli_query($con,"update package set packageName='$packageName',packageDesc='$packageDesc',packagePrice='$packagePrice',packageType='$packageType' $image_condition where id='$id'  ");
				redirect('ListElement.php');
			}
			
		}
		
		
	}
	


?>


			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Manage Packages</h1>
				
					</div>
					<hr>

					<?php 
					if(strlen( $msg ) > 0){
					?>
					<div class="alert alert-danger" role="alert" >  <?php echo $msg;  ?> </div>
					<?php
						}

					?>					


					<form method="post" enctype="multipart/form-data" id="addPckgForm">
						<div class="row">
							 <div class="col-sm-6 mb-3">
							    	<label for="packageName" class="form-label">Package Name<span class="redStar">*</span></label>
							       <input type="text" class="form-control" rows="3" id="packageName" required name="packageName" value="<?php echo $packageName; ?>">
							 </div>

							 <div class="col-sm-6 mb-3">
							    	<label for="packagePrice" class="form-label">Package Price<span class="redStar">*</span></label>
							       <input type="text" class="form-control" rows="3" id="packagePrice" required name="packagePrice" value="<?php echo $packagePrice; ?>">
							 </div>

						</div>

						<div class="row">
							 <div class="col mb-3">
							    	<label for="packageDesc" class="form-label">Package Description<span class="redStar">*</span></label>
							       <textarea class="form-control" rows="3" id="packageDesc" name="packageDesc" required><?php echo $packageDesc; ?></textarea>
							 </div>
						</div>

						<div class="row">
							 
								
								<div class="col-sm-4 mb-3">
										<label for="packageType" class="form-label">Package Category<span class="redStar">*</span></label>
									      	<select class="form-select mb-3" id="packageType" name="packageType" required>

											  <option value="select">Select</option>
											  <?php
											  	$cate=mysqli_query($con,"select * from category where status =1");
											    if(mysqli_num_rows($cate)>0){
											      while ($cateRow=mysqli_fetch_assoc($cate)) {

												      	if($cateRow['id']==$packageType){
												      		echo "<option selected value='".$cateRow['id']."'>".$cateRow['name']."</option>";
												    	}
												    	else{
												    		echo "<option  value='".$cateRow['id']."'>".$cateRow['name']."</option>";
												    	}
													}
												}
											  ?>
								
											  
											</select> 
								</div>
								 <div class="col-sm-4 mb-3">


								    	<label for="packagePhoto" class="form-label">Package Photo
								    		<?php if($image_status=='required')
								     		{
								     		?> 
								     		<span class="redStar">*</span>
								     		<?php
								     		}
								     		?>
										</label>
								    	<input class="form-control form-control-sm" type="file" id="packagePhoto" name="packagePhoto"  <?php echo $image_status; ?>>


								 </div>
							</div>

						
							 <input type="submit" name="submit" class="btn btn-success" value="Submit">

					</form>


				</div>
			</main>

<?php

include 'footer.php';
?>
