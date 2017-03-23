@extends('default')

@section('content')
	@foreach ($users as $user)
		 <span>{{ $user->nom 		}}</span> 
		 <span>{{ $user->prenom 	}}</span>
		 <span>{{ $user->email		}}</span>
		 <span>{{ $user->motDePasse }}</span><br/>
	@endforeach
	@if(Session::has('probleme'))		
		<div class="alert alert-danger">
			{{Session::get('probleme')}}
		</div>
	@endif
	{{Form::open(['class' => 'navbar-form navbar-left','url' => route('connexion.store')]) }}
		<input type="hidden" name="_token" value="{{ csrf_token()}}"> 
		<div class="form-group">
			{{ Form::text('email',null,['class' => 'form-control','placeholder' => 'email','name' => 'email']) }}
		</div>
		<div class="form-group">
			{{ Form::text('pass',null,['class' => 'form-control','placeholder' => 'Mot de passe','name' => 'pass']) }}
		</div>
		<button type="submit" class="btn btn-primary" >Connecter</button>
	{{Form::close()}}
@endsection