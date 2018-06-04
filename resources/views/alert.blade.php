<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 19.04.2018
 * Time: 15:44
 */
?>

<div class="alert alert-danger">
    <div class="alert-title">{{ $title }}</div>

    {{ $slot }}
</div>

@component('alert')
    <strong>Whoops!</strong> Something went wrong!
@endcomponent

@component('alert')
    @slot('title')
        Forbidden
    @endslot

    You are not allowed to access this resource!
@endcomponent

@component('alert', ['foo' => 'bar'])
    ...
@endcomponent