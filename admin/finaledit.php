<?php
ob_start();
session_start();
if ($_SESSION['name'] != 'my_admin') {
    header('location: login.php');
}
include_once './database.php';
?>

<?php
if (isset($_REQUEST['id'])) {

$id = $_REQUEST['id'];
if(isset($_POST['form1'])){
    try {

        if (empty($_POST['resraurant_name'])) {
            throw new Exception("Restaurant can not be empty.");
        }

        if (empty($_POST['description'])) {
            throw new Exception("Description can not be empty.");
        }
        if (empty($_POST['palace'])) {
            throw new Exception("Place can not be empty.");
        }

       $statement = $db->prepare("UPDATE restaurant SET resraurant_name=?,palace=?,description=? WHERE id=?");
        $statement->execute(array($_POST['resraurant_name'],$_POST['palace'],$_POST['description'],$id));

        $success_message = "Restaurant details updated successfully.";
    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}
}
?>


<?php include("./header.php"); ?>
<h2>Edit Restaurant</h2>

<?php
if (isset($error_message)) {
    echo "<div class='error'>" . $error_message . "</div>";
}
if (isset($success_message)) {
    echo "<div class='success'>" . $success_message . "</div>";
}
?>
<form action="" method="post">
    <table class="tbl1">
        
        <?php
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
        }
$statement = $db->prepare("SELECT * FROM restaurant WHERE id=?");
$statement->execute(array($id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    ?>
        
        <tr><td>Restaurant Name</td></tr>
        <tr><td><input class="long" type="text" name="resraurant_name" value="<?php echo $row['resraurant_name'] ?>"></td></tr>
        <tr><td>Description</td></tr>
        <tr><td>
        <textarea name="description" cols="30" rows="10"  value=""><?php echo $row['description'] ?></textarea></td></tr>
        <tr><td>Restaurant place</td></tr>
<tr><td><input class="long" type="text" name="palace" value="<?php echo $row['palace'];?>"></td></tr>
        <tr><td><input type="submit" value="SAVE" name="form1"></td></tr>
    </table>	<?php } ?>
</form>
<?php include("./footer.php"); ?>			