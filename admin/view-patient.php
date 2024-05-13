<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>St. Apolonia Dental Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.dataTables.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/74741ba830.js" crossorigin="anonymous"></script>
</head>

<body>
    <main class="d-flex flex-nowrap overflow-auto">
        <?php
        include_once('./includes/sidebar.php');
        ?>
        <div class="container">
            <h1 class="display-3">View Patient Information</h1>
            <div class="container">
                <table class="patient-table text-center" id="patient-table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col" style="width: 5%;">#</th>
                            <th class="text-center" scope="col" style="width: 15%;">Lastname</th>
                            <th class="text-center" scope="col" style="width: 15%;">Firstname</th>
                            <th class="text-center" scope="col" style="width: 15%;">Middlename</th>
                            <th class="text-center" scope="col" style="width: 5%;">Sex</th>
                            <th class="text-center" scope="col" style="width: 15%;">Nickname</th>
                            <th class="text-center" scope="col" style="width: 30%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once("../connection/conn.php");
                        $sql = "SELECT * FROM tbl_patient_info";
                        $result = $conn->query($sql);
                        $result_set = $result->fetchAll();
                        if ($result_set) {
                            $i = 1;
                            foreach ($conn->query($sql) as $row) {
                        ?> <tr>
                                    <th class="text-center"><?= $i++; ?></th>
                                    <td class="text-center"><?= $row["last_name"]; ?></td>
                                    <td class="text-center"><?= $row["first_name"]; ?></td>
                                    <td class="text-center"><?= $row["middle_name"]; ?></td>
                                    <td class="text-center"><?= $row["sex"]; ?></td>
                                    <td class="text-center"><?= $row["nickname"]; ?></td>

                                    <td class="exclude-print">
                                        <button class="btn btn-outline-dark" onclick="viewPatientInformation(<?= $row['patient_id']; ?>)">
                                            View
                                        </button>
                                        <button class="btn btn-outline-dark" onclick="addDentalHistory(<?= $row['patient_id']; ?>)">
                                            Dental
                                        </button>
                                        <button class="btn btn-outline-dark" onclick="addMedicalHistory(<?= $row['patient_id']; ?>)">
                                            Medical
                                        </button>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <td colspan="6">
                                <center>
                                    <h2 class="text-muted">No Record</h2>
                                    <center>
                            </td>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        include_once('./includes/view-patient-info-modal.php');
        include_once('./includes/add-dental-history-modal.php');
        include_once('./includes/view-dental-history-modal.php');
        include_once('./includes/edit-dental-history-modal.php');
        include_once('./includes/add-medical-history-modal.php');
        ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
    <script src="admin.js"></script>
    <script>
        $(document).ready(function() {
            $('#patient-table').DataTable({
                "pageLength": 10,
                "lengthChange": false,
            });

        });
    </script>
</body>

</html>