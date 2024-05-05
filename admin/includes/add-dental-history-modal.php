<div class="modal fade" id="dentalHistoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-1" id="exampleModalLabel">Add Dental History</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="dentalHistoryForm">
                    <p class="mb-2 fs-5">Patient ID: <span id="patient_id"></span></p>
                    <div class="form-group mb-2">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" required placeholder="Enter first name">
                    </div>
                    <div class="form-group mb-2">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" required placeholder="Enter last name">
                    </div>
                    <div class="form-group mb-2">
                        <label for="last_dental_visit">Last Dental Visit</label>
                        <input type="date" class="form-control" id="last_dental_visit" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>