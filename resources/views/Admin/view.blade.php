@extend('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card" style="background-color: ">
            <div class="card-body">
            <form method="" action="">
                <div class="form-group">
                    <label for="user">Username</label>
                    <input type="text" class="form-control" name="user" id="user" required="">
                </div>

                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="mail" id="email" required="">
                </div>

                     <br>
                    <button type="submit" class="btn btn-primary">submit</button>

    </form>
</div>
</div>
</div>


@endsection
