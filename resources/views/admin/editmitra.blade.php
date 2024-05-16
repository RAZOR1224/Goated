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
        <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                            <form method="POST" action="{{ route('admin.mitra.update', $mitra->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <!-- Nama Peternakan -->
                                    <div class="mb-3">
                                        <label for="nama_peternakan" class="form-label">Nama Peternakan</label>
                                        <input type="text"
                                            class="form-control @error('nama_peternakan') is-invalid @enderror"
                                            id="nama_peternakan" name="nama_peternakan"
                                            value="{{ old('nama_peternakan', $mitra->nama_peternakan) }}">
                                        @error('nama_peternakan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Alamat Peternakan -->
                                    <div class="mb-3">
                                        <label for="alamat_peternakan" class="form-label">Alamat Peternakan</label>
                                        <input type="text"
                                            class="form-control @error('alamat_peternakan') is-invalid @enderror"
                                            id="alamat_peternakan" name="alamat_peternakan"
                                            value="{{ old('alamat_peternakan', $mitra->alamat_peternakan) }}">
                                        @error('alamat_peternakan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Kapasitas Kandang -->
                                    <div class="mb-3">
                                        <label for="kapasitas_kandang" class="form-label">Kapasitas Kandang</label>
                                        <input type="text"
                                            class="form-control @error('kapasitas_kandang') is-invalid @enderror"
                                            id="kapasitas_kandang" name="kapasitas_kandang"
                                            value="{{ old('kapasitas_kandang', $mitra->kapasitas_kandang) }}">
                                        @error('kapasitas_kandang')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Jenis Kambing -->
                                    <div class="mb-3">
                                        <label for="jenis_kambing" class="form-label">Jenis Kambing</label>
                                        <select class="form-select @error('jenis_kambing') is-invalid @enderror"
                                            id="jenis_kambing" name="jenis_kambing">
                                            <option value="" disabled selected>Choose Jenis Kambing</option>
                                            <option value="Kambing Kacang"
                                                {{ old('jenis_kambing', $mitra->jenis_kambing) == 'Kambing Kacang' ? 'selected' : '' }}>
                                                Kambing Kacang
                                            </option>
                                            <option value="Kambing Etawa"
                                                {{ old('jenis_kambing', $mitra->jenis_kambing) == 'Kambing Etawa' ? 'selected' : '' }}>
                                                Kambing Etawa
                                            </option>
                                            <option value="Kambing Jawarandu"
                                                {{ old('jenis_kambing', $mitra->jenis_kambing) == 'Kambing Jawarandu' ? 'selected' : '' }}>
                                                Kambing Jawarandu
                                            </option>
                                            <option value="Kambing Samosir"
                                                {{ old('jenis_kambing', $mitra->jenis_kambing) == 'Kambing Samosir' ? 'selected' : '' }}>
                                                Kambing Samosir
                                            </option>
                                        </select>
                                        @error('jenis_kambing')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Lama Beternak -->
                                    <div class="mb-3">
                                        <label for="lama_beternak" class="form-label">Lama Beternak</label>
                                        <input type="text"
                                            class="form-control @error('lama_beternak') is-invalid @enderror"
                                            id="lama_beternak" name="lama_beternak"
                                            value="{{ old('lama_beternak', $mitra->lama_beternak) }}">
                                        @error('lama_beternak')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Foto KTP -->
                                    <div class="mb-3">
                                        <label for="foto_ktp" class="form-label">Foto KTP</label>
                                        <input type="file"
                                            class="form-control @error('foto_ktp') is-invalid @enderror"
                                            id="foto_ktp" name="foto_ktp">
                                        @error('foto_ktp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Foto Kandang -->
                                    <div class="mb-3">
                                        <label for="foto_kandang" class="form-label">Foto Kandang</label>
                                        <input type="file"
                                            class="form-control @error('foto_kandang') is-invalid @enderror"
                                            id="foto_kandang" name="foto_kandang">
                                       
                                            @error('foto_kandang')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Existing Foto KTP -->
                                    @if ($mitra->foto_ktp)
                                        <div class="mb-3">
                                            <label>Existing Foto KTP</label><br>
                                            <img src="{{ asset($mitra->foto_ktp) }}" alt="Foto KTP" width="150">
                                        </div>
                                    @endif

                                    <!-- Existing Foto Kandang -->
                                    @if ($mitra->foto_kandang)
                                        <div class="mb-3">
                                            <label>Existing Foto Kandang</label><br>
                                            <img src="{{ asset($mitra->foto_kandang) }}" alt="Foto Kandang"
                                                width="150">
                                        </div>
                                    @endif
                                    <a href="{{ route('admin.mitra.view') }}" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
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