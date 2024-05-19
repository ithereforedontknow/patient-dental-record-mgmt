<div class="modal fade" id="editDentalHistoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-1" id="exampleModalLabel">Edit Dental History</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editDentalHistoryForm">
                    <p class="mb-2 fs-5">Dental History ID: <span id="dental_history_id"></span></p>
                    <div class="form-group mb-2">
                        <label for="firstName" class="fs-5">First Name</label>
                        <input type="text" class="form-control" id="de_first_name" required placeholder="Enter first name">
                    </div>
                    <div class="form-group mb-2">
                        <label for="lastName" class="fs-5">Last Name</label>
                        <input type="text" class="form-control" id="de_last_name" required placeholder="Enter last name">
                    </div>
                    <div class="form-group mb-2" class="fs-5">
                        <label for="last_dental_visit" class="fs-5">Last Dental Visit</label>
                        <input type="date" class="form-control" id="e_last_dental_visit" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-target="#viewDentalHistory" data-bs-toggle="modal">Back</button>
                <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>