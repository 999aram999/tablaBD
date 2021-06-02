<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CrudUsuarios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>


    <h1>Usuarios</h1>
<div class="container">
<div class="row">


<div class="col-12">
<div class="card">

<div class="card-body">
@if($errors->any())
          <div class="alert alert-danger">
              @foreach($errors->all() as $error)
           {{$error}}<br>
@endforeach
</div>
@endif

<form action="{{route('users.store')}}" method="POST" >

@csrf
<div class="form-row">
  <div class="col-3">
<input type="text" name="name" class="form-control" placeholder="Nombre">

</div>
<div class="col-3">
<input type="text" name="email" class="form-control" placeholder="Email">

</div>
<div class="col-3">
<input type="password" name="password" class="form-control" placeholder="Password">

</div>
<div class="col-auto">
<button type="submit" class="btn btn-primary"> ENVIAR</button>
</div>
</div>


</form>
</div>
</div>
</div>


<div class="col-12">
<table class="table">
<thead>
<th>ID</th>
<th>Nombre</th>
<th>Email</th>
<th>&nbsp;</th>

</thead>


<tbody>
@foreach($users as $user)

<tr>
 <td>{{$user->id}} </td>
 <td> {{$user->name}}</td>
 <td> {{$user->email}} </td>
<td>
<form action="{{route('users.destroy',$user)}}" method="POST">
@method('DELETE')
@csrf
<input type="submit" value="Eliminar" class="btn btn-danger">

</form>




</td>
</tr>
@endforeach
</tbody>
</table>


</div>
</div>
</div>
      
    </body>
</html>
