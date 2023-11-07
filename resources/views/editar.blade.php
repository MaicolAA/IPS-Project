@extends('layouts.panel')

@section('content')
    <h1>Editar Usuario</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('actualizar', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="empasswordail" value="{{ $user->password }}" required>

        <button type="submit">Actualizar</button>
    </form>
@endsection
