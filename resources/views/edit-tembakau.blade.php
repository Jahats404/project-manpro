
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NARKOBA</title>
  <!-- base:css -->
  @include('layout.css')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('layout.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial:../../partials/_sidebar.html -->
      @include('layout.menu')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Edit</h4>
                  <p class="card-description">
                    Edit Tembakau
                  </p>
                  <form class="forms-sample" action="/tembakau/{{ $tembakau->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">ID</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="kode" placeholder="ID" value="{{ $tembakau->kode }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Rasa</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="rasa" placeholder="Rasa" value="{{ $tembakau->rasa }}">
                    </div>
                    <button type="submit" name="submit" value="update" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
  <!-- base:js -->
  @include('layout.js')
</body>

</html>
