<?php 
	require ('templates/header.html');
?>

<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM orders WHERE userId=".$_SESSION['user']);

?>

<div class="container" style="height:700px;">
  <h2>Order History</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Gender</th>
		<th>Phone</th>
        <th>Address</th>
		<th>FoodCode</th>
        <th>Remark</th>

      </tr>
    </thead>
    <tbody>
       <!--Use a while loop to make a table row for every DB row-->
        <?php while($orderRow=mysql_fetch_array($res)) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $orderRow['firstName']; ?></td>
			<td><?php echo $orderRow['lastName']; ?></td>
            <td><?php echo $orderRow['gender']; ?></td>
            <td><?php echo $orderRow['phoneNUmber']; ?></td>
            <td><?php echo $orderRow['address']; ?></td>
            <td><?php echo $orderRow['foodCode']; ?></td>
			<td><?php echo $orderRow['remark']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
  </table>
</div>

<?php
	require('templates/footer.html');
?>