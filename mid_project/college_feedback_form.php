<?php
	$name="";//every field has a variable, and every field with error also has a variable
	$err_name="";//this all has a value and this are called empty string
	$id="";
	$err_id="";
	$couse="";
	$err_course="";
	$gender="";
	$err_gender="";
	$profession="";
	$err_profession="";
	$bio="";
	$err_bio="";
	$hobb=[];
	$err_hobb="";
	$haserror=false; 
	$array= array("Teacher","students","Service","others");
	
	
	function hobbyexixst($hobbb){
		Global $hobb;
		foreach ($hobb as $h){
			if($h==$hobbb) return true;
		}
		return false;
		
	};
	
		if(isset ($_POST["submit"])){
			if(empty($_POST["name"])){
			$haserror=true;
			$err_name="name required";
			}elseif(strlen($_POST["name"])<="2"){
			$haserror=true;
			$err_name="name is less then 2 digits";
			}
			else{
			$name=$_POST["name"]; 
			}
			if(empty($_POST["id"])){
			$haserror=true;
			$err_id="id required";
		}else{
			$id=$_POST["id"];
		}
		if(empty($_POST["course"])){
			$haserror=true;
			$err_course="course required";
		}else{
			$course=$_POST["course"];
			if(!isset($_POST["gender"])){
			$haserror=true;
			$err_gender="gender required";
			}else{
				$gender=$_POST["gender"];
			}
			if(!isset($_POST["hobb"])){	
				$haserror=true;
				$err_hobb="click something";
			}
			else{
				$hobb=$_POST["hobb"];
			}
			if(!isset($_POST["profession"]))
			{
				$haserror=true;
				$err_profession="enter your something";
			}
			else{
				$profession=$_POST["profession"];
			}
		if(empty($_POST["bio"])){
			$haserror=true;
			$err_bio="bio required";
		}else{
			$bio=$_POST["bio"];
		}
		
		if(!$haserror){
	echo $_POST["name"]."<br>";
	echo $_POST["id"]."<br>";
	echo $_POST["course"]."<br>";
	echo $_POST["gender"]."<br>";
	echo $_POST["profession"]."<br>";
	echo $_POST["bio"]."<br>";
	$hobb=$_POST["hobbies"];
	foreach($hobb as $e){
			echo "$e<br>";
	}
	}
			
		}
		}
		
		
	
?>


<html>
<fieldset>
<form>
<table>
<?php
$backColor="green";$frontColor="red";$imageWidth="80px";$imageHeight="80px";
?>
<table>
	<tr>
	<td rowspan="2"><img src="aiub_logo.jpg" width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>" /></td>
	<td><h2>American international </h2> 
	</tr>
	<tr>
		<td>
	<h2>University -<span style="background-color:<?php echo $backColor ?>;color:<?php echo $frontColor ?>">
Bangladesh</h2></td>
	</tr>
	<tr><td><h1>FEED BACK</h1></td></tr>
	<tr>
	<td align="center">Name</td>
			<td><input type="text" placeholder="text" name="name" value="<?php echo $name?>"></td>
			<td><span><?php echo $err_name ;?> </span></td>
	</tr>
	<tr>
	<td align="center">id</td>
			<td><input type="text" placeholder="text" name="id" value="<?php echo $id?>"></td>
			<td><span><?php echo $err_id ;?> </span></td>
	</tr>
	<tr>
			<td> gender</td>
			<td><input type="radio" name="gender" value="male"<?php if($gender=="male")echo "checked"; ?>>male<input type="radio" name="gender" value="female"<?php if ($gender=="female") echo "checked";?>>female</td>
			<td><?php echo $err_gender;?></td>
		</tr>
		<td align="center">id</td>
			<td><input type="text" placeholder="text" name="course" value="<?php echo $course?>"></td>
			<td><span><?php echo $err_course ;?> </span></td>
	</tr>
	<tr>
			<td><select name="profession">
				<option selected disabled>none</option>
				<?php
					$selected="";
					foreach($array as $pro){
						if($pro==$profession)
						echo "<option selected>$pro</option>";
						
					else
						echo "<option>$pro</option>";
					}
					
					
				?>
				
			</select></td>
			
			<td><?php echo $err_profession;?></td>
		</tr>
		
		<tr>
			<td><textarea placeholder="write your query" name="bio"><?php echo $bio?></textarea><td><!-- in bio storing data is a bit different here it is-->
			<td><span><?php echo $err_bio; ?></span></td>
		</tr>
		<tr>
			<td>checklist</td>
			<td><input type="checkbox" name="hobb[]" value="hide_identy"<?php if(hobbyexixst("hide_identy")) echo"checked";?>>hide_identy<input type="checkbox" name="hobb[]" value="hide_pic"<?php if (hobbyexixst("hide_pic")) echo"checked";?>>hide_pic<input type="checkbox" name="hobb[]" value="open"<?php if(hobbyexixst("open"))echo "checked";?>>open<td>
			<!--to store hobbies data in a variavle we need to keep it as like as this way.if condition has to be used and no $sign will be used in the valriable and no = sign too.-->
			<td><?php echo $err_hobb; ?></td>
		</tr>
		<tr>
				<td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td>
		<tr>
	
</table>
</form>
</fieldset>
</html>