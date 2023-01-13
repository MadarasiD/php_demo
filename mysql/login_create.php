<?php include "db.php";?>
<?php include "functions.php";?>
<?php CreateTable();?>
<?php include "includes/header.php"?>

<div class="container h-100 d-flex justify-content-center align-items-center vw-75 ">
    <div class="vh-100 d-flex align-items-center flex-column">

        <h1 class="text-center">Create</h1>

        <form action="login_create.php" method="post">

            <div class="form-group">

                <label for="username">Username</label>

                <input type="text" name="username" class="form-control">

            </div>

            <div class="form-group">

             <label for="password">Password</label>

                <input type="password" name="password" class="form-control">

            </div>

            <input type="submit" name="submit" value="CREATE" class="btn btn-primary mt-2">


        </form>

    </div>

    <?php include "includes/footer.php"?>