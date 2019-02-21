@extends('layouts.app')

@section('content')
    <section class="container">
        <section class="row justify-content-center">
            <section class="col-md-12">

                <section class="col-md-12">
                    <h1>{{$theuser->name}}</h1>
                    <h2>{{$theuser->username}}</h2>
                    <div class="card">
                        <h5 class="card-header">Tout les tweets</h5>
                        @foreach($tweetsUser as $tweet)
                            <div class="card-body">
                                <h5 class="card-title">{{$tweet->text}}</h5>
                                <p class="card-text">{{$tweet->created_at->diffForHumans()}}</p>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </section>

            </section>
        </section>
    </section>
@endsection
