<?php    
    include("db.php");
    $name = "";
    $iso2  = "";
    $msg = "";
    $msgClass = "alert-danger";
    if(isset($_POST["submit"])){
        $name = Clear($_POST["name"]);
        $iso2 = Clear($_POST["iso2"]);
        $id = Clear($_GET["id"]);
        if($name != '' && $iso2 != ''){
            //المفروض نضيف
            mysqli_query($link, "update country set name='$name',iso2='$iso2' where id=$id");
            if(mysqli_affected_rows($link)>0){
                header("location:2CountryGrid.php");
            }
            else{
                $msg = "$name already exists";
            }
        }
        else{
            $msg = "Please enter Country Name and ISO2";
        }
    }
    if(isset($_GET["id"])){
        $id = Clear($_GET["id"]);
        $rs = mysqli_query($link, "select * from country where id=$id");
        if($row = mysqli_fetch_assoc($rs)){
            $name = $row["name"];
            $iso2 = $row["iso2"];
        }
        else{
            header("location:2CountryGrid.php");
        }
    }
    else{
        header("location:2CountryGrid.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit Country</title>
  </head>
  <body>
    <div class="container">
        <h1>Edit Country</h1>
        <?php
            if($msg){
                echo "<div class='alert $msgClass'>$msg</div>";
            }
        ?>
        <form method="POST" class="w-50">
        <div class="form-group">
            <label for="name">Country Name</label>
            <input autofocus value="<?php echo $name ?>" type="text" class="form-control" id="name" name="name" placeholder="Enter Country name">
            
        </div>
        <div class="form-group">
            <label for="iso2">Country ISO2</label>
            <input type="text" value="<?php echo $iso2 ?>" class="form-control" id="iso2" maxlength="2" name="iso2" placeholder="Enter Country ISO2">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-dark" href="2CountryGrid.php">List All Country</a>
        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
