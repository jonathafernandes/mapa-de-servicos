@extends('layouts.app')

@section('title','Login')

@section('content')

    <header>
        <nav class="navigation">
            <p>
                Lorem ipsum
            </p>
        </nav>
    </header>
    
    <main>
    {{auth()->user()?->name}}
        <div class="container">
            <h1 class="title">Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="text" id="email" name="email" placeholder="E-mail">
                <label for="email"></label>
                <input type="password" id="pawssword" name="password" placeholder="Senha">
                <label for="password"></label>
                <button type="submit" class="btn">Login</button>
                
                <span>Não tem cadastro?</span>
                <a href="{{ route('register-index')}}" class="btn">Cadastre-se</a>
            </form>
        </div>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </main>

@endsection