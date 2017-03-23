@extends('default')
@section('button')
	<ul class="nav masthead-nav">
        <li ><span class="glyphicon glyphicon-user"></span></li>
			<li>{{ $connecter->nom }}</li> 
			<li>{{ $connecter->prenom }}</li>
			<li>
				 <div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				  		<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				   	 <li><a href="{{route('new.index')}}">Deconnexion</a></li>
				   	 <li><a href="{{route('new.edit',compact("connecter"))}}">Modifier Profil</a></li>
				  </ul>
				</div> 
			</li>
	</ul>
@endsection

@section('content')
	<h1> Pour la liste</h1>
	@foreach ($users as $user)
		<ul class="list-inline" class="left-aligned">
			<li><span class="glyphicon glyphicon-user"></span></li>
			<li>{{ $user->nom }}</li>
			<li>{{ $user->prenom }}</li>
		</ul></br>
		@if ($user->conges)
			<!--h1>{{ $user->conges }}</h1--><!-- montrer au prof-->
			<!--on doit changer l'affichage des date-->
			@foreach($conges as $conge) 
				@if($user->id == $conge->utilisateur_id)
					{{Form::open(['method' => 'put','url' => route('conges.update',compact("connecter"))])}}
						{{ Form::hidden('idconges',$conge->id_conges,['class' => 'form-control','name' => 'idconges']) }}
						<label >{{ $conge->dateDebut->format('d/m/Y') }}</label>
						<label >{{ $conge->dateFin->format('d/m/Y') }}</label>
					
						{{ Form::checkbox('validation',1) }}
						<button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
					{{Form::close()}}
				@endif
			@endforeach
		@endif
	@endforeach
@endsection