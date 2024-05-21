<?php
/* if(isset($_GET['submit'])){
    echo $_GET['email'];
    echo $_GET['title'];
    echo $_GET['ingredients'];
} */
if(isset($_POST['submit'])){
    echo $_POST['email'];
    echo $_POST['title'];
    echo $_POST['ingredients'];
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('./templates/header.php');?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" method = "POST" class="white">
        <label for="">Your Email:</label>
        <input type="email" name="email" id="">
        <label for="">Pizza Title:</label>
        <input type="text" name="title" id="">
        <label for="">Ingredient(comma separater:)</label>
        <input type="text" name="ingredient" id="">
        <div class="center">
            <input type="submit" value="submit" class = "btn brand z-depth-zero">
        </div>
    </form>
</section>
<?php include('./templates/footer.php');?>

</body>
</html>