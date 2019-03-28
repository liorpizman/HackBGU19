<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>View Available Material</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="view_material.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
</head>

<body class="body">
	
	<img style="position: absolute; top: 13em; left: 7em; border: 0;" src="Rainforest-Logo.png"></a>



<div class="login-page">
  <div class="form">
    <form>

  
    <table class="greenTable">
            <thead>
            <tr>
            <th><div class="centerTxt">Course Id</div></th>
            <th><div class="centerTxt">Course Name</div></th>
            <th><div class="centerTxt">Description</div></th>
            <th><div class="centerTxt">Email</div></th>
            <th><div class="centerTxt">Attached Image</div></th>
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
      <button type="button" onclick="window.location.href='login.html'">Back</button>
      <p class="message"></p>
    </form>

  </div>
</div>




</body>
</html>

