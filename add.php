<?php
/* if(isset($_GET['submit'])){
    echo $_GET['email'];
    echo $_GET['title'];
    echo $_GET['ingredients'];
} */

$errors = array('email'=>'', 'title'=>'', 'ingredient'=>'');
$email = $title = $ingredient = '';

if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
        $errors['email'] =  "An Email is required <br />";
    }else{
        $email = $_POST['email'];
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email must be a valid email address';
        }
    }

    if(empty($_POST['title'])){
        $errors['title'] =  "Pizza title is required <br />";
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }
    if(empty($_POST['ingredient'])){
        $errors['ingredient'] =  "ingredient is required";
    }else{
        $ingredient =$_POST['ingredient'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredient)){
            $errors['ingredient'] = 'Ingredients must be a comma separated list';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('./templates/header.php');?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" method = "POST" class="white">
        <label for="">Your Email:</label>
        <input type="text" name="email" id="" value="<?php echo htmlspecialchars($email)?>">
        <div class="red-text"><?php echo $errors['email']?></div>
        <label for="">Pizza Title:</label>
        <input type="text" name="title" id="" value="<?php echo htmlspecialchars($title)?>">
        <div class="red-text"><?php echo $errors['title']?></div>
        <label for="">Ingredient(comma separater:)</label>
        <input type="text" name="ingredient" id="" value="<?php echo htmlspecialchars($ingredient)?>">
        <div class="red-text"><?php echo $errors['ingredient']?></div>

        <div class="center">
            <input  name ="submit" type="submit" value="submit" class = "btn brand z-depth-zero">
        </div>
    </form>
</section>
<?php include('./templates/footer.php');?>

</body>
</html>