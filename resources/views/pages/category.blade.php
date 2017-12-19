@extends('layouts')

@section('content')
    <div class="container g-py-200">
        <div class="row">
            @foreach($subMenus as $menu)
            <div class="col-md-6">
                <h4>
                    <a href="/{{LaravelLocalization::getCurrentLocale()}}/{{$currentMenu->slug}}/{{ $menu->slug }}">
                        {{ $menu->title }}
                    </a>
                </h4>
            </div>
            @endforeach
        </div>
    </div>
@endsection