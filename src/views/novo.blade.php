@extends('templates.default')

@section('breadcrumb')
<div id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m6 l6">
				<h5 class="breadcrumbs-title">Dicionário de dados</h5>
				<ol class="breadcrumbs">
					<li><a href="/">Início</a></li>
					<li><a href="/dicionario">Dicionário de dados</a></li>
					<li class="active">Novo</li>
				</ol>
			</div>
			<div class="col s2 m6 l6">
				<a class="waves-effect waves-light red btn breadcrumbs-btn right" href="{{route('dicionario.index')}}"><i class="material-icons right">clear</i> Cancelar</a>
			</div>
		</div>
	</div>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col s12 m12 l12">
		<div class="card">
			{!! Form::open(['route' => 'dicionario.criar', 'method' => 'post']) !!}
				<div class="card-content">
					<div class="row">
						<div class="input-field col s12">
							<input placeholder="Ex.: Clientes" id="nome" name="nome" type="text" class="validate">
							<label for="nome">Nome da tabela</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input value="" id="descricao" name="descricao" type="text" class="validate">
							<label for="descricao">Descrição</label>
						</div>
					</div>
				</div>
				<div class="card-action">
					<a class="waves-effect waves-light red btn" href="{{route('dicionario.index')}}"><i class="material-icons right">clear</i> Cancelar</a>
					<button class="btn waves-effect waves-light" type="submit" name="action">Salvar
						<i class="material-icons right">save</i>
					</button>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection

@section('includes')
	<!--VAZIO-->
@endsection