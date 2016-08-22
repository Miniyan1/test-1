<?php
include './include/db.php';
$id = $_GET['id'];
$temp = $id;
$query = "SELECT * FROM `users`";
$result = mysqli_query($conn, $query);
while ($data = mysqli_fetch_assoc($result)) {
    if ($temp == $data['id']) {
        $del = "DELETE FROM `users` WHERE id=$temp";
        mysqli_query($conn, $del);
    }
}
if ($conn->query($del) === TRUE) {
    echo "Record deleted  successfully";
} else {
    echo "Error Deleting record: " . $conn->error;
}
?>



<?php
$conn = mysqli_connect('localhost','root','','project');
$id = $_GET['id'];
$query = "delete form `users` where id = 'id'";

$result = mysqli_query($conn, $query);

header('location: ./ahome.php');


?>