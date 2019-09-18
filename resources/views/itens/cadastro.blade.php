<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Sistema Estoque / Cadastro</title>
            <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css') ?>">

             <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	</head>

	<body>

		<div id="wrapper">
			    <div id="content">
                    <header>
						<div id="header-content">
							<div id="nav" class="topnav">
								<a href="itens">INÍCIO</a>
								<a href="notificacoes">NOTIFICAÇÕES</a>
								<a href="anotacoes">ANOTAÇÕES</a>
								<a href="perfil">PERFIL</a>
							</div>

							<div >
								<img class="logon" src="img/logon.png">
								<img class="alertlogon" src="img/alert.png">
							</div>

						</div>
					</header>
                        <section>

                            <form action="{{ route('itens.store') }}" method="POST"> <!-- INICIO FORM -->
                                @csrf
                                <div class="grid-container">

                                    <div class="grid-item">
                                    PLACA <input name="placa" class="cadform" type="number" required style="font-size: 14px;">
                                    </div>

                                    <div class="grid-item">
                                        EQUIPAMENTO <select name="equipamento" class="cadform" style="font-size: 14px;" required>
                                                <option>Selecione...</option>

                                                </select>
                                    </div>

                                    <div class="grid-item">
                                        SETOR INICIAL

                                            <select name="setorinicial" class="cadform" style="font-size: 14px;" required>>
                                                <option>Selecione...</option>


                                            </select>


                                    </div>

                                    <div class="grid-item">
                                        SETOR FINAL
                                            <select name="setorfinal" class="cadform" style="font-size: 14px;" required>>
                                                <option>Selecione...</option>

                                                </select>
                                    </div>

                                    <div class="grid-item">
                                    DATA <input name="data" class="cadform" type="date" style="font-size: 14px;" required>
                                    </div>

                                    <div class="grid-item">
                                        STATUS <select name="status" class="cadform" style="font-size: 14px;">

                                            <option>Selecione...</option>

                                            </select>
                                    </div>

                                    <div class="grid-item">
                                        OBSERVAÇÃO
                                        <textarea rows="4" cols="50" required name="obs"></textarea>

                                    </div>

                                 </div>

                                 <div class="save">
                                    <input type="submit" value="Salvar">
                                </div>
                                </div>

                            </form> <!-- FIM FORM -->

                        </section>
                </div>
	    </div>

                <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
                <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

		<div id="footer">
			<div id="footer-content">Footer</div>
        </div>

	</body>

    </html>
