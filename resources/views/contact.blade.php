
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @if($errors->any())
             <div class="alert alert-danger">
                 <ul>
{{--                     @foreach($errors->all as $error)--}}
{{--                     <li>{{$error}}</li>--}}
{{--                     @endforeach--}}
                     <li>поля имя обязательном</li>
                 </ul>
             </div>
            @endif
            <form method="post" action="{{route('addFormStore')}}">
                @csrf
                <input name="name" placeholder="name" class="form-control"><br>
                <input name="price" placeholder="price" class="form-control"><br>
                <input name="qty" placeholder="qty" class="form-control"><br>
                <button type="submit" class="btn btn-success">send</button>
            </form>
        </div>
    </div>
</div>
@endsection
