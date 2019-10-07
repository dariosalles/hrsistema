@extends('layouts.app')

@section('content')
{!! Toastr::render() !!}
<div class="container">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



    <div class="btnadd">
        <a href="{{ route ('adicionar') }}"><button type="button" class="btn btn-primary btn-lg">Adicionar</button></a>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">ID do Registro</label>
                      <input type="text" class="form-control" id="recipient-name" disabled>
                    </div>

                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Excluir</button></a>
                    </div>

                  </form>
                </div>

              </div>
            </div>
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


                        @foreach ($itens as $campo)
                        <tr>
                            <td align="center"><a href="{{ route('editar', $campo->id_patrimonio) }}"><i class="fas fa-edit fa-2x"></i></a></td>
                            <td> {{ $campo->placa }} </td>
                            <td> {{ $campo->equipamento }} </td>
                            <td> {{ $campo->setorinicial }} </td>
                            <td> {{ $campo->setorfinal }} </td>
                            <td> {{ $campo->data }} </td>
                            <td> {{ $campo->obs }} </td>
                            <td> {{ $campo->status }} </td>

                            <td> <a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$campo->id_patrimonio}}"><i class="fas fa-trash-alt fa-2x"></i></a> <br><br>


                        </tr>
                        @endforeach

                        <script type="text/javascript">
                        $('#exampleModal').on('show.bs.modal', function (event) {
                            var button = $(event.relatedTarget) // Botão que acionou o modal
                            var recipient = button.data('whatever') // Extraindo informações do atributo data-*

                            var modal = $(this)
                            modal.find('.modal-title').text('Tem certeza que deseja excluir este registro?')
                            modal.find('.modal-body input').val(recipient)

                            var redirect = 'excluir/' + recipient;

                            modal.find('.modal-body form').attr('action', redirect);

                          })
                        </script>


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
