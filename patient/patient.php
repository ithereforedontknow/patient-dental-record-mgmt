<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>St. Apolonia Dental Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/styles.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/74741ba830.js" crossorigin="anonymous"></script>
</head>

<body style="height: 100svh">
  <nav class="navbar sticky-top bg-white mt-2 border-bottom">
    <div class="container ">
      <h3>Gapuz Dentistry</h3>
      <ul class="nav justify-content-end">
        <button class="btn btn-success py-2 px-4 rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#loginModal" id="logout">
          Logout
        </button>
      </ul>
    </div>
  </nav>
  <div class="container px-4 mt-4 d-flex justify-content-center text-center" id="hero">
    <div class="">
      <h1 class="display-3 fw-bold mb-3">
        Hello there!
      </h1>
      <h4 class="fw-light">Your record goes here.</h3>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $("#logout").click(() => {
      Swal.fire({
        title: "Are you sure?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#198754",
        cancelButtonColor: "#6a737b",
        confirmButtonText: "Logout",
      }).then((result) => {
        if (result.isConfirmed) {
          $.post("../logout.php", {
            logout: 1
          }, () => {
            window.location.href = "../index.php";
          });
        }
      });
    });
  </script>
</body>

</html>