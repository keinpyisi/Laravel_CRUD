@extends('master')

   @section('content')

<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1>Create New User</h1>
        <form action="{{route('crud.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter name">
                <small class="form-text text-muted">Help message here.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>

@endsection
