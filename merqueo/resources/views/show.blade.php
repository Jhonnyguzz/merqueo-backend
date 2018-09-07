@extends('layouts.app')

@section('content')


    <table class="table table-bordered">

        <tr>

            <th>Document</th>

            <th>Name</th>

            <th>Word Length</th>

            <th>Word</th>

        </tr>

        @foreach ($upper as $value)

            <tr>

                <td>{{ $value->document_id }}</td>

                <td>{{ $value->user_name }}</td>

                <td>{{ $value->length }}</td>

                <td>{{ $value->value }}</td>

            </tr>

        @endforeach

    </table>


@endsection