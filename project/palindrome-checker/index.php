<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Additional CSS -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Antic+Slab&display=swap" rel="stylesheet">

    <title>Palindrome Checker</title>
  </head>
  <body>
  <div class="container">
  <form action="#" method="get" id="contact" class="p-5">
  <h1>Palindrome Checker</h1>
  <h4>
    <?php
    if(isset($_GET['submit'])) {
      $input = $_GET['palin'];
      $str = strtoupper($input);
      $string = str_replace(' ', '', $str);
      $final = trim($string);
      $revword = strrev($final);

      if($final === $revword) {
        echo "Yes, It's a Palindrome!!..";
      } else {
        echo "Sorry!!.. This is not a Palindrome.";
      }
    }
    ?>
  </h4>
  <fieldset id="input">
  <textarea placeholder="Type your word..." name="palin" required></textarea>
  </fieldset>
  <fieldset>
  <button type="submit" name="submit" id="contact-submit">Submit</button>
  </fieldset>
  <hr class="w-100">
  <p class="copyright">Designed by Chirag Garg</p>
  <hr class="w-100">
  </form>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>