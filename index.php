<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>St. Apolonia Dental Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/styles.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body style="height: 100svh">
  <?php
  include_once('includes/navbar.php');
  ?>
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/5540021.jpg" class="d-block mx-lg-auto img-fluid" alt="" width="800" height="600" loading="lazy" />
      </div>
      <div class="col-lg-6" id="text-content">
        <h1 class="display-3 fw-bold lh-1 mb-3">
          St. Apolonia Dental Center
        </h1>
        <p class="lead">Where excellence in dentistry and art meet.</p>
        <button class="btn btn-success p-2 w-25" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
          Login
        </button>
      </div>
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
              <form id="login_form" novalidate>
                <div class="form-floating mb-2">
                  <input type="text" class="form-control" id="id" autocomplete="off" placeholder="ID" required />
                  <label for="id">ID</label>
                  <div class="invalid-feedback">
                    Please enter your ID.
                  </div>

                </div>
                <div class="form-floating mb-2">
                  <input type="password" class="form-control" id="pass" placeholder="Password" required />
                  <label for="password">Password</label>
                  <div class="invalid-feedback">
                    Please enter password.
                  </div>

                </div>
                <div class="">
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
      <div class="modal fade" id="registerModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title" id="exampleModalToggleLabel">
                Register now📝
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Register</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">
                Go back
              </button>
              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">
                Register
              </button>
            </div>
          </div>
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