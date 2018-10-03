<?php
ob_start();
session_start();
if ($_SESSION['name'] != 'my_admin') {
    header('location: login.php');
}
include_once './database.php';
?>

<?php
if (isset($_POST['form1'])) {


    try {

        if (empty($_POST['r_name'])) {
            throw new Exception("Title can not be empty.");
        }

        if (empty($_POST['description'])) {
            throw new Exception("Description can not be empty.");
        }
        if (empty($_POST['r_place'])) {
            throw new Exception("Place can not be empty.");
        }

        $statement = $db->prepare("SHOW TABLE STATUS LIKE 'restaurant'");
        $statement->execute();
        $result = $statement->fetchAll();
        foreach ($result as $row)
            $new_id = $row[10];

        $up_filename = $_FILES["restaurant_image"]["name"];
        $file_basename = substr($up_filename, 0, strripos($up_filename, '.'));
        $file_ext = substr($up_filename, strripos($up_filename, '.'));
        $f1 = $new_id . $file_ext;

        if (($file_ext != '.png') && ($file_ext != '.jpg') && ($file_ext != '.jpeg') && ($file_ext != '.gif'))
            throw new Exception("Only jpg, jpeg, png and gif format images are allowed to upload.");

        move_uploaded_file($_FILES["restaurant_image"]["tmp_name"], "../restaurant_image/" . $f1);

        $statement = $db->prepare("INSERT INTO restaurant(resraurant_name,description,restaurant_image,palace) VALUES(?,?, ?, ?)");
        $statement->execute(array($_POST['r_name'], $_POST['description'], $f1,$_POST['r_place']));

        $success_message = "Restaurant details inserted successfully.";
    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}
?>


<?php include("./header.php"); ?>
<h2>Add New Restaurant</h2>

<?php
if (isset($error_message)) {
    echo "<div class='error'>" . $error_message . "</div>";
}
if (isset($success_message)) {
    echo "<div class='success'>" . $success_message . "</div>";
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <table class="tbl1">
        <tr><td>Restaurant Name</td></tr>
        <tr><td><input class="long" type="text" name="r_name"></td></tr>
        <tr><td>Description</td></tr>
        <tr><td>
        <textarea name="description" cols="30" rows="10"></textarea></td></tr>
        <tr><td>Restaurant place</td></tr>
        <tr><td><input class="long" type="text" name="r_place"></td></tr>
        <tr><td>Image</td></tr>
        <tr><td><input type="file" name="restaurant_image"></td></tr>
        <tr><td><input type="submit" value="SAVE" name="form1"></td></tr>
    </table>	
</form>
<?php include("./footer.php"); ?>			