<div class="modal fade" id="editRecordModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-1" id="exampleModalLabel">Add Record</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2 fs-5">Patient ID: <span id="e_patient_id_record"></span></p>
                <form id="addRecordForm">
                    <div class="form-group">
                        <label for="diagnosis">Date:</label>
                        <input type="date" class="form-control" id="e_date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="diagnosis">Diagnosis:</label>
                        <input type="text" class="form-control" id="e_diagnosis" name="diagnosis" required>
                    </div>
                    <div class="form-group">
                        <label for="initialExamination">Initial Examination:</label>
                        <textarea class="form-control" id="e_initialExamination" name="initialExamination" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="treatment">Treatment:</label>
                        <textarea class="form-control" id="e_treatment" name="treatment" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="prescription">Prescription:</label>
                        <input type="text" class="form-control" id="e_prescription" name="prescription" required>
                    </div>
                    <div class="form-group">
                        <label for="followupDate">Follow-up Checkup Date:</label>
                        <input type="date" class="form-control" id="e_followupDate" name="followupDate" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-target="#viewRecordModal" data-bs-toggle="modal">Back</button>
            </div>
        </div>
    </div>