<!DOCTYPE html>
<html lang="en">

<head>
    <?php require __DIR__ ."/utility/head_info.php"; ?>

    <title>Add Book</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.jpg" alt="logo" width="35" height="35" class="d-inline-block align-top rounded-circle" />
                E-library
            </a>
        </div>
    </nav>
    <!-- Form -->
    <form class="mx-4 m-3 p-3 customform" action="insert.php" method="post">
    <?php
    if (isset($_GET['msg'])) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><?php echo $_GET['msg'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
        <div class="row mb-3">
            <label for="Name" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?> "/>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Author" class="col-sm-2 col-form-label">Author Name <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="author" value="<?php if (isset($_GET['author'])) echo $_GET['author']; ?>" />
            </div>
        </div>
        <div class="row mb-3">
            <label for="Cover Img Url" class="col-sm-2 col-form-label">Cover Img Url <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="coverimg" value="<?php if (isset($_GET['image'])) echo $_GET['image']; ?>" />
            </div>
        </div>
        <div class="row mb-3">
            <label for="Description" class="col-sm-2 col-form-label">Description <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" rows="5"><?php if (isset($_GET['des'])) echo $_GET['des']; ?></textarea>
            </div>
        </div>
        <div class="d-grid gap-2">
            <input class="btn btn-primary" type="submit" />
        </div>
    </form>

    <?php require __DIR__ ."/utility/foot_info.php"; ?>
</body>

</html>