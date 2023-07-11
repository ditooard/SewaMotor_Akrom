<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.navigation')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    @include('layouts.navtop')

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul style="list-style: none">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- Illustrations -->
                    <div class="row">
                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">INPUT DATA KENDARAAN</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                </div>
                                <div class="formbold-main-wrapper">
                                    <form action="{{ route('postDataMotor') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="formbold-mb-3">
                                            <label for="upload" class="formbold-form-label">
                                                Uploud Foto Kendaraan
                                            </label>
                                            <input type="file" name="foto_kendaraan" id="upload"
                                                class="formbold-form-input formbold-form-file" />
                                            <label for="upload" class="formbold-form-label">
                                                * Batas maksimal 2MB
                                            </label>
                                        </div>

                                        <div class="formbold-mb-3">
                                            <label class="formbold-form-label">Tipe Sewa</label>
                                            <select class="formbold-form-input" name="tipe_sewa" id="occupation">
                                                <option value="Premium"
                                                    {{ old('tipe_sewa') == 'Premium' ? 'selected' : '' }}>Premium
                                                </option>
                                                <option value="Spesial"
                                                    {{ old('tipe_sewa') == 'Spesial' ? 'selected' : '' }}>Spesial
                                                </option>
                                            </select>
                                        </div>

                                        <div class="formbold-mb-3">
                                            <label for="age" class="formbold-form-label">Tipe Kendaraan</label>
                                            <input type="text" name="tipe_kendaraan" id="age"
                                                class="formbold-form-input" value="{{ old('tipe_kendaraan') }}" />
                                        </div>

                                        <div class="formbold-mb-3">
                                            <label for="age" class="formbold-form-label">Harga Sewa</label>
                                            <input type="text" name="harga_sewa" id="age"
                                                class="formbold-form-input" value="{{ old('harga_sewa') }}" />
                                        </div>

                                        <div class="formbold-mb-3">
                                            <label for="age" class="formbold-form-label">Plat Nomor</label>
                                            <input type="text" name="plat_nomor" id="age"
                                                class="formbold-form-input" value="{{ old('plat_nomor') }}" />
                                        </div>

                                        <div class="formbold-mb-3">
                                            <label for="email" class="formbold-form-label">Spesifikasi
                                                Kendaraan</label>
                                            <textarea class="form-control" name="spesifikasi" id="exampleFormControlTextarea1" rows="3">{{ old('spesifikasi') }}</textarea>
                                        </div>
                                        <div class="text-center">
                                            <button class="formbold-btn">Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <style>
                                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

                                * {
                                    margin: 0;
                                    padding: 0;
                                    box-sizing: border-box;
                                }

                                body {
                                    font-family: 'Inter', sans-serif;
                                }

                                .formbold-mb-3 {
                                    margin-bottom: 15px;
                                }

                                .formbold-relative {
                                    position: relative;
                                }

                                .formbold-opacity-0 {
                                    opacity: 0;
                                }

                                .formbold-stroke-current {
                                    stroke: #ffffff;
                                    z-index: 999;
                                }

                                #supportCheckbox:checked~div span {
                                    opacity: 1;
                                }

                                #supportCheckbox:checked~div {
                                    background: #6a64f1;
                                    border-color: #6a64f1;
                                }

                                .formbold-main-wrapper {
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    padding: 48px;
                                }

                                .formbold-form-wrapper {
                                    margin: 0 auto;
                                    max-width: 500px;
                                    width: 100%;
                                    background: white;
                                    padding: 40px;
                                }

                                .formbold-img {
                                    display: block;
                                    margin: 0 auto 45px;
                                }

                                .formbold-input-wrapp>div {
                                    display: flex;
                                    gap: 20px;
                                }

                                .formbold-input-flex {
                                    display: flex;
                                    gap: 20px;
                                    margin-bottom: 15px;
                                }

                                .formbold-input-flex>div {
                                    width: 50%;
                                }

                                .formbold-form-input {
                                    width: 100%;
                                    padding: 13px 22px;
                                    border-radius: 5px;
                                    border: 1px solid #dde3ec;
                                    background: #ffffff;
                                    font-weight: 500;
                                    font-size: 16px;
                                    color: #536387;
                                    outline: none;
                                    resize: none;
                                }

                                .formbold-form-input::placeholder,
                                select.formbold-form-input,
                                .formbold-form-input[type='date']::-webkit-datetime-edit-text,
                                .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
                                .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
                                .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
                                    color: rgba(83, 99, 135, 0.5);
                                }

                                .formbold-form-input:focus {
                                    border-color: #6a64f1;
                                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                                }

                                .formbold-form-label {
                                    color: #536387;
                                    font-size: 14px;
                                    line-height: 24px;
                                    display: block;
                                    margin-bottom: 10px;
                                }

                                .formbold-checkbox-label {
                                    display: flex;
                                    cursor: pointer;
                                    user-select: none;
                                    font-size: 16px;
                                    line-height: 24px;
                                    color: #536387;
                                }

                                .formbold-checkbox-label a {
                                    margin-left: 5px;
                                    color: #6a64f1;
                                }

                                .formbold-input-checkbox {
                                    position: absolute;
                                    width: 1px;
                                    height: 1px;
                                    padding: 0;
                                    margin: -1px;
                                    overflow: hidden;
                                    clip: rect(0, 0, 0, 0);
                                    white-space: nowrap;
                                    border-width: 0;
                                }

                                .formbold-checkbox-inner {
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 20px;
                                    height: 20px;
                                    margin-right: 16px;
                                    margin-top: 2px;
                                    border: 0.7px solid #dde3ec;
                                    border-radius: 3px;
                                }

                                .formbold-form-file {
                                    padding: 12px;
                                    font-size: 14px;
                                    line-height: 24px;
                                    color: rgba(83, 99, 135, 0.5);
                                }

                                .formbold-form-file::-webkit-file-upload-button {
                                    display: none;
                                }

                                .formbold-form-file:before {
                                    content: 'Upload';
                                    display: inline-block;
                                    background: #EEEEEE;
                                    border: 0.5px solid #E7E7E7;
                                    border-radius: 3px;
                                    padding: 3px 12px;
                                    outline: none;
                                    white-space: nowrap;
                                    -webkit-user-select: none;
                                    cursor: pointer;
                                    color: #637381;
                                    font-weight: 500;
                                    font-size: 12px;
                                    line-height: 16px;
                                    margin-right: 10px;
                                }

                                .formbold-btn {
                                    font-size: 16px;
                                    border-radius: 5px;
                                    padding: 14px 25px;
                                    border: none;
                                    font-weight: 500;
                                    background-color: #6a64f1;
                                    color: white;
                                    cursor: pointer;
                                    margin-top: 25px;
                                }

                                .formbold-btn:hover {
                                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                                }

                                .formbold-w-45 {
                                    width: 45%;
                                }
                            </style>
                        </div>
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">DATA KENDARAAN</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="mb-2">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="dataTables_length" id="dataTable_length"></div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div id="dataTable_filter" class="dataTables_filter">
                                                        <label>Search:<input type="search"
                                                                class="form-control form-control-sm col"
                                                                placeholder="" aria-controls="dataTable"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table class="table table-bordered dataTable" id="dataTable"
                                                        width="100%" cellspacing="0" role="grid"
                                                        aria-describedby="dataTable_info" style="width: 100%;">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting sorting_asc" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1" aria-sort="ascending"
                                                                    aria-label="Name: activate to sort column descending"
                                                                    style="width: 76.2px;">ID</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Position: activate to sort column ascending"
                                                                    style="width: 105.2px;">Tipe Sewa</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Office: activate to sort column ascending"
                                                                    style="width: 59.2px;">Tipe Kendaraan</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Age: activate to sort column ascending"
                                                                    style="width: 30.2px;">Harga Sewa</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Age: activate to sort column ascending"
                                                                    style="width: 30.2px;">Plat Nomor</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Start date: activate to sort column ascending"
                                                                    style="width: 68.2px;">Spesifikasi</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Start date: activate to sort column ascending"
                                                                    style="width: 68.2px;">AKSI</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($dataKendaraan as $item)
                                                                <tr class="odd">
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $item->tipe_sewa }}</td>
                                                                    <td>{{ $item->tipe_kendaraan }}</td>
                                                                    <td>{{ $item->harga_sewa }}</td>
                                                                    <td>{{ $item->plat_nomor }}</td>
                                                                    <td>{{ $item->spesifikasi }}</td>
                                                                    <td>
                                                                        <a href="#"
                                                                            class="btn btn-info btn-circle"
                                                                            data-toggle="modal"
                                                                            data-target="#myModal">
                                                                            <i class="fas fa-info-circle"></i>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-danger btn-circle">
                                                                            <i class="fas fa-trash"></i>
                                                                        </a>

                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            <div id="myModal" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                    <!-- konten modal-->
                                                                    <div class="modal-content">
                                                                        <!-- heading modal -->
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal">&times;</button>
                                                                        </div>
                                                                        <!-- body modal -->
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="text-center">
                                                                                    <img src="{{ asset('image_vehicle/' . $item->foto_kendaraan) }}"
                                                                                        class="img-thumbnail"
                                                                                        alt="Cinque Terre">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputPassword1">Tipe
                                                                                        Sewa</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="exampleInputPassword1"
                                                                                        value="{{ $item->tipe_sewa }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputPassword1">Tipe
                                                                                        Kendaraan</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="exampleInputtext1"
                                                                                        value="{{ $item->tipe_kendaraan }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputtext1">Harga
                                                                                        Sewa</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="exampleInputtext1"
                                                                                        value="{{ $item->harga_sewa }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputtext1">Plat
                                                                                        Nomor</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="exampleInputtext1"
                                                                                        value="{{ $item->plat_nomor }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputtext1">Spesifikasi</label>
                                                                                    <textarea type="text" class="form-control" id="exampleInputtext1">{{ $item->spesifikasi }}</textarea>
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    <button type="submit"
                                                                                        class="formbold-btn">EDIT</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- End of Main Content -->
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2021</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
