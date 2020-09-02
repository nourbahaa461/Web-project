
<?php
require_once('config.php');

$id=$_REQUEST['id'];

$sql = "DELETE * FROM 'users' WHERE id=$id";

if (mysqli_query($link, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
mysqli_close($link);
?>
