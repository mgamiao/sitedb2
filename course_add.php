<?php include "perfect_function.php"; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register for an account</title>

  <!-- Custom fonts for this template-->
  <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Add a course</h1>
              </div>
              <form method="post" action="course_add_proc.php" class="user">
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"  placeholder="Course Code" name="coursecode" required>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"  placeholder="Course Name"  name="coursename">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user"  placeholder="Instructor Name" name="instructorname" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"  placeholder="Total Units" name="totalunits" required>
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user"  placeholder="Lec Units" name="lecunits" required>
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user"  placeholder="Lab Units" name="labunits" required>
                  </div>
                </div>
                <div class="col-sm-12">
                  <label>Semester:</label>
                    <select name="semester" required>
                      <option value=""></option>
                      <option value="1">1st Semester</option>		
                      <option value="2">2nd Semester</option>
                      <option value="3">Summer</option>
                    </select>
                  </div>
                <br>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Add
                </button>
                <hr>
                <a href="course_view.php" class="btn btn-google btn-user btn-block">
                  Cancel
                </a>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="template/vendor/jquery/jquery.min.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="template/js/sb-admin-2.min.js"></script>

</body>

</html>




