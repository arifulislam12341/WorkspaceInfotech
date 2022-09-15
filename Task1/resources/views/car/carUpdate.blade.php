
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <p>Workspace <br> Infotech </p>

          <a class="btn btn-outline-success text-dark text-uppercase fw-bold fst-italic" href="{{route('carinfo')}}">Back</a>
        </div>
    </nav>
<h1 class="text-center text-dark">Update Car</h1>
    <div class="container">
   
   <center>
                <div style="background-color:rgba(0,0,0,0.5);"  class=" col-lg-4 p-4 shadow-lg ">
                
<center>
<form action="{{route('carUpdate')}}" class="form-group" method="post" enctype="multipart/form-data" >
{{csrf_field()}}
<br>
    <label class="text-white text-uppercase fw-bold" for="">ID</label>
    <input type="text" class="form-control" name="id" value="{{$car->id}}" readonly>

    <label class="text-white text-uppercase fw-bold" for="">Make</label>
    <input type="text" class="form-control" name="make" value="{{$car->make}}">
    @error('make')
    <span  class="text-white">{{$message}}</span>
    @enderror
   
    <label class="text-white text-uppercase fw-bold" for="">Founded</label>
    <input type="text" class="form-control" name="founded" value="{{$car->founded}}">
    @error('founded')
    <span  class="text-white">{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">Image </label>
    <input type="file" class="form-control" name="image" value="{{$car->image}}">
    <!-- @error('image')
    <span class="text-white">{{$message}}</span>
    @enderror<br> -->
    <br>
    <button class="btn btn-outline-dark text-uppercase fst-italic fw-bold btn-lg" type="submit">Submit</button>
   
</div>
</div>

</form>
</center>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
