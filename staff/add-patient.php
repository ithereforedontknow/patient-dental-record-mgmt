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

<body>
    <main class="d-flex flex-nowrap overflow-auto">
        <?php
        include_once('./includes/sidebar.php');
        ?>
        <div class="container">
            <h1 class="display-3">Add Patient Information</h1>

            <form id="addPatient">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" required placeholder="Enter last name">
                        </div>
                        <div class="form-group mb-2">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" required placeholder="Enter first name">
                        </div>

                        <div class="form-group mb-2">
                            <label for="middleName">Middle Name</label>
                            <input type="text" class="form-control" id="middleName" required placeholder="Enter middle name">
                        </div>

                        <div class="form-group mb-2">
                            <label for="birthdate">Birthdate</label>
                            <input type="date" class="form-control" id="birthdate" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="civilStatus">Civil Status</label>
                            <select class="form-control" id="civilStatus" required>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="sex">Sex</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="male" value="male" checked required>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="female" value="female" required>
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="religion">Religion</label>
                            <input type="text" class="form-control" id="religion" placeholder="Enter religion" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="nationality">Nationality</label>
                            <input type="text" class="form-control" id="nationality" placeholder="Enter nationality" required>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group mb-2">
                            <label for="nickname">Nickname</label>
                            <input type="text" class="form-control" id="nickname" placeholder="Enter nickname" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="occupation">Occupation</label>
                            <input type="text" class="form-control" id="occupation" placeholder="Enter occupation" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="officeNo">Office No.</label>
                            <input type="number" class="form-control" id="officeNo" placeholder="Enter office number" required>
                        </div>
                        <div class="form-group mb-2 form-check">
                            <label class="form-check-label" for="dentalInsurance">Dental Insurance</label>
                            <input type="checkbox" class="form-check-input" id="dentalInsurance">
                        </div>
                        <div class="form-group mb-2">
                            <label for="effectiveDate">Effective Date</label>
                            <input type="date" class="form-control" id="effectiveDate">
                        </div>
                        <div class="form-group mb-2">
                            <label for="faxNo">Fax No.</label>
                            <input type="number" class="form-control" id="faxNo" placeholder="Enter fax number">
                        </div>
                        <div class="form-group mb-2">
                            <label for="cellphoneNumber">Cellphone Number</label>
                            <input type="tel" class="form-control" id="cellphoneNumber" placeholder="Enter cellphone number" maxlength="11" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="emailAddress">Email Address</label>
                            <input type="email" class="form-control" id="emailAddress" placeholder="Enter email address" required>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="admin.js"></script>
</body>

</html>