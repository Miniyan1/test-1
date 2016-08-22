<html>
<head>
    <title>About Developers</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script></head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="home.php">Company Logo</a>
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="home.php">Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="summary.php">Transactions Summary</a></li>

        <li class="nav-item">
        <li class="nav-item active">
            <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
        </li>
    </ul>
    <form class="form-inline pull-xs-right">
        <input class="form-control" type="text" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</nav>

<br/><br/><br/>
<p align="center">Welcome User: **** </p>
<div class="container">
    <div class="row">
        <h5><p> Hello Admin. Welcome We Are very glad that you have used our software.</p></h5>
        <p><b>This Software Has Been Developed By Ashwin Rana. This is the </b>
            <div style="float: left; margin-left:2px;">
        <p><h6><u>Contact Detail:</u></h6></p>
        <p><h7>Name: <u>Babin Rana</u></h7></p>
        <p><h7>Address: <u>Kalanki-14, Kathmandu</u></h7></p>
        <p><h7>Contact Number: <u>9845688436</u></h7></p>
        <p><h7>Email: <u>ashwinrana10@gmail.com</u></h7></p>
    </div>
        <div style="float: right; margin-right:2%;">
            <p><h6><u>Contact Detail:</u></h6></p>
            <p><h7>Name: <u>Miniyan Prajuli</u></h7></p>
            <p><h7>Address: <u>Kalanki-14, Kathmandu</u></h7></p>
            <p><h7>Contact Number: <u>01 - 4032895</u></h7></p>
            <p><h7>Email: <u>miniyanprajuli@gmail.com</u></h7></p>
    </div>
</div>
<div class=""container">

</div>
<nav class="navbar navbar-light bg-faded">
<div class="container">
    <div class="row">
        <form action="adduser.php" class="form" method="POST" />
        <div class="form-group"><label for="">User Name: </label><input type="text" class="form-control"
                                                                     name="first_name"></div>
        <div class="form-group"><label for="">Your Message: </label><input type="textarea" class="form-control"
                                                                           maxlength="250"
                                                                           size="50"></div>
        <div style="float: left; margin-left:2px;" class="form-group"><label for=""></label><button type="text" class="
        btn
        btn-info">Submit
                Message</div>

        <div style="float: right; margin-right:2%;"><a href="./about.php" class="btn btn-secondary">Reset</a></div>

        </form>

        <div></div>

    </div>
</body>
</html>