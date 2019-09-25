<!DOCTYPE html>
<html>
        @yield('head')

	<body>

        @yield('header')
        @yield('conteudo')
        @yield('footer')

    </body>
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

                                   $(document).ready( function () {
                                    $('#tabelaitens').DataTable(
                                    {"oLanguage": DATATABLE_PTBR,
                                    "lengthMenu": [[7, 10, 25, 50, -1], [7, 10, 25, 50, "All"]],
                                    }
                                );
                                } );

                                </script>
</html>
