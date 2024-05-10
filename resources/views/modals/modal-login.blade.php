<!-- Modal Pilih Template-->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog d-flex align-items-center justify-content-center vh-100">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login User</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center mb-3">
                        <a href="{{ route('google.redirect') }}" class="text-white">
                            <img src="google.png" alt="google" width="200">
                        </a>
                    </div>
                    {{-- <div class="col-md-6 text-center mb-3">
                        <a href="{{ url('auth/google') }}" class="text-white">
                            <img src="google.png" alt="google" width="200">
                        </a>
                    </div> --}}
                    {{-- <div class="col-md-12 text-center">
                        <a href="{{ url('auth/facebook') }}" class="btn btn-primary text-white">
                            Login Facebook
                        </a>
                    </div> --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
