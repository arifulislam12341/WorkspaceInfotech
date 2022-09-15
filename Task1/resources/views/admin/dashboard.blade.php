
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="mb-5">

<br>

  
<h1 class="text-center text-dark">Admin Profile Details</h1>

<br>
<br>
    <table class="table table-hover">
 
    <tr class="table-dark  " >

<th class="text-white text-uppercase fw-bold">Admin id</th>
<th class="text-white text-uppercase fw-bold">Name</th>
<th class="text-white text-uppercase fw-bold">Email</th>
<th class="text-white text-uppercase fw-bold">Password</th>
<th class="text-white text-uppercase fw-bold">Phone</th>


<th class="text-white text-uppercase fw-bold">Address</th>
</tr>


<tr class=" table-success ">
            <td>{{$keys->id}}</td>
      
            <td>{{$keys->name}}</td>
      
            <td>{{$keys->email}}</td>
       
            <td>{{$keys->password}}</td>
     
            <td>{{$keys->phone}}</td>

            
    
            <td>{{$keys->address}}</td>
        </tr>
     
   

        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       <center>
<div  style="width:100px"><a class="nav-link btn btn-outline-success" href="{{route('logout')}}">LogOut</a></div>
</center> 
</body>
</html>
