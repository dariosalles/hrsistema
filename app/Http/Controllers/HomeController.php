<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\tb_setores;
use App\tb_equip;
use App\tb_status;

use TJGazel\Toastr\Facades\Toastr;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        Toastr::success('Bem vindo ao Sistema!');

    }

    /**
     * Show the application page initial.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $alerta = $request->query('alerta');

         // conteudo do db tb_patrimonio
         $itens = DB::table('tb_patrimonio')->orderBy('id_patrimonio', 'desc')->get();

         //if($alerta==null) {
            //Toastr::success('Bem vindo ao Sistema!');
         if($alerta=='cadastrook') {
            Toastr::success('Cadastro realizado com sucesso!');
         }elseif($alerta=='atualizadook') {
            Toastr::success('Registro atualizado com sucesso!');
         }elseif($alerta=='excluidook') {
            Toastr::error('Registro deletado com sucesso!');
         }else {

         }




        return view('home', compact('itens'));
    }

    public function create()
    {
        $setores = tb_setores::orderBy('setor', 'asc')->get();
        $equipamentos = tb_equip::orderBy('equipamento', 'asc')->get();
        $status = tb_status::orderBy('status', 'asc')->get();
        //where('id_setor',1)->get();
        //dd($equipamentos);

        //foreach ($setores as $setor) {
          //  echo $setor->name;
       // }
       //$d = array($setores,$equipamentos);

        return view('cadastro', compact('equipamentos','setores','status'));
    }


    public function store(Request $request)
    {

        $dados = $request->all();
        //dd($dados);

        DB::table('tb_patrimonio')->insert([
            [
            'placa' => $dados['placa'],
            'equipamento' => $dados['equipamento'],
            'setorinicial' => $dados['setorinicial'],
            'setorfinal' => $dados['setorfinal'],
            'data' => $dados['data'],
            'obs' => $dados['obs'],
            'status' => $dados['status']
            ]

        ]);



        $alerta = 'cadastrook';

        return redirect()->action(
            'HomeController@index', ['alerta' => $alerta]
        );
    }

    public function edit($id)
    {

        $setores = tb_setores::orderBy('setor', 'asc')->get();
        $equipamentos = tb_equip::orderBy('equipamento', 'asc')->get();
        $status = tb_status::orderBy('status', 'asc')->get();

        $item = DB::table('tb_patrimonio')
                ->when($id, function ($query, $id) {
                    return $query->where('id_patrimonio', $id);
                })
                ->get();

        //dd($item);

        return view('edit', compact('item','setores','equipamentos','status'));
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }



    public function update(Request $request, $id)
    {

        //dd($request);

        $update = $request->all();

        //dd($update);

        DB::table('tb_patrimonio')->where('id_patrimonio', $id)
        ->update(['placa' => $update['placa'],'equipamento' => $update['equipamento'], 'setorinicial' => $update['setorinicial'], 'setorfinal' => $update['setorfinal'], 'data' => $update['data'], 'obs' => $update['obs'], 'status' => $update['status'] ]);

        //tb_patrimonio::where('id_patrimonio', $id)
          //->update(['placa' => 1,'equipamento' => 'EQUIPAMENTO', 'setorinicial' => 'SETORINICIAL', 'setorfinal' => 'SETORFINAL', 'data' => '2019-10-02', 'obs' => 'TESTE', 'status' => 'TESTE' ]);

          $alerta = "atualizadook";

          return redirect()->action(
            'HomeController@index', ['alerta' => $alerta]
          );

          //return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        DB::table('tb_patrimonio')->where('id_patrimonio', $id)->delete();

        $alerta = 'excluidook';

        //dd($alerta);

        return redirect()->action(
            'HomeController@index', ['alerta' => $alerta]
        );

    }

}




