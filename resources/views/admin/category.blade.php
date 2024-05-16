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
            <div class="col-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Category List</h4>
                      <p class="card-description"> List kategori yang ada
                      </p>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Category Name</th>
                              <th>Edit Category</th>
                              <th>Delete Category</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($data as $item)
                          <tr>
                              <td>{{ $item->category_name }}</td>
                              <td>
                                  <a class="btn btn-primary" href="{{ route('edit_category', $item->id) }}">Edit</a>
                              </td>
                              <td>
                                  <a onclick="return confirm('Konfirmasi Menghapus Kategori')" class="btn btn-danger" href="{{ url('delete_category', $item->id) }}" style="color: white;">Delete</a>
                              </td>
                          </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="col-6 grid-margin">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Category</h4>
                    <p class="card-description"> Tambah Category Baru </p>
                    <form class="forms-sample" action="{{url('add_category')}}" method="POST">
                      @csrf
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label" style="color: black;">Category Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="category" placeholder="Category">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit" value="Add Category">Submit</button>
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