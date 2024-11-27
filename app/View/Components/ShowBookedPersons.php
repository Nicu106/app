<?php

use Illuminate\Http\Request;
use Illuminate\View\Component;

class ShowBookedPersons extends Component
{
    public function showBookedPersons(Request $request)
    {
        $bookedPersons = [];

        // Generate random data for booked persons
        for ($i = 0; $i < 10; $i++) {
            $name = 'Person ' . rand(1, 100); // Generate a random name
            $bookingDate = date('Y-m-d H:i:s', rand(strtotime('-1 week'), strtotime('+1 week'))); // Random booking date within the last week

            $bookedPersons[] = [
                'name' => $name,
                'booking_date' => $bookingDate,
            ];
        }

        // Check if the request wants JSON response
        if ($request->wantsJson()) {
            return response()->json($bookedPersons);
        }

        // Render the view with the bookedPersons variable
        return view('dm-chat', ['bookedPersons' => $bookedPersons]);
    }

    public function render()
    {
        // Return a view or component for rendering
        return view('dm-chat'); // Adjust the view name as needed
    }
}
