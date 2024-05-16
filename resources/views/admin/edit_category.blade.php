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
                            <form class="forms-sample" action="{{ route('update_category', $category->id) }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="category_name" class="col-sm-3 col-form-label" style="color: black;">Category Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="category_name" value="{{ $category->category_name ?? '' }}" placeholder="Category Name">
                                    </div>
                                </div>
                                <a href="javascript:history.back()" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary mr-2" name="submit" value="Update Category">Update</button>
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