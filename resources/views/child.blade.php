
{{--В этом примере раздел боковой панели использует
директиву @parent для добавления (а не перезаписи)
содержимого в боковую панель макета. Директива @parent
 будет заменена содержимым макета при визуализации
  представления.--}}


{{--это переход к нему
Route::get('blade', function () {
    return view('child');
});--}}
@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection