<?php
/* if(isset($_GET['submit'])){
    echo $_GET['email'];
    echo $_GET['title'];
    echo $_GET['ingredients'];
} */

$errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');

if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
        echo "An Email is required <br />";
    }else{
        echo htmlspecialchars($_POST['email']);
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            echo "Email is not valid";
    }
}

    if(empty($_POST['title'])){
        echo "Pizza title is required <br />";
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            echo 'Title must be letters and spaces only';
        }
    }
    if(empty($_POST['ingredient'])){
        echo "ingredient is required <br />";
    }else{
        $ingredient =_POST['ingredient'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredient)){
            echo 'Ingredients must be a comma separated list';
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
        <input type="text" name="email" id="">
        <label for="">Pizza Title:</label>
        <input type="text" name="title" id="">
        <label for="">Ingredient(comma separater:)</label>
        <input type="text" name="ingredient" id="">
        <div class="center">
            <input  name ="submit" type="submit" value="submit" class = "btn brand z-depth-zero">
        </div>
    </form>
</section>
<?php include('./templates/footer.php');?>

</body>
</html>