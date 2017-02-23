<!DOCTYPE html>
<?php
  require ('conn.php');

?>
<html>
	<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="ajax.js"></script>

	</head>
  <?php
  $model_id = "SELECT * FROM models WHERE 	PRODUCT_ID = ".$_GET['id']." AND TYPE=".$_GET['type'];
  $result_m = $conn->query($model_id);
  $row_m = mysqli_fetch_assoc($result_m);
  if(!isset($_POST['model'])){
    $model = $row_m['ID'];
  }
  echo "<body onload=\"changeModel(".$row_m['ID'].", ".$_GET['id'].",".$_GET['type'].")\">";
   ?>

		<div id="wrapper">
			<div id="page-content-wrapper">

				<div class="container">
          <div class="page-header">
            <h1>Example page header <small>Subtext for header</small></h1>
          </div>
          <ul class="nav nav-tabs">
            <li role="presentation"><a href="index.php">Home</a></li>
            <?php
            $sql_names = "SELECT * FROM products";
            $result = $conn->query($sql_names);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "  <li role='presentation' class='dropdown'>
                          <a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
                            ".$row['NAME']." <span class='caret'></span>
                          </a>
                          <ul class='dropdown-menu'>
                            <li><a href='product.php?id=".$row['ID']."&type=1'>Mobile</a></li>
                            <li><a href='product.php?id=".$row['ID']."&type=2'>Tablet</a></li>
                          </ul>
                        </li>";
              }
            }
            ?>
          </ul>
          <div class="panel panel-default">
            <div class="panel-body" id ="model_select">
            </div>
          </div>
				</div>
			</div>
		</div>
	</body>
</html>
