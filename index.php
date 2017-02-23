<!DOCTYPE html>
<?php
  require ('conn.php');
?>
<html>
	<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="page-content-wrapper">

				<div class="container">
          <div class="page-header">
            <h1>Example page header <small>Subtext for header</small></h1>
          </div>
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">Home</a></li>
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
				</div>
			</div>
		</div>
	</body>
</html>
