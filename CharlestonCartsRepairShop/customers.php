<?php
  include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title>Charleston Carts Repair Shop</title>
  <link rel="stylesheet" type="text/css" href="Styles.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <script data-require="ui-bootstrap@*" data-semver="0.10.0" src="https://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.10.0.js"></script>
  </head>
  <body>

    <div class="sidenav">
        <?php echo '<a href="index.php">Home</a>';?>
        <?php echo '<a href="customers.php">Customers</a>';?>
        <a href="">Inventory</a>
        <a href="">Repairs</a>
      </ul>
    </div>

    <div class="content">
      <h1>Charleston Carts Repair Shop</h1>

        <div class="container" style="border: 1px solid #428bca;" ng-app="sortApp" ng-controller="mainController">

    <h1>Customer List</h1>
    <br />
    <form style="background:#428bca;padding-top:14px;padding-bottom:2px;width:100%;" action="search.inc.php" method="GET">
      <div class="form-group">
        <div class="input-group" style="padding-left:10px;">
          <div class="input-group-addon"><i class="fa fa-search"></i></div>
          <input type="text" name="search" style="width:300px;" class="form-control" placeholder="Search a customer..." ng-model="searchPerson" value="Search">
        </div>
      </div>
    </form>


      <?php
        // $min_return = 0;
        $max_return = 25;
        $page = 0;
        $previousPage;
        $nextPage;
        $sql = "SELECT * FROM customers LIMIT $max_return OFFSET $page;";
        $result = mysqli_query($conn, $sql);

        echo '<table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <td>
                      ID
                  </td>
                  <td>
                      First Name
                  </td>
                  <td>
                      Last Name
                  </td>
                  <td>
                      Email
                  </td>
                  <td>
                      Phone Number
                  </td>
                  <td>
                      Message
                  </td>
                </tr>
              </thead>';

        echo "<tbody>";
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr ng-repeat='roll in People | orderBy:sortType:sortReverse | filter:searchPerson'><td>" . $row["customer_id"] .
            "</td><td>" . $row["customer_first"] . "</td><td>" . $row["customer_last"] . "</td><td>" . $row["customer_email"] .
            "</td><td>" . $row["customer_phone"] . "</td><td>" . $row["customer_message"] . "</td></tr>";
          }
        }
        else {
          echo "0 results";
        }
        $conn->close();
        echo "</tbody>";
        echo "</table>";
        echo "<p>";
        echo '<button type="button" class="w3-button w3-round-xxlarge w3-border w3-border-blue" name="table_previous">Previous</button>';
        echo '<button type="button" class="w3-button w3-round-xxlarge w3-border w3-border-blue" name="table_next">Next</button>';
        echo "</p>";
      ?>

    <form action="includes/customerEntry.inc.php" method="POST">
      <input type="text" name="first" placeholder="Firstname" required>
      <br>
      <input type="text" name="last" placeholder="Lastname" required>
      <br>
      <input type="email" name="email" placeholder="E-mail" required>
      <br>
      <input type="tel" name="phone" placeholder="Phone # 123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
      <br>
      <input type="textarea" name="message" rows="2" cols="25" placeholder="Message" required>
      <br>
      <button type="submit" class="w3-button w3-round-xxlarge w3-border w3-border-blue" name="submit">Submit</button>
    </form>
        </div>
  </div>
  </body>
</html>
