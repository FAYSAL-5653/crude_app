<?php
include "function.php";
$objCrude = new crude();
if (isset($_POST['sub_btn'])) {
    $objCrude->insertData($_POST);
}
$diplayData = $objCrude->displayData();

if (isset($_GET['status'])) {
    if ($_GET['status'] = 'delete') {
        $id = $_GET['id'];
        $delPro = $objCrude->deleteData($id);
    }
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
            <h1 class="  row  justify-content-center align-items-center ">Ragistation Form</h1>

        </div>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-lg-4      ">
                    <form action="" class="was-validated" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" required>


                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com" required>


                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="" placeholder="" required>

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Choose file</label>
                            <input type="file" class="form-control" name="profile_pic" id="" placeholder="" aria-describedby="fileHelpId" required>

                        </div>
                        <button type="submit" class="btn btn-primary" name="sub_btn">Submit</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="container ">
            <div class="row justify-content-center align-items-center">
                <div class="col-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Picture</th>
                                <th scope="col"> Update | Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($fatchData = mysqli_fetch_assoc($diplayData)) {?>
                                <tr>
                                    <td scope="row"><?php echo $fatchData['id'] ?></td>
                                    <td scope="row"><?php echo $fatchData['uname'] ?></td>
                                    <td scope="row"><?php echo $fatchData['email'] ?></td>
                                    <td scope="row"><img style="height:50px; weight:50px;" src="uplods/<?php echo $fatchData['img'] ?>">
                                    </td>
                                    <td scope="row">
                                        <a href="update.php?status=edit&&id=<?php echo $fatchData['id'] ?>" class=" btn btn-success">Update</a>
                                        <a href="?status=delete&&id=<?php echo $fatchData['id'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
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