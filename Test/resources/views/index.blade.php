@extends('master')

   @section('content')



    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>List of User</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>

                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($crud as $cru)
                    <tr>
                        <th scope="row">{{$cru->id}}</th>
                        <td>{{$cru->Name}}</td>

                        <td>
                            <a href="{{route("crud.show",$cru->id)}}"><button class="btn btn-primary btn-sm">View</button></a>
                            <a href="{{route("crud.edit",$cru->id)}}"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                            <form action="{{route("crud.destroy",$cru->id)}}" class="btn btn-sm" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-sm">Delete</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </main>
@endsection
