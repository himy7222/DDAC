<?php
include_once'header.php';

?>
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>BOOK CONTAINER</h2
	<!-- form -->
<form action="includes/result.inc.php" method="POST">
<!---->

<?php

$dbServername = "ibrahimcms.mysql.database.azure.com";
$dbUsername = "ibrahim@ibrahimcms";
$dbPassword = "iI9141963";
$dbName = "CMS";


//php fucntion conncetion

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


		$sql = "SELECT * FROM list WHERE 1";
		$result = mysqli_query($conn, $sql);

		echo '<label for="ct">Container Type: </label>';
		echo "<select name='Container_type'>";
		while ($row = mysqli_fetch_array($result)) {
		echo "<option value ='" . $row['c_type'] ."'>" .$row['c_type'] ."</option>";
		}
		echo "</select>";

?>
      <br>
<!---->

<?php

$dbServername = "ibrahimcms.mysql.database.azure.com";
$dbUsername = "ibrahim@ibrahimcms";
$dbPassword = "iI9141963";
$dbName = "CMS";


//php fucntion conncetion

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


		$sql = "SELECT * FROM list WHERE 1";
		$result = mysqli_query($conn, $sql);

		echo '<label for="cf">Container From: </label>';
		echo "<select name='Container_from'>";
		while ($row = mysqli_fetch_array($result)) {
		echo "<option value ='" . $row['c_to'] ."'>" .$row['c_to'] ."</option>";
		}
		echo "</select>";

?>
      <br>
<!---->

<?php

$dbServername = "ibrahimcms.mysql.database.azure.com";
$dbUsername = "ibrahim@ibrahimcms";
$dbPassword = "iI9141963";
$dbName = "CMS";


//php fucntion conncetion

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


		$sql = "SELECT * FROM list WHERE 1";
		$result = mysqli_query($conn, $sql);

		echo '<label for="cf">Container To: </label>';
		echo "<select name='Container_to'>";
		while ($row = mysqli_fetch_array($result)) {
		echo "<option value ='" . $row['c_from'] ."'>" .$row['c_from'] ."</option>";
		}
		echo "</select>";

?>
      <br>
<!---->


<?php

$dbServername = "ibrahimcms.mysql.database.azure.com";
$dbUsername = "ibrahim@ibrahimcms";
$dbPassword = "iI9141963";
$dbName = "CMS";


//php fucntion conncetion

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


		$sql = "SELECT * FROM list WHERE 1";
		$result = mysqli_query($conn, $sql);

		echo '<label for="cd">Departure: </label>';
		echo "<select name='Container_departure'>";
		while ($row = mysqli_fetch_array($result)) {
		echo "<option value ='" . $row['c_dep'] ."'>" .$row['c_dep'] ."</option>";
		}
		echo "</select>";

?>
      <br>
<!---->
<?php
//session awarness
if(isset($_SESSION['u_name'])){

	 echo '<label for="cd">Client: </label>';
	 echo "<select name='Container_client'>";
	 echo $_SESSION['u_name'];
	 echo "<option value ='" . $_SESSION['u_name'] ."'>" .$_SESSION['u_name'] ."</option>";

}
		echo "</select>";
?>
     <br>
		 		 <button type= "submit" name= "submit" style= width:150px;>Book</button>
		 </form>

		 <br>

<!----------------->
			<?php
			include_once'Footer.php';
			?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>



	</body>
</html>
