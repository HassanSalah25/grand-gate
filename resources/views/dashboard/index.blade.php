@extends('dashboard.layouts.app')

@section('content')

    @php
           // Retrieve all session data from the storage.
           $allSessions = Session::all();

            // Convert the array into a Laravel Collection.
            $sessionsCollection = new \Illuminate\Support\Collection($allSessions);

            // Get unique session IDs to count the active sessions.
            $uniqueSessionIds = $sessionsCollection->unique('id');

            // Count the total active sessions.
            $totalSessions = $uniqueSessionIds->count();

    @endphp

    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-6">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-9x text-primary"></i>
                    <div class="ms-3">
                        <h3 class="mb-2">Total Sessions</h3>
                        <h3 class="mb-0">{{$totalSessions}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-6">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-9x text-primary"></i>
                    <div class="ms-3">
                        <h3 class="mb-2">Total Products</h3>
                        <h3 class="mb-0">{{\App\Models\Product::all()->count()}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->

    <!-- Sales Chart Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Complaints and Suggestions</h6>
                    </div>
                    <canvas id="complians"></canvas>
                </div>
            </div>

        </div>
    </div>
    <!-- Sales Chart End -->

    @php
        // Calculate the date five months ago from the current date
       $fiveMonthsAgo = now()->subMonths(5);

       // Use Eloquent to fetch the data from the database and group it by month
       $dataByMonths = \App\Models\ContactUs::where('created_at', '>=', $fiveMonthsAgo)
                                ->get()
                                ->groupBy(function ($item) {
                                   return $item->created_at->format('m');
                                });
       $monthName= [];
       $monthCount= [];
       foreach ($dataByMonths as $key => $data){
            $dateObj = DateTime::createFromFormat('m', (int)$key);
            array_push($monthName,$dateObj->format('F'));
            array_push($monthCount,$data->count());
       }

    @endphp

@endsection

@push('scripts')
    <script>
        var ctx1 = $("#complians").get(0).getContext("2d");
        var myChart1 = new Chart(ctx1, {
            type: "bar",
            data: {
                labels: @json($monthName),
                datasets: [
                    {
                    label: "Complains and Suggestions",
                    data: @json($monthCount),
                    backgroundColor: "rgba(0, 156, 255, .7)"
                }
                ]
            },
            options: {
                responsive: true
            }
        });

    </script>
@endpush
