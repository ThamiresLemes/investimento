@extends('templates.master')
@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif
<div class="row" >
    <div class="offset-lg-2 col-12 col-lg-8" style="background-color: white;">
        <div class="mt-3">
            <h2 style="color: black">Investir</h2>
        </div>
        <div class="row d-flex flex-column">
            <form method="post" action=" {{ route('moviment.application.store') }} ">
                {!! csrf_field() !!}
                <div class="ml-3 mr-3 d-flex flex-column">
                    @include('templates.formulario.select', ['label' => "Grupo",     'select' => 'group_id',   'data' => $user_group_list,         'name_select' => 'group_id',         'attributes' => ['placeholder' => "Grupo"]])
                    @include('templates.formulario.select', ['label' => "Produto", 'select' => 'product_id', 'data' => $product_list, 'name_select' => 'product_id', 'attributes' => ['placeholder' => "Produto"]])
                    <label for="registerNameGroup">
                        <span style="color: black">Valor</span>
                        <input type="text" class="form-control" name="value" placeholder="R$">
                    </label>
                    <button class="btn btn-black mt-2 mb-2" style="float: right; margin-right: 125px; width: 100%" type="submit">Confirmar</button>
                </div>
            </form>
        </div> 
    </div>
</div>

@endsection