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

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>



<script>

    DATATABLE_PTBR = {

        "sEmptyTable": "Nenhum registro encontrado",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sInfoPostFix": "",
        "sInfoThousands": ".",
        "sLengthMenu": "_MENU_ resultados por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sZeroRecords": "Nenhum registro encontrado",
        "sSearch": "Pesquisar",
        "oPaginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior",
            "sFirst": "Primeiro",
            "sLast": "Último"
        },
        "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
        }
    }

       $(document).ready(function () {
        $('#tabelaitens').DataTable(
        {"oLanguage": DATATABLE_PTBR,
        "lengthMenu": [[7, 10, 25, 50, -1], [7, 10, 25, 50, "All"]],
        }
    );
    });

    </script>


@endsection
