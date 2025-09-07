@extends('composable.layout')

@section('title', 'Student Index')

@section('content')
    <h1 class="mb-4">Welcome to our Website ALT F4.</h1>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>CV</th>
                <th>Update/Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Carl Bien Andrei Lardizabal</td>
                <td><a href="{{ asset('https://carlbienandreilardizabal-spec.github.io/MyPortfolio/') }}" target="_blank" class="btn btn-primary btn-sm">View CV</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>David Doorn Balawen</td>
                <td><a href="{{ asset('https://yujin0012.github.io/resume/') }}" target="_blank" class="btn btn-primary btn-sm">View CV</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Jean Nica Tanudtanud</td>
                <td><a href="{{ asset('cv/john.pdf') }}" target="_blank" class="btn btn-primary btn-sm">View CV</a></td>
            </tr>
        </tbody>
    </table>
@endsection
