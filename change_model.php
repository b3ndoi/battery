<?php
require ('conn.php');
$model = $_POST['model'];
$model_b = "SELECT * FROM models WHERE	ID = ".$model;
$result_b = $conn->query($model_b);
$row_b = mysqli_fetch_assoc($result_b);


?>
<table class='table'>
  <tbody>
    <tr>
      <td id='model_image'><?php     echo "<img src='images/".$row_b['PICTURE']."' class='img-responsive'>"; ?></td>
      <td  width='60%'>
        <div class="form-group">
          <label for="exampleSelect1">Select a model</label>
          <?php
            echo "<select class='form-control' id='exampleSelect1'  onchange=\"changeModel(this.value, ".$_POST['id'].",".$_POST['type'].")\">";
            $sql_names = "SELECT * FROM models WHERE 	PRODUCT_ID = ".$_POST['id']." AND TYPE=".$_POST['type'];
            $result = $conn->query($sql_names);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                if($row['ID']==$model){
                  echo "<option value=\"".$row['ID']."\" selected>".$row['NAME']."</option>";}
                else{
                  echo "<option value=\"".$row['ID']."\">".$row['NAME']."</option>";
                }
              }
            }
            ?>
          </select>
        </div>
        <div id="tools" class="btn-group btn-group-justified" data-toggle="buttons">

          <label class="btn btn-primary active btn-lg " id="option1">
            <input type="radio" name="options"  autocomplete="off" value=1 checked="checked"> Battery without <br>tools
          </label>
          <label class="btn btn-primary btn-lg" id="option2">
            <input type="radio" name="options" autocomplete="off" value=2> Battery with <br>tools
          </label>
        </div>
        <?php


          echo "  <a id='w1' href='".$row_b['A_LINK']."'><button type='button' class='btn btn-warning btn-lg btn-block '>Buy on Amazon</button></a>";
          echo "  <a id='w2' href='".$row_b['A_LINK_B']."' style='display: none;'><button type='button' class='btn btn-warning btn-lg btn-block '>Buy on Amazon</button></a>";
        ?>

      </td>
    </tr>
  </tbody>
</table>
<script>

    $("#option1").click(function() {
      $("#w1").show();
      $("#w2").hide();
    });
    $("#option2").click(function() {
      $("#w1").hide();
      $("#w2").show();
    });

</script>
