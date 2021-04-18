<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <title>ColorPickr</title>
    <script>
    // check and get color code
    function getcolor(c1,c2) {
    // foreground
    var FG = document.getElementById(c1).value;
    document.getElementById("putFG").value = FG;
    //background
    var BG = document.getElementById(c2).value;
    document.getElementById("putBG").value = BG;
    }
    //check color for bg
    function changeColor(c1,c2) {
    let fgcolor = document.getElementById('c1').value;
    document.body.style.color = fgcolor;
    let bgcolor = document.getElementById('c2').value;
    document.body.style.backgroundColor = bgcolor;
    }
    </script>
    <style>
    /*body*/
    body {
    background : #f7bbb1;
    font-family: 'Kaushan Script', cursive;
    }
    /*input color*/
    .colorfield {
    width:233px;
    height:40px;
    }
    /*download source code button*/
    .download {
    text-align: right;
    }
    /*footer*/
    p {
    font-size: 25px;
    text-align:center;
    }
    /*for download link*/
    .at {
    text-decoration: none;
    }
    </style>
  </head>
  <body>
    <!--  colorpickr heading -->
    <div class="display-1 text-center m-4 text-capitalize">ColorPickr<hr class="w-50">
    </div>
    </br>
    <!-- input area of foreground color -->
    <div class="h1 text-center m-3">Choose Foreground Color =
      <input type="color" name="color1" id="fg" class="colorfield" onchange="getcolor()">
    </div>
    <br>
    <!-- input area of background color -->
    <div class="h1 text-center m-3">Choose Background Color =
      <input type="color" name="color2" id="bg" class="colorfield" onchange="getcolor()">
    </div>
    </br>
    <!-- fetched foreground color code -->
    <div class="h1 text-center mb-5">
      <input type="text" id="putFG" class="w-25 text-center mx-3" placeholder="Fg Color Code">
      <!-- fetched background color code -->
      <input type="text" id="putBG" class="w-25 text-center mx-3" placeholder="Bg Color Code">
    </div>
    <!-- get color code button -->
    <div class="h1 text-center m-3">
      <button type="button" onclick="getcolor('fg','bg')">Get Your Color Code</button>
    </div>
    <!-- heading of second section -->
    <div class="display-1 text-center m-5 text-capitalize">Let's check the Color<hr class="w-75">
    </div>
    </br>
    <!-- input to paste foreground color -->
    <div class="h1 text-center mb-5">
      <input type="text" id="c1" placeholder="Fg Color Code" class="w-25 text-center mx-3">
      <!-- input to paste background color -->
      <input type="text" id="c2" placeholder="Bg Color Code" class="w-25 text-center mx-3">
    </div>
    <!-- button to check color -->
    <div class="h1 text-center m-3">
      <button type="button" id="colorButton" onclick="changeColor()">Click to Check Color</button>
    </div>
    </br>
    </br>
    <!-- footer area -->
    <hr class="w-100">
    <p>Copyright © ColorPickr. All rights reserved. Made with HTML5, CSS3, Javascript & Bootstrap 4.</p>
    <hr class="w-100">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>