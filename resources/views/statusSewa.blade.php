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
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="m-0 font-weight-bold text-primary">STATUS SEWA</h4>
                            </div>
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
                                                                style="width: 10px;">ID</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Position: activate to sort column ascending"
                                                                style="width: 70px;">Penyewa</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Position: activate to sort column ascending"
                                                                style="width: 40.2px;">Tipe Sewa</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Office: activate to sort column ascending"
                                                                style="width: 59.2px;">Tipe Kendaraan</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="dataTable" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Age: activate to sort column ascending"
                                                                style="width: 30.2px;">Mulai Sewa</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="dataTable" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Start date: activate to sort column ascending"
                                                                style="width: 68.2px;">Selesai Sewa</th>
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
                                                                style="width: 50.2px;">Validasi</th>
                                                        </tr>
                                                        @foreach ($dataSewa as $s)
                                                            <tr role="row">
                                                                <th class="sorting sorting_asc" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1" aria-sort="ascending"
                                                                    aria-label="Name: activate to sort column descending"
                                                                    style="width: 76.2px;">{{ $loop->iteration }}</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Position: activate to sort column ascending"
                                                                    style="width: 105.2px;">
                                                                    {{ $s->penyewa->pengguna->name }}</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Position: activate to sort column ascending"
                                                                    style="width: 105.2px;">
                                                                    {{ $s->barang_sewa->tipe_sewa }}</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Office: activate to sort column ascending"
                                                                    style="width: 59.2px;">
                                                                    {{ $s->barang_sewa->tipe_kendaraan }}</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Age: activate to sort column ascending"
                                                                    style="width: 30.2px;">
                                                                    {{ \Carbon\Carbon::parse($s->mulai_sewa)->isoFormat('dddd, DD/MM/YYYY') }}
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Start date: activate to sort column ascending"
                                                                    style="width: 68.2px;">
                                                                    {{ \Carbon\Carbon::parse($s->selesai_sewa)->isoFormat('dddd, DD/MM/YYYY') }}
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Start date: activate to sort column ascending"
                                                                    style="width: 68.2px;">{{ $s->status_sewa }}
                                                                </th>
                                                                @if (isset($s->tanggal_kembali))
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="dataTable" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Start date: activate to sort column ascending"
                                                                        style="width: 68.2px;">
                                                                        {{ \Carbon\Carbon::parse($s->tanggal_kembali)->isoFormat('dddd, DD/MM/YYYY') }}
                                                                    </th>
                                                                @else
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="dataTable" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Start date: activate to sort column ascending"
                                                                        style="width: 68.2px;">
                                                                    </th>
                                                                @endif

                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="dataTable" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Start date: activate to sort column ascending"
                                                                    style="width: 68.2px;">
                                                                    <a href="#"
                                                                        class="btn btn-primary btn-circle"
                                                                        data-toggle="modal"
                                                                        data-target="#myModal{{ $s->id }}">
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                </th>
                                                            </tr>
                                                        @endforeach
                                                        @if (isset($s))
                                                            <div id="myModal{{ $s->id }}" class="modal fade"
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
                                                                            <form enctype="multipart/form-data"
                                                                                action="{{ route('validasiSewa', $s->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="image">
                                                                                    <label for="exampleInputPassword1">
                                                                                        Foto Kendaraan</label>
                                                                                    <img src="{{ asset('image_vehicle/' . $s->barang_sewa->foto_kendaraan) }}"
                                                                                        class="img-thumbnail"
                                                                                        alt="{{ $s->barang_sewa->foto_kendaraan }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputPassword1">Tipe
                                                                                        Sewa</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="tipe_kendaraan"
                                                                                        id="exampleInputtext1"
                                                                                        value="{{ $s->barang_sewa->tipe_sewa }}"
                                                                                        readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputPassword1">Tipe
                                                                                        Kendaraan</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="tipe_kendaraan"
                                                                                        id="exampleInputtext1" readonly
                                                                                        value="{{ $s->barang_sewa->tipe_kendaraan }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputtext1">Tanggal
                                                                                        Mulai</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="exampleInputtext1"
                                                                                        name="harga_sewa" readonly
                                                                                        value="{{ \Carbon\Carbon::parse($s->mulai_sewa)->isoFormat('dddd, DD/MM/YYYY') }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputtext1">Tanggal
                                                                                        Selesai</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="exampleInputtext1"
                                                                                        name="harga_sewa" readonly
                                                                                        value="{{ \Carbon\Carbon::parse($s->selesai_sewa)->isoFormat('dddd, DD/MM/YYYY') }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputtext1">Lama
                                                                                        Hari</label>
                                                                                    @php
                                                                                        $mulaiSewa = \Carbon\Carbon::parse($s->mulai_sewa);
                                                                                        $selesaiSewa = \Carbon\Carbon::parse($s->selesai_sewa);
                                                                                        $durasiSewa = $selesaiSewa->diffInDays($mulaiSewa);
                                                                                    @endphp
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="exampleInputtext1" readonly
                                                                                        value="{{ $durasiSewa }} hari">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="exampleInputtext1">Total
                                                                                        Harga</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="totalHarga{{ $s->id }}"
                                                                                        readonly
                                                                                        value="{{ 'Rp ' . ($s->penyewa->membership == 'Member' ? number_format($s->barang_sewa->harga_sewa * $durasiSewa * 0.8, 0, ',', '.') : number_format($s->barang_sewa->harga_sewa * $durasiSewa, 0, ',', '.')) }}">
                                                                                </div>
                                                                                <div class="formbold-mb-3">
                                                                                    <label
                                                                                        for="formbold-form-label">Status
                                                                                        Sewa</label>
                                                                                    <select class="formbold-form-input"
                                                                                        name="status_sewa"
                                                                                        id="status_sewa">
                                                                                        <option value="Ditolak"
                                                                                            {{ $s->status_sewa == 'Ditolak' ? 'selected' : '' }}>
                                                                                            Ditolak
                                                                                        </option>
                                                                                        <option value="Booking"
                                                                                            {{ $s->status_sewa == 'Booking' ? 'selected' : '' }}>
                                                                                            Booking
                                                                                        </option>
                                                                                        <option value="Sewa"
                                                                                            {{ $s->status_sewa == 'Sewa' ? 'selected' : '' }}>
                                                                                            Sewa
                                                                                        </option>
                                                                                        <option value="Kembali"
                                                                                            {{ $s->status_sewa == 'Kembali' ? 'selected' : '' }}>
                                                                                            Kembali
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="formbold-mb-3"
                                                                                    id="tanggal_kembali_wrapper"
                                                                                    style="display: none;">
                                                                                    <label for="tanggal_kembali"
                                                                                        class="formbold-form-label">Tanggal
                                                                                        Kembali</label>
                                                                                    <input type="date"
                                                                                        name="tanggal_kembali"
                                                                                        id="tanggal_kembali"
                                                                                        class="formbold-form-input" />
                                                                                </div>

                                                                                <script>
                                                                                    document.addEventListener("DOMContentLoaded", function() {
                                                                                        var statusSewaSelect = document.getElementById('status_sewa');
                                                                                        var tanggalKembaliWrapper = document.getElementById('tanggal_kembali_wrapper');
                                                                                        var tanggalKembaliInput = document.getElementById('tanggal_kembali');

                                                                                        // Tampilkan atau sembunyikan input tanggal kembali saat opsi status sewa dipilih
                                                                                        statusSewaSelect.addEventListener('change', function() {
                                                                                            if (this.value === 'Kembali') {
                                                                                                tanggalKembaliWrapper.style.display = 'block';
                                                                                            } else {
                                                                                                tanggalKembaliWrapper.style.display = 'none';
                                                                                            }
                                                                                        });

                                                                                        // Cek status sewa saat halaman dimuat
                                                                                        if (statusSewaSelect.value === 'Kembali') {
                                                                                            tanggalKembaliWrapper.style.display = 'block';
                                                                                        }

                                                                                        // Set nilai tanggal kembali berdasarkan data yang ada
                                                                                        if (statusSewaSelect.value === 'Kembali' || {{ $s->status_sewa }} === 'Kembali') {
                                                                                            tanggalKembaliInput.value = '{{ $s->tanggal_kembali }}';
                                                                                        }
                                                                                    });
                                                                                </script>
                                                                                <div class="text-center">
                                                                                    <button type="submit"
                                                                                        onclick="return confirm('Apakah Anda yakin ingin mengubah status?')"
                                                                                        class="formbold-btn">EDIT</button>
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
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </thead>

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
