<div class="modal fade" id="viewDentalHistory" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-1" id="exampleModalLabel">Dental History</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="dentalHistoryContent">
                <p class="mb-2 fs-5 text-success fw-semibold">Dental History ID: <span class="text-dark" id="prev-dentist-id"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold">Previous Dentist: <span class="text-dark" id="prev-dentist-fname"></span> <span class="text-dark" id="prev-dentist-lname"></span></p>
                <p class="mb-2 fs-5 text-success fw-semibold">Last Dental Visit: <span class="text-dark" id="last-dental-visit"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="editDentalHistory($('#prev-dentist-id').text())">Edit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>