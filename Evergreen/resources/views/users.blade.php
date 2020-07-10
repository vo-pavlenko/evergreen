@extends('layout')

@section('content')
<div class="container">
    <form>
        <h2>Filter</h2>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="search" class="form-control" id="search"  placeholder="Enter name" value="{{ request()->search }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Age</label>
                <div class="col">
                    <input type="text" class="form-control" name="age_from" id="age_from" placeholder="From" value="{{ request()->age_from }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="age_to" id="age_to" placeholder="To" value="{{ request()->age_to }}">
                </div>

        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Female" @if(request()->gender == 'Female') checked @endif>
                        <label class="form-check-label" for="gridRadios1">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Male" @if(request()->gender == 'Male') checked @endif>
                        <label class="form-check-label" for="gridRadios2">
                            Male
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-2">Position</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" name="position[]" type="checkbox" value="Office Manager" @if(isset(request()->position) && in_array('Office Manager', request()->position))) checked @endif>
                    <label class="form-check-label" for="gridCheck1">
                        Office Manager
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="position[]" type="checkbox" value="Manager" @if(isset(request()->position) && in_array('Manager', request()->position))) checked @endif>
                    <label class="form-check-label" for="gridCheck1">
                        Manager
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="position[]" type="checkbox" value="Developer" @if(isset(request()->position) && in_array('Developer', request()->position))) checked @endif>
                    <label class="form-check-label" for="gridCheck1">
                        Developer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="position[]" type="checkbox" value="Designer" @if(isset(request()->position) && in_array('Designer', request()->position))) checked @endif>
                    <label class="form-check-label" for="gridCheck1">
                        Designer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="position[]" type="checkbox" value="Copywriter" @if(isset(request()->position) && in_array('Copywriter', request()->position))) checked @endif>
                    <label class="form-check-label" for="gridCheck1">
                        Copywriter
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <a href="javascript:void(0);" class="btn btn-primary submit">Submit</a>
                <a href="/" class="btn btn-danger">Clear</a>
            </div>
        </div>
    </form>

    <hr>
    <div class="users">
        <h2>Users</h2>
        <div class="row row-cols-1 row-cols-md-3">
            @foreach($users as $user)
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Name: {{$user->name}}</h5>
                            <p class="card-text">Position: {{$user->position}}</p>
                            <p class="card-text">Gender: {{$user->gender}}</p>
                            <p class="card-text">Age: {{$user->age}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
