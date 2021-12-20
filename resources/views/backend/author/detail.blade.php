{{--<h1>{{$author->name}}</h1>--}}
{{--<p>{{$author->country}}</p>--}}

@extends("backend.layout.master")
@section("title","Detail")
@section("title-content","Detail")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Chi Tiết</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{route('authors.index')}}">Quay Lai</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Country</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$author->id}}</td>
                            <td>{{$author->name}}</td>
                            <td>{{$author->country}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

