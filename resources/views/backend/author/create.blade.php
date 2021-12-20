{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" placeholder="Ten tac gia">--}}
{{--    <input type="text" name="country" placeholder="Que quan">--}}
{{--    <button type="submit">Tao moi</button>--}}
{{--</form>--}}

@extends("backend.layout.master")
@section("title-content","ADD NEW AUTHOR")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">CREATE</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('authors.create')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">NAME</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">COUNTRY</label>
                    <input type="text" name="country" class="form-control" id="exampleInputPassword1" placeholder="Enter Country">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <a href="{{route('authors.index')}}" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
