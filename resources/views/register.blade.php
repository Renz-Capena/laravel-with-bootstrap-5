{{-- header --}}
@include('components.header')

<div class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h3 class="text-center mb-4 text-primary">Create account</h3>
                                    <hr>
                                    <form id="formCreateAccount">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Nickname</strong></label>
                                            <input required type="text" class="form-control" name="userName"
                                                placeholder="username">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Full name</strong></label>
                                            <input required type="text" class="form-control" name="fullName"
                                                placeholder="Full name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input required type="email" class="form-control" name="email"
                                                placeholder="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input required type="password" class="form-control" name="password"
                                                placeholder="Password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Confirm password</strong></label>
                                            <input required type="password" class="form-control" name="confirmPassword"
                                                placeholder="Confirm password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary"
                                                href="{{ route('loginFn') }}">Sign in</a></p>
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


{{-- script --}}
@include('components.script')

<script>
    $(function() {

        // create
        $("#formCreateAccount").on("submit", function(e) {
            e.preventDefault();

            const data = $(this).serializeArray();

            // desctructuring
            const [, , , , pass, confirmPass] = data;

            if (pass.value === confirmPass.value) {

                $.ajax({
                    url: "{{ route('createAccountFn') }}",
                    method: "post",
                    data: data,
                    success() {
                        // console.log(e)
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Add success',
                            showConfirmButton: false,
                            timer: 1500
                        })

						$("#formCreateAccount")[0].reset();

                    }
                })

            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Password not match!',
                    showConfirmButton: false,
                    timer: 1500
                })
            }

        })

    })
</script>

</body>

</html>
