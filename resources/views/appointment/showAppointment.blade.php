@extends('layout.main')
@section('content') 
  <h1>Booking History For specific user</h1>
  
  @if(count($appointments) > 0)
    <table>
      <thead>
        <tr>
          <th>Booking Number</th>
          <th>Form</th>
          <th>Appointment Purpose</th>
          <th>Date Booked</th>
        </tr>
      </thead>
      <tbody>
        @foreach($appointments as $appointment)
          <tr>
            <td>{{ $appointment->booking_number }}</td>
            <td>{{ $appointment->form->name }}</td>
            <td>{{ $appointment->app_purpose }}</td>
            <td>{{ $appointment->created_at->format('M d, Y h:i A') }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <p>No bookings found.</p>
  @endif 
@endsection
