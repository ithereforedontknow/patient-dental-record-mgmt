<div class="modal fade" id="viewRecordModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-1" id="exampleModalLabel">View Record</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="dentalHistoryContent">
                <p class="mb-2 fs-5 text-success fw-semibold">Patient ID: <span class="text-dark" id="view_patient_id"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold">Date: <span class="text-dark" id="view_date"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold">Diagnosis: <span class="text-dark" id="view_diagnosis"></span> <span class="text-dark" id="prev-dentist-lname"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold">Initial Examination: <span class="text-dark" id="view_examination"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold">Treatment: <span class="text-dark" id="view_treatment"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold">Prescription: <span class="text-dark" id="view_prescription"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold">Followup checkup date: <span class="text-dark" id="view_followup"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="editRecord($('#view_patient_id').text())">Edit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>