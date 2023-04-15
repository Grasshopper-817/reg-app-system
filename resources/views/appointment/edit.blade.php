@extends('layout.main')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Form</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('dashboard') }}"> Back</a>
        </div>
    </div>
</div>

 @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  

<form action="{{ url('dashboard/update/'.$forms->id) }}" method="POST">
    @csrf
    @if (Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
      @if (Session::has('fail'))
      <div class="alert alert-danger">{{ Session::get('fail') }}</div>
      @endif 
    @method('PUT')
   
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name"  value="{{ $forms ->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Availability of the Service:</strong>
                <textarea class="form-control"  name="form_avail"   placeholder="">{{ $forms->form_avail }}</textarea>
            </div>
            <div class="form-group">
                <strong>Who May Avail the Service:</strong>
                <textarea class="form-control"  name="form_who_avail" placeholder="">{{ $forms->form_who_avail }}</textarea>
            </div>

            <div class="form-group">
                <strong>What are the requirements:</strong>
                <textarea class="form-control"  name="form_requirements"   placeholder="Detail">{{ $forms->form_requirements }}</textarea>
            </div>
            <div class="form-group">
                <strong>Complete Processing Time:</strong>
                <textarea class="form-control"  name="form_process" placeholder="Number working days">{{ $forms ->form_process }}</textarea>
            </div>
            <div class="form-group">
                <strong>Document fee:</strong>
                <textarea class="form-control" name="fee" placeholder=" ">{{ $forms ->fee }}</textarea>
            </div>
            <div class="form-group">
                <strong>Maximum Time to Claim:</strong>
                <textarea class="form-control" name="form_max_time" placeholder=" ">{{ $forms ->form_max_time }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form> 
@endsection