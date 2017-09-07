@extends('store.template')

@section('content')
<script type="text/javascript">
function upperCase() {
   var x=document.getElementById("fname").value
   document.getElementById("fname").value=x.toUpperCase()
   var z=document.getElementById("fname1").value
   document.getElementById("fname1").value=z.toUpperCase()
}
</script>
	<div class="container text-center">

		<div class="page-header">
		  <h1><i class="fa fa-user"></i> Registrarse</h1>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="page">

				@include('store.partials.errors')

					<form method="POST" action="/auth/register">
					    {!! csrf_field() !!}

					    <div class="form-group">
					        <label for="name">Nombre</label>
					        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
					    </div>

					    <div class="form-group">
					        <label for="last_name">Apellidos</label>
					        <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}">
					    </div>

					    <div class="form-group">
					        <label for="email">Correo</label>
					        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
					    </div>

					    <div class="form-group">
					        <label for="user">Usuario</label>
					        <input class="form-control" type="text" name="user" value="{{ old('user') }}">
					    </div>

					    <div class="form-group">
					        <label for="password">Password</label>
					        <input class="form-control" type="password" name="password">
					    </div>

					    <div class="form-group">
					        <label for="password_confirmation">Confirmar Password</label>
					        <input class="form-control" type="password" name="password_confirmation">
					    </div>

					    <div class="form-group">
					        <label for="adrress">Direccion</label><br>
							<input class="form-control" type="text" name="address" value="{{ old('address')}}">
					    </div>

					    <div class="form-group">
					        <label for="adrress">Estado</label><br>
							<input class="form-control" type="text" id="fname" onblur="upperCase()" name="state" value="{{ old('state')}}">
					    </div>

					    <div class="form-group">
					        <label for="adrress">Ciudad</label><br>
							<input class="form-control" type="text" id="fname1" onblur="upperCase()" name="town" value="{{ old('town')}}">
					    </div>

					    <div class="form-group">
					        <label for="adrress">Codigo Postal</label><br>
							<input class="form-control" type="number" name="codepost" value="{{ old('codepost')}}">
					    </div>

					    <div class="form-group">
					        <label for="adrress">Telefono</label><br>
							<input class="form-control" type="number" name="tel" value="{{ old('tel')}}">
					    </div>

					    <div class="form-group">
					        <button class="btn btn-primary" type="submit">Crear cuenta</button>
					    </div>
					</form>

				</div>
			</div>
		</div>
	</div>
@stop
