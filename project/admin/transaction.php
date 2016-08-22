<?php
$conn = mysqli_connect('localhost','root','','project');
$id = $_GET['id'];
$temp = $id;
$query = "SELECT * FROM `users`";
$result = mysqli_query($conn, $query);
while ($data = mysqli_fetch_assoc($result)) {
    if ($data['id'] == $temp) {
        $fname = $data['first_name'];
        $lname = $data['last_name'];
    }
}
?>
<html>
<head>
    <title>Users Transaction</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script></head>
<body>
<nav class="navbar navbar-light bg-faded">
    <a class="navbar-brand" href="ahome.php">Company Logo</a>
    <ul class="nav navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="ahome.php">Home </a>
        </li>
        <li class="nav-item">
         <li class="nav-item active">
            <a class="nav-link" href="transaction.php">Transactions<span class="sr-only">(current)</span></a></li>
        
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
<br/><br/><br/>
<h3><p align="center">Account Of : <?php echo $fname; ?> </p></h3>
<div class="container">
    <div class="row">
        <form action="#" class="form" method="POST" />
        <h1>Edit Data Of:</h1>
        <strong>ID:</strong> <?php echo $id; ?><br/>
        <div class="form-group"><label for="">User Name: </label><input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>"></div>
        <div class="form-group"><label for="">Total Balance: </label><input type="text" class="form-control" name="balance" value=""></div>
       <div class="form-group"><label for="">Action: <select>
       <option>Choose</option>
            <option>Add (+)</option>
            <option>Subtract (-)</option>
        </select></label></div>
        <div class="form-group"><label for="">Amount: </label><input type="text" class="form-control" name="balance" value=""></div>
        <input type="hidden" name="id" value="<?php echo $id ?>" >
        <div class="form-group"><label for=""></label><button type="submit" class=" btn btn-info">Update</div>
     <div class="form-group"><label for=""></label>
<div class="form-group"><label for=""></label><a href="./list.php"><button type="reset" class="btn btn-default">Cancel</button></a></button></div>
        </form>
    </div>
</div>
</body>
</html>