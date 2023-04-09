@extends('layout.main')
@section('content')
 {{-- <form action="{{ route('bookAppointment') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <label for="inputDocPurpose">Purpose</label>
        <textarea class="form-control form-control" name="app_purpose" style="height: 150px;" type="text" placeholder="" aria-label="default input example"></textarea>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-appoint" data-bs-toggle="modal" data-bs-target="#appointmentModal">Back</button>
        <button type="button" class="btn btn-appoint" data-bs-toggle="modal" data-bs-target="#confirmedModal">Submit</button>
      </div>
</form>




<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Form</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('dashboard') }}"> Back</a>
        </div>
    </div>
</div> --}}

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

<form action="{{ route('bookAppointment') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="row mb-3">
            <label for="inputDocPurpose">Purpose</label>
            <textarea class="form-control form-control" name="app_purpose" style="height: 150px;" type="text" placeholder="" aria-label="default input example"></textarea>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form> 
 
@endsection