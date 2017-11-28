<?php 
	require ('templates/header.html');
		require ('orderPHP.php');

?>


<html>

<script>
function validateForm() {
    
	var first_name = document.forms["myForm"]["firstname"].value;
	var last_name = document.forms["myForm"]["lastname"].value;
	var phone_num = document.forms["myForm"]["phone"].value;
	var address = document.forms["myForm"]["address"].value;
	
	if (first_name == "") {
        alert("First name must be filled out.");
        return false;
    }
	
	if (last_name == "") {
        alert("Last name must be filled out.");
        return false;
    }
	
	if (phone_num == "") {
        alert("Phone must be filled out.");
        return false;
    }
	
	if (address == "") {
        alert("Address must be filled out.");
        return false;
    }
	
	if(myFunction()==false){
		alert("Invalid phone number.");
		return false;
	}
}

function myFunction() {
    var x, text;

    // Get the value of the input field with id="phone"
    x = document.getElementById("phone").value;

    // If x is Not a Number
    if (isNaN(x)) {
        return false;
    } 
    
}	
</script>

<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" form name="myForm" onsubmit="return validateForm()" >
  <fieldset>
    <legend>Personal information:</legend>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" maxlength="50" value="<?php echo $firstname ?>" />
        </div>
        <span class="text-danger"><?php echo $nameError; ?></span>
    </div>
    
	<div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			<input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" maxlength="50" value="<?php echo $lastname ?>" />
        </div>
        <span class="text-danger"><?php echo $nameError; ?></span>
    </div>

	
	
	<!--	Last name : 
    <input type="text" name="lastname" value="eg : Lim">
	<br><br> -->
	
	Gender : 
	<select name="gender">
		<option value="male">Male</option>
		<option value="female">Female</option>
	</select>
    <br><br>
	
	<div class="form-group">
        <div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone Number" maxlength="50" value="<?php echo $phone ?>" />
        </div>
        <span class="text-danger"><?php echo $phoneError; ?></span>
    </div>
	
	
	<div class="form-group">
		<div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			<input type="text" name="address" class="form-control" placeholder="Enter Address" maxlength="70" value="<?php echo $address ?>" />
		</div>
        <span class="text-danger"><?php echo $addressError; ?></span>
    </div>
	

	
	<legend>Foods Order :</legend>
    Food's Code :
    <input type="radio" name="order" value="Bundle A" checked> Bundle A
	<input type="radio" name="order" value="Bundle B"> Bundle B
	<input type="radio" name="order" value="Bundle C"> Bundle C
	<input type="radio" name="order" value="Bundle D"> Bundle D
	<input type="radio" name="order" value="Bundle E"> Bundle E
	<input type="radio" name="order" value="Bundle F"> Bundle F
    <br><br>
	
	Remarks :
	<textarea name="message" rows="10" cols="20"placeholder="Remarks ..."></textarea>
	<br><br><br><br>
	
	
	
    
	<input type="submit" name="order-submit" value="Submit">
	
  </fieldset>
</form>

</body>
</html>



<?php 
	require ('templates/footer.html');
?>