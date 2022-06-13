@extends('main')

@section('title', 'Urna Eletrônica')

@section('content')

    <div class="container mt-5">
        <h4 class="title">Eleoções 2022</h4>

        @if(session()->has('success'))
            <div class="alert alert-success">
                <p>{{session('success')}}</p>
            </div>
        @endif

        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="img/chapa1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <h2 class="num">25123</h2>
                        <div class="form-group bt">
                            <a href="/vote" class="btn btn-success">Votar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/chapa1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <h2 class="num">25610</h2>
                        <div class="form-group bt">
                            <a href="/vote" class="btn btn-success">Votar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




@endsection
