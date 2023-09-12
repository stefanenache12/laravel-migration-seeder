@extends('layouts.main')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="container mt-5 mb-5">
        <table class="table table-info text-center">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Train Company</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Departure time</th>
                    <th scope="col">Arrival time</th>
                    <th scope="col">Train number</th>
                    <th scope="col">Wagons</th>
                    <th scope="col">On time</th>
                    <th scope="col">Deleted</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($trains as $train)
                    <tr>
                        <th scope="row">{{ $train->train_company }}</th>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->train_number }}</td>
                        <td>{{ $train->wagons }}</td>

                        @if ($train->in_time)
                            <td> <div class="in-time ms-3"></div></td>
                        @else
                            <td><div class="not-in-time ms-3"></div></td>
                        @endif
                        <td></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection