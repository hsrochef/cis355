
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD Grid</h3>
            </div>
            <div class="row">
			    <p>
                    <a href="create.php" class="btn btn-success">Create</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th>Mobile Number</th>
					  <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php
                       include 'database.php';
                       $pdo = Database::connect();
                       $sql = 'SELECT * FROM customers ORDER BY id DESC';
                       foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<td>'. $row['name'] . '</td>';
                                echo '<td>'. $row['email'] . '</td>';
                                echo '<td>'. $row['mobile'] . '</td>';
                                echo '<td><a class="btn" href="read.php?id='.$row['id'].'">Read</a></td>';
                                echo '</tr>';
                       }
                       Database::disconnect();
                      ?>
                  <tr><td>Deokhee</td><td>deokhee@corser.com</td><td>321-654-0987</td><td><a class="btn" href="read.php?id=2">Read</a></td></tr><tr><td>George</td><td>george@corser.com</td><td>123-456-7890</td><td><a class="btn" href="read.php?id=1">Read</a></td></tr>                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>