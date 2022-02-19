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
			<div class="alert alert-info" role="alert">
			  ¿Ya estás registrado? Por favor <a href="#" class="alert-link">inicia sesión</a> y si eres un nuevo usuario completa el siguiente Formulario y crea una cuenta.
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-4">
			<div class="form-group">
		    <label for="nombreagente">Nombre del Agente Inmobiliario</label>
		    <input type="text" class="form-control" id="nombreagente" placeholder="Nombre del Agente" required>
		    <input type="text" class="form-control" id="nombreempresa" placeholder="Nombre de la empresa" required>
		  </div>
		  <div class="form-group">
		    <label for="ciudad">Ciudad</label>
		    <input type="text" class="form-control" id="ciudad" placeholder="Localidad donde trabajas" required>
		  </div>
		  <div class="form-group">
		    <label for="provincia">Provincia</label>
		    <input type="text" class="form-control" id="ciudad" placeholder="Selecciona la provincia" required>
		  </div>
		  <div class="form-group">
		    <label for="direccion">Dirección</label>
		    <input type="text" class="form-control" id="direccion" placeholder="Dirección completa" required>
		  </div>
		  <div class="form-group">
		    <label for="telefonomovil">Teléfono</label>
		    <input type="tel" class="form-control" id="telefonomovil" placeholder="Teléfono móvil" required>
		    <input type="tel" class="form-control" id="telefonofijo" placeholder="Teléfono fijo" required>
		  </div>
		  <div class="form-group">
		    <label for="web">Página web</label>
		    <input type="text" class="form-control" id="web" placeholder="https://www.ejemplo.com" required>
		  </div>
		  <div class="form-group">
		    <label for="inmuebles">Lista de inmuebles</label>
		    <input type="text" class="form-control" id="inmuebles" placeholder="https://www.ejemplo.com/listado" required>
		  </div>
		  <div class="form-group">
		    <label for="indiomas">Idiomas</label><br>
		    <select class="selectpicker" multiple data-live-search="true" id="indiomas" required>
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
		    <label for="servicios">Servicios</label><br>
		    <select class="selectpicker" multiple data-live-search="true" id="servicios" required>
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
		    <label for="especialidades">Especialidades</label><br>
		    <select class="selectpicker" multiple data-live-search="true" id="especialidades" required>
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
		    <input type="file" class="form-control-file" id="imagen">
		  </div>
		  <div class="form-group">
		    <label for="video">Vídeo de presentación</label>
		    <input type="text" class="form-control" id="video" placeholder="URL del vídeo de presentación" required>
		  </div>
		  <div class="form-group">
		    <label for="rrdd">Redes Sociales</label>
		    <input type="text" class="form-control" id="rrssfacebook" placeholder="Facebook Url">
		    <input type="text" class="form-control" id="rrssfacebook" placeholder="Instagram Url">
		    <input type="text" class="form-control" id="rrssfacebook" placeholder="Youtube Url">
		    <input type="text" class="form-control" id="rrssfacebook" placeholder="Linkedin Url">
		    <input type="text" class="form-control" id="rrssfacebook" placeholder="Twitter Url">
		  </div>
		  <div class="form-group">
		    <label for="sombremi">Sobre mí</label>
		    <textarea class="form-control" id="sombremi" rows="5" required>Describe quién eres, tu trayectoria profesional, tu perfil, la empresa en la que trabajas….</textarea>
		  </div>
		  <div class="form-group">
		    <label for="serviciostexto">Servicios</label>
		    <textarea class="form-control" id="serviciostexto" rows="5" required>Habla y describe los servicios que ofreces.... </textarea>
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
		    <input type="email" class="form-control" id="email" placeholder="" required>
		  </div>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-5 text-center" >
		  <button type="button" class="btn btn-primary btn-lg">Guardar y vista previa ></button>
	</div>
</div>

    <!--
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  -->
@endsection