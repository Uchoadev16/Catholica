<!DOCTYPE html>
<html lang="BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @yield('header')
    <header>
        <nav>
            <ul>
                <li><a href="/santos">Santos</a></li>
                <li><a href="/beatos">Beatos</a></li>
                <li><a href="/dia_santo">Santo do dia</a></li>
                <li><a href="/pesquisa">Pesquisar</a></li>
            </ul>
        </nav>
    </header>

    @yield('footer')
    <footer>
        <nav>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro voluptatibus necessitatibus itaque ab deserunt aperiam molestiae explicabo doloremque exercitationem minima. Impedit, eaque harum inventore obcaecati molestiae expedita. Vel, natus tenetur!</li>
                <li>contatos</li>
                <li>desenvoldores</li>
                <li>logo</li>
            </ul>
        </nav>
    </footer>
</body>
</html>