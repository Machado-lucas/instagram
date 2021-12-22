@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.guiadasemana.com.br/contentFiles/image/opt_w320h320/2019/08/FEA/64155_shutterstock-466224974.jpg" class="rounded-circle" style="height: 150px; width: 150px;" alt="">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://www.guiadasemana.com.br/contentFiles/image/opt_w320h320/2019/08/FEA/64155_shutterstock-466224974.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://www.guiadasemana.com.br/contentFiles/image/opt_w320h320/2019/08/FEA/64155_shutterstock-466224974.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://www.guiadasemana.com.br/contentFiles/image/opt_w320h320/2019/08/FEA/64155_shutterstock-466224974.jpg" class="w-100" alt="">
        </div>
    </div>

</div>
@endsection
