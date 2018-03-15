@extends('templates.default')

@section('breadcrumb')
<div id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m6 l6">
				<h5 class="breadcrumbs-title">Dicionário de dados</h5>
				<ol class="breadcrumbs">
					<li><a href="/">Início</a></li>
					<li class="active">Dicionário de dados</li>
				</ol>
			</div>
			<div class="col s2 m6 l6">
				<a class="waves-effect waves-light green btn breadcrumbs-btn right" href="{{route('dicionario.novo')}}"><i class="material-icons right">add</i> Nova tabela</a>
<!-- 				<a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan gradient-shadow" href="#!" data-activates="dropdown1">
					<i class="material-icons hide-on-med-and-up">settings</i>
					<span class="hide-on-small-onl">Opções</span>
					<i class="material-icons right">arrow_drop_down</i>
				</a><ul id="dropdown1" class="dropdown-content" style="white-space: nowrap; opacity: 1; left: 1752.5px; position: absolute; top: 130px; display: none;">
					<li><a href="#!" class="grey-text text-darken-2">Criar tabela</a>
					</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
@endsection

@section('content')
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="card">
            <div class="card-content">
      <table>
        <thead>
          <tr>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Opções</th>
          </tr>
        </thead>
        <tbody>
    	@foreach($dicionario as $tabela)
          <tr>
            <td>{{tabela.nome}}</td>
            <td>{{tabela.descricao}}</td>
            <td>
            	<a class="waves-effect waves-light yellow btn" href="{{route('dicionario.editar')}}"><i class="material-icons right">edit</i> Editar</a>
            	<a class="waves-effect waves-light red btn" href="#"><i class="material-icons right">delete_forever</i> Excluir</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
            </div>
<!--             <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div> -->
          </div>
        </div>
      </div>
@endsection

@section('includes')
	<!--VAZIO-->
@endsection