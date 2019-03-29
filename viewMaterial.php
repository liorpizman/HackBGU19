<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>View Available Material</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="view_materials.css">
</head>

<body class="body">
	
<img style="position: absolute; top: 18em; left: 12em; height: 60%; width: 70% ; border: 0;" src="Rainforest-Logo.png"></a>


<div class="login-page">
  <div class="form"> 
    <form>
    <table class="greenTable" id="notebooks">
            <thead>
            <tr>
            <th><div class="centerTxt">Course Id</div></th>
            <th><div class="centerTxt">Course Name</div></th>
            <th><div class="centerTxt">Description</div></th>
            <th><div class="centerTxt">Email</div></th>
            <th><div class="centerTxt">Published Date</div></th>
            </tr>
            </thead>
            <tfoot>
            <tr>
            <td colspan="5">
            <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
            </td>
            </tr>
            </tfoot>
            <tbody>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname="rainforestdb";
            $connect = new mysqli($servername, $username, $password, $dbname);
            mysqli_set_charset($connect,"utf8");
            if (!$connect) {
                die(mysql_error());
            }
            $sql = "SELECT * FROM `materials` LIMIT 0, 100 "; 
            $result = mysqli_query($connect, $sql);
            while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['courseID']?></td>
                    <td><?php echo $row['courseName']?></td>
                    <td><?php echo $row['descP']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['dateP']?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
            </tr>
            </table>
      <button class="btn" type="button" onclick="window.location.href='login.html'">Back</button>
      <button class="btn" type="button" onclick="window.location.href='addItem.html'">Add Material</button>
      <p class="message"></p>
    </form>

  </div>
</div>


</body>
</html>




