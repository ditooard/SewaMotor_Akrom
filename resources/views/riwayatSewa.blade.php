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
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"
        integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

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
                    <!-- Illustrations -->
                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="m-0 font-weight-bold text-primary">RIWAYAT SEWA</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="mb-4">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="dataTable_length"></div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="dataTable_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search"
                                                            class="form-control form-control-sm col" placeholder=""
                                                            aria-controls="dataTable"></label>
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
                                                                aria-controls="dataTable" rowspan="1" colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="Name: activate to sort column descending"
                                                                style="width: 76.2px;">No</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Position: activate to sort column ascending"
                                                                style="width: 105.2px;">Jenis Sewa</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Office: activate to sort column ascending"
                                                                style="width: 59.2px;">Jenis Kendaraan</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Age: activate to sort column ascending"
                                                                style="width: 30.2px;">Tanggal Sewa</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Age: activate to sort column ascending"
                                                                style="width: 30.2px;">Selesai Sewa</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="dataTable" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Age: activate to sort column ascending"
                                                                style="width: 30.2px;">Durasi Sewa</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="dataTable" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Start date: activate to sort column ascending"
                                                                style="width: 68.2px;">Total Harga</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="dataTable" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Start date: activate to sort column ascending"
                                                                style="width: 68.2px;">Status Sewa</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="dataTable" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Start date: activate to sort column ascending"
                                                                style="width: 68.2px;">Tanggal Kembali</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="dataTable" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Start date: activate to sort column ascending"
                                                                style="width: 68.2px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($dataSewa as $item)
                                                            <tr class="odd">
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->barang_sewa->tipe_sewa }}</td>
                                                                <td>{{ $item->barang_sewa->tipe_kendaraan }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($item->mulai_sewa)->isoFormat('dddd, DD/MM/YYYY') }}
                                                                </td>
                                                                <td>{{ \Carbon\Carbon::parse($item->selesai_sewa)->isoFormat('dddd, DD/MM/YYYY') }}
                                                                </td>
                                                                <td>
                                                                    @php
                                                                        $mulaiSewa = \Carbon\Carbon::parse($item->mulai_sewa);
                                                                        $selesaiSewa = \Carbon\Carbon::parse($item->selesai_sewa);
                                                                        $durasiSewa = $selesaiSewa->diffInDays($mulaiSewa);
                                                                    @endphp
                                                                    {{ $durasiSewa }} hari
                                                                </td>
                                                                <td>
                                                                    @php
                                                                        {{($totalHarga = ($cekMembership->membership == 'Member') ? number_format($item->barang_sewa->harga_sewa * $durasiSewa * 0.8, 0, ',', '.') : number_format($item->barang_sewa->harga_sewa * $durasiSewa, 0, ',', '.')) }}
                                                                    @endphp
                                                                    {{ $totalHarga }}
                                                                </td>
                                                                <td>{{ $item->status_sewa }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($item->tanggal_kembali)->isoFormat('dddd, DD/MM/YYYY') }}
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="btn btn-info btn-circle"
                                                                        data-toggle="modal"
                                                                        data-target="#myModal{{ $item->id }}">
                                                                        <i class="fas fa-info"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                            <div id="myModal{{ $item->id }}" class="modal fade"
                                                                role="dialog">
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
                                                                            <div class="image">
                                                                                <label for="exampleInputPassword1">Foto
                                                                                    Kendaraan</label>
                                                                                <img src="{{ asset('image_vehicle/' . $item->barang_sewa->foto_kendaraan) }}"
                                                                                    class="img-thumbnail"
                                                                                    alt="{{ $item->barang_sewa->foto_kendaraan }}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="exampleInputPassword1">Tipe
                                                                                    Kendaraan</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    name="tipe_kendaraan"
                                                                                    id="tipeKendaraan{{ $item->id }}"
                                                                                    value="{{ $item->barang_sewa->tipe_kendaraan }}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="exampleInputtext1">Harga
                                                                                    Sewa</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="hargaSewa{{ $item->id }}"
                                                                                    name="harga_sewa"
                                                                                    value="{{ $item->barang_sewa->harga_sewa }}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="exampleInputtext1">Plat
                                                                                    Nomor</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    name="plat_nomor"
                                                                                    id="platNomor{{ $item->id }}"
                                                                                    value="{{ $item->barang_sewa->plat_nomor }}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="exampleInputtext1">Spesifikasi</label>
                                                                                <textarea type="text" name="spesifikasi" class="form-control" id="spesifikasi{{ $item->id }}">{{ $item->barang_sewa->spesifikasi }}</textarea>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="exampleInputtext1">Total
                                                                                    Harga Sewa</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="totalHarga{{ $item->id }}"
                                                                                    disabled>
                                                                            </div>
                                                                            <script>
                                                                                var hargaSewa{{ $item->id }} = parseFloat(document.getElementById('hargaSewa{{ $item->id }}').value);
                                                                                var durasiSewa{{ $item->id }} = parseInt('{{ $durasiSewa }}');
                                                                                var totalHarga{{ $item->id }} = hargaSewa{{ $item->id }} * durasiSewa{{ $item->id }};
                                                                                document.getElementById('totalHarga{{ $item->id }}').value = totalHarga{{ $item->id }};

                                                                                var waLink{{ $item->id }} = document.querySelector('#myModal{{ $item->id }} .btn-success');
                                                                                var waLinkURL{{ $item->id }} = waLink{{ $item->id }}.getAttribute('href');
                                                                                waLinkURL{{ $item->id }} = waLinkURL{{ $item->id }}.replace('628xxxxx', '628xxxxxxxxxx');
                                                                                waLink{{ $item->id }}.setAttribute('href', waLinkURL{{ $item->id }} + '&totalharga=' +
                                                                                    totalHarga{{ $item->id }});
                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
