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

        if (empty($_POST['name'])) {
            throw new Exception("education can not be empty.");
        }

        if (empty($_POST['description'])) {
            throw new Exception("Description can not be empty.");
        }
        if (empty($_POST['place'])) {
            throw new Exception("Place can not be empty.");
        }

       $statement = $db->prepare("UPDATE education SET name=?,place=?,description=? WHERE id=?");
        $statement->execute(array($_POST['name'],$_POST['place'],$_POST['description'],$id));

        $success_message = " education details updated successfully.";
    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}
}
?>


<?php include("./header.php"); ?>
<h2>Edit education</h2>

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
$statement = $db->prepare("SELECT * FROM education WHERE id=?");
$statement->execute(array($id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    ?>
        
        <tr><td>educational institution Name</td></tr>
        <tr><td><input class="long" type="text" name="name" value="<?php echo $row['name'] ?>"></td></tr>
        <tr><td>Description</td></tr>
        <tr><td>
        <textarea name="description" cols="30" rows="10"  value=""><?php echo $row['description'] ?></textarea></td></tr>
        <tr><td>park place</td></tr>
<tr><td><input class="long" type="text" name="place" value="<?php echo $row['place'];?>"></td></tr>
        <tr><td><input type="submit" value="SAVE" name="form1"></td></tr>
    </table>	<?php } ?>
</form>
<?php include("./footer.php"); ?>			<?php
	