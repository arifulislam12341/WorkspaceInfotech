<x-app-layout>

    <x-slot name="header">
    <center>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{Auth::guard('admin')->user()->name}}
        </h2>
        </center>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-center text-dark">Welcome {{Auth::guard('admin')->user()->name}}</h1>
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
<br>
    <table class="table table-hover">
 
<tr class="table-dark  " >

   <th class="text-white text-uppercase fw-bold">Admin id</th>
   <th class="text-white text-uppercase fw-bold">Name</th>
   <th class="text-white text-uppercase fw-bold">Email</th>
 
</tr>


<tr class=" table-success ">
            <td>{{Auth::guard('admin')->user()->id}}</td>
      
            <td>{{Auth::guard('admin')->user()->name}}</td>
      
            <td>{{Auth::guard('admin')->user()->email}}</td>
           
        </tr>
     
   

        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>



</x-app-layout>
