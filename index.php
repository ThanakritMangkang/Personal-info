<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Information</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding-top: 20px;
    }

    #user-info {
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h1 class="text-center">Personal Information</h1>
        <div id="user-info" class="card mt-4">
          <div class="card-body">
            <table class="table table-striped text-center" >
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Personal Info</th>
                  <th>Salary</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody id="userTableBody">

              </tbody>
            </table>
          </div>
        </div>
        <div class="text-center mt-4">
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="js/scripts.js"></script>
  <script src="js/ajax.js"></script>
</body>

</html>
