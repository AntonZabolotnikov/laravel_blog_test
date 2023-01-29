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

# 12 
- https://laravel.com/docs/9.x/responses

- Получить ответ
```php
return response('test', 200, [
    'foo' => 'bar'
]);
```
- ```response()->json(['foo' => 'bar']);``` - Ответ в виде json
- ```response()->redirectTo('/foo');``` - Редирект на определенный путь (или ```redirect('/foo')```)
- ```response()->redirectToRoute('user');``` - Редирект на определенный роут (или ```redirect()->route('user')```)
- ```return redirect()->back()``` - Вернуться назад (остаться на странице)
- ```redirect()->back()->withInput()``` - Редирект обратно с данными

# 13
- https://laravel.com/docs/9.x/session

- ```session()``` - установить сессию (или ```app('session')```)
- ```session(['foo' => 'bar'])``` - установить значения сессии
- ```session('foo')``` - получить
- ```session()->all()``` - вывод всех данных
- ```session()->has('foo')``` - проверить 
- ```session()->forget('foo')``` - удалить данные по ключу
- ```session()->flush()``` - удалить все данные
- ```session()->pull('alert')``` - получить и сразу удалить запись

# 14
- https://laravel.com/docs/9.x/migrations
  
- ```sail artisan make:migration create_users_table``` - создать миграцию
- ```sail artisan migrate``` - накатить миграции
- ```sail artisan migrate:rollback``` - откатить миграцию
- ```sail artisan migrate:reset``` - откатить все миграции
- ```sail artisan migrate:fresh``` - перекатить все миграции (удаляет базу и накатывает миграции)
- ```sail artisan migrate:refresh``` - перекатить все миграции (откатывает и накатывает миграции)
- ```sail artisan make:migration add_admin_field_to_users_table``` - миграция на добавление поля

# 15
- https://laravel.com/docs/9.x/eloquent

- ```sail artisan make:model Currency``` - создать модель
- ```sail artisan make:model Currency -m``` - создать модель с миграцией 
- Получение данных
```php
$currency = Currency::first();
$currency->toArray();
$currency->toJson();
$currency->name;
```
- Модель
```php
$incrementing = false;
protected $fillaple = ['id', 'name', 'price'];
protected $hidden = ['price'];
protected $casts = ['price' => 'float', 'active' => 'boolean'];
protected $dates = ['active_at'];

```
