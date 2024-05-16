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
                            <form method="POST" action="{{ route('update_goatvest', $goatvest->id) }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="pendapatan_bulanan" class="form-label">Pendapatan Bulanan</label>
                                    <input type="text" class="form-control" id="pendapatan_bulanan" name="pendapatan_bulanan" value="{{ $goatvest->pendapatan_bulanan }}">
                                </div>
                                <div class="mb-3">
                                    <label for="sumber_penghasilan" class="form-label">Sumber Penghasilan</label>
                                    <input type="text" class="form-control" id="sumber_penghasilan" name="sumber_penghasilan" value="{{ $goatvest->sumber_penghasilan }}">
                                </div>
                                <div class="mb-3">
                                    <label for="kontak_lain" class="form-label">Kontak Lain</label>
                                    <input type="text" class="form-control" id="kontak_lain" name="kontak_lain" value="{{ $goatvest->kontak_lain }}">
                                </div>
                                <a href="javascript:history.back()" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">Update Goatvest</button>
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