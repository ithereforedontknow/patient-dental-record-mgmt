/*
    Add Patient Information
*/

$("#addPatient").submit((e) => {
  e.preventDefault();

  // Get values from each input field
  const lastName = $("#lastName").val();
  const firstName = $("#firstName").val();
  const middleName = $("#middleName").val();
  const birthdate = $("#birthdate").val();
  const age = $("#age").val();
  const civilStatus = $("#civilStatus").val();

  // Get the selected value for sex (radio buttons)
  const sex = $("input[name='sex']:checked").val();

  const religion = $("#religion").val();
  const nationality = $("#nationality").val();
  const nickname = $("#nickname").val();
  const occupation = $("#occupation").val();
  const officeNo = $("#officeNo").val();

  // Check if dental insurance checkbox is checked
  const dentalInsurance = $("#dentalInsurance").is(":checked");

  const effectiveDate = $("#effectiveDate").val();
  const faxNo = $("#faxNo").val();
  const cellphoneNumber = $("#cellphoneNumber").val();
  const emailAddress = $("#emailAddress").val();

  // Now you have all the values in separate variables
  // You can use them for further processing, like sending data to a server-side script

  // For logging in
  const userlevel = "patient";

  console.log("Last Name:", lastName);
  console.log("First Name:", firstName);
  console.log("Middle Name:", middleName);
  console.log("Birthdate:", birthdate);
  console.log("Age:", age);
  console.log("Civil Status:", civilStatus);
  console.log("Sex:", sex);
  console.log("Religion:", religion);
  console.log("Nationality:", nationality);
  console.log("Nickname:", nickname);
  console.log("Occupation:", occupation);
  console.log("Office No:", officeNo);
  console.log("Dental Insurance:", dentalInsurance);
  console.log("Effective Date:", effectiveDate);
  console.log("Fax No:", faxNo);
  console.log("Cellphone No:", cellphoneNumber);
  console.log("Email Address:", emailAddress);
  Swal.fire({
    title: "Are you sure?",
    text: "Add patient information",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    confirmButtonText: "Add",
  })
    .then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "./add/add-patient.php",
          type: "POST",
          data: {
            lastName: lastName,
            firstName: firstName,
            middleName: middleName,
            birthdate: birthdate,
            age: age,
            civilStatus: civilStatus,
            sex: sex,
            religion: religion,
            nationality: nationality,
            nickname: nickname,
            occupation: occupation,
            officeNo: officeNo,
            dentalInsurance: dentalInsurance,
            effectiveDate: effectiveDate,
            faxNo: faxNo,
            cellphoneNumber: cellphoneNumber,
            emailAddress: emailAddress,
            userlevel: userlevel,
          },
          success: function (respose) {
            if (respose == "success") {
              Swal.fire({
                title: "Success!",
                text: "Patient information added!",
                icon: "success",
                confirmButtonColor: "#198754",
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Failed to add patient information",
                confirmButtonColor: "#198754",
                text: respose,
              });
            }
          },
        });
      }
    })
    .catch((err) => {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        confirmButtonColor: "#198754",
        text: err,
      });
    });
});

/*
    View Patient Information
*/

function viewPatientInformation(patient_id) {
  $.post(
    "./view/view-patient-info.php",
    {
      patient_id: patient_id,
    },
    function (data) {
      let tbl_patient_info = JSON.parse(data);
      $("#birthdate").text(tbl_patient_info.birthdate);
      $("#age").text(tbl_patient_info.age);
      $("#civil_status").text(tbl_patient_info.civil_status);
      $("#religion").text(tbl_patient_info.religion);
      $("#nationality").text(tbl_patient_info.nationality);
      $("#occupation").text(tbl_patient_info.occupation);
      $("#office_no").text(tbl_patient_info.office_no);
      if (tbl_patient_info.dental_insurance == 1) {
        $("#dental_insurance").text("Yes");
      } else {
        $("#dental_insurance").text("No");
      }
      $("#effective_date").text(tbl_patient_info.effective_date);
      $("#fax_no").text(tbl_patient_info.fax_no);
      $("#cellphone_no").text(tbl_patient_info.cellphone_number);
      $("#email_address").text(tbl_patient_info.email_address);
    }
  );
  $("#viewPatientModal").modal("show");
}

/*
    Add Patient Dental History
*/
function addDentalHistory(patient_id) {
  $.post(
    "./view/view-patient-info.php",
    {
      patient_id: patient_id,
    },
    function (data) {
      let tbl_patient_info = JSON.parse(data);
      if (!tbl_patient_info.dental_history_id) {
        Swal.fire({
          icon: "info",
          title: "Patient has no dental history yet!",
          showCancelButton: true,
          confirmButtonColor: "#198754",
          confirmButtonText: "Yes",
          cancelButtonText: "No",
          text: "Do you want to add one?",
        }).then((result) => {
          if (result.isConfirmed) {
            $("#patient_id").text(tbl_patient_info.patient_id);
            $("#dentalHistoryModal").modal("show");
          }
        });
      } else {
        $("#prev-dentist-fname").text();
        console.log(tbl_patient_info.first_name);
        $("#viewDentalHistory").modal("show");
      }
    }
  );
}
$("#dentalHistoryForm").submit((e) => {
  e.preventDefault();
  $("#dentalHistoryModal").modal("hide");
  const patient_id = $("#patient_id").text();
  const firstName = $("#firstName").val();
  const lastName = $("#lastName").val();
  const last_dental_visit = $("#last_dental_visit").val();
  Swal.fire({
    title: "Are you sure?",
    text: "Add patient dental history",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    confirmButtonText: "Add",
  })
    .then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "./add/add-dental-history.php",
          type: "POST",
          data: {
            dental_history_id: patient_id,
            firstName: firstName,
            lastName: lastName,
            last_dental_visit: last_dental_visit,
          },
          success: function (respose) {
            if (respose == "success") {
              Swal.fire({
                title: "Success!",
                text: "Patient Dental History added!",
                icon: "success",
                confirmButtonColor: "#198754",
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Failed to add patient dental history",
                confirmButtonColor: "#198754",
                text: respose,
              });
            }
          },
        });
      }
    })
    .catch((err) => {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        confirmButtonColor: "#198754",
        text: err,
      });
    });
});
