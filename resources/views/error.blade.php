@extends('layouts.app')
@section('content')
    <div class="page-contain page-404">

        <div id="main-content" class="main-content">
            <div class="container">

                <div class="row">

                    <div class="content-404">
                        <h1 class="heading">{{ $err }}</h1>
                        <h2 class="title">{{ $msg }}</h2>
                        <p>Sorry, but the page you are looking for is not found. Please, make sure you have typed the
                            current URL.</p>
                        <a class="button" href="/">Go to Home</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
