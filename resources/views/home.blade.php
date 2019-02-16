@extends('layouts.app')

@section('content')
    <section class="container">
        <section class="row justify-content-center">
            <aside class="col-md-4">
                profil
            </aside>
        <section class="col-md-8">
            <section class="card ctn-create-tweet">
                <section class="card-body">
                    <form action="/post-tweet" method="post" id="post-tweet">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Quoi de neuf aujourd'hui ? </label>
                            <textarea class="form-control" id="tweet-text" rows="2" name="tweet" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn_blue_principal">Twitter</button>
                    </form>
                </section>
            </section>
            <section class="card ctn-tweet mt-3">
                <section class="card-body">
                    @foreach($tweets as $tweet)
                    <article class="tweet">
                        <div class="icon_profile">
                            <img src="{{ asset('pictures/profile_twitter.jpeg') }}" alt="">
                        </div>
                        <div class="content-tweet">
                            <p class="txt-tweet">
                                <span>{{$tweet->user->username}}</span>
                                {{$tweet->text}}
                                <span class="diff_human">{{$tweet->created_at->diffForHumans()}}</span>
                            </p>
                            @if($tweet->src_media != null)
                                <img src="{{ asset('pictures/img_twitter.jpg') }}" alt="" class="tweet">
                            @endif

                        </div>
                    </article>
                    @endforeach
                </section>
            </section>
        </section>
    </section>
    </section>
@endsection
