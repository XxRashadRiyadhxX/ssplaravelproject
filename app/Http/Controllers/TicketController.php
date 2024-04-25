<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket; // Add Ticket model

class TicketController extends Controller
{
    public function event1Tickets()
    {
        $event_id = 1; // Assuming event_id for Event 1 is 1. Replace it with the actual event_id.
        $event1Tickets = Ticket::where('event_id', $event_id)->get();
        return view('event1_tickets', compact('event_id', 'event1Tickets'));
    }

    public function event2Tickets()
    {
        $event_id = 2; // Assuming event_id for Event 2 is 2. Replace it with the actual event_id.
        $event2Tickets = Ticket::where('event_id', $event_id)->get();
        return view('event2_tickets', compact('event_id', 'event2Tickets'));
    }

    public function event3Tickets()
    {
        $event_id = 3; // Assuming event_id for Event 3 is 3. Replace it with the actual event_id.
        $event3Tickets = Ticket::where('event_id', $event_id)->get();
        return view('event3_tickets', compact('event_id', 'event3Tickets'));
    }

    public function confirmation($referenceNumber)
    {
        return view('ticket_confirmation', ['referenceNumber' => $referenceNumber]);
    }

    public function showEventTickets()
    {
        // Retrieve all tickets for each event and pass them to the view
        $event1Tickets = Ticket::where('event_id', 1)->get();
        $event2Tickets = Ticket::where('event_id', 2)->get();
        $event3Tickets = Ticket::where('event_id', 3)->get();
    
        $eventNames = [
            1 => 'Event 1',
            2 => 'Event 2',
            3 => 'Event 3',
            // Add more event IDs and names as needed
        ];
    
        return view('event.tickets', compact('event1Tickets', 'event2Tickets', 'event3Tickets', 'eventNames'));
    }


    public function bookTicket(Request $request)
    {
        // Validate form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Store ticket information in the database
        $ticket = Ticket::create([
            'event_id' => $request->event_id,
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone_number' => $request->phone_number, // Assuming 'phone_number' is a field in the form
            // Add more fields as needed
        ]);

        // Generate a reference number
        $referenceNumber = uniqid();

        // Redirect to confirmation page with the reference number
        return redirect()->route('ticket.confirmation', ['referenceNumber' => $referenceNumber]);
    }

    public function delete($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->back()->with('success', 'Ticket successfully deleted');
    }


}
