@extends('layouts.default')
@section('content')

    {{ Form::open(array('route' => 'pick')) }}
        <div class =row">
            <button type="submit" class="btn btn-secondary">Pick member</button>
        </div>
    {{ Form::close() }}

    <br /><br />
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Member</th>
            <th scope="col">Team</th>
            <th scope="col">Total picks</th>
        </tr>
        </thead>
        <tbody>
        @foreach($coffee_picks as $coffee_pick)
        <tr>
            <td>{{ $coffee_pick->member }}</td>
            <td>{{ $coffee_pick->team }}</td>
            <td>{{ $coffee_pick->total }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection