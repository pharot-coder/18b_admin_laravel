
<!DOCTYPE html>
<html>

<head>
  @include('includes.header')
</head>

<body>
  <!-- Sidenav -->
  @include('includes.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('includes.topnav')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Brand</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-header">
<i class="fa fa-list" ></i>
Brand
          </div>
          <div class="card-body">
<form action=" {{ route('storeBrand') }} " method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="categoryname">Brand Name:</label>
    <input type="text" class="form-control" name="brand" placeholder="Enter Brand Name">
    <input type="file" class="form-control mt-2" name="images" placeholder="Enter Brand Photo">
  </div>
<button type="submit" class="btn btn-primary" name="save" > Save </button>
</form>
          </div>
        </div>
        @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
      {{ $error }}
    </div>
@endforeach
@if (session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger">
{{ session('error') }}
</div>
@endif
      </div>
      <div class="col-sm-8">
        <div class="card">
          <div class="card-header">
<i class="fa fa-list" ></i>
Brand View
          </div>
          <div class="card-body">
            <table id="example" class="display" style="width:100%">
              <thead>
                  <tr>
                    <th>#</th>
                    <th>Photo</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Tools</th>
                  </tr>
              </thead>
              <tbody>
                <?php $count = 1;
                ?>
                 
              </tbody>
              <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Tools</th>
                  </tr>
              </tfoot>
          </table>
          </div>
        </div>
      </div>
    </div>
     
      <!-- Footer -->
     @include('includes.footer')
    </div>
  </div>
  <!-- Argon Scripts -->
 @include('includes.scripts')
</body>

</html>
