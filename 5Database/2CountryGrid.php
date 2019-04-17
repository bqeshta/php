<?php    
    include("db.php");
    if(isset($_GET['delete_id'])){
        $delete_id = (integer)$_GET['delete_id'];
        mysqli_query($link, "delete from country where id=$delete_id");
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

    <title>Country Grid</title>
  </head>
  <body>
    <div class="container">
        <h1>Country Grid</h1>
        <a class="btn btn-success" href="3CountryCreate.php">Create New Country</a>
        <table class="table mt-4 table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Country</th>
                    <th>ISO2</th>
                    <th width="20%"></th>
                </tr>
            </thead>
            <tbody>
            <?php
                $rs = mysqli_query($link, "select * from country");
                while($row = mysqli_fetch_assoc($rs)){
            ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["iso2"] ?></td>
                    <td>                    
                        <a class="btn btn-info btn-sm" href="4CountryEdit.php?id=<?php echo $row["id"] ?>">Edit</a>
                        <a onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm" href="2CountryGrid.php?delete_id=<?php echo $row["id"] ?>">Delete</a>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
