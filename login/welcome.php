<?php
  require('../connect.php');

	$sql = "SELECT * FROM pool WHERE user_id = $userId ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

?>
<html>

   <head>
      <title>Welcome </title>
        <link rel="stylesheet" href="../assets/css/global.css">
   </head>

   <body>
     <?php
       include('../core/alerts.php');
      ?>
      <h1>Welcome <?php echo $_SESSION['login_user']; ?></h1>
	  <?php
		if($count>0){
			$routeId = $row['route_id'];
			$sql = "SELECT * FROM route WHERE route_id = '$routeId'";
			$result_2 = mysqli_query($db,$sql);
			$row_2 = mysqli_fetch_array($result_2,MYSQLI_ASSOC);
			$_SESSION['pool_id'] = $row['pool_id'];
			echo '<div>
					<div>Route is : '.$row_2['status'].'</div>
					<div><a href = "messaging.php">Message</a></div>
				</div>';
			// may be added later, cuz coordinates wouldn't exactly look appealing to the users
			//<div>Route Origin is : ".$origin."</div>
			//<div>Route Destination is : ".$dest."</div>
		}

	  ?>
		<h2><a href = "profile.php">Profile</a></h2>

        <h2><a href = "<?php echo BASE_URL ; ?>/market/myactive_pools.php">My active Pools</a></h2>
        <h2><a href = "<?php echo BASE_URL ; ?>/route/create_src.php">Create Route</a></h2>
        <h2><a href = "<?php echo BASE_URL ; ?>/market/testmarket.php">Market</a></h2>
          <h2><a href = "settings.php">Settings</a></h2>
          <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
</html>
