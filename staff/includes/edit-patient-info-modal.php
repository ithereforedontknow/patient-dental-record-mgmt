<div class="modal fade" id="editPatientInfo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-1" id="exampleModalLabel">Edit Patient Info</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editPatientInfoForm">
                    <p class="mb-2 fs-5">Patient ID: <span id="e_patient_id"></span></p>
                    <div class="form-group mb-2">
                        <label for="e_last_name" class="fs-5">Lastname</label>
                        <input type="text" class="form-control" id="e_last_name" required placeholder="Enter last name">
                    </div>
                    <div class="form-group mb-2">
                        <label for="e_middle_name" class="fs-5">Middlename</label>
                        <input type="text" class="form-control" id="e_middle_name" required placeholder="Enter first name">
                    </div>
                    <div class="form-group mb-2">
                        <label for="civilStatus" class="fs-5">Civil Status</label>
                        <select class="form-control" id="e_civil_status" required>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="religion" class="fs-5">Religion</label>
                        <input type="text" class="form-control" id="e_religion" required placeholder="Enter religion">
                    </div>
                    <div class="form-group mb-2">
                        <label for="nationality" class="fs-5">Nationality</label>
                        <input type="text" class="form-control" id="e_nationality" required placeholder="Enter nationality">
                    </div>
                    <div class="form-group mb-2">
                        <label for="occupation" class="fs-5">Occupation</label>
                        <input type="text" class="form-control" id="e_occupation" required placeholder="Enter occupation">
                    </div>
                    <div class="form-group mb-2">
                        <label for="office_no" class="fs-5">Office Number</label>
                        <input type="text" class="form-control" id="e_office_no" required placeholder="Enter office number">
                    </div>
                    <div class="form-group mb-2 form-check">
                        <label class="form-check-label" for="dentalInsurance" class="fs-5">Dental Insurance</label>
                        <input type="checkbox" class="form-check-input" id="e_dental_insurance">
                    </div>
                    <div class="form-group mb-2">
                        <label for="effectiveDate" class="fs-5">Effective Date</label>
                        <input type="date" class="form-control" id="e_effective_date">
                    </div>
                    <div class="form-group mb-2">
                        <label for="fax_no" class="fs-5">Fax Number</label>
                        <input type="text" class="form-control" id="e_fax_no" required placeholder="Enter fax number">
                    </div>
                    <div class="form-group mb-2">
                        <label for="cellphoneNumber" class="fs-5">Cellphone Number</label>
                        <input type="tel" class="form-control" id="e_cellphone_no" placeholder="Enter cellphone number" maxlength="11" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="emailAddress" class="fs-5">Email Address</label>
                        <input type="email" class="form-control" id="e_email_address" placeholder="Enter email address" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-target="#viewPatientModal" data-bs-toggle="modal">Back</button>
                <button type="submit" class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>