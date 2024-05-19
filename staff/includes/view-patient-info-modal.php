<div class="modal fade" id="viewPatientModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-1" id="exampleModalLabel">Additional Information</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2 fs-5 text-success fw-semibold">Patient ID: <span class="text-dark" id="patient_id"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold">Birthdate: <span class="text-dark" id="birthdate"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold ">Age: <span class="text-dark" id="age"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold ">Civil Status: <span class="text-dark" id="civil_status"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold ">Religion: <span class="text-dark" id="religion"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold ">Nationality: <span class="text-dark" id="nationality"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold ">Occupation: <span class="text-dark" id="occupation"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold ">Office Number: <span class="text-dark" id="office_no"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold ">Dental Insurance: <span class="text-dark" id="dental_insurance"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold ">Effective Date: <span class="text-dark" id="effective_date"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold ">Fax Number: <span class="text-dark" id="fax_no"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold ">Cellphone Number: <span class="text-dark" id="cellphone_no"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold ">Email Address: <span class="text-dark" id="email_address"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="editPatientInfo($('#patient_id').text())">Edit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>