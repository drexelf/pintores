@extends('layouts.master')
@section('title', 'INICIO')
@section('informacion')

<form action="{{action('Controlador@validarlogin')}}" method= "post">
    {{csrf_field()}}
    <label for="user">USUARIO</label>
    <input type="text" name="user">
    <br>

    <label for="password">CONTRASEÑA</label>
    <input type= "password" name="password">
    <br>

    <label for="key">KEY</label>
    <input type= "password" name="key">
    <br>
    <input type="submit" value="Iniciar Sesión">
</form>

@endsection