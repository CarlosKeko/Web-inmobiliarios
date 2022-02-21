@extends("layouts/plantilla")

@section("title", "Registro")

@section("script")

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

@section("content")

<div class="container-fluid">
	<div class="row text-center bg-image header">
		<div class="col-md-12">
			<h2>
				Publicar Agente
			</h2>
			<p>
				Home - Publicar Agente
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="alert alert-info text-center" role="alert">
			  ¿Ya estás registrado? Por favor <a href="#" class="alert-link">inicia sesión</a> y si eres un nuevo usuario completa el siguiente Formulario y crea una cuenta.
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>

	@error('correo')
	  <div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>¡Error!</strong> {{$message}}
	  </div>

	  <br>
  	@enderror

	<form action="{{route("previa")}}" method="POST">
		@csrf
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-4">
				<div class="form-group">
				<label for="nombreagente">Nombre del Agente Inmobiliario *</label>
				<input type="text" class="form-control" name="nombreagente" id="nombreagente" placeholder="Nombre del Agente" required value="{{ old('nombreagente') }}">
				<input type="text" class="form-control" name="nombreempresa" id="nombreempresa" placeholder="Nombre de la empresa" required value="{{ old('nombreempresa') }}">
			  </div>
			  <div class="form-group">
				<label for="ciudad">Ciudad *</label>
				<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Localidad donde trabajas" required value="{{ old('ciudad') }}">
			  </div>
			  <div class="form-group">
				<label for="provincia">Provincia *</label>
				<input type="text" class="form-control" name="provincia" id="provincia" placeholder="Selecciona la provincia" required value="{{ old('provincia') }}">
			  </div>
			  <div class="form-group">
				<label for="direccion">Dirección *</label>
				<input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección completa" required value="{{ old('direccion') }}">
			  </div>
			  <div class="form-group">
				<label for="telefonomovil">Teléfono *</label>
				<input type="tel" class="form-control" name="telefonomovil" id="telefonomovil" placeholder="Teléfono móvil" required value="{{ old('telefonomovil') }}">
				<input type="tel" class="form-control" name="telefonofijo" id="telefonofijo" placeholder="Teléfono fijo" required value="{{ old('telefonofijo') }}">
			  </div>
			  <div class="form-group">
				<label for="web">Página web</label>
				<input type="text" class="form-control" name="web" id="web" placeholder="https://www.ejemplo.com" value="{{ old('web') }}">
			  </div>
			  <div class="form-group">
				<label for="inmuebles">Lista de inmuebles</label>
				<input type="text" class="form-control" name="inmuebles" id="inmuebles" placeholder="https://www.ejemplo.com/listado" required value="{{ old('inmuebles') }}">
			  </div>
			  <div class="form-group">
				<label for="idiomas">Idiomas *</label><br>
				<select class="selectpicker" multiple data-live-search="true" name="idiomas[]" id="idiomas" required value="{{ old('idiomas[]') }}">
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
			  </div>
			  <div class="form-group">
				<label for="servicios">Servicios *</label><br>
				<select class="selectpicker" multiple data-live-search="true" name="servicios[]" id="servicios" required value="{{ old('servicios[]') }}">
					  <option>Administración de Fincas</option>
					  <option>Agente Inmobiliario</option>
					  <option>Analista inversor</option>
					  <option>API</option>
					  <option>Consultoría inmobiliaria</option>
					  <option>Estudio técnico y de diseño</option>
					  <option>Gestor de Propiedades</option>
					  <option>Promoción Inmobiliaria</option>
					  <option>Tasaciones</option>
					</select>
			  </div>
			  <div class="form-group">
				<label for="especialidades">Especialidades *</label><br>
				<select class="selectpicker" multiple data-live-search="true" name="especialidades[]" id="especialidades" required value="{{ old('especialidades[]') }}">
					  <option>Vivienda</option>
					  <option>Obra nueva</option>
					  <option>Local</option>
					  <option>Nave</option>
					  <option>Garaje</option>
					  <option>Oficina</option>
					  <option>Trastero</option>
					  <option>Terreno</option>
					  <option>Edificio</option>
					</select>
			  </div>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-5">
			  <div class="form-group">
				<label for="imagen">Fotografía del Agente Inmobiliario</label>
				<input type="file" class="form-control-file" name="imagen" id="imagen" value="{{ old('imagen') }}">
			  </div>
			  <div class="form-group">
				<label for="video">Vídeo de presentación</label>
				<input type="text" class="form-control" name="video" id="video" placeholder="URL del vídeo de presentación" value="{{ old('video') }}">
			  </div>
			  <div class="form-group">
				<label for="rrdd">Redes Sociales</label>
				<input type="text" class="form-control" name="rrssfacebook" id="rrssfacebook" placeholder="Facebook Url" value="{{ old('rrssfacebook') }}">
				<input type="text" class="form-control" name="rrssinstagram" id="rrssinstagram" placeholder="Instagram Url" value="{{ old('rrssinstagram') }}">
				<input type="text" class="form-control" name="rrssyoutube" id="rrssyoutube" placeholder="Youtube Url" value="{{ old('rrssyoutube') }}">
				<input type="text" class="form-control" name="rrsslinkedin" id="rrsslinkedin" placeholder="Linkedin Url" value="{{ old('rrsslinkedin') }}">
				<input type="text" class="form-control" name="rrsstwitter" id="rrsstwitter" placeholder="Twitter Url" value="{{ old('rrsstwitter') }}">
			  </div>
			  <div class="form-group">
				<label for="sombremi">Sobre mí *</label>
				<textarea class="form-control" name="sombremi" id="sombremi" rows="5" required placeholder="Describe quién eres, tu trayectoria profesional, tu perfil, la empresa en la que trabajas…." value="{{ old('sombremi') }}"></textarea>
			  </div>
			  <div class="form-group">
				<label for="serviciostexto">Servicios *</label>
				<textarea class="form-control" name="serviciostexto" id="serviciostexto" rows="5" required placeholder="Habla y describe los servicios que ofreces..." value="{{ old('serviciostexto') }}"></textarea>
			  </div>
			</div>
			<div class="col-md-1">
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-4">
				<div class="form-group">
				<label for="email">Introduce tu correo electrónico para registrarte y crear tu cuenta</label>
				<input type="email" class="form-control" name="correo" id="email" placeholder="" required value="{{ old('email') }}">

			  </div>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-5 text-center" >
			  <button type="submit" class="btn btn-primary btn-lg">Guardar y vista previa ></button>
		</div>

	</form>

</div>

    <!--
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  -->
@endsection