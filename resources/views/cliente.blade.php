@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Validação de dados com Laravel</div>

                <div class="panel-body">
                  @if(count($errors) > 0)
                    <div class="alert alert-danger">
                      @foreach($errors->all() as $erros)
                        <li>{{$erros}}</li>
                      @endforeach
                    </div>
                  @endif
                  <form class="form-horizontal" action="{{route('cliente.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group {{$errors->has('nome') ? 'has-error' : ''}}">
                      <label class="col-md-4 control-label">Nome</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="nome" value="{{old('nome')}}">
                        @if($errors->has('nome'))
                          <span class="help-block">
                            <strong>{{$errors->first('nome')}}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group {{$errors->has('nome') ? 'has-error' : ''}}">
                      <label class="col-md-4 control-label">E-mail</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="email" value="{{old('email')}}">
                        @if($errors->has('email'))
                        <span class="help-block">
                          <strong>{{$errors->first('email')}}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                        <button class="btn btn-info">Salvar</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
