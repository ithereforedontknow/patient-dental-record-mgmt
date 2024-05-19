/*
  Add User
*/
$("#addUser").submit((e) => {
  e.preventDefault();

  // Get values from each input field
  const name = $("#name").val();
  const password = $("#password").val();
  const user_level = $("#user-level").val();
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
          url: "./add/add-user.php",
          type: "POST",
          data: {
            name: name,
            password: password,
            user_level: user_level,
          },
          success: function (respose) {
            if (respose == "success") {
              Swal.fire({
                title: "Success!",
                text: "User added!",
                icon: "success",
                confirmButtonColor: "#198754",
                didClose: () => {
                  $("#addUserModal").modal("hide");
                  location.reload(true);
                },
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Failed to add user",
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
  Edit User
*/

function editUser(id) {
  $("#editUserModal").modal("show");
  $("#e_id").text(id);
}
$("#editUser").submit((e) => {
  e.preventDefault();

  // Get values from each input field
  const e_id = $("#e_id").text();
  const e_name = $("#e_name").val();
  const e_password = $("#e_password").val();
  const e_user_level = $("#e_user-level").val();
  Swal.fire({
    title: "Are you sure?",
    text: "Update user",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    confirmButtonText: "Update",
  })
    .then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "./edit/edit-user.php",
          type: "POST",
          data: {
            e_id: e_id,
            e_password: e_password,
            e_name: e_name,
            e_user_level: e_user_level,
          },
          success: function (respose) {
            if (respose == "success") {
              Swal.fire({
                title: "Success!",
                text: "User updated!",
                icon: "success",
                confirmButtonColor: "#198754",
                didClose: () => {
                  $("#addUserModal").modal("hide");
                  location.reload(true);
                },
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Failed to update user",
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
  Delete User
*/
function deleteUser(id) {
  Swal.fire({
    title: "Are you sure?",
    text: "Delete user",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#dc3545",
    confirmButtonText: "Delete",
  })
    .then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "./delete/delete-user.php",
          type: "POST",
          data: {
            d_id: id,
          },
          success: function (respose) {
            if (respose == "success") {
              Swal.fire({
                title: "Success!",
                text: "User deleted!",
                icon: "success",
                confirmButtonColor: "#198754",
                didClose: () => {
                  location.reload(true);
                },
              });
              // You can perform additional actions here if needed
            } else {
              Swal.fire({
                icon: "error",
                title: "Failed to delete user",
                confirmButtonColor: "#198754",
                text: respose,
              });
            }
          },
          error: function (xhr, status, error) {
            Swal.fire({
              icon: "error",
              title: "Oops...",
              confirmButtonColor: "#198754",
              text: error,
            });
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
}

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
  const civilStatus = $("#civilStatus").val();
  const today = new Date();
  const birthDate = new Date(birthdate);
  let age = today.getFullYear() - birthDate.getFullYear();
  const monthDiff = today.getMonth() - birthDate.getMonth();
  if (
    monthDiff < 0 ||
    (monthDiff === 0 && today.getDate() < birthDate.getDate())
  ) {
    age--;
  }

  $("#age").val(age);
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
                didClose: () => {
                  location.reload(true);
                },
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
      let birthdate = new Date(tbl_patient_info.birthdate);
      let today = new Date();
      let age = today.getFullYear() - birthdate.getFullYear();
      let monthDiff = today.getMonth() - birthdate.getMonth();
      if (
        monthDiff < 0 ||
        (monthDiff === 0 && today.getDate() < birthdate.getDate())
      ) {
        age--;
      }
      $("#patient_id").text(tbl_patient_info.patient_id);
      $("#birthdate").text(tbl_patient_info.birthdate);
      $("#age").text(age);
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
    Edit Patient Information
*/

function editPatientInfo(patient_id) {
  $("#viewPatientModal").modal("hide");
  $("#editPatientInfo").modal("show");
  $("#e_patient_id").text(patient_id);
}

$("#editPatientInfoForm").submit((e) => {
  e.preventDefault();
  const e_patient_id = $("#e_patient_id").text();
  const e_last_name = $("#e_last_name").val();
  const e_middle_name = $("#e_middle_name").val();
  const e_civil_status = $("#e_civil_status").val();
  const e_religion = $("#e_religion").val();
  const e_nationality = $("#e_nationality").val();
  const e_occupation = $("#e_occupation").val();
  const e_office_no = $("#e_office_no").val();
  const e_dental_insurance = $("#e_dental_insurance").is(":checked");
  const e_effective_date = $("#e_effective_date").val();
  const e_fax_no = $("#e_fax_no").val();
  const e_cellphone_no = $("#e_cellphone_no").val();
  const e_email_address = $("#e_email_address").val();

  Swal.fire({
    title: "Are you sure?",
    text: "Edit patient information",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    confirmButtonText: "Edit",
  })
    .then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "./edit/edit-patient-info.php",
          type: "POST",
          data: {
            e_patient_id: e_patient_id,
            e_last_name: e_last_name,
            e_middle_name: e_middle_name,
            e_civil_status: e_civil_status,
            e_religion: e_religion,
            e_nationality: e_nationality,
            e_occupation: e_occupation,
            e_office_no: e_office_no,
            e_dental_insurance: e_dental_insurance,
            e_effective_date: e_effective_date,
            e_fax_no: e_fax_no,
            e_cellphone_no: e_cellphone_no,
            e_email_address: e_email_address,
          },
          success: function (respose) {
            if (respose == "success") {
              Swal.fire({
                title: "Success!",
                text: "Patient information updated!",
                icon: "success",
                confirmButtonColor: "#198754",
                didClose: () => {
                  $("#editPatientInfo").modal("hide");
                },
              });
              // You can perform additional actions here if needed
            } else {
              Swal.fire({
                icon: "error",
                title: "Failed to edit patient information",
                confirmButtonColor: "#198754",
                text: respose,
              });
            }
          },
          error: function (xhr, status, error) {
            Swal.fire({
              icon: "error",
              title: "Oops...",
              confirmButtonColor: "#198754",
              text: error,
            });
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
    Add Patient Dental History
*/
function addDentalHistory(patient_id) {
  $.post(
    "./view/view-dental-history.php",
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
            $("#d_patient_id").text(tbl_patient_info.patient_id);
            $("#addDentalHistoryModal").modal("show");
          }
        });
      } else {
        // view dental history
        $("#prev-dentist-id").text(tbl_patient_info.dental_history_id);
        $("#prev-dentist-fname").text(tbl_patient_info.d_first_name);
        $("#prev-dentist-lname").text(tbl_patient_info.d_last_name);
        $("#last-dental-visit").text(tbl_patient_info.last_dental_visit);
        $("#viewDentalHistory").modal("show");
      }
    }
  );
}
$("#dentalHistoryForm").submit((e) => {
  e.preventDefault();
  $("#dentalHistoryModal").modal("hide");
  const patient_id = $("#d_patient_id").text();
  const d_firstName = $("#d_firstName").val();
  const d_lastName = $("#d_lastName").val();
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
            d_firstName: d_firstName,
            d_lastName: d_lastName,
            last_dental_visit: last_dental_visit,
          },
          success: function (respose) {
            if (respose == "success") {
              Swal.fire({
                title: "Success!",
                text: "Patient Dental History added!",
                icon: "success",
                confirmButtonColor: "#198754",
              }).then((result) => {
                if (result.isConfirmed) {
                  $("#addDentalHistoryModal").modal("hide");
                }
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

/*
    Edit Patient Dental History
*/

function editDentalHistory(prev_dentist_id) {
  $("#viewDentalHistory").modal("hide");
  $("#editDentalHistoryModal").modal("show");
  $("#dental_history_id").text(prev_dentist_id);
}

$("#editDentalHistoryForm").submit((e) => {
  e.preventDefault();
  const dental_history_id = $("#dental_history_id").text();
  const e_first_name = $("#de_first_name").val();
  const e_last_name = $("#de_last_name").val();
  const e_last_dental_visit = $("#e_last_dental_visit").val();
  Swal.fire({
    title: "Are you sure?",
    text: "Edit patient dental history",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    confirmButtonText: "Edit",
  })
    .then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "./edit/edit-dental-history.php",
          type: "POST",
          data: {
            dental_history_id: dental_history_id,
            e_first_name: e_first_name,
            e_last_name: e_last_name,
            e_last_dental_visit: e_last_dental_visit,
          },
          success: function (respose) {
            if (respose == "success") {
              Swal.fire({
                title: "Success!",
                text: "Patient Dental History updated!",
                icon: "success",
                confirmButtonColor: "#198754",
              });
              $("#editDentalHistoryModal").modal("hide");
            } else {
              Swal.fire({
                icon: "error",
                title: "Failed to edit patient dental history",
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
    Add Medical History
*/

function addMedicalHistory(patient_id) {
  $.post(
    "./view/view-medical-history.php",
    {
      patient_id: patient_id,
    },
    function (data) {
      let tbl_patient_info = JSON.parse(data);
      if (!tbl_patient_info.med_history_id) {
        Swal.fire({
          icon: "info",
          title: "Patient has no medical history yet!",
          showCancelButton: true,
          confirmButtonColor: "#198754",
          confirmButtonText: "Yes",
          cancelButtonText: "No",
          text: "Do you want to add one?",
        }).then((result) => {
          if (result.isConfirmed) {
            $("#patient_id_med").text(tbl_patient_info.patient_id);
            $("#addMedicalHistoryModal").modal("show");
          }
        });
      } else {
        $("#view_patient_id").text(patient_id);
        $("#view_physician").text(tbl_patient_info.physician);
        $("#view_specialty").text(tbl_patient_info.specialty);
        $("#view_office_address").text(tbl_patient_info.office_address);
        $("#view_office_no").text(tbl_patient_info.office_number);
        $("#view_good_health").text(tbl_patient_info.good_health);
        $("#view_medical_treatment").text(tbl_patient_info.medical_treatment);
        $("#_medical_treatment_details").text(
          tbl_patient_info.treatment_condition
        );
        $("#serious_surgery").text(tbl_patient_info.serious_illness_surgery);
        $("#view_hospitalized").text(tbl_patient_info.hospitalized);
        $("#hospitalized_details").text(
          tbl_patient_info.hospitalization_details
        );
        $("#view_medications").text(tbl_patient_info.medications);
        $("#view_tobacco").text(tbl_patient_info.tobacco_use);
        $("#view_drugs").text(tbl_patient_info.alcohol_drugs);
        $("#view_drugs").text(tbl_patient_info.alcohol_drugs);
        $("#view_allergies").text(tbl_patient_info.allergies);
        $("#view_other_allergies").text(tbl_patient_info.other_allergies);
        $("#view_bleeding").text(tbl_patient_info.bleeding_time);
        $("#view_pregnant").text(tbl_patient_info.pregnant);
        $("#view_nursing").text(tbl_patient_info.nursing);
        $("#view_birth_control").text(tbl_patient_info.birth_control);
        $("#view_blood_type").text(tbl_patient_info.blood_type);
        $("#view_blood_pressure").text(tbl_patient_info.blood_pressure);
        $("#view_has_following").text(tbl_patient_info.conditions);
        $("#viewMedicalHistory").modal("show");
      }
    }
  );
}

$("#addMedicalHistoryForm").submit((e) => {
  e.preventDefault();
  $("#addMedicalHistoryModal").modal("hide");
  const patient_id_med = $("#patient_id_med").text();
  const physician = $("#physician").val();
  const officeAddress = $("#officeAddress").val();
  const specialty = $("#specialty").val();
  const officeNumber = $("#officeNumber").val();
  const goodHealth = $("input[name='goodHealth']:checked").val();
  const medicalTreatment = $("input[name='medicalTreatment']:checked").val();
  const treatmentCondition = $("#treatmentCondition").val();
  const seriousIllnessSurgery = $(
    "input[name='seriousIllnessSurgery']:checked"
  ).val();
  const illnessSurgeryDetails = $("#illnessSurgeryDetails").val();
  const hospitalized = $("input[name='hospitalized']:checked").val();
  const hospitalizationDetails = $("#hospitalizationDetails").val();
  const medications = $("input[name='medications']:checked").val();
  const medicationDetails = $("#medicationDetails").val();
  const tobaccoUse = $("input[name='tobaccoUse']:checked").val();
  const alcoholDrugs = $("input[name='alcoholDrugs']:checked").val();
  const allergies = $("input[name='allergies[]']:checked")
    .map(function () {
      return this.value;
    })
    .get();
  const otherAllergies = $("#otherAllergies").val();
  const bleedingTime = $("#bleedingTime").val();
  const pregnant = $("input[name='pregnant']:checked").val();
  const nursing = $("input[name='nursing']:checked").val();
  const birthControl = $("input[name='birthControl']:checked").val();
  const bloodType = $("#bloodType").val();
  const bloodPressure = $("#bloodPressure").val();
  const conditions = $("input[name='hasFollowing[]']:checked")
    .map(function () {
      return this.id;
    })
    .get();
  console.log(conditions);
  Swal.fire({
    title: "Are you sure?",
    text: "Add patient medical history",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    confirmButtonText: "Add",
  })
    .then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "./add/add-med-history.php",
          type: "POST",
          data: {
            patient_id_med: patient_id_med,
            physician: physician,
            officeAddress: officeAddress,
            specialty: specialty,
            officeNumber: officeNumber,
            goodHealth: goodHealth,
            medicalTreatment: medicalTreatment,
            treatmentCondition: treatmentCondition,
            seriousIllnessSurgery: seriousIllnessSurgery,
            illnessSurgeryDetails: illnessSurgeryDetails,
            hospitalized: hospitalized,
            hospitalizationDetails: hospitalizationDetails,
            medications: medications,
            medicationDetails: medicationDetails,
            tobaccoUse: tobaccoUse,
            alcoholDrugs: alcoholDrugs,
            allergies: allergies,
            otherAllergies: otherAllergies,
            bleedingTime: bleedingTime,
            pregnant: pregnant,
            nursing: nursing,
            birthControl: birthControl,
            bloodType: bloodType,
            bloodPressure: bloodPressure,
            conditions: conditions,
          },
          success: function (response) {
            if (response == "success") {
              Swal.fire({
                title: "Success!",
                text: "Patient Medical History added!",
                icon: "success",
                confirmButtonColor: "#198754",
              });
              $("#addMedicalHistoryModal").modal("hide");
            } else {
              Swal.fire({
                icon: "error",
                title: "Failed to add patient medical history",
                confirmButtonColor: "#198754",
                text: response,
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
function editMedicalHistory(e_patient_id) {
  $("#viewMedicalHistory").modal("hide");
  $("#editMedicalHistoryModal").modal("show");
  $("#e_patient_id_med").text(e_patient_id);
}
$("#editMedicalHistoryForm").submit((e) => {
  e.preventDefault();
  const e_patient_id_med = $("#e_patient_id_med").text();
  const e_physician = $("#e_physician").val();
  const e_officeAddress = $("#e_officeAddress").val();
  const e_specialty = $("#e_specialty").val();
  const e_officeNumber = $("#e_officeNumber").val();
  const e_goodHealth = $("input[name='e_goodHealth']:checked").val();
  const e_medicalTreatment = $(
    "input[name='e_medicalTreatment']:checked"
  ).val();
  const e_treatmentCondition = $("#e_treatmentCondition").val();
  const e_seriousIllnessSurgery = $(
    "input[name='e_seriousIllnessSurgery']:checked"
  ).val();
  const e_illnessSurgeryDetails = $("#e_illnessSurgeryDetails").val();
  const e_hospitalized = $("input[name='e_hospitalized']:checked").val();
  const e_hospitalizationDetails = $("#e_hospitalizationDetails").val();
  const e_medications = $("input[name='e_medications']:checked").val();
  const e_medicationDetails = $("#e_medicationDetails").val();
  const e_tobaccoUse = $("input[name='e_tobaccoUse']:checked").val();
  const e_alcoholDrugs = $("input[name='e_alcoholDrugs']:checked").val();
  const e_allergies = $("input[name='allergy[]']:checked")
    .map(function () {
      return this.value;
    })
    .get();
  const e_otherAllergies = $("#e_otherAllergies").val();
  const e_bleedingTime = $("#e_bleedingTime").val();
  const e_pregnant = $("input[name='e_pregnant']:checked").val();
  const e_nursing = $("input[name='e_nursing']:checked").val();
  const e_birthControl = $("input[name='e_birthControl']:checked").val();
  const e_bloodType = $("#e_bloodType").val();
  const e_bloodPressure = $("#e_bloodPressure").val();
  const e_conditions = $("input[name='has[]']:checked")
    .map(function () {
      return this.id;
    })
    .get();

  console.log(e_conditions);
  Swal.fire({
    title: "Are you sure?",
    text: "Update patient medical history",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    confirmButtonText: "Update",
  })
    .then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "./edit/edit-medical-history.php",
          type: "POST",
          data: {
            e_patient_id_med: e_patient_id_med,
            e_physician: e_physician,
            e_officeAddress: e_officeAddress,
            e_specialty: e_specialty,
            e_officeNumber: e_officeNumber,
            e_goodHealth: e_goodHealth,
            e_medicalTreatment: e_medicalTreatment,
            e_treatmentCondition: e_treatmentCondition,
            e_seriousIllnessSurgery: e_seriousIllnessSurgery,
            e_illnessSurgeryDetails: e_illnessSurgeryDetails,
            e_hospitalized: e_hospitalized,
            e_hospitalizationDetails: e_hospitalizationDetails,
            e_medications: e_medications,
            e_medicationDetails: e_medicationDetails,
            e_tobaccoUse: e_tobaccoUse,
            e_alcoholDrugs: e_alcoholDrugs,
            e_allergies: e_allergies,
            e_otherAllergies: e_otherAllergies,
            e_bleedingTime: e_bleedingTime,
            e_pregnant: e_pregnant,
            e_nursing: e_nursing,
            e_birthControl: e_birthControl,
            e_bloodType: e_bloodType,
            e_bloodPressure: e_bloodPressure,
            e_conditions: e_conditions,
          },
          success: function (response) {
            if (response == "success") {
              Swal.fire({
                title: "Success!",
                text: "Patient Medical History updated!",
                icon: "success",
                confirmButtonColor: "#198754",
              }).then((result) => {
                if (result.isConfirmed) {
                  $("#editMedicalHistoryModal").modal("hide");
                }
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Failed to update patient medical history",
                confirmButtonColor: "#198754",
                text: response,
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
function addRecord(patient_id) {
  $.post(
    "./view/view-record.php",
    {
      patient_id: patient_id,
    },
    function (data) {
      let tbl_patient_info = JSON.parse(data);
      if (!tbl_patient_info.record_id) {
        Swal.fire({
          icon: "info",
          title: "Patient has no record yet!",
          showCancelButton: true,
          confirmButtonColor: "#198754",
          confirmButtonText: "Yes",
          cancelButtonText: "No",
          text: "Do you want to add one?",
        }).then((result) => {
          if (result.isConfirmed) {
            $("#patient_id_record").text(patient_id);
            $("#addRecordModal").modal("show");
          }
        });
      } else {
        $("#view_patient_id").text(tbl_patient_info.patient_id);
        $("#view_date").text(tbl_patient_info.date);
        $("#view_diagnosis").text(tbl_patient_info.diagnosis);
        $("#view_examination").text(tbl_patient_info.initial_examination);
        $("#view_treatment").text(tbl_patient_info.treatment);
        $("#view_prescription").text(tbl_patient_info.prescription);
        $("#view_followup").text(tbl_patient_info.followup_checkup_date);
        $("#viewRecordModal").modal("show");
      }
    }
  );
}

$("#addRecordForm").submit((e) => {
  e.preventDefault();
  const patient_id = $("#patient_id_record").text();
  const date = $("#date").val();
  const diagnosis = $("#diagnosis").val();
  const initialExamination = $("#initialExamination").val();
  const treatment = $("#treatment").val();
  const prescription = $("#prescription").val();
  const followupDate = $("#followupDate").val();
  Swal.fire({
    title: "Are you sure?",
    text: "Add record",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    confirmButtonText: "Add",
  })
    .then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "./add/add-record.php",
          type: "POST",
          data: {
            patient_id: patient_id,
            date: date,
            diagnosis: diagnosis,
            initialExamination: initialExamination,
            treatment: treatment,
            prescription: prescription,
            followupDate: followupDate,
          },
          success: function (response) {
            if (response == "success") {
              Swal.fire({
                title: "Success!",
                text: "Record added!",
                icon: "success",
                confirmButtonColor: "#198754",
              }).then((result) => {
                if (result.isConfirmed) {
                  $("#addRecordModal").modal("hide");
                }
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Failed to add record",
                confirmButtonColor: "#198754",
                text: response,
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
function editRecord(e_patient_id) {
  $("#viewRecordModal").modal("hide");
  $("#editRecordModal").modal("show");
  $("#e_patient_id_record").text(e_patient_id);
}
$("#editRecordForm").submit((e) => {
  e.preventDefault();
  const e_patient_id = $("#e_patient_id_record").text();
  const e_date = $("#e_date").val();
  const e_diagnosis = $("#e_diagnosis").val();
  const e_initialExamination = $("#e_initialExamination").val();
  const e_treatment = $("#e_treatment").val();
  const e_prescription = $("#e_prescription").val();
  const e_followupDate = $("#e_followupDate").val();
  Swal.fire({
    title: "Are you sure?",
    text: "Add record",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    confirmButtonText: "Add",
  })
    .then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "./edit/edit-record.php",
          type: "POST",
          data: {
            patient_id: e_patient_id,
            date: e_date,
            diagnosis: e_diagnosis,
            initialExamination: e_initialExamination,
            treatment: e_treatment,
            prescription: e_prescription,
            followupDate: e_followupDate,
          },
          success: function (response) {
            if (response == "success") {
              Swal.fire({
                title: "Success!",
                text: "Record updated!",
                icon: "success",
                confirmButtonColor: "#198754",
              }).then((result) => {
                if (result.isConfirmed) {
                  $("#editRecordModal").modal("hide");
                }
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Failed to update record",
                confirmButtonColor: "#198754",
                text: response,
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
    Print Patient Information
*/

function printInformation(patient_id) {
  $.post(
    "./print/print-patient-info.php",
    {
      patient_id: patient_id,
    },
    function (data) {
      let tbl_patient_info = JSON.parse(data);
      $("#printPatientInfo").modal("show");
      $("#patient_id").text(tbl_patient_info.patient_id);
      $("#view_first_name").text(tbl_patient_info.first_name);
      $("#view_middle_name").text(tbl_patient_info.middle_name);
      $("#view_last_name").text(tbl_patient_info.last_name);
      $("#birthdate").text(tbl_patient_info.birthdate);
      let birthdate = new Date(tbl_patient_info.birthdate);
      let today = new Date();
      let age = today.getFullYear() - birthdate.getFullYear();
      let monthDiff = today.getMonth() - birthdate.getMonth();
      if (
        monthDiff < 0 ||
        (monthDiff === 0 && today.getDate() < birthdate.getDate())
      ) {
        age--;
      }
      $("#age").text(age);
      $("#sex").text(tbl_patient_info.sex);
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
      $("#prev-dentist-fname").text(tbl_patient_info.d_first_name);
      $("#prev-dentist-lname").text(tbl_patient_info.d_last_name);
      $("#last-dental-visit").text(tbl_patient_info.last_dental_visit);
      $("#view_physician").text(tbl_patient_info.physician);
      $("#view_specialty").text(tbl_patient_info.specialty);
      $("#view_office_address").text(tbl_patient_info.office_address);
      $("#view_office_no").text(tbl_patient_info.office_number);
      $("#view_good_health").text(tbl_patient_info.good_health);
      $("#view_medical_treatment").text(tbl_patient_info.medical_treatment);
      $("#_medical_treatment_details").text(
        tbl_patient_info.treatment_condition
      );
      $("#serious_surgery").text(tbl_patient_info.serious_illness_surgery);
      $("#view_hospitalized").text(tbl_patient_info.hospitalized);
      $("#hospitalized_details").text(tbl_patient_info.hospitalization_details);
      $("#view_medications").text(tbl_patient_info.medications);
      $("#view_tobacco").text(tbl_patient_info.tobacco_use);
      $("#view_drugs").text(tbl_patient_info.alcohol_drugs);
      $("#view_drugs").text(tbl_patient_info.alcohol_drugs);
      $("#view_allergies").text(tbl_patient_info.allergies);
      $("#view_other_allergies").text(tbl_patient_info.other_allergies);
      $("#view_bleeding").text(tbl_patient_info.bleeding_time);
      $("#view_pregnant").text(tbl_patient_info.pregnant);
      $("#view_nursing").text(tbl_patient_info.nursing);
      $("#view_birth_control").text(tbl_patient_info.birth_control);
      $("#view_blood_type").text(tbl_patient_info.blood_type);
      $("#view_blood_pressure").text(tbl_patient_info.blood_pressure);
      $("#view_has_following").text(tbl_patient_info.conditions);
    }
  );
}
function printRecord(patient_id) {
  $.post(
    "./print/print-patient-info.php",
    {
      patient_id: patient_id,
    },
    function (data) {
      let tbl_patient_info = JSON.parse(data);
      $("#printRecordModal").modal("show");
      $("#print_patient_id").text(tbl_patient_info.patient_id);
      $("#print_first_name").text(tbl_patient_info.first_name);
      $("#print_middle_name").text(tbl_patient_info.middle_name);
      $("#print_last_name").text(tbl_patient_info.last_name);
      $("#print_date").text(tbl_patient_info.date);
      $("#print_diagnosis").text(tbl_patient_info.diagnosis);
      $("#print_examination").text(tbl_patient_info.initial_examination);
      $("#print_treatment").text(tbl_patient_info.treatment);
      $("#print_prescription").text(tbl_patient_info.prescription);
      $("#print_followup").text(tbl_patient_info.followup_checkup_date);
    }
  );
}
