@extends('layouts.master')

@section('content')

    <div class="container">
            @if ($cars)
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Title
                        </th>
                        <th>
                            Producer
                        </th>
                        <th>
                            Number of doors
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                    <tr>
                        <td>
                            <a href="/cars/{{ $car->id }}">{{ $car->title }}</a>
                        </td>
                        <td>
                            {{ $car->producer }}
                        </td>
                        <td>
                            {{ $car->number_of_doors }}
                        </td>
                    </tr>                           
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>

@endsection
