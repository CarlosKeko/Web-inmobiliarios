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

        <label>
            Correo: 
            <input type="text" name="correo">
            <br> 
        </label>

        <label>
            Ciudad: 
            <input type="text" name="ciudad">
            <br> 
        </label>

        <label>
            Provincia: 
            <input type="text" name="provincia">
            <br> 
        </label>

        <label>
            Direccin: 
            <input type="text" name="direccion">
            <br> 
        </label>

        <label>
            Telefono movil: 
            <input type="text" name="telefonoMovil">
            <br> 
        </label>

        <label>
            Telefono fijo: 
            <input type="text" name="telefonoFijo">
            <br> 
        </label>

        <label>
            Pagina web: 
            <input type="text" name="paginaWeb">
            <br> 
        </label>

        <label>
            Lista inmuebles: 
            <input type="text" name="listaInmuebles">
            <br> 
        </label>

        <label>
            Fotografia: 
            <input type="text" name="fotografia">
            <br> 
        </label>
        
        <label>
            Video: 
            <input type="text" name="video">
            <br> 
        </label>
        
        <label>
            Facebook: 
            <input type="text" name="facebook">
            <br> 
        </label>
        
        <label>
            Instagram: 
            <input type="text" name="instagram">
            <br> 
        </label>
        
        <label>
            Youtube: 
            <input type="text" name="youtube">
            <br> 
        </label>
        
        <label>
            Linkedin: 
            <input type="text" name="linkedin">
            <br> 
        </label>
        
        <label>
            Twitter: 
            <input type="text" name="twitter">
            <br> 
        </label>
        
        <label>
            Descripción: 
            <input type="text" name="descripcion">
            <br> 
        </label>
        
        <label>
            Servicios descripción: 
            <input type="text" name="serviciosDescripcion">
            <br> 
        </label>

        <label>
            Hora inicio: 
            <input type="time" name="horaInicio">
            <br> 
        </label>

        <label>
            Servicios  
            <fieldset>
                <select name="some-select" id="some-select" multiple="multiple">
                    <option>Administración de Fincas</option>
                    <option>Agente Inmobiliario</option>
                    <option>Analista inversor</option>
                    <option>API</option>
                    <option>Consultoría inmobiliaria</option>
                    <option>Estudio técnico y de diseño</option>
                    <option>Gestor de propiedades</option>
                    <option>Promoción Inmobiliaria</option>
                    <option>Tasaciones</option>
                </select>    
            </fieldset> 
        </label>

        <label>
            Idiomas  
            <fieldset>
                <select name="some-select" id="some-select" multiple="multiple">
                    <option>Español</option>
                    <option>Inglés</option>
                    <option>Francés</option>
                    <option>Alemán</option>
                    <option>Chino</option>
                    <option>Árabe</option>
                    <option>Ruso</option>
                    <option>Portugués</option>
                    <option>Italiano</option>
                    <option>Euskera</option>
                    <option>Catalán</option>
                    <option>Gallego</option>
                </select>    
            </fieldset> 
        </label>

        <label>
            Especialidades  
            <fieldset>
                <select name="some-select" id="some-select" multiple="multiple">
                    <option>Vivienda</option>
                    <option>Obra</option>
                    <option>Nueva</option>
                    <option>Local</option>
                    <option>Nave</option>
                    <option>Garaje</option>
                    <option>Oficina</option>
                    <option>Trastero</option>
                    <option>Terreno</option>
                    <option>Edificio</option>
                </select>    
            </fieldset> 
        </label>

        <label>
            Correo: 
            <input type="text" name="correo">
            <br> 
        </label>

        <button type="submit">Enviar formulario</button>

    </form>
@endsection