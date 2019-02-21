@extends('layouts.app')

@section('content')
    <section class="container">
        <section class="row justify-content-center">
            <section class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Tous les utilisateurs</h5>
                    @foreach($users as $user)
                        <div class="card-body">
                            <h5 class="card-title"><a href="/users/{{$user->username}}">{{$user->username}}</a></h5>
                            <p class="card-text">{{$user->username}}</p>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </section>
        </section>
    </section>
@endsection
