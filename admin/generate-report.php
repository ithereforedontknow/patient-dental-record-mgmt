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
            <h1 class="display-3">Generate Report</h1>
            <div class="container">
                <table class="table table-hover patient-table text-center" id="patient-table">
                    <thead>
                        <tr class="table-success">
                            <th class="text-center" scope="col" style="width: 15%;">Lastname</th>
                            <th class="text-center" scope="col" style="width: 15%;">Firstname</th>
                            <th class="text-center" scope="col" style="width: 15%;">Middlename</th>
                            <th class="text-center" scope="col" style="width: 20%;">Action</th>
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
                                    <td class="exclude-print">
                                        <button class="btn btn-success" onclick="printInformation(<?= $row['patient_id']; ?>)">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M18 16.75H16C15.8011 16.75 15.6103 16.671 15.4697 16.5303C15.329 16.3897 15.25 16.1989 15.25 16C15.25 15.8011 15.329 15.6103 15.4697 15.4697C15.6103 15.329 15.8011 15.25 16 15.25H18C18.3315 15.25 18.6495 15.1183 18.8839 14.8839C19.1183 14.6495 19.25 14.3315 19.25 14V10C19.25 9.66848 19.1183 9.35054 18.8839 9.11612C18.6495 8.8817 18.3315 8.75 18 8.75H6C5.66848 8.75 5.35054 8.8817 5.11612 9.11612C4.8817 9.35054 4.75 9.66848 4.75 10V14C4.75 14.3315 4.8817 14.6495 5.11612 14.8839C5.35054 15.1183 5.66848 15.25 6 15.25H8C8.19891 15.25 8.38968 15.329 8.53033 15.4697C8.67098 15.6103 8.75 15.8011 8.75 16C8.75 16.1989 8.67098 16.3897 8.53033 16.5303C8.38968 16.671 8.19891 16.75 8 16.75H6C5.27065 16.75 4.57118 16.4603 4.05546 15.9445C3.53973 15.4288 3.25 14.7293 3.25 14V10C3.25 9.27065 3.53973 8.57118 4.05546 8.05546C4.57118 7.53973 5.27065 7.25 6 7.25H18C18.7293 7.25 19.4288 7.53973 19.9445 8.05546C20.4603 8.57118 20.75 9.27065 20.75 10V14C20.75 14.7293 20.4603 15.4288 19.9445 15.9445C19.4288 16.4603 18.7293 16.75 18 16.75Z" fill="#ffffff"></path>
                                                    <path d="M16 8.75C15.8019 8.74741 15.6126 8.66756 15.4725 8.52747C15.3324 8.38737 15.2526 8.19811 15.25 8V4.75H8.75V8C8.75 8.19891 8.67098 8.38968 8.53033 8.53033C8.38968 8.67098 8.19891 8.75 8 8.75C7.80109 8.75 7.61032 8.67098 7.46967 8.53033C7.32902 8.38968 7.25 8.19891 7.25 8V4.5C7.25 4.16848 7.3817 3.85054 7.61612 3.61612C7.85054 3.3817 8.16848 3.25 8.5 3.25H15.5C15.8315 3.25 16.1495 3.3817 16.3839 3.61612C16.6183 3.85054 16.75 4.16848 16.75 4.5V8C16.7474 8.19811 16.6676 8.38737 16.5275 8.52747C16.3874 8.66756 16.1981 8.74741 16 8.75Z" fill="#ffffff"></path>
                                                    <path d="M15.5 20.75H8.5C8.16848 20.75 7.85054 20.6183 7.61612 20.3839C7.3817 20.1495 7.25 19.8315 7.25 19.5V12.5C7.25 12.1685 7.3817 11.8505 7.61612 11.6161C7.85054 11.3817 8.16848 11.25 8.5 11.25H15.5C15.8315 11.25 16.1495 11.3817 16.3839 11.6161C16.6183 11.8505 16.75 12.1685 16.75 12.5V19.5C16.75 19.8315 16.6183 20.1495 16.3839 20.3839C16.1495 20.6183 15.8315 20.75 15.5 20.75ZM8.75 19.25H15.25V12.75H8.75V19.25Z" fill="#ffffff"></path>
                                                </g>
                                            </svg> Patient
                                        </button>
                                        <button class="btn btn-success" onclick="printRecord(<?= $row['patient_id']; ?>)">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M18 16.75H16C15.8011 16.75 15.6103 16.671 15.4697 16.5303C15.329 16.3897 15.25 16.1989 15.25 16C15.25 15.8011 15.329 15.6103 15.4697 15.4697C15.6103 15.329 15.8011 15.25 16 15.25H18C18.3315 15.25 18.6495 15.1183 18.8839 14.8839C19.1183 14.6495 19.25 14.3315 19.25 14V10C19.25 9.66848 19.1183 9.35054 18.8839 9.11612C18.6495 8.8817 18.3315 8.75 18 8.75H6C5.66848 8.75 5.35054 8.8817 5.11612 9.11612C4.8817 9.35054 4.75 9.66848 4.75 10V14C4.75 14.3315 4.8817 14.6495 5.11612 14.8839C5.35054 15.1183 5.66848 15.25 6 15.25H8C8.19891 15.25 8.38968 15.329 8.53033 15.4697C8.67098 15.6103 8.75 15.8011 8.75 16C8.75 16.1989 8.67098 16.3897 8.53033 16.5303C8.38968 16.671 8.19891 16.75 8 16.75H6C5.27065 16.75 4.57118 16.4603 4.05546 15.9445C3.53973 15.4288 3.25 14.7293 3.25 14V10C3.25 9.27065 3.53973 8.57118 4.05546 8.05546C4.57118 7.53973 5.27065 7.25 6 7.25H18C18.7293 7.25 19.4288 7.53973 19.9445 8.05546C20.4603 8.57118 20.75 9.27065 20.75 10V14C20.75 14.7293 20.4603 15.4288 19.9445 15.9445C19.4288 16.4603 18.7293 16.75 18 16.75Z" fill="#ffffff"></path>
                                                    <path d="M16 8.75C15.8019 8.74741 15.6126 8.66756 15.4725 8.52747C15.3324 8.38737 15.2526 8.19811 15.25 8V4.75H8.75V8C8.75 8.19891 8.67098 8.38968 8.53033 8.53033C8.38968 8.67098 8.19891 8.75 8 8.75C7.80109 8.75 7.61032 8.67098 7.46967 8.53033C7.32902 8.38968 7.25 8.19891 7.25 8V4.5C7.25 4.16848 7.3817 3.85054 7.61612 3.61612C7.85054 3.3817 8.16848 3.25 8.5 3.25H15.5C15.8315 3.25 16.1495 3.3817 16.3839 3.61612C16.6183 3.85054 16.75 4.16848 16.75 4.5V8C16.7474 8.19811 16.6676 8.38737 16.5275 8.52747C16.3874 8.66756 16.1981 8.74741 16 8.75Z" fill="#ffffff"></path>
                                                    <path d="M15.5 20.75H8.5C8.16848 20.75 7.85054 20.6183 7.61612 20.3839C7.3817 20.1495 7.25 19.8315 7.25 19.5V12.5C7.25 12.1685 7.3817 11.8505 7.61612 11.6161C7.85054 11.3817 8.16848 11.25 8.5 11.25H15.5C15.8315 11.25 16.1495 11.3817 16.3839 11.6161C16.6183 11.8505 16.75 12.1685 16.75 12.5V19.5C16.75 19.8315 16.6183 20.1495 16.3839 20.3839C16.1495 20.6183 15.8315 20.75 15.5 20.75ZM8.75 19.25H15.25V12.75H8.75V19.25Z" fill="#ffffff"></path>
                                                </g>
                                            </svg> Record
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
        include_once('./print/print-patient-info-modal.php');
        include_once('./print/print-patient-record-modal.php');

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

        function start_loader() {
            // Assume you have an element with an ID 'loader' that you want to display
            var loaderElement = $('#loader');

            // Check if the loader element exists
            if (loaderElement.length > 0) {
                // Set the display style to 'block' to make the loader visible
                loaderElement.css('display', 'block');
            } else {
                // If the loader element doesn't exist, create and append it to the document
                // This is just a basic example; you may need to customize it based on your specific UI structure
                var newLoaderElement = $('<div>').attr('id', 'loader').text('Loading...');

                // Append the new loader element to the document body
                $('body').append(newLoaderElement);
            }
        }

        function end_loader() {
            // Find the loader element by ID using jQuery
            var loaderElement = $('#loader');

            if (loaderElement.length > 0) {
                // Set the display style to 'none' to hide the loader
                loaderElement.css('display', 'none');

                // Optionally, you can remove the loader from the DOM if you don't need it anymore
                // loaderElement.remove();
            }
        }
        $('#print-patient').click(function() {
            start_loader();
            var _h = $('head').clone();
            var _p = $('#patient-info').clone(); // Change to the ID of your table
            var el = $('<div>');

            el.append("<style>html *, body *{ height:auto !important;min-height:unset !important}</style>")
            el.append(_h)
            el.append("<div class='text-center m-0'><img src='../assets/GAPUZ_LOGO.png' style='width: 100px;'></img></div>") // Change to your desired title
            el.append("<h2 class='text-center m-0'>Patient Information</h2>") // Change to your desired title

            el.append('<hr>')

            // Exclude the "exclude-print" class before appending the table
            _p.find('.exclude-print').remove();

            el.append(_p);

            var nw = window.open("", "_blank", 'fullscreen=true');
            nw.document.write(el.html());
            nw.document.close();

            setTimeout(function() {
                nw.print();
                setTimeout(() => {
                    nw.close();
                    end_loader();
                }, 300);
            }, 200);
        });
        $('#print-record').click(function() {
            start_loader();
            var _h = $('head').clone();
            var _p = $('#patient-record').clone(); // Change to the ID of your table
            var el = $('<div>');

            el.append("<style>html *, body *{ height:auto !important;min-height:unset !important}</style>")
            el.append(_h)
            el.append("<div class='text-center m-0'><img src='../assets/GAPUZ_LOGO.png' style='width: 100px;'></img></div>") // Change to your desired title
            el.append("<h2 class='text-center m-0'>Patient Record</h2>") // Change to your desired title

            el.append('<hr>')

            // Exclude the "exclude-print" class before appending the table
            _p.find('.exclude-print').remove();

            el.append(_p);

            var nw = window.open("", "_blank", 'fullscreen=true');
            nw.document.write(el.html());
            nw.document.close();

            setTimeout(function() {
                nw.print();
                setTimeout(() => {
                    nw.close();
                    end_loader();
                }, 300);
            }, 200);
        });
    </script>
</body>

</html>