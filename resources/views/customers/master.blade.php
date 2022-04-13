<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresas</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{url(mix('site/css/style.css'))}}">
</head>
<body>


<div class="container-dash">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="cube"></ion-icon></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="{{url('/dashboard')}}">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{url('/usuarios')}}">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title">Usuários</span>
                </a>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title">Configurações</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="title">Sair</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- main -->
    <div class="main">

        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </div>

        <!-- cards -->
        <div class="cardBox">

            <div class="card-data">
                <div>
                    <div class="numbers" id="count_users"></div>
                    <div class="cardName">
                        Usuários <br/>
                        <i>Atualizado em: </i><b id="update_count_users"></b>
                    </div>
                </div>
                <div class="iconBx">
                    <ion-icon name="person"></ion-icon>
                </div>
            </div>
        </div>

        @yield('content')

    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    //MENU RESPONSIVO
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function () {
        navigation.classList.toggle('active');
        main.classList.toggle('active');
    }


    // ADICIONAR HOVER AO PASSAR MOUSE SOBRE OPÇÃO DO MENU

    let list = document.querySelectorAll('.navigation li');

    function activeLink() {
        list.forEach((item) =>
            item.classList.remove('hovered'));
        this.classList.add('hovered');
    }

    list.forEach((item) =>
        item.addEventListener('mouseover', activeLink))
</script>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{url(mix('site/js/script.js'))}}"></script>
<script src="{{url(mix('site/js/mask.js'))}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" integrity="sha256-u7MY6EG5ass8JhTuxBek18r5YG6pllB9zLqE4vZyTn4=" crossorigin="anonymous"></script>--}}
</body>
</html>
