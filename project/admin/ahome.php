<html>
<head>
    <title>User List for Admin</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script></head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="ahome.php">Company Logo</a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="summary.php">Transactions Summary</a></li>
        
        <li class="nav-item">
            <a class="nav-link" href="addusers.php">Add Users</a></li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>
    </ul>
    <form class="form-inline pull-xs-right">
        <input class="form-control" type="text" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</nav>
<p align="center">Welcome Admin: **** </p>
<br>
<div style="float: right; margin-right:2%;"><a href="./ahome.php" class="btn btn-secondary">Refresh Record</a></div>
<?php
include './include/db.php';
 $query = "SELECT * FROM `users`";
$result = mysqli_query($conn, $query);
$i="1";
?>
<br/><br/><br/>
<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th> S.NO</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Date Of Birth</th>
                <th>Option</th>
            </tr>

            <?php
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['first_name']; ?></td>
                <td><?php echo $data['last_name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['Address']; ?></td>
                <td><?php echo $data['contact_number']; ?></td>
                <td><?php echo $data['date_of_birth']; ?></td>
                <td><a href="transaction.php?id=<?php echo $data['id']; ?>">Transactions</a><pre></pre><a href="delete.php?id=<?php echo $data['id']; ?>">Delete?</a> </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div></body>
</html>