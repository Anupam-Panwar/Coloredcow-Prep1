<!DOCTYPE html>
<html lang="en">
  <head>
    <!--  meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="CSS/custom.css" rel="stylesheet" type="text/css" />

    <title>Add Book</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img
            src="images/logo.jpg"
            alt="logo"
            width="35"
            height="35"
            class="d-inline-block align-top rounded-circle"
          />
          E-library
        </a>
      </div>
    </nav>
    <!-- Form -->
    <form class="mx-4 m-3 p-3 customform" action="insert.php" method="post">
      <div class="row mb-3">
        <label for="Name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name"  />
        </div>
      </div>
      <div class="row mb-3">
        <label for="Author" class="col-sm-2 col-form-label">Author Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="author" />
        </div>
      </div>
      <div class="row mb-3">
        <label for="Cover Img Url" class="col-sm-2 col-form-label"
          >Cover Img Url</label
        >
        <div class="col-sm-10">
          <input type="text" class="form-control" name="coverimg" />
        </div>
      </div>
      <div class="row mb-3">
        <label for="Description" class="col-sm-2 col-form-label"
          >Description</label
        >
        <div class="col-sm-10">
          <textarea class="form-control" name="description" rows="5" ></textarea>
        </div>
      </div>
      <div class="d-grid gap-2">
        <input
          class="btn btn-primary"
          type="submit"
        />
      </div>
    </form>

    <!--  Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
  </body>
</html>