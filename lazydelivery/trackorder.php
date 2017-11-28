<?php 
	require ('templates/header.html');
?>

<style>
input {
    width: 200px;
    padding: 2px;
    border: 1px solid #aaa;
}

form{
	 width: 221px;
    color : #747862;
    height:20px
    border:0;
    padding:4px 8px;
    margin-bottom:0px;
}


</style>

<body>

<article>

<div>
<style>

</style>
<form>

	<label for="ordernumber" style="text-align:center;"><h4>Please Enter Your Order Number.</h4></label>
	<input type="text" name="ordernumber">
    <br><br><br><br>            
    <input type="submit" value="Submit" />
	
	
	
</form>
</div>
</article>
</body>



<?php
	require('templates/footer.html');
?>