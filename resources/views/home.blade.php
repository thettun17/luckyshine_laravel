@extends('layouts.template')
@section('contents')
<div class="col-md-6 offset-md-3 p-3">
    <form method="post" action="{{ url('/') }}">
        @csrf
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" placeholder="Please Enter Latitude" name="latitude" ><span> <strong>{{ $errors->first('latitude') }}</strong></span>
        </div>
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" class="form-control" id="longitude" placeholder="Please Enter Longitude" name="longitude">
            <span> <strong>{{ $errors->first('longitude') }}</strong></span>
        </div>
        <input type="submit" value="Submit" class="btn btn-outline-primary my-2 my-sm-0">
    </form>
</div>
@endsection
@section('script')
<script>
    @if(session()->has('error'))
    swal('Not Win!', "Please Try again!", 'error');
    @endif
    @if(session()->has('win'))
    swal({
        title: "You Win!",
        text: "You Own  ${{ session('win')}} !",
        icon: "success",
        buttons: true,
    });
    @endif
</script>
@endsection