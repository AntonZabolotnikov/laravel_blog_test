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

# 11
- Получение данных запроса ()
```php
public function store(Request $request) {

        $data = $request->all();
        dd($data);

        return 'store Register';
    }
```
- ```$request->only(['name', 'email'])``` - Получить определенные поля
- ```$request->except(['name', 'email'])``` - Исключить определенные поля
- ```$request->input('email')``` - Значение нужного поля (или так ```$request->email```)
- ```$remember = !! $request->input('remember')``` - Привести к булевому значению (или ```$request->boolean('remember')```)
- ```$request->file('avatar')``` - Получить файл
- ```$request->has('name')``` - Проверить наличие в запросе
- ```$request->filled('name')``` - Заполнен ли параметр
- ```$request->missing('name')``` - Пропущен ли параметр
- ```@unless()``` - Проверка на лож (обратно ```@if()```) 
- ```$request->ip()``` - получить ip
- ```$request->path()``` - путь
- ```$request->url()``` - вывод URL без Get-параметров
- ```$request->fullUrl()``` - вывод URL с Get-параметрами
- ```$request->is('login')``` - проверить путь (```$request->is('log*')```)
- ```$request->routeIs('login.store')``` - проверить путь роута