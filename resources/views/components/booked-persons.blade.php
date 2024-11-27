<div class="container my-2">
    <h4 class="mb-3">Booked Persons</h4>
    <div class="list-group" style="max-height: 150px; overflow-y: auto;">
        @if (count($bookedPersons) > 0)
            @foreach ($bookedPersons as $person)
                <div class="list-group-item d-flex justify-content-between align-items-center p-2">
                    <div>
                        <h6 class="mb-1" style="font-size: 0.85rem;">{{ $person['name'] }}</h6>
                        <p class="mb-0" style="font-size: 0.75rem;">Booking Date: {{ \Carbon\Carbon::parse($person['booking_date'])->format('d M Y H:i') }}</p>
                    </div>
                    <button class="btn btn-secondary btn-sm">View</button>
                </div>
            @endforeach
        @else
            <div class="alert alert-info p-1 mb-0">No booked persons available.</div>
        @endif
    </div>
</div>
