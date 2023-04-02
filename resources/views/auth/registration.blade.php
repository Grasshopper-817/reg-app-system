<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
  <body>
    <div class="container">
      <div class="row justify-content-center align-items-center vh-100 ">
        <div class="col-md-6">
          <form action="{{ route('registration-user') }}" method="POST">
            @csrf
            <h2 class="mb-4">Registration</h2>
            @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
              @if (Session::has('fail'))
              <div class="alert alert-danger">{{ Session::get('fail') }}</div>
              @endif
            <div class="mb-3">
                <label for="name" class="form-label">Full name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" aria-describedby="nameHelp" >
                <div id="nameHelp" class="form-text">Please enter your full name.</div>
                <span class="text-danger">@error('name'){{ $message }} @enderror </span>
              </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" value="{{ old('email') }}"  aria-describedby="emailHelp" >
              <span class="text-danger">@error('email'){{ $message }} @enderror </span>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
              <span class="text-danger">@error('password'){{ $message }} @enderror </span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <br>
          <a href="login">Already have account</a>
        </div>
        <div class="col-md-6 d-none d-md-block" style="background-image: url('https://via.placeholder.com/500x500'); background-size: cover;"></div>
      </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
