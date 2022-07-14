@extends('master')

   @section('content')

<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1>Show {{$crud->Name}}</h1>


            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="Name" id="Name" value="{{$crud->Name}}" readonly>
                <small class="form-text text-muted">Help message here.</small>
            </div>

    </div>
</main>

@endsection
