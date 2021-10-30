<?php
   include 'top.php';
   
   
   $msg="";
   $placename="";
   $placelocation="";
   $placedesc="";
   $thingstoknow="";
   $packagecategory="";
   $id="";
   $one_status='required';
   $two_status='required';
   $three_status='required';
   $four_status='required';
   $one_condition='';
   $two_condition='';
   $three_condition='';
   $four_condition='';
   $link="";
   
   
   
   
   if (isset($_POST['submit'])) {
   	$placename=mysqli_real_escape_string( $con,htmlspecialchars( $_POST['packageName'] ) );
   	$location=mysqli_real_escape_string( $con,htmlspecialchars( $_POST['placelocation'] ) );
   	$placedesc=mysqli_real_escape_string( $con,htmlspecialchars( $_POST['placedesc'] ) );
   	$link=mysqli_real_escape_string($con, htmlspecialchars( $_POST['link'] ) );
   
   
   	//photo 1
   	$type=$_FILES['photoone']['type'];
   		//if id is not set then insert new package
   		if($id==""){
   
   			//add validations on image
   			if($type!="image/jpeg" && $type!="image/png" && $type!="image/jpg"){
   				$msg="Invalid image format";
   			}
   			else{
   
   				$photoone=rand(111111111,999999999).'_'.$_FILES['photoone']['name'];
   				move_uploaded_file($_FILES['photoone']['tmp_name'],SERVER_PACKAGE_IMAGE.$photoone);
   
   			    $one_condition=", photoone='$photoone' ";
   
   			}
   		}
   		
   		else{
   			//if id is set then update exsting package
   
   			$one_condition="";
   			if($_FILES['photoone']['name']!=""){
   
   				//add validations on image
   				if($type!='image/jpeg' && $type!='image/png' && $type!='image/jpg'){
   						$msg="Invalid image format";
   				}
   				else{
   					$photoone=rand(111111111,999999999).'_'.$_FILES['photoone']['name'];
   					move_uploaded_file($_FILES['photoone']['tmp_name'],SERVER_PACKAGE_IMAGE.$phototwo);
   
   
   					$one_condition=", photoone='$photoone' ";
   				}
   			}
   		}
   
   
   		// photo 2
   		$type=$_FILES['phototwo']['type'];
   		//if id is not set then insert new package
   		if($id==""){
   
   			//add validations on image
   			if($type!="image/jpeg" && $type!="image/png" && $type!="image/jpg"){
   				$msg="Invalid image format";
   			}
   			else{
   
   				$phototwo=rand(111111111,999999999).'_'.$_FILES['phototwo']['name'];
   				move_uploaded_file($_FILES['phototwo']['tmp_name'],SERVER_PACKAGE_IMAGE.$phototwo);
   
   			    $two_condition=", phototwo='$phototwo' ";
   
   
   			}
   		}
   		
   		else{
   			//if id is set then update exsting package
   
   			$two_condition="";
   			if($_FILES['phototwo']['name']!=""){
   
   				//add validations on image
   				if($type!='image/jpeg' && $type!='image/png' && $type!='image/jpg'){
   						$msg="Invalid image format";
   				}
   				else{
   					$phototwo=rand(111111111,999999999).'_'.$_FILES['phototwo']['name'];
   					move_uploaded_file($_FILES['phototwo']['tmp_name'],SERVER_PACKAGE_IMAGE.$phototwo);
   
   
   					$two_condition=", phototwo='$phototwo' ";
   				}
   			}
   		}
   
   
   
   
   		// photo 3
   		$type=$_FILES['photothree']['type'];
   		//if id is not set then insert new package
   		if($id==""){
   
   			//add validations on image
   			if($type!="image/jpeg" && $type!="image/png" && $type!="image/jpg"){
   				$msg="Invalid image format";
   			}
   			else{
   
   				$photothree=rand(111111111,999999999).'_'.$_FILES['photothree']['name'];
   				move_uploaded_file($_FILES['photothree']['tmp_name'],SERVER_PACKAGE_IMAGE.$photothree);
   
   			    $htree_condition=", photothree='$photothree' ";
   
   			}
   		}
   		
   		else{
   			//if id is set then update exsting package
   
   			$three_condition="";
   			if($_FILES['photothree']['name']!=""){
   
   				//add validations on image
   				if($type!='image/jpeg' && $type!='image/png' && $type!='image/jpg'){
   						$msg="Invalid image format";
   				}
   				else{
   					$photothree=rand(111111111,999999999).'_'.$_FILES['photothree']['name'];
   					move_uploaded_file($_FILES['photothree']['tmp_name'],SERVER_PACKAGE_IMAGE.$phototwo);
   
   
   					$three_condition=", photothree='$photothree' ";
   				}
   			}
   		}
   
   
   
   
   		// photo 4
   		$type=$_FILES['photofour']['type'];
   		//if id is not set then insert new package
   		if($id==""){
   
   			//add validations on image
   			if($type!="image/jpeg" && $type!="image/png" && $type!="image/jpg"){
   				$msg="Invalid image format";
   			}
   			else{
   
   				$photofour=rand(111111111,999999999).'_'.$_FILES['photofour']['name'];
   				move_uploaded_file($_FILES['photofour']['tmp_name'],SERVER_PACKAGE_IMAGE.$phototwo);
   
   			$four_condition=", photofour='$photofour' ";
   
   			}
   		}
   		
   		else{
   			//if id is set then update exsting package
   
   			$four_condition="";
   			if($_FILES['photofour']['name']!=""){
   
   				//add validations on image
   				if($type!='image/jpeg' && $type!='image/png' && $type!='image/jpg'){
   						$msg="Invalid image format";
   				}
   				else{
   					$photofour=rand(111111111,999999999).'_'.$_FILES['photofour']['name'];
   					move_uploaded_file($_FILES['photofour']['tmp_name'],SERVER_PACKAGE_IMAGE.$phototwo);
   
   
   					$four_condition=", photofour='$photofour' ";
   				}
   			}
   		}
   
   
   
   
   	if($id==""){
   		//here id is blank means admin wants to add new category
   		$sql="select * from viewdetails where packageId='$placename' ";
   
   	}
   	else{
   		//here id is set means admin wants to edit existing category
   		$sql="select * from viewdetails where packageId='$placename' and id!='$id' ";
   
   	}
   
   
   	if(mysqli_num_rows(mysqli_query($con,$sql)) >0 ){
   
   		$msg="Details already exists";
   
   	}
   	else{
   		//if id is not set then insert new category 
   		if($id==""){
   			mysqli_query($con,"INSERT INTO `viewdetails`(`packageId`, `location`, `description`, `link`,`photoone`, `phototwo`, `photthree`, `photofour`) VALUES ('$placename','$location','$placedesc','$link','$photoone','$phototwo','$photothree','$photofour')");
   		
   
   		}
   		else{
   			//if id is set then update exsting category
   			mysqli_query($con,"update viewdetails set packageId='$placename', location='$location', description='$placedesc', ,link='$link' $one_condition $two_condition $three_condition $four_condition  where id='$id'  ");
   		}
   		// redirect('Editviewdetails.php');
   		
   	}	
   }
   
   
   
   
   ?>
