<?php

ob_start();
session_start();
if($_SESSION['name'] != "my_admin")
{
header('location: login.php');
}
include_once './database.php';
?>
<?php


if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $statement = $db->prepare("DELETE FROM hospital WHERE id=?");
    $statement->execute(array($id));

    $success_message1 = "hospital details has been deleted successfully.";
}
?>
<?php include('./header.php'); ?>
<h2>See hospital Details</h2>
<p>&nbsp;</p>
<?php
if (isset($error_message)) {
    echo "<div class='error'>" . $error_message . "</div>";
}
if (isset($success_message)) {
    echo "<div class='success'>" . $success_message . "</div>";
}
?>


<h2>hospital Details</h2>
<?php
if (isset($error_message)) {
    echo "<div class='error'>" . $error_message . "</div>";
}
if (isset($success_message)) {
    echo "<div class='success'>" . $success_message . "</div>";
}
if (isset($success_message1)) {
    echo "<div class='success'>" . $success_message1 . "</div>";
}
?>
<table class="tbl2" width="100%">
    <tr>
        <th width="5%">Serial</th>
        <th width="35%">hospital Name</th>
        <th width="35%">Location</th>
        <th width="20%">Action</th>
    </tr>

<?php
$i = 0;
$statement = $db->prepare("SELECT * FROM hospital ORDER BY name ASC");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $i++;
    ?>

        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['place']; ?></td>
            <td><a href="edit_hospital.php?id=<?php echo $row['id']; ?>">Edit
                &nbsp;|&nbsp;
                <a onclick='return confirmDelete();' href="see_hospital.php?id=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>

    <?php
}
?>




</table>


<?php include("footer.php"); ?>			
