@extends('customers.master')

@section('content')

    <!-- Users -->
    <div class="details">
        <div class="recentOrders">

            <div class="cardHeader">
                <h2>Usuários</h2>
                <abbr title="Novo Usuário"><a href="{{url('/custumers/create-form')}}" class="btn">
                        +
                    </a></abbr>
            </div>

            <table>
                <thead>
                <tr>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Estado</td>
                    <td>Cidade</td>
                    <td>Opções</td>
                </tr>
                </thead>
                <tbody>

                <?php

                foreach ($users as $user) {

                    $linkEdit = url("/customer/show/{$user->id}");
                    $linkDelete = url("/customer/delete/{$user->id}");

                    echo "<tr>
                            <td>{$user->name}</td>
                            <td>{$user->email}</td>
                            <td>{$user->state}</td>
                            <td>{$user->city}</td>
                            <td>
                                <a href={$linkEdit}>
                                    <span class='status update'><ion-icon name='settings'></ion-icon></span>
                                </a>

                                <a href={$linkDelete}>
                                    <span class='status delete'><ion-icon name='trash'></ion-icon></span>
                                </a>
                            </td>
                           </tr>";
                }
                ?>

                {{--                <tr>--}}
                {{--                    <td>Camila Alves</td>--}}
                {{--                    <td>18/10/1992</td>--}}
                {{--                    <td>camila.alves@gmail.com</td>--}}
                {{--                    <td>--}}
                {{--                        <span class="status update"><ion-icon name="settings"></ion-icon></span>--}}
                {{--                        <span class="status delete"><ion-icon name="trash"></ion-icon></span>--}}
                {{--                    </td>--}}
                {{--                </tr>--}}

                {{--                <tr>--}}
                {{--                    <td>Camila Alves</td>--}}
                {{--                    <td>18/10/1992</td>--}}
                {{--                    <td>camila.alves@gmail.com</td>--}}
                {{--                    <td>--}}
                {{--                        <span class="status update"><ion-icon name="settings"></ion-icon></span>--}}
                {{--                        <span class="status delete"><ion-icon name="trash"></ion-icon></span>--}}
                {{--                    </td>--}}
                {{--                </tr>--}}

                {{--                <tr>--}}
                {{--                    <td>Camila Alves</td>--}}
                {{--                    <td>18/10/1992</td>--}}
                {{--                    <td>camila.alves@gmail.com</td>--}}
                {{--                    <td>--}}
                {{--                        <span class="status update"><ion-icon name="settings"></ion-icon></span>--}}
                {{--                        <span class="status delete"><ion-icon name="trash"></ion-icon></span>--}}
                {{--                    </td>--}}
                {{--                </tr>--}}

                {{--                <tr>--}}
                {{--                    <td>Camila Alves</td>--}}
                {{--                    <td>18/10/1992</td>--}}
                {{--                    <td>camila.alves@gmail.com</td>--}}
                {{--                    <td>--}}
                {{--                        <span class="status update"><ion-icon name="settings"></ion-icon></span>--}}
                {{--                        <span class="status delete"><ion-icon name="trash"></ion-icon></span>--}}
                {{--                    </td>--}}
                {{--                </tr>--}}

                </tbody>
            </table>

        </div>
    </div>

@endsection

