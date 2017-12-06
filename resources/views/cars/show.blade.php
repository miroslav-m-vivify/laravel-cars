@extends('layouts.master')

@section('content')

        <div class="container">
        @if ($car)
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
                <tr>
                    <td>
                        {{ $car->title }}
                    </td>
                    <td>
                        {{ $car->producer }}
                    </td>
                    <td>
                        {{ $car->number_of_doors }}
                    </td>
                </tr>
            </tbody>
        </table>
        @endif
    </div>

@endsection
