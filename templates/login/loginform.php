<div class="modal fade" id="model-login" aria-hidden="true" aria-labelledby="model-login-label" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2" id="model-login-label">Login</h1>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form class="">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="login-floating-input"
                            placeholder="name@example.com">
                        <label for="login-floating-input">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="login-floating-password"
                            placeholder="Password">
                        <label for="login-floating-password">Password</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-secondary" type="submit">Login</button>
                    <hr class="my-4">
                    <small class="text-muted">
                        Not a member yet?
                        <a class="border-bottom border-secondary" data-bs-toggle="modal" data-bs-target="#modal-signin">
                            Sign Up
                        </a> now.
                    </small>
                </form>
            </div>
        </div>
    </div>
</div>