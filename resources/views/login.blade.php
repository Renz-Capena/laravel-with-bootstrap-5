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
                                    <h3 class="text-center mb-4 text-primary">Login</h3>
                                    <hr>
                                    <form>
                                        @csrf
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
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember my
                                                        preference</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                            {{-- <a href="{{ route('homeFn') }}" class="btn btn-primary btn-block">Sign Me In</a> --}}
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary"
                                                href="{{ route('registerFn') }}">Sign up</a></p>
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

        // login
        $("form").on("submit", function(e) {
            e.preventDefault()

            const data = $(this).serializeArray();

            $.ajax({
                url: "{{ route('loginValidateFn') }}",
                method: "post",
                data: data,
                success(e) {

                    if (e) {

                        window.location.href = "{{ route('homeFn') }}"

                    } else {

                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Wrong Credentials!',
                            showConfirmButton: false,
                            timer: 1500
                        })

                    }

                }
            })
        })
    })
</script>

</body>

</html>
