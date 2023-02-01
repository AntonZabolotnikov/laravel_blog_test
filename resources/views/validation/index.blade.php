@extends('layouts.validation')

@section('page.title', 'Страница регистрации')

@section('validation.content')

<x-card>
    <x-card-body>
        <x-form action="{{ route('validation.store') }}" method="POST">

            <x-form-item>
                <x-label required>{{ __('Имя') }}</x-label>
                <x-input type="text" name="first_name" autofocus />
                <x-error name="first_name" />
            </x-form-item>

            <x-form-item>
                <x-label>{{ __('Фамилия') }}</x-label>
                <x-input type="text" name="last_name" />
                <x-error name="last_name" />
            </x-form-item>

            <x-form-item>
                <x-label>{{ __('Возраст') }}</x-label>
                <x-input type="text" name="age" />
                <x-error name="age" />
            </x-form-item>

            <x-form-item>
                <x-label>{{ __('Email') }}</x-label>
                <x-input type="text" name="email" />
                <x-error name="email" />
            </x-form-item>

            <x-button type="submit">
                {{ __('Применить') }}
            </x-button>
        </x-form>
    </x-card-body>
</x-card>

@endsection