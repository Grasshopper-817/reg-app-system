@extends('layout.main')
@section('content')
{{-- <h1>this is dashboardpage</h1>

<p>You are logged in. <a href="logout" class="btn btn-danger">Logout</a></p> --}}

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li><a class="dropdown-item" href="logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<a class="btn btn-danger" href="{{ route ('create') }}">Create</a>
<h1>Admin</h1>
<table>
  <thead>
    <tr>
      <th col-md-3>Name</th>
      <th col-md-3>Requirements</th>
      <th col-md-3>Days</th>
      <th col-md-3> Fee</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($forms as $form)
    <tr>
      <td>{{ $form->name }}</td>
      <td>{{ $form->description }}</td>
      <td>{{ $form->days }}</td>
      <td>{{ $form->fee }}</td>
      <td>
        <td><a class="btn btn-success" href="{{ 'edit/'.$form->id }}">Edit</a></td>
        <td><a class="btn btn-danger" href="{{ 'delete/'.$form->id }}">Delete</a></td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection