@extends('layouts.base')

@section('page.title', 'Страница регистрации')

@section('content')
<section>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            @yield('auth.content')
        </div>
    </div>
</section>
@endsection