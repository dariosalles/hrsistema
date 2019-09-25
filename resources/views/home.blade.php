@extends('layouts.app')

@section('content')
<div class="container">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



    <div class="btnadd">
        <a href="{{ route ('adicionar') }}"><button type="button" class="btn btn-primary btn-lg">Adicionar</button></a>
    </div>

    <div id="tabela">

            <table id="tabelaitens" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">EDITAR</th>
                        <th scope="col">PLACA</th>
                        <th scope="col">EQUIPAMENTO</th>
                        <th scope="col">SETOR INICIAL</th>
                        <th scope="col">SETOR FINAL</th>
                        <th scope="col">DATA</th>
                        <th scope="col">OBSERVAÇÃO</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">EXCLUIR</th>
                    </tr>
                </thead>

                    <tr>
                        @foreach ($itens as $campo)
                            <td align="center"><a href="{{ route('editar', $campo->id_patrimonio) }}"><i class="fas fa-edit fa-2x"></i></a></td>
                            <td> {{ $campo->placa }} </td>
                            <td> {{ $campo->equipamento }} </td>
                            <td> {{ $campo->setorinicial }} </td>
                            <td> {{ $campo->setorfinal }} </td>
                            <td> {{ $campo->data }} </td>
                            <td> {{ $campo->obs }} </td>
                            <td> {{ $campo->status }} </td>
                            <td align="center"> <a href="{{ route('excluir', $campo->id_patrimonio) }}"><i class="fas fa-trash-alt fa-2x"></i></a> </td>
                    </tr>
                        @endforeach




             </table>



        </div>



</div>
@endsection
