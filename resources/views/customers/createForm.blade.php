@extends('customers.master')

@section('content')

    <!-- Users -->
    <div class="details">
        <div class="recentOrders">

            <div class="cardHeader">
                <h2>Formulario</h2>
            </div>

            <form action="{{url('/customers/create')}}" method="POST" autocomplete="off">

                <?= csrf_field(); ?>

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="email">Endereço de email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            aria-describedby="email"
                            placeholder="Seu email"
                            name="email"
                        >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name">Nome</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            placeholder="Nome"
                            name="name"
                        >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cpf">CPF</label>
                        <input
                            type="text"
                            class="form-control"
                            id="cpf"
                            placeholder="CPF"
                            name="cpf"
                        >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="date">Data Nascimento</label>
                        <input
                            type="date"
                            class="form-control"
                            id="data_nascimento"
                            placeholder="Data Nascimento"
                            name="birth_date"
                        >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="telephone">Celular</label>
                        <input
                            type="text"
                            class="form-control"
                            id="telephone"
                            placeholder="Telefone"
                            name="cell"
                        >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="endereco">Endereço</label>
                        <input
                            type="text"
                            class="form-control"
                            id="endereco"
                            placeholder="Endereço"
                            name="address"
                        >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="states">Estado</label>
                        <select
                            class="form-control"
                            id="states"
                            name="state"
                        >
                            <option value="1" selected disabled>Escolha um estado</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="city">Cidade</label>
                        <select
                            class="form-control"
                            id="city"
                            name="city"
                        >
                            <option value="null" selected disabled>Escolha uma cidade</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        </div>
    </div>

@endsection
