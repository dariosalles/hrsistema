<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class ItensController extends Controller
{

    private $itens = [
        ['id'=>1, 'placa'=>'123', 'equipamento'=>'Monitor 15', 'setorinicial'=>'TI', 'setorfinal'=>'Raio X', 'data'=>'2019-08-30', 'obs'=>'Teste', 'status'=>'MOVIMENTADO'],
        ['id'=>2, 'placa'=>'456', 'equipamento'=>'ESTABILIZADOR', 'setorinicial'=>'Centro Cirúrgico', 'setorfinal'=>'Quimioterapia', 'data'=>'2019-09-14', 'obs'=>'Teste 2', 'status'=>'VERIFICAR'],
        ['id'=>3, 'placa'=>'789', 'equipamento'=>'CPU', 'setorinicial'=>'Centro Cirúrgico', 'setorfinal'=>'TI', 'data'=>'2019-09-15', 'obs'=>'Teste 2', 'status'=>'VERIFICAR']
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // conteudo do db
        $itens = DB::table('tb_patrimonio')->orderBy('id_patrimonio', 'desc')->get();

        //dd($itens);

        // manda para a view o array itens e compacta
        return view('itens.index', compact('itens'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("itens.cadastro");
    }

    /**
     * Store a newly created resource in storage.
     * Salva um novo registro
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect('itens');


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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iditem = $id;
        $item = DB::table('tb_patrimonio')
                ->when($iditem, function ($query, $iditem) {
                    return $query->where('id_patrimonio', $iditem);
                })
                ->get();


        //dd($item);

        return view('itens.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
