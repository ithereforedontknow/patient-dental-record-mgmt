<div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-1" id="exampleModalLabel">Update User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2 fs-5">User ID: <span id="e_id"></span></p>
                <form id="editUser">
                    <div class="form-group mb-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="e_name" required placeholder="Enter username">
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">Pasword</label>
                        <input type="password" class="form-control" id="e_password" required placeholder="Enter password">
                    </div>
                    <div class="form-group mb-2">
                        <label for="user-level">User level</label>
                        <select class="form-control" id="e_user-level" required>
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>