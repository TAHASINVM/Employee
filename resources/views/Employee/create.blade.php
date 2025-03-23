@extends('layout.layout')


@section('content')
    <form action="{{ route('employee.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" id="first_name" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="last_name" required>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" name="willing_to_work" type="checkbox" id="wiiling_to_work" checked>
            <label class="form-check-label" for="wiiling_to_work">Is Willing TO Work</label>
        </div>
        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="language[]" type="checkbox" id="english" value="1">
                <label class="form-check-label" for="english">english</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" name="language[]" type="checkbox" id="arabic" value="2">
                <label class="form-check-label" for="arabic">Arabic</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" name="language[]" type="checkbox" id="hindi" value="3">
                <label class="form-check-label" for="hindi">Hindi</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" name="language[]" type="checkbox" id="malayalam" value="4">
                <label class="form-check-label" for="malayalam">Malayalam</label>
              </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
