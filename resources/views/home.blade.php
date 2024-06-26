@extends('layouts.app')

@section('title', 'Trains date today')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <h3 class="text-dark font-weight-bold my-4 border-bottom border-dark">Today's trains</h3>
            <table class="table table-light table-hover ">
                <thead>
                    <tr>
                        <th scope="col">ID:</th>
                        <th scope="col">Agency</th>
                        <th scope="col">Departure station</th>
                        <th scope="col">Arrival station</th>
                        <th scope="col">Departure time</th>
                        <th scope="col">Arrival time</th>
                        <th scope="col">Duration minutes</th>
                        <th scope="col">Distance</th>
                        <th scope="col">Ticket price</th>
                        <th scope="col">Train code</th>
                        <th scope="col">Train type</th>
                        <th scope="col">Number of carriages</th>
                        <th scope="col">In time </th>
                        <th scope="col">Deleted</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($trains as $train)
                    <tr>
                        <th scope="row">{{$train->id}}</th>
                        <td>{{$train->agency}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->departure_time}}</td>
                        <td>{{$train->arrival_time}}</td>
                        <td>{{$train->duration_minutes}}</td>
                        <td>{{$train->distance}}</td>
                        <td>{{$train->ticket_price}}</td>
                        <td>{{$train->train_code}}</td>
                        <td>{{$train->train_type}}</td>
                        <td>{{$train->num_carriages}}</td>
                        <td>{{$train->in_time}}</td>
                        <td>{{$train->deleted}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection