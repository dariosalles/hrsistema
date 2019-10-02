@extends('layouts.app')

@section('content')

<div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @foreach ($item as $c)

        <form action="{{ route('salvar', $c->id_patrimonio) }}" method="POST"> <!-- INICIO FORM -->
            @csrf

            <div class="grid-container">



                <input type="hidden" value="{{ $c->id_patrimonio }}" name="id">

                <div class="grid-item">
                    PLACA <input name="placa" class="cadform" type="text" required style="font-size: 14px;" value=" {{ $c-> placa }}">
                </div>

                <div class="grid-item">
                    EQUIPAMENTO <select name="equipamento" class="cadform" style="font-size: 14px;">

                        @foreach ($equipamentos as $equip)

                            @if($equip->equipamento == $c->equipamento)

                                <option value='{{$equip->equipamento}}' selected>{{ $equip->equipamento }}</option>

                            @else
                                <option value='{{$equip->equipamento}}'>{{ $equip->equipamento }}</option>

                            @endif

                        @endforeach



                            </select>
                </div>

                <div class="grid-item">
                    SETOR INICIAL

                        <select name="setorinicial" class="cadform" style="font-size: 14px;" required>>

                            @foreach ($setores as $s)

                                @if($s->setor == $c->setorinicial)

                                    <option selected value='{{$s->setor}}'>{{ $s->setor }}</option>

                                @else

                                    <option value='{{$s->setor}}'>{{ $s->setor }}</option>

                                @endif

                            @endforeach




                        </select>


                </div>

                <div class="grid-item">
                    SETOR FINAL
                        <select name="setorfinal" class="cadform" style="font-size: 14px;" required>

                            @foreach ($setores as $s)

                                @if($s->setor == $c->setorfinal)

                                    <option selected value='{{$s->setor}}'>{{ $s->setor }}</option>

                                @else

                                    <option value='{{$s->setor}}'>{{ $s->setor }}</option>

                                @endif

                            @endforeach

                        </select>
                </div>

                <div class="grid-item">
                DATA <input name="data" class="cadform" type="text" style="font-size: 14px;" value=" {{ $c->data }}">
                </div>

                <div class="grid-item">
                    STATUS <select name="status" class="cadform" style="font-size: 14px;">

                        @foreach ($status as $st)

                            @if($st->status == $c->status)

                                <option selected value='{{$st->status}}'>{{ $st->status }}</option>

                            @else

                                <option value='{{$st->status}}'>{{ $st->status }}</option>

                            @endif

                    @endforeach

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
