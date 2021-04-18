<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- additional css -->
    <style type="text/css">
    * {
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
    }
    body, html {
    font-family: sans-serif;
    }
    .card {
    text-align: center;
    align-items: center;
    justify-content: center;
    margin: auto;
    }
    </style>
    <title>Happy Janmashtami</title>
  </head>
  <body>
    <div class="card" style="width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Happy Janmashtami Greeting</h5>
        <h6 class="card-subtitle mb-2 text-muted">Create For Your Own</h6>
        <form method="get" action="greeting.php">
          <p class="card-text"><input type="text" name="name" placeholder="Enter Your Name" class="text-center w-100" required></p>
          <button type="submit" name="submit" class="btn btn-success float-left">Create</button>
          <button type="reset" name="reset" class="btn btn-danger float-right">Reset</button>
        </form>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>