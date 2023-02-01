@extends('layouts.base')

@section('page.title', 'Проверка валидации')

@section('content')
    <section>
        <x-container>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    @yield('validation.content')
                </div>
            </div>
        </x-container>
    </section>
@endsection