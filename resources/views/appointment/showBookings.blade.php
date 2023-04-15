 @extends('layout.main')

@section('content')
<div class="container">
    <h1>Bookings Admin</h1>
    <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>Booking no.</th>
            <th>School ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Form Name</th>
            <th>Purpose</th>
            <th>Booking Created</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($bookings as $booking)
            <tr>
              <td>{{ $booking->id }}</td>
              <td>{{ $booking->appointment->booking_number}}</td>
              <td>{{ $booking->user->school_id }}</td>
              <td>{{ $booking->user->firstName }}</td>
              <td>{{ $booking->user->lastName }}</td>
              <td>{{ $booking->appointment->form->name}}</td>
              <td>{{ $booking->appointment->app_purpose}}</td>
              <td>{{ $booking->created_at->format('M d, Y h:i A') }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>  
</div>
@endsection