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
        content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
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

    @media screen and (max-width: 768px) {
        .sidebar {
            width: 100px !important;
            /* Apply !important to override inline styles */
        }

        .collapse.show {
            display: block !important;
            /* Ensure collapsed items are visible */
        }
    }
</style>
<div class="sidebar flex-shrink-0 p-3 border-end" style="width: 300px; height: 100svh; ">
    <a href="" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
        <i class="fa-solid fa-tooth fa-2xl mx-1" style="color: #198754;"></i>
        <span class="fs-4 fw-semibold text-secondary-emphasis">Gapuz Dentistry</span>
    </a>
    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-secondary-emphasis" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                <i class="fa-solid fa-gauge fa-xl"" style=" color: #198754;"></i> <span class="ms-2">Dashboard</span>
            </button>
            <div class="collapse show" id="dashboard-collapse">
                <div class="container mx-2">
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded text-secondary-emphasis" href="admin.php">Overview</a>
                </div>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed  text-secondary-emphasis" data-bs-toggle="collapse" data-bs-target="#patient-collapse" aria-expanded="true">
                <i class="fa-solid fa-hospital-user fa-xl mx-1" style="color: #198754;"></i> <span class="ms-2">Patient Information</span>
            </button>
            <div class="collapse show" id="patient-collapse">
                <div class="container mx-2">
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded text-secondary-emphasis" href="add-patient.php">Add Patient Info</a>
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded text-secondary-emphasis" href="view-patient.php">View Patient</a>
                </div>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed  text-secondary-emphasis" data-bs-toggle="collapse" data-bs-target="#record-collapse" aria-expanded="false">
                <i class="fa-solid fa-notes-medical fa-xl mx-1" style="color: #198754;"></i> <span class="ms-2">Record Management</span>
            </button>
            <div class="collapse" id="record-collapse">
                <div class="container mx-2">
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded text-secondary-emphasis">Add Record</a>
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded text-secondary-emphasis">View Records</a>
                </div>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-secondary-emphasis" data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="false">
                <i class="fa-solid fa-users fa-xl mx-1" style="color: #198754;"></i> <span class="ms-2">User Management</span>
            </button>
            <div class="collapse" id="user-collapse">
                <div class="container mx-2">
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded text-secondary-emphasis me-5">Add User</a>
                    <a class="btn link-body-emphasis d-inline-flex text-decoration-none rounded text-secondary-emphasis">View Users</a>
                </div>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
            <button id="logout" class="btn d-inline-flex align-items-center rounded border-0 fw-semibold text-secondary-emphasis">
                <i class="fa-solid fa-right-from-bracket fa-xl mx-2" style="color: #198754;"></i> Logout
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