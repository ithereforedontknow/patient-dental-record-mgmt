<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>St. Apolonia Dental Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <?php
  include_once('includes/navbar.php');
  ?>
  <div class="container px-4 mt-5 d-flex justify-content-center text-center" id="hero">
    <div class="">
      <h1 class="display-3 fw-bold mb-3">
        St. Apolonia Dental Center
      </h1>
      <p class="lead">Where excellence in dentistry and art meet.</p>
      <button class="btn btn-success py-3 px-5 rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
        Login
      </button>
    </div>
  </div>
  <div class="text-center">
    <img src="assets/5540021.jpg" alt="dentist" class="img-fluid" style="max-width: 70%">
  </div>
  <?php
  include_once('includes/features.php');
  include_once('includes/faq.php');
  include_once('includes/about.php');
  ?>
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="loginModalLabel">
            Welcome back 👋
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="login_form">
            <div class="form-floating mb-2">
              <input type="text" class="form-control" id="id" autocomplete="off" placeholder="ID" required />
              <label for="id">ID</label>

            </div>
            <div class="form-floating mb-2">
              <input type="password" class="form-control" id="pass" autocomplete="off" placeholder="Password" required />
              <label for="password">Password</label>

            </div>
            <div>
              <p>
                Not a member?
                <a type="button" class="link-success" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
              </p>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-success">Sign in</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="registerModal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title">
            Register now📝
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Register</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button class="btn btn-success" data-bs-toggle="modal">
            Register
          </button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(document).ready(() => {
      //login form submit
      $("#login_form").submit((e) => {
        e.preventDefault();
        //get data
        $id = $("#id").val();
        $pass = $("#pass").val();
        //pass data to login.php
        $.post("login.php", {
          id: $id,
          pass: $pass
        }, (data) => {
          if (data == 'admin') { // if the response is non-admin redirect to non-admin dashboard
            window.location.href = "admin/admin.php";
          } else if (data == 'dentist') { // if the response is admin redirect to admin dashboard
            window.location.href = "staff/staff.php";
          } else if (data == 'user') {
            window.location.href = "patient/patient.php";
          } else {
            Swal.fire({
              icon: "error",
              title: "Oops...",
              confirmButtonColor: "#198754",
              text: "Invalid username or password"
            });
          }
        });
      });
    });
  </script>
</body>

</html>