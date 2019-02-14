@extends('layouts.default')
@section('content')

    {{ Form::open(array('route' => 'member.store')) }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter member name" required>
        </div>
        <div class="form-group">
            <label for="team">Team:</label>
            <select class="custom-select" id="team_id" name="team_id">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="favorite_coffee">Favorite coffee:</label>
            <input type="text" class="form-control" id="favorite_coffee" name="favorite_coffee" aria-describedby="favorite_coffee" placeholder="Enter member's favorite coffee" required>
        </div>
        <div class="form-group">
            <label for="working_days">Working days:</label>
            <div class="checkbox">
                <input type="checkbox" class="form-check-input" id="working_days[1]" name="working_days[1]"><label class="form-check-label" for="working_days[1]">Monday</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" class="form-check-input" id="working_days[2]" name="working_days[2]"><label class="form-check-label" for="working_days[2]">Tuesday</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" class="form-check-input" id="working_days[3]" name="working_days[3]"><label class="form-check-label" for="working_days[3]">Wednesday</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" class="form-check-input" id="working_days[4]" name="working_days[4]"><label class="form-check-label" for="working_days[4]">Thursday</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" class="form-check-input" id="working_days[5]" name="working_days[5]"><label class="form-check-label" for="working_days[5]">Friday</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" class="form-check-input" id="working_days[6]" name="working_days[6]"><label class="form-check-label" for="working_days[6]">Saturday</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" class="form-check-input" id="working_days[7]" name="working_days[7]"><label class="form-check-label" for="working_days[7]">Sunday</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add member</button>
    {{ Form::close() }}

@endsection