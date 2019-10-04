@extends('layouts.app')

@section('content')

<div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('gravar') }}" method="POST"> <!-- INICIO FORM -->
            @csrf
                 <div class="grid-container">

                    <div class="grid-item">
                    PLACA <input name="placa" class="cadform" type="number" required style="font-size: 14px;">
                    </div>

                    <div class="grid-item">
                        EQUIPAMENTO
                            <select name="equipamento" class="cadform" style="font-size: 14px;" required>
                                @foreach ($equipamentos as $equip)
                                    <option value='{{$equip->equipamento}}'>{{ $equip->equipamento }}</option>
                                @endforeach
                            </select>
                    </div>

                    <div class="grid-item">
                        SETOR INICIAL
                           <select name="setorinicial" class="cadform" style="font-size: 14px;" required>>
                                @foreach ($setores as $setor)
                                    <option value='{{$setor->setor}}'>{{ $setor->setor }}</option>
                                @endforeach

                           </select>


                    </div>

                    <div class="grid-item">
                        SETOR FINAL
                        <select name="setorfinal" class="cadform" style="font-size: 14px;" required>>
                                @foreach ($setores as $setor)
                                    <option value='{{$setor->setor}}'>{{ $setor->setor }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="grid-item">
                         DATA
                        <input name="data" class="cadform" type="date" style="font-size: 14px;" required>
                    </div>

                    <div class="grid-item">
                        STATUS
                           <select name="status" class="cadform" style="font-size: 14px;">
                                @foreach ($status as $st)
                                    <option value='{{$st->status}}'>{{ $st->status }}</option>
                                @endforeach
                           </select>
                    </div>

                    <div class="grid-item">
                        OBSERVAÇÃO
                            <textarea rows="4" cols="50" required name="obs"></textarea>

                    </div>

                </div>


                <input type="submit" class="btn btn-primary btn-block btn-lg" value="Salvar">

            </div>


            </form>
</div>
@endsection
