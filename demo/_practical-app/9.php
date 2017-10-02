<?php 

	$cookie_name = "user";
	$cookie_value = "John Doe";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>

<?php 
	session_start();
	$_SESSION['value'] = 100;

?>

<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">
		<aside class="col-xs-4">
			<?php Navigation();?>
		</aside><!--SIDEBAR-->

		<article class="main-content col-xs-8">

		<?php 

			/*  
			Create a link saying Click Here, and set 
			the link href to pass some parameters and use the GET super global to see it

			Step 2 - Set a cookie that expires in one week

			Step 3 - Start a session and set it to value, any value you want.
			*/

			$id = "Marco";

		?>

			<p><a href="9.php?id=<?php echo $id; ?>">CLICK HERE</a></p>
			<p><?php if( isset($_GET['id']) ){ echo $_GET['id']; } ?> </p>

			<pre><?php print_r($_GET); ?></pre>

			<pre><?php print_r($_COOKIE); ?></pre>

			<pre><?php print_r($_SESSION); ?></pre>

		</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>