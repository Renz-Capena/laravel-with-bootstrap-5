{{-- header --}}
@include('components.header')

{{-- modal --}}
<!-- editModal -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <h3 class="text-primary text-center">Edit account</h3>
                <hr>
                <form id="formEdit">
                    @csrf
                    <input type="hidden" name="idEdit" id="idEdit">
                    <div class="mb-3">
                        <label class="mb-1"><strong>Nickname</strong></label>
                        <input required type="text" class="form-control" name="userNameEdit" id="userNameEdit"
                            placeholder="username">
                    </div>
                    <div class="mb-3">
                        <label class="mb-1"><strong>Full name</strong></label>
                        <input required type="text" class="form-control" name="fullNameEdit" id="fullNameEdit"
                            placeholder="Full name">
                    </div>
                    <div class="mb-3">
                        <label class="mb-1"><strong>Email</strong></label>
                        <input required type="email" class="form-control" name="emailEdit" id="emailEdit"
                            placeholder="hello@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="mb-1"><strong>Password</strong></label>
                        <input required type="text" class="form-control" name="passwordEdit" id="passwordEdit"
                            placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-end">
                        <div>
                            <button type="button" class="btn btn-sm btn-danger light"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--*******************
        Preloader start
    ********************-->
<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
        Preloader end
    ********************-->

<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">

    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">
        <a href="#" class="brand-logo">
            <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z"
                    fill="url(#paint0_linear)"></path>
                <defs>
                </defs>
            </svg>
            <div class="brand-title">
                <h2 class="">Fillow.</h2>
                <span class="brand-sub-title">@sample</span>
            </div>
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>


    <!--**********************************
            Header start
        ***********************************-->
    <div class="header border-bottom">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Dashboard
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">

                        <li class="nav-item">
                            {{ session('userLogin')->fullname }}<span
                                class="ms-1">({{ session('userLogin')->username }})</span>
                        </li>


                        <li class="nav-item dropdown  header-profile">
                            <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                <img src="{{ asset('assets/images/user.jpg') }}" width="56" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                        width="18" height="18" viewbox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="ms-2">Profile </span>
                                </a>
                                <a href="{{ route('logoutBtnFn') }}" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                        width="18" height="18" viewbox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ms-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    <div class="dlabnav">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">User tables</a></li>
                        <li><a href="#">Calendar</a></li>
                    </ul>

                </li>

                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-info-circle"></i>
                        <span class="nav-text">Apps</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="card p-3">
                <div class="table-responsive">
                    <table id="dataTable" class="display">
                        <thead>
                            <tr>
                                <th class="text-center">id</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Fullname</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Password</th>
                                <th class="text-center">Date created</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->




    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
        </div>
    </div>


</div>
<!--*************** scripts *************************-->
@include('components.script')

<script>
    $(function() {

        // fetch data
        $('#dataTable').DataTable({
            ajax: "{{ route('getAllDataFn') }}",
            columns: [{
                    data: 'id'
                },
                {
                    data: 'username'
                },
                {
                    data: 'fullname'
                },
                {
                    data: 'email'
                },
                {
                    data: 'password'
                },
                {
                    data: 'created_at'
                },
                {
                    data: 'action'
                }
            ],
            columnDefs: [{
                "targets": [0, 1, 2, 3, 4, 5, 6],
                "className": "text-center",
            }],
            language: {
                paginate: {
                    next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                    previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
                }
            }
        })

        // edit modal
        $("tbody").on("click", "#editDataModal", function() {

            $("#editModal").modal('show')

            const id = $(this).data('id')
            const username = $(this).data('username')
            const fullname = $(this).data('fullname')
            const email = $(this).data('email')
            const password = $(this).data('password')

            $("#idEdit").val(id)
            $("#userNameEdit").val(username)
            $("#fullNameEdit").val(fullname)
            $("#emailEdit").val(email)
            $("#passwordEdit").val(password)
        })

        // update user
        $("#formEdit").on("submit", function(e) {
            e.preventDefault()

            const data = $(this).serializeArray();

            $.ajax({
                url: "{{ route('updateUserFn') }}",
                method: "post",
                data: data,
                success() {

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 1500
                    })

                    $("#editModal").modal('hide')

                    $("#dataTable").DataTable().ajax.reload();


                }
            })
        })

    })
    // delete function
    function deleteFunction(id) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: "{{ route('deleteFn') }}",
                    method: "post",
                    data: {
                        id,
                        _token: "{{ csrf_token() }}"
                    },
                    success() {

                        $("#dataTable").DataTable().ajax.reload();

                    }
                })

                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })


    }
</script>

</body>

</html>
