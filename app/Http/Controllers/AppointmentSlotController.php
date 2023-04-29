<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\AppointmentSlot;
use App\Models\Appointment;

class AppointmentSlotController extends Controller
{
    public function index($date=null)
    {
        $appointmentSlots = AppointmentSlot::all();
        $appointments = Appointment::all();
    
        // Create an empty array to hold the events
        $events = array();
    
        // Loop through each appointment slot and add it as an event
        foreach ($appointmentSlots as $appointmentSlot) {
            $start = $appointmentSlot->slot_date . 'T08:00:00'; // Set the start time to 8:00 AM
            $end = $appointmentSlot->slot_date . 'T17:00:00'; // Set the end time to 5:00 PM
            $title = $appointmentSlot->available_slots . ' slots available';
            $color = $appointmentSlot->is_disabled ? 'gray' : 'green'; // Set the color to gray if the slot is disabled
    
            // Create an array to hold the event details
            $event = array(
                'title' => $title,
                'start' => $start,
                'end' => $end,
                'color' => $color
            );
    
            // Add the event to the events array
            $events[] = $event;
        }
    
        // Pass the events array to the view
        return view('admin-dashboard.dashboard', compact('appointments', 'appointmentSlots', 'events'));
    }

    public function store(Request $request)
    {
        $appointmentSlot = new AppointmentSlot();

        $appointmentSlot->slot_date = $request->input('slot_date');
        $appointmentSlot->available_slots = $request->input('available_slots');
        $appointmentSlot->is_disabled = $request->input('is_disabled', false);

        $appointmentSlot->save();

        return redirect()->route('admin.dashboard')->with('success', 'Appointment slot created successfully.');
    }

    public function update(Request $request, AppointmentSlot $appointmentSlot)
    {
        $appointmentSlot->slot_date = $request->input('slot_date');
        $appointmentSlot->available_slots = $request->input('available_slots');
        $appointmentSlot->is_disabled = $request->input('is_disabled', false);

        $appointmentSlot->save();

       return redirect()->route('admin.dashboard')->with('success', 'Appointment slot updated successfully.');
    }

    public function destroy(AppointmentSlot $appointmentSlot)
    {
        $appointmentSlot->delete();

        return response()->json([
            'success' => true,
            'message' => 'Appointment slot deleted successfully.',
        ]);
    }
}
