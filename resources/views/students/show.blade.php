@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered">		
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->lastName }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
