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
                <table class="table table-hover patient-table text-center" id="patient-table">
                    <thead>
                        <tr class="table-success">
                            <th class="text-center" scope="col" style="width: 15%;">Lastname</th>
                            <th class="text-center" scope="col" style="width: 15%;">Firstname</th>
                            <th class="text-center" scope="col" style="width: 15%;">Middlename</th>
                            <th class="text-center" scope="col" style="width: 5%;">Sex</th>
                            <th class="text-center" scope="col" style="width: 15%;">Created at</th>
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
                                    <td class="text-center"><?= $row["last_name"]; ?></td>
                                    <td class="text-center"><?= $row["first_name"]; ?></td>
                                    <td class="text-center"><?= $row["middle_name"]; ?></td>
                                    <td class="text-center"><?= $row["sex"]; ?></td>
                                    <td class="text-center"><?= $row["created_at"]; ?></td>

                                    <td class="exclude-print">
                                        <button class="btn btn-success me-2" onclick="viewPatientInformation(<?= $row['patient_id']; ?>)">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="3" stroke="#fff" stroke-width="2"></circle>
                                                    <path d="M21 12C21 12 20 4 12 4C4 4 3 12 3 12" stroke="#fff" stroke-width="2"></path>
                                                </g>
                                            </svg> View
                                        </button>
                                        <button class="btn btn-success me-2" onclick="addDentalHistory(<?= $row['patient_id']; ?>)">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M9.19807 4.45825C8.55418 4.22291 7.94427 4 7 4C5 4 4 6 4 8.5C4 10.0985 4.40885 11.0838 4.83441 12.1093C5.0744 12.6877 5.31971 13.2788 5.5 14C5.649 14.596 5.7092 15.4584 5.77321 16.3755C5.92401 18.536 6.096 21 7.5 21C8.39898 21 8.79286 19.5857 9.22652 18.0286C9.75765 16.1214 10.3485 14 12 14C13.6515 14 14.2423 16.1214 14.7735 18.0286C15.2071 19.5857 15.601 21 16.5 21C17.904 21 18.076 18.536 18.2268 16.3755C18.2908 15.4584 18.351 14.596 18.5 14C18.6803 13.2788 18.9256 12.6877 19.1656 12.1093C19.5912 11.0838 20 10.0985 20 8.5C20 6 19 4 17 4C16.0557 4 15.4458 4.22291 14.8019 4.45825C14.082 4.72136 13.3197 5 12 5C10.6803 5 9.91796 4.72136 9.19807 4.45825Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg> Dental
                                        </button>
                                        <button class="btn btn-success me-2" onclick="addMedicalHistory(<?= $row['patient_id']; ?>)">
                                            <svg width="20px" height="20px" viewBox="0 0 20.2 20.2" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <g id="medical-receipt-left-3" transform="translate(-1.8 -2)">
                                                        <rect id="secondary" fill="#198754" width="5" height="10.66" rx="2.5" transform="translate(1.964 14.503) rotate(-45)"></rect>
                                                        <path id="primary" d="M11,8h6m-4,4h4m-5.73,4.73a2.52,2.52,0,0,1,0,3.54h0a2.52,2.52,0,0,1-3.54,0l-4-4a2.52,2.52,0,0,1,0-3.54h0a2.52,2.52,0,0,1,3.54,0ZM5.84,18.16l3.32-3.32" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                        <path id="primary-2" data-name="primary" d="M7,8V4A1,1,0,0,1,8,3H20a1,1,0,0,1,1,1V20a1,1,0,0,1-1,1H16" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                    </g>
                                                </g>
                                            </svg> Medical
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
        include_once('./includes/view-medical-history-modal.php');
        include_once('./includes/view-patient-info-modal.php');
        include_once('./includes/view-dental-history-modal.php');
        include_once('./includes/edit-patient-info-modal.php');
        include_once('./includes/add-dental-history-modal.php');
        include_once('./includes/edit-dental-history-modal.php');
        include_once('./includes/add-medical-history-modal.php');
        include_once('./includes/edit-medical-history-modal.php');
        ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

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