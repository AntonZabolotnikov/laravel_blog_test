# 6
- ```sail artisan tinker``` - открыть тинкер (контейнер)
- ```sail artisan make:provider TestServiceProvider``` - регистрация провайдера

# 7
- ```sail artisan make:controller TestController``` - создать контроллер
- ```sail artisan route:list``` - список зарегистрированных роутов
- ```sail artisan make:controller Posts/CommentController --resource``` - Вложено с доп генерацией
- ```sail artisan route:cache``` - кеширование роутов (лучше для прода)
- ```sail artisan route:clear``` - очистить кеш роутов
- ```sail artisan config:cache```
- ```sail artisan config:clear```

# 8 
- ```sail artisan down``` - Приложение на обслуживании
- ```sail artisan make:middleware LogMiddleware``` - создать middleware
- ```dump()``` - вывод на экран
- ```dd()``` - вывод на экран с остановкой кода
- ```abort(403)``` - прекратить вывод с кодом ошибки
- ```abort_if(boolean, 403)``` - прекратить вывод по условию с кодом ошибки
- ```abort_unless(boolean, 403)``` - прекратить вывод по условию (отрицание) с кодом ошибки
- ```info()``` - запись в логи

# 9
- ```{{ }}``` - Интерполяция
- ```{!! $foo !!}```
- ```@{{ $foo }}```
- ```@json(['foo' => 'bar']);``` - вывод в виде json

- Передать значения через контроллер
```php
$posts = [1,2,3,4,5];
$foo = 'test';
view('blog.index', compact('posts', 'foo'))
```

# 10
- ```{{ __('Главная') }}``` - для мультиязычнасти
- ```{{ $slot }}``` - вывод в компоненте

- Класс + условие
```php
@props(['required' => false])
<label {{ $attributes->class([
    'mb-2', ($required ? 'required' : ''),
]) }}>
    {{ $slot }}
</label>
```

- ```@stack('css')``` - в шаблоне, ```@push('css')``` - в компоненте