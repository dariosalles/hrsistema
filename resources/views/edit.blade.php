@extends('layouts.app')

@section('content')

<div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form action="" method="POST"> <!-- INICIO FORM -->
            @csrf
            @method('PUT')
            <div class="grid-container">

                @foreach ($item as $c)
                <div class="grid-item">
                    PLACA <input name="{{ $c->placa }}" class="cadform" type="text" required style="font-size: 14px;" value=" {{ $c-> placa }}">
                </div>

                <div class="grid-item">
                    EQUIPAMENTO <select name="equipamento" class="cadform" style="font-size: 14px;">
                    <option value="{{ $c->equipamento }}">{{ $c->equipamento }}</option>

                            </select>
                </div>

                <div class="grid-item">
                    SETOR INICIAL

                        <select name="setorinicial" class="cadform" style="font-size: 14px;" required>>
                            <option value=" {{ $c->setorinicial }}" selected>{{ $c->setorinicial }}</option>


                        </select>


                </div>

                <div class="grid-item">
                    SETOR FINAL
                        <select name="setorfinal" class="cadform" style="font-size: 14px;" required>>
                            <option value=" {{ $c->setorfinal }}" selected>{{ $c->setorfinal }}</option>

                            </select>
                </div>

                <div class="grid-item">
                DATA <input name="data" class="cadform" type="text" style="font-size: 14px;" value=" {{ $c->data }}">
                </div>

                <div class="grid-item">
                    STATUS <select name="status" class="cadform" style="font-size: 14px;">

                        <option value=" {{ $c->status }}" selected>{{ $c->status }}</option>

                        </select>
                </div>

                <div class="grid-item">
                    OBSERVAÇÃO
                    <textarea rows="4" cols="50" required name="obs">{{ $c->obs }}</textarea>

                </div>


                @endforeach



             </div>

             <div class="save">
                <input type="submit" value="Salvar">
            </div>
            </div>

        </form> <!-- FIM FORM -->
</div>
@endsection
