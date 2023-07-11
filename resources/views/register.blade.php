@extends('layouts.app')

@section('title','Cadastro')

@section('content')

    <header>
        <nav class="navigation">
            <p>
                Lorem ipsum
            </p>
        </nav>
    </header>
    
    <main>
        <div class="container">
            <h1 class="title">Cadastro</h1>
            <form action="{{ route('register-index') }}" method="POST">
                @csrf
                <input type="text" id="email" name="email" placeholder="E-mail">
                <label for="email"></label>

                <input type="text" id="name" name="name" placeholder="Nome">
                <label for="name"></label>

                <input type="password" id="password" name="password" placeholder="Senha">
                <label for="password"></label>

                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme a senha">

                <button type="submit" class="btn">Cadastrar</button>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </main>

@endsection