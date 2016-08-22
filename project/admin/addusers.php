<html>
<head>
    <title>Add Users</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script></head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="ahome.php">Company Logo</a>
    <ul class="nav navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="ahome.php">Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="summary.php">Transactions Summary</a></li>
        
        <li class="nav-item">
        <li class="nav-item active">
            <a class="nav-link" href="addusers.php">Add Users <span class="sr-only">(current)</span></a></li>
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
<div class="container">
    <div class="row">
        <form action="adduser.php" class="form" method="POST" />
            <div class="form-group"><label for="">First Name: </label><input type="text" class="form-control" name="first_name"></div>
            <div class="form-group"><label for="">Last Name: </label><input type="text" class="form-control" name="last_name"></div>
            <div class="form-group"><label for="">User Name: </label><input type="text" class="form-control" name="user_name"></div>
            <div class="form-group"><label for="">Address: </label><input type="text" class="form-control" name="address"></div>
            <div class="form-group"><label for="">Contact Number: </label><input type="text" class="form-control" name="contact_number"></div>
            <div class="form-group"><label for="">Date Of Birth: </label><input type="text" class="form-control" name="date_of_birth"></div>
            <div class="form-group"><label for="">Gender: <select>
       <option>Choose</option>
            <option>Male</option>
            <option>Female</option>
        </select></label></div>

        <div class="form-group"><label for="">User Type: <select>
       <option>Choose</option>
            <option>Normal</option>
            <option>Admin</option>
        </select></label></div>
        
            <div class="form-group"><label for=""></label><button type="text" class=" btn btn-info"> Submit</div>
            <a href="addusers.php" class="btn btn-default">Reset</a>

        </form>
        
        <div></div>

</div>
</body>
</html>