<main class="content">
   <div class="container-fluid p-0">
      <h1 class="h3 mb-3"><strong>Edit View Details</strong></h1>
      <form method="post" enctype="multipart/form-data">
         <div class="row">
            <div class="col-sm-6 mb-3">
               <label for="pc" class="form-label">Package Name<span class="redStar">*</span></label>
               <select class="form-select mb-3" id="packageName" name="packageName" required onchange="nameChange()">
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
            <div class="col mb-3">
               <label for="placelocation" class="form-label">Location<span class="redStar">*</span></label>
               <!-- <label for="packageDesc" class="form-label">Things To Know About The Place</label> -->
               <input class="form-control" rows="3" id="placelocation" name="placelocation" required>
            </div>
         </div>
         <div class="row">
            <div class="col mb-3">
               <h5>Description (About Place)</h5>
               <textarea class="form-control" rows="3" id="placedesc" name="placedesc" required></textarea>
            </div>
         </div>
         <div class="row">
            <div class="col mb-3">
               <h5>Things To Know About The Place</h5>
               <textarea class="form-control" rows="3" id="thingstoknow" name="thingstoknow" required></textarea>
            </div>
         </div>
         <div class="row">
            <!-- photo 1 -->
            <div class="col-sm-4 mb-3">
               <label for="packagePhoto" class="form-label">Package Photo 1
               <?php if($one_status=='required')
                  {
                  ?> 
               <span class="redStar">*</span>
               <?php
                  }
                  ?>
               </label>
               <input class="form-control form-control-sm" type="file" id="photoone" name="photoone"  <?php echo $one_status; ?>>
            </div>
            <!-- photo 2 -->
            <div class="col-sm-4 mb-3">
               <label for="phototwo" class="form-label">Package Photo 2
               <?php if($two_status=='required')
                  {
                  ?> 
               <span class="redStar">*</span>
               <?php
                  }
                  ?>
               </label>
               <input class="form-control form-control-sm" type="file" id="phototwo" name="phototwo"  <?php echo $two_status; ?>>
            </div>
            <!-- photo 3 -->
            <div class="col-sm-4 mb-3">
               <label for="photothree" class="form-label">Package Photo 3
               <?php if($three_status=='required')
                  {
                  ?> 
               <span class="redStar">*</span>
               <?php
                  }
                  ?>
               </label>
               <input class="form-control form-control-sm" type="file" id="photothree" name="photothree"  <?php echo $three_status; ?>>
            </div>
            <!-- photo 4 -->
            <div class="col-sm-4 mb-3">
               <label for="photofour" class="form-label">Package Photo 4
               <?php if($four_status=='required')
                  {
                  ?> 
               <span class="redStar">*</span>
               <?php
                  }
                  ?>
               </label>
               <input class="form-control form-control-sm" type="file" id="photofour" name="photofour"  <?php echo $four_status; ?>>
            </div>
            <div class="col-sm-6 mb-3">
               <h5>Youtube video link</h5>
               <!-- <label for="packagePrice" class="form-label">Place Location</label> -->
               <input type="text" class="form-control" id="link" required name="link">
            </div>
         </div>
         <input type="submit" name="submit" class="btn btn-success" value="Submit">
      </form>
   </div>
 
</main>
<script src="..\..\asset\js_admin\app.js"></script>
<?php
   include 'footer.php';
   ?>
