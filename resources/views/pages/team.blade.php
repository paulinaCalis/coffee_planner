@extends('layouts.default')
@section('content')

    {{ Form::open(array('route' => 'team.store')) }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter team name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add team</button>
    {{ Form::close() }}

@endsection