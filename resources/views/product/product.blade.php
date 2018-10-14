@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card" style="background-color: ">
            <div class="card-body">
            <form method="" action="">
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
@endsection