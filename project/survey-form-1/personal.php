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
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <title>Survey Form</title>
  </head>
  <body>
    <!-- main container start-->
    <div class="container-fluid">
      <!-- survey title -->
      <p class="display-4 text-center p-1 text-light">Survey Form</p>
      <!-- wide line for title -->
      <hr class="w-25 mainheading">
      <!-- subtitle -->
      <p class="h3 text-center p-1 text-light">For Next Developer</p>
      <!-- wide line for subtitle -->
      <hr class="w-25 subheading">
      <!-- main box start-->
      <div class="container mainbox text-center">
        <div class="row align-items-center">
          <div class="col-12">
            <!-- Personal Details button start-->
            <!-- Button trigger modal -->
            <button type="button" class="btn my-3 option" data-toggle="modal" data-target="#exampleModal1">
            1. Personal Details
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Personal Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- personal detail form start-->
                    <form action="qualification.php" method="post">
                      <div class="form-group">
                        <label>1. Name</label>
                        <input type="text" name="name" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>2. Father's Name</label>
                        <input type="text" name="fname" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>3. Mother's Name</label>
                        <input type="text" name="mname" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>4. Mobile No.</label>
                        <input type="text" name="mno" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>5. E-mail</label>
                        <input type="email" name="email" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>6. Date of Birth</label>
                        <input type="date" name="dob" class="form-control" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                  </form>
                  <!-- personal detail form end-->
                </div>
              </div>
            </div>
            <!-- Personal Details button end-->
          </div>
        </div>
      </div>
      <!-- main box end-->
    </div>
    <!-- main container end-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>