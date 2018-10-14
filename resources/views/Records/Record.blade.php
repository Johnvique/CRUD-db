@extends('layouts.app')
@section('content')
<div class="container">
<div class="row ">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card" style="background-color: ">
            <div class="card-body">
            <form method="post" action="{{url('Records')}}">
            	{{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" required="">
                </div>

                    <div class="form-group">
                    <label for="body">Body</label>
                    <input type="text" class="form-control" name="body" id="body" required="">
                </div>


                     <br>
                    <button type="submit" class="btn btn-primary">submit</button>

    </form>
</div>
</div>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
                <tr>
                    <td>{{$result->title}}</td>
                    <td>{{$result->body}}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
</div>
</div>





@endsection