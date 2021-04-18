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
      overflow-x: hidden;
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
    }
    body, html {
    background-image: linear-gradient(rgba(233,233,233,0.50),rgba(233,233,233,0.50)),url(media/wish4.jpg);
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    font-family: sans-serif;
    }
    #from {
      animation: anim 3s infinite;
    }
    @keyframes anim {
      0%{color: #00bcd4; transform: scale(1.0);}
      25%{color: #ff5722; transform: scale(0.8);}
      50%{color: #dd2c00; transform: scale(1.2);}
      75%{color: #be5683; transform: scale(0.5);}
      100%{color: #f08a5d; transform: scale(1.0);}
    }
    </style>
    <title>Happy Janmashtami</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center mt-5" id="from">
          <p class="display-4">HAPPY JANMASTAMI</p>
          <p class="h4">From</p>
          <p class="h1 text-uppercase"><?php echo $_GET['name']; ?></p>
        </div>
        <div class="col-12 text-center">
          <figure>
            <img src="media/wp.png" class="img-fluid" style="height: 350px;">
            <figcaption> 
            <a href="index.php"><button type="submit" class="btn btn-primary float-right">Create Your Own</button></a>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>