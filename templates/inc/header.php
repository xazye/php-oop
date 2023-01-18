<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title><?php echo SITE_TITLE ?></title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<body>
  <main>
    <div class="container ">
      <header class="pb-3 mb-2">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark py-4 rounded-bottom-3" aria-label="navbar">
          <div class="container-fluid">
            <a class="navbar-brand text-success" href="/"><?php echo SITE_TITLE ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
              <ul class="navbar-nav me-auto mb-2 mb-md-0 flex justify-content-end flex-grow-1">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="create.php">Create Listing</a>
                </li>
                <li class="nav-item">
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <?php displayMessage() ?>

    </div>