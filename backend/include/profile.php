<main>
<div class="container">
    <br>
    <h3>PROFILE</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5overflow-hidden">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="account-general">
                                    <div class="card-body media align-items-start">
                                        <img src="assets/img/profile.JPG" alt="" class="img-thumbnail" width="100">
                                    </div>
                                    <hr class="border-light m-0">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control mb-1" value="<?php echo $_SESSION['username']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" value="<?php echo $_SESSION['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Status User</label>
                                            <input type="text" class="form-control" value="<?php echo $_SESSION['status']; ?>">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>