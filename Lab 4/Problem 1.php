<?php
    if (isset($_GET["submit"])){
		echo htmlspecialchars($_GET["username"]);
	}
	
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";
	$address="";
	$err_address="";
	$gender="";
	$err_gender="";
	$Hobbies="";
	$err_Hobbies="";
	
	$bio="";
	$err_bio="";
	
	
	if(isset($_POST["submit"]))
	 {
		 
		 if(empty($_POST["name"]))
		 {
			 $err_name="[Name Required]";
		 }
		 
		 
		 else
		 {
			 $name=$_POST["name"];
		 }
		 
		 
		 
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
		 }
		 
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Must be in 6 charachters]";
		 }
		 
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Space not allowed]";
		 }
		 
		 else
		 {
			 $uname=$_POST["uname"];
		 }
		 
		 
		 
		 
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Space not allowed]";
		 }
		 
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		 
		 if(empty($_POST["cpass"]))
		 {
			 $err_cpass="[Password Required]";
		 }
		 elseif(strpos($_POST["cpass"]," "))
		 {
			 $err_cpass="[Space not allowed]";
		 }
		 
		 else
		 {
			 $cpass=$_POST["cpass"];
		 }
		 
		 if(empty($_POST["address"]))
		 {
			 $err_address="[Address Required]";
		 }
		 
		 
		 
		 else
		 {
			 $address=$_POST["address"];
		 }
		 
		 
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[Select a gender]";
		 }
		 
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 
		 if(!isset($_POST["Hobbies"]))
		 {
			 $err_Hobbies="[At least one option must be selected]";
		 }
		 
		 elseif(count($_POST["Hobbies"])<2)
		 {
			 $err_Hobbies="[At least 2 options need to be selected]";
		 }
		 
		 else
		 {
			
			 $Hobbies=$_POST["Hobbies"];
		 }
		 
		
		 
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[Bio Required]";
		 }
		 
		 else
		 {
			 $bio=$_POST["bio"];
		 
         }
         if(isset($_POST["submit"]))
         {
			echo "Name: ".$_POST["name"]."<br>"; 
			 
            echo "Username: ".$_POST["uname"]."<br>";
			
            echo "Password: ".$_POST["pass"]."<br>";
			
			echo "Confirm Password: ".$_POST["cpass"]."<br>";
			
			echo "Address: ".$_POST["address"]."<br>";
			
            echo "Gender: ".$_POST["gender"]."<br>";
			
			
            echo "Biography: ".$_POST["bio"]."<br>";
			
            echo "Date: ".$_POST["date"]."<br>";
			
            echo "E-Mail: ".$_POST["email"]."<br>";
			
         
			
            $var = $_POST["Hobbies"];
			
            echo "Hobbies: ";
			
            count($var);
            for($i=0;$i<count($var);$i++)
            {
                echo $var[$i].", ";
            }
         }
	 }
	
	

?>

<fieldset>
    <legend><b>Club Member Registration</b></legend>
	<form >
	     
		 
		 <table>
		        
				<tr>
				
				
					<td><span><b>Name</b></span></td>
					<td>:<input type="text" name="name" value="<?php echo $name;?>">
					<span><?php echo $err_name;?></span></td>

				</tr>
		 
		 
			
				<tr>
				
				
					<td><span><b>Username</b></span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><b>Password</b></span></td>
					<td>:<input type="password" name="pass" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Confirm Password</b></span></td>
					<td>:<input type="password" name="cpass" value="<?php echo $pass;?>">
					<span><?php echo $err_cpass;?></span></td>
				</tr>
				
				<tr>
				
				
					<td><span><b>Address</b></span></td>
					<td>:<input type="text" name="street address" value="<?php echo $address;?>">
					<span><?php echo $err_address;?></span></td>
					
					<tr>
					    <td></td>
						
					    <td><input type="text" name="city" size="6" placeholder="City">-<input type="text" name="city" size="6" placeholder="State"></td>
					    <span><?php echo $err_address;?></span></td>
					</tr>

				</tr>
				
				<tr>
					<td><span><b>Gender</b></span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
				
				
				
				<tr>
				
				
					<td><span><b>Hobbies</b></span></td>
					<td>:<input type="checkbox" name="Hobbies[]" value="Movies"><span>Movies</span>
					    <input type="checkbox" name="Hobbies[]" value="Music"><span>Music</span>
						<input type="checkbox" name="Hobbies[]" value="Games"><span>Games</span>
						<input type="checkbox" name="Hobbies[]" value="Sports"><span>Sports</span>
						<span><?php echo "&nbsp  ".$err_Hobbies;?></span></td>
				</tr>
				
				
				
				
				
				
				
				<tr>
	 				<td><span><b>Bio</b></span></td>
					 <td>:<textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "&nbsp".$err_bio;?></span></td>
				</tr>
				
				
				
				<tr>
					<td><span><b>Email</b></span></td>
					<td>:<input type="email" name="email"></td>
				</tr>
				
				<tr>
					<td><span><b>Mobile/Phone</b></span></td>
					<td>:<input type="tel" name="phone_no"></td>
				</tr>
				
				
				
				<tr>
					<td><span><b>Date</b></span></td>
					<td>:<input type="date" name="date"></td>
				</tr>
			</table>
			
			
			
			<br>
			<input type="submit" name="submit" value="submit">
	
	
	
	     <input type="text" size="6" name="username"> 
		 <input type="submit" name="submit" value="Submit">
	</form>	 
</fieldset>	