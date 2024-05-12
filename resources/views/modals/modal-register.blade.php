<!-- Modal Pilih Template-->
<div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="modalRegister" aria-hidden="true">
    <div class="modal-dialog d-flex align-items-center justify-content-center vh-100">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 p-5">
                        <form>
                            <div class="text-center mb-3">
                                <p>Sign up with:</p>
                                <button type="button" class="btn btn-secondary btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-secondary btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                            </div>

                            <p class="text-center">or:</p>

                            <div class="form-group mb-3">
                                <label class="label-form" for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group mb-3">
                                <label class="label-form" for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control"
                                    placeholder="Enter phone">
                            </div>
                            <div class="form-group mb-3">
                                <label class="label-form" for="password">Password</label>
                                <input type="text" id="password" name="password" class="form-control"
                                    placeholder="Enter password">
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">
                                <i class="fa fa-user"></i>&nbsp;Sign up
                            </button>
                        </form>
                        <p class="text-center">Already registered? <a href="javascript:void(0)"
                                class="text-primary" onclick="login()">Sign in</a></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>