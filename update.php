<?php
include "function.php";
$objCrude = new crude();

if (isset($_GET['status'])) {
    if ($_GET['status'] = 'edit') {
        $id = $_GET['id'];
        $geyUpdata = $objCrude->updateData($id);
    }
}
if (isset($_POST['edit_btn'])) {
    $objCrude->updateInfo($_POST);
}

?>



<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <div class="container">
            <h1 class="  row  justify-content-center align-items-center">Update information Form</h1>
            <div class="row justify-content-center align-items-center g-2">
                <ul class="nav justify-content-center  ">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php" aria-current="page">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-lg-4      ">
                    <form action="" class="was-validated" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="" class="form-label">ID</label>
                            <h3 class="form-control"><?PHP echo $geyUpdata['id'] ?></h3>


                        </div>
                        <div class="mb-3">

                            <input type="hidden" class="form-control " name="u_id" id="" aria-describedby="helpId" placeholder="" required value="<?PHP echo $geyUpdata['id'] ?>">


                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control " name="u_name" id="" aria-describedby="helpId" placeholder="" required value="<?PHP echo $geyUpdata['uname'] ?>">


                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="u_email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com" required value="<?PHP echo $geyUpdata['email'] ?>">


                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="u_password" id="" placeholder="" required value="<?PHP echo $geyUpdata['pass'] ?>">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Choose file</label>
                            <input type="file" class="form-control" name="u_profile_pic" id="" placeholder="" aria-describedby="fileHelpId" required value="<?PHP echo $geyUpdata['img'] ?>">

                        </div>
                        <button type="submit" class="btn btn-primary" name="edit_btn">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>