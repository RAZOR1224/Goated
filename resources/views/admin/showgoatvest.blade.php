<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  @include('admin.partial.css')
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        @include('admin.partial.header')
        @include('admin.partial.sidebar')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Category</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/redirect')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->



        <div class="container-fluid">
        @if(session('message'))
            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List Pengguna</h4>
                        <p class="card-description"> List User yang ada
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Foto KTP</th>
                                        <th>Pendapatan Bulanan</th>
                                        <th>Sumber Penghasilan</th>
                                        <th>Kontak Lain</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($goatvests as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->foto_ktp }}</td>
                                        <td>{{ $item->pendapatan_bulanan }}</td>
                                        <td>{{ $item->sumber_penghasilan }}</td>
                                        <td>{{ $item->kontak_lain }}</td>
                                        <td>
                                                <a class="btn btn-primary" href="{{ route('edit_goatvest', $item->id) }}">Edit</a>
                                            <a onclick="return confirm('Are you sure you want to delete this data?')" class="btn btn-danger" href="{{ url('delete_goatvest', $item->id) }}" style="color: white;">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

              <div class="col-6 grid-margin">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Investor</h4>
                    <p class="card-description"> Tambah Investor Baru </p>
                    <form method="POST" action="{{ route('admin.goatvest.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="user_id"
                                                class="form-label">{{ __('User ID') }}</label>
                                            <input type="text"
                                                class="form-control @error('user_id') is-invalid @enderror"
                                                id="user_id" name="user_id" value="{{ old('user_id') }}">
                                            @error('user_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="foto_ktp" class="form-label">{{ __('Foto KTP') }}</label>
                                            <input type="file"
                                                class="form-control @error('foto_ktp') is-invalid @enderror"
                                                id="foto_ktp" name="foto_ktp">
                                            @error('foto_ktp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="pendapatan_bulanan"
                                                class="form-label">{{ __('Pendapatan Bulanan') }}</label>
                                            <input type="text"
                                                class="form-control @error('pendapatan_bulanan') is-invalid @enderror"
                                                id="pendapatan_bulanan" name="pendapatan_bulanan"
                                                value="{{ old('pendapatan_bulanan') }}">
                                            @error('pendapatan_bulanan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="sumber_penghasilan"
                                                class="form-label">{{ __('Sumber Penghasilan') }}</label>
                                            <input type="text"
                                                class="form-control @error('sumber_penghasilan') is-invalid @enderror"
                                                id="sumber_penghasilan" name="sumber_penghasilan"
                                                value="{{ old('sumber_penghasilan') }}">
                                            @error('sumber_penghasilan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="kontak_lain"
                                                class="form-label">{{ __('Kontak Lain') }}</label>
                                            <input type="text"
                                                class="form-control @error('kontak_lain') is-invalid @enderror"
                                                id="kontak_lain" name="kontak_lain" value="{{ old('kontak_lain') }}">
                                            @error('kontak_lain')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button type="submit"
                                            class="btn btn-primary">{{ __('Add Goatvest') }}</button>
                                    </form>
                  </div>
                </div>
            </div>
          
        </div>

        </div>
        

        @include('admin.partial.footer')
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    @include('admin.partial.script')
</body>

</html>