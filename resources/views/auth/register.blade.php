@extends('layouts.app')

@section('title','Register' )


@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">x

<section>



    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>

    <div class="signin">
        <div class="content">
            <h2>Registro</h2>
            <form class="form" method="POST" action="">
                @csrf
                <div class="inputBox">
                    <input  type="text" name="name" id="name"  required>
                    <i>Nombres</i>
                </div>
                <div class="inputBox">
                    <input  id="email" name="email" type="email" required>
                    <i>Correó Electrónico</i>
                </div>
                <div class="inputBox">
                    <input id="password" name="password" type="password" required>
                    <i>Contraseña</i>
                </div>
                <div class="inputBox">
                    <input id="password_confirmation" name="password_confirmation" type="password" required>
                    <i>Confirmar Contraseña</i>
                </div>
                <div class="links">
                    <a href="{{route('login.index')}}">Inciar sesión aquí</a>
                </div>

                @error('message')
                <p class="border border-red-500 rounded-md bg-red-100 w-full
                text-red-600 p-2 my-2">* {{ $message }}</p>
                @enderror

                <div class="form-group mt-3">
                  {!! NoCaptcha::renderJs('es', false, 'onLoadCallback') !!}
                  {!! NoCaptcha::display() !!}
                </div>
                @if($errors->has('g-recaptcha-response'))
                <p class="border border-red-500 rounded-md bg-red-100 w-full
                  text-red-600 p-2 my-2">
                  * {{ $errors->first('g-recaptcha-response') }}
                </p>
                @endif

                <div class="inputBox">
                    <input type="submit" value="Registrarse">
                </div>
            </form>
        </div>
    </div>
</section>

