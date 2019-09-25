<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    }

    /**
     * Show the application page initial.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         // conteudo do db tb_patrimonio
         $itens = DB::table('tb_patrimonio')->orderBy('id_patrimonio', 'desc')->get();

        return view('home', compact('itens'));
    }

    public function create()
    {
        return view('cadastro');
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

        return redirect('home');


    }

    public function edit($id)
    {
        $item = DB::table('tb_patrimonio')
                ->when($id, function ($query, $id) {
                    return $query->where('id_patrimonio', $id);
                })
                ->get();

        //dd($item);

        return view('edit', compact('item'));
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




