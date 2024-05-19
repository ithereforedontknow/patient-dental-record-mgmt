<div class="modal fade" id="printPatientInfo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-1" id="exampleModalLabel">Patient Information</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="patient-info">
                    <p class="mb-2 fs-5 text-success fw-semibold">Patient ID: <span class="text-dark" id="patient_id"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Name: <span class="text-dark" id="view_first_name"></span> <span class="text-dark" id="view_middle_name"></span> <span class="text-dark" id="view_last_name"></span></p>

                    <p class="mb-2 fs-5 text-success fw-semibold">Birthdate: <span class="text-dark" id="birthdate"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold ">Age: <span class="text-dark" id="age"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold ">Sex: <span class="text-dark" id="sex"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold ">Civil Status: <span class="text-dark" id="civil_status"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold ">Religion: <span class="text-dark" id="religion"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold ">Nationality: <span class="text-dark" id="nationality"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold ">Occupation: <span class="text-dark" id="occupation"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold ">Office Number: <span class="text-dark" id="office_no"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold ">Dental Insurance: <span class="text-dark" id="dental_insurance"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold ">Effective Date: <span class="text-dark" id="effective_date"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold ">Fax Number: <span class="text-dark" id="fax_no"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold ">Cellphone Number: <span class="text-dark" id="cellphone_no"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Email Address: <span class="text-dark" id="email_address"></span></p>
                    <h1 class="modal-title fs-1" id="exampleModalLabel">Dental History</h1>

                    <p class="mb-2 fs-5 text-success fw-semibold">Previous Dentist: <span class="text-dark" id="prev-dentist-fname"></span> <span class="text-dark" id="prev-dentist-lname"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Last Dental Visit: <span class="text-dark" id="last-dental-visit"></span></p>
                    <h1 class="modal-title fs-1" id="exampleModalLabel">Medical History</h1>

                    <p class="mb-2 fs-5 text-success fw-semibold">Name of Physician: <span class="text-dark" id="view_physician"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Specialty: <span class="text-dark" id="view_specialty"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Office Address: <span class="text-dark" id="view_office_address"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Office Number: <span class="text-dark" id="view_office_no"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Is in Good Health: <span class="text-dark" id="view_good_health"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Is in Medical Treatment: <span class="text-dark" id="view_medical_treatment"></span>, <span class="text-dark" id="medical_treatment_details"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Is in serious illness or surgical operation: <span class="text-dark" id="serious_surgery"></span>, <span class="text-dark" id="serious_surgery_details"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Has been hospitalized: <span class="text-dark" id="view_hospitalized"></span>, <span class="text-dark" id="hospitalized_details"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Is taking any prescription/non-prescription medication: <span class="text-dark" id="view_medications"></span>, <span class="text-dark" id="medication_details"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Uses tobacco products: <span class="text-dark" id="view_tobacco"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Use alcohol, cocaine, or other dangerous drugs: <span class="text-dark" id="view_drugs"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Allergic to any of the following: <span class="text-dark" id="view_allergies"></span>, <span class="text-dark" id="view_other_allergies"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Bleeding Time: <span class="text-dark" id="view_bleeding"></span></p>
                    <div class="" id="women-only">
                        <p class="mb-2 fs-5 text-success fw-semibold">For women only: <span class="text-dark" id=""></span></p>
                        <p class="mb-2 fs-5 text-success fw-semibold">Is pregnant: <span class="text-dark" id="view_pregnant"></span></p>
                        <p class="mb-2 fs-5 text-success fw-semibold">Is nursing: <span class="text-dark" id="view_nursing"></span></p>
                        <p class="mb-2 fs-5 text-success fw-semibold">Is in birth control pills: <span class="text-dark" id="view_birth_control"></span></p>
                    </div>
                    <p class="mb-2 fs-5 text-success fw-semibold">Blood type: <span class="text-dark" id="view_blood_type"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Blood pressure: <span class="text-dark" id="view_blood_pressure"></span></p>
                    <p class="mb-2 fs-5 text-success fw-semibold">Has any of the following: <span class="text-dark" id="view_has_following"></span></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="print-patient">Print</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>