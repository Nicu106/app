@extends('layout.base')

@section('title', 'Booked services')

@section('content')
    <div class="container-fluid my-2">
        <h4 class="mb-3">Booked Services</h4>
        <div class="list-group" style="max-height: 400px; overflow-y: auto; max-width: 1000px; margin: 0 auto;">
            <!-- Sample Service 1 -->
            <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div>
                    <h6 class="mb-1" style="font-size: 0.9rem;">Sesiune Fotografii</h6>
                    <p class="mb-0" style="font-size: 0.8rem;">
                        Booked by: Nicu Cociorva <br>
                        Booking Date: 05 Nov 2024 14:30
                    </p>
                </div>
                <button
                    class="btn btn-secondary btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#detailsModal"
                    onclick="loadDetails('Sesiuni Fotografie', 'Nicu Cociorva', '05 Nov 2024 14:30')">
                    Details
                </button>
            </div>

            <!-- Additional services -->
            <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div>
                    <h6 class="mb-1" style="font-size: 0.9rem;">DJ Set</h6>
                    <p class="mb-0" style="font-size: 0.8rem;">
                        Booked by: Nicu Cociorva <br>
                        Booking Date: 06 Nov 2024 09:00
                    </p>
                </div>
                <button
                    class="btn btn-secondary btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#detailsModal"
                    onclick="loadDetails('Dj Set', 'Nicu Cociorva', '06 Nov 2024 09:00')">
                    Details
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Service Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 id="serviceName"></h6>
                    <p id="serviceBookedBy"></p>
                    <p id="serviceDate"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Load service details into the modal
        function loadDetails(serviceName, bookedBy, bookingDate) {
            document.getElementById('serviceName').innerText = `Service: ${serviceName}`;
            document.getElementById('serviceBookedBy').innerText = `Booked by: ${bookedBy}`;
            document.getElementById('serviceDate').innerText = `Booking Date: ${bookingDate}`;
        }
    </script>
@endsection
