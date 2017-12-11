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
                  <form action="{{route('cliente.store')}}" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="nome">
                    <button class="btn btn-info">Salvar</button>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
