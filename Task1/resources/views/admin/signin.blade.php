
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <section class="container mt-5 text-center ">
      
    <div class="row justify-content-center align-items-center " style="margin-left:370px">
                <div class="col-lg-6 col-sm-6" >
                    <h1 class="text-primary">Admin</h1>
                <form   action="{{route('signin')}}" class="form-group  border border-primary shadow-lg p-3 mb-5 bg-body rounded rounded-3  " method="post">
                    {{csrf_field()}}

                    <label for="">Email</label>
                    <input type="email" class="form-control rounded-left" name="email" <?php if(isset($_COOKIE['remember'])) {echo $_COOKIE['remember'];} ?> value = "<?php if(isset($_COOKIE['remember'])) {echo $_COOKIE['remember'];} ?>"  required>
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <span><br>
						{{Cookie::get('email')}}
				</span>
                    <br>

                    <label for="">Password</label>
                    <input type="password" name="password" id="" value="{{old('password')}}" class="form-control">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <br>

                    <label class="checkbox-wrap checkbox-primary">Remember Me
									<input type="checkbox" name="remember">
									<span class="checkmark"></span>
					</label>

                    
                    <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Submit</button>
                    </div>

                </form>
                    
                </div>
                <div class="col-lg-6 col-sm-6 ">
                    <img class="img-fluid" src="{{URL('images/c-signin.jpg')}}" alt="">
                </div>
    </div>
  
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    
</body>
</html>
