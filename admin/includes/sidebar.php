<style>
    body {
        min-height: 100vh;
        min-height: -webkit-fill-available;
    }

    html {
        height: -webkit-fill-available;
    }

    main {
        height: 100vh;
        height: -webkit-fill-available;
        max-height: 100vh;
        overflow-x: auto;
        overflow-y: hidden;
    }

    .dropdown-toggle {
        outline: 0;
    }

    .btn-toggle {
        padding: .25rem .5rem;
        font-weight: 600;
        color: var(--bs-emphasis-color);
        background-color: transparent;
    }

    .btn-toggle:hover,
    .btn-toggle:focus {
        color: rgba(var(--bs-emphasis-color-rgb), .85);
        background-color: var(--bs-tertiary-bg);
    }

    .btn-toggle::before {
        width: 1.25em;
        line-height: 0;
        transition: transform .35s ease;
        transform-origin: .5em 50%;
    }

    .btn-toggle[aria-expanded="true"] {
        color: rgba(var(--bs-emphasis-color-rgb), .85);
    }

    .btn-toggle[aria-expanded="true"]::before {
        transform: rotate(90deg);
    }

    .btn-toggle-nav a {
        padding: .1875rem .5rem;
        margin-top: .125rem;
        margin-left: 1.25rem;
    }

    .btn-toggle-nav a:hover,
    .btn-toggle-nav a:focus {
        background-color: var(--bs-tertiary-bg);
    }

    .scrollarea {
        overflow-y: auto;
    }
</style>
<div class="flex-shrink-0 p-3" style="width: 280px; height:100svh;">
    <a href="" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
        <i class="fa-solid fa-tooth fa-2xl me-2" style="color: #198754;"></i>
        <span class="fs-5 fw-semibold">Gapuz Dentistry</span>
    </a>
    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="true">
                <i class="fa-solid fa-users fa-xl me-2" style="color: #198754;"></i> User Management
            </button>
            <div class="collapse show" id="user-collapse">
                <div class="container mx-3">
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded">Add User</a>
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded">Search/Update User</a>
                </div>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#record-collapse" aria-expanded="false">
                <i class="fa-solid fa-notes-medical fa-xl me-2" style="color: #198754;"></i> Record Management
            </button>
            <div class="collapse show" id="record-collapse">
                <div class="container mx-3">
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded">Add Record</a>
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded">Search/Update Record</a>
                </div>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#patient-collapse" aria-expanded="false">
                <i class="fa-solid fa-hospital-user fa-xl me-2" style="color: #198754;"></i> Patient Information
            </button>
            <div class="collapse show" id="patient-collapse">
                <div class="container mx-3">
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded">Add Patient Info</a>
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded">Search/Update Patient</a>
                </div>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#report-collapse" aria-expanded="false">
                <i class="fa-solid fa-chart-simple fa-xl me-2" style="color: #198754;"></i> Generate Report
            </button>
            <div class="collapse show" id="report-collapse">
                <div class="container mx-3">
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded">Select report type</a>
                </div>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
            <button id="logout" class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                <i class="fa-solid fa-right-from-bracket fa-xl me-2" style="color: #198754;"></i> Logout
            </button>
        </li>
    </ul>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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