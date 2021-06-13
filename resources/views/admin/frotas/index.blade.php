@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <table class="highlight resposive-table centered">
            <thead>
                <tr>
                    <th>Frota</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($frotas as $frota)
                    <tr>
                        <td>{{$frota}}</td>
                        <td class="right-align">
                            <a class="waves-effect waves-light purple btn-small">Editar</a>
                            <a class="waves-effect waves-light red btn-small">Excluir</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Não há frotas cadastradas!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </section>

    <section>
        <h1 style="font-size: 30px; text-align: center; margin-bottom: 50px">{{$princlientes}}</h1>

        <div style="display: flex; justify-content: space-between">
            @forelse ($clientes as $cliente)

            <img style="width: 200px; height: 155px" src="{{$cliente}}"/>
            {{-- <p>{{$cliente}}</p> --}}

            @empty

            @endforelse
        </div>
    </section>

@endsection
