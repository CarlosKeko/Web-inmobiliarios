@extends("layouts/plantilla")

@section("title", "Registro")

@section("content")
    <h1>Creando perfil</h1>

    <form action="{{route("previa")}}" method="POST">

        @csrf

        <label>
            Nombre del Agente: 
            <input type="text" name="nombre">
            <br> 
        </label>

        <label>
            Nombre de la Empresa: 
            <input type="text" name="empresa">
            <br> 
        </label>

        <button type="submit">Enviar formulario</button>

    </form>
@endsection