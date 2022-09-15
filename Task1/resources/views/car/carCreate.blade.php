

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="mb-5">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container ">
            <div>
          <p>Workspace <br> Infotech </p>
          </div>
          <div>
      
          <a class="btn btn-outline-success text-dark text-uppercase fw-bold fst-italic" href="{{route('dashboard')}}">Back</a>
          </div>
        </div>
    </nav>
<h1 class="text-center text-dark">Add Car</h1>
    <div class="container">
    <!-- <div class="row  justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-6 ">
                    <img class="img-fluid" src="{{URL('images/registration.jpg')}}" alt="">
                </div> -->
   <center>
                <div style="background-color:rgba(0,0,0,0.5);"  class=" col-lg-4 p-4 shadow-lg ">
                
<center>
<form action="{{route('carCreate')}}" class="form-group" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<br>


    <label class="text-white text-uppercase fw-bold" for="">Make</label>
    <input type="text" class="form-control" name="make" value="{{old('make')}}">
    @error('make')
    <span  class="text-white">{{$message}}</span>
    @enderror
  
    <label class="text-white text-uppercase fw-bold" for="">Founded</label>
    <input type="text" class="form-control" name="founded" value="{{old('founded')}}">
    @error('price')
    <span  class="text-white">{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">Image</label>
    <input type="file" class="form-control" name="image" value="">
  
    

   
    <br>
    <button class="btn btn-outline-dark text-uppercase fst-italic fw-bold btn-lg" type="submit">Submit</button>
   
</div>
</div>

</form>
</center>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
</body >
</html>
