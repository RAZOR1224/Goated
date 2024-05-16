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
                                        <th>Nama Peternakan</th>
                                        <th>Alamat Peternakan</th>
                                        <th>Kapasitas Kandang</th>
                                        <th>Jenis Kambing</th>
                                        <th>Lama Beternak</th>
                                        <th>Foto Peternakan</th>
                                        <th>Foto KTP</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($mitras as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama_peternakan }}</td>
                                        <td>{{ $item->alamat_peternakan }}</td>
                                        <td>{{ $item->kapasitas_kandang }}</td>
                                        <td>{{ $item->lama_beternak	 }}</td>
                                        <td>{{ $item->jenis_kambing }}</td>
                                        <td>{{ $item->foto_kandang }}</td>
                                        <td>{{ $item->foto_ktp }}</td>
                                        <td>
                                            <a href="{{ route('admin.mitra.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.mitra.delete', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                            </form>
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
    <h4 class="card-title">Add Mitra</h4>
    <p class="card-description">Tambah Mitra Baru </p>
    <form method="POST" action="{{ route('admin.mitra.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama_peternakan" class="form-label">{{ __('Nama Peternakan') }}</label>
            <input type="text" class="form-control @error('nama_peternakan') is-invalid @enderror"
                id="nama_peternakan" name="nama_peternakan" value="{{ old('nama_peternakan') }}">
            @error('nama_peternakan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="alamat_peternakan" class="form-label">{{ __('Alamat Peternakan') }}</label>
            <input type="text" class="form-control @error('alamat_peternakan') is-invalid @enderror"
                id="alamat_peternakan" name="alamat_peternakan" value="{{ old('alamat_peternakan') }}">
            @error('alamat_peternakan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kapasitas_kandang" class="form-label">{{ __('Kapasitas Kandang') }}</label>
            <input type="text" class="form-control @error('kapasitas_kandang') is-invalid @enderror"
                id="kapasitas_kandang" name="kapasitas_kandang" value="{{ old('kapasitas_kandang') }}">
            @error('kapasitas_kandang')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jenis_kambing" class="form-label">{{ __('Jenis Kambing') }}</label>
            <select class="form-select @error('jenis_kambing') is-invalid @enderror" id="jenis_kambing"
                name="jenis_kambing">
                <option value="" selected disabled>Choose Jenis Kambing</option>
                <option value="Kambing Kacang" {{ old('jenis_kambing') == 'Kambing Kacang' ? 'selected' : '' }}>Kambing Kacang</option>
                <option value="Kambing Etawa" {{ old('jenis_kambing') == 'Kambing Etawa' ? 'selected' : '' }}>Kambing Etawa</option>
                <option value="Kambing Jawarandu" {{ old('jenis_kJawarandu') == 'Kambing Jawarandu' ? 'selected' : '' }}>Kambing Jawarandu</option>
                <option value="Kambing Samosir" {{ old('jenis_kambing') == 'Kambing Samosir' ? 'selected' : '' }}>Kambing Samosir</option>
            </select>
            @error('jenis_kambing')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="lama_beternak" class="form-label">{{ __('Lama Beternak') }}</label>
            <input type="text" class="form-control @error('lama_beternak') is-invalid @enderror" id="lama_beternak"
                name="lama_beternak" value="{{ old('lama_beternak') }}">
            @error('lama_beternak')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="foto_ktp" class="form-label">{{ __('Foto KTP') }}</label>
            <input type="file" class="form-control @error('foto_ktp') is-invalid @enderror" id="foto_ktp"
                name="foto_ktp">
            @error('foto_ktp')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="foto_kandang" class="form-label">{{ __('Foto Kandang') }}</label>
            <input type="file" class="form-control @error('foto_kandang') is-invalid @enderror" id="foto_kandang"
                name="foto_kandang">
            @error('foto_kandang')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Add Mitra') }}</button>
    </form>
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