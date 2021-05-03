<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!--Estilo CSS-->
            <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Home</title>
</head>
    <body>
        <div class = "container">
            <div class = "navbar-container">
                <nav>
                    <a href=""><img src="{{ URL::to('img/hdchostlogo.png') }}" class="logo"></a>
                    <ul class="navbar-items">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Planos</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#" class="default-btn">Login</a></li>
                    </ul>
                </nav>
            </div>
    <main>
        <div class="main-banner">

            <h1>Titulo Principal</h1>
            <p>Melhores planos</p>
        </div>
    <section class="specialties-container">
        <ul>
            <li>
                <i class="fas fa-shield-alt"></i>
                <h3>Segurança</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                usce et cursus dolor. Nullam vitae venenatis massa. Sed planos
                </p>
            </li>
            <li>
                <i class="fas fa-rocket"></i>
                <h3>velocidade</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                usce et cursus dolor. Nullam vitae venenatis massa. Sed planos
                </p>
            </li>
            <li>
                <i class="fas fa-comments"></i>
                <h3>Suporte</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                usce et cursus dolor. Nullam vitae venenatis massa. Sed planos
                </p>
            </li>
        </ul>
    </section>
    <section class="princing-container">
        <h1>Planos e preços</h1>
        <p>Selecione o plano perfeito para você</p>
        <div class= "plans-container">
            <div class ="plan">
                <ul>
                    <li class="prince">R$15/mês</li>
                    <li class="plan-name">Padrão</li>
                    <li>2GB de espaço</li>
                    <li>10 subdominios</li>
                    <li>25 contas de e-mail</li>
                    <li>C-Panel</li>
                    <li>Suporte 24/7</li>
                    <li class="plan-btn">Selecionar</li>
                </ul>
            </div>
            <div class ="plan">
                <ul>
                    <li class="prince recommended">R$30/mês</li>
                    <li class="plan-name">Dedicado</li>
                    <li>45GB de espaço</li>
                    <li>50 subdominios</li>
                    <li>30 contas de e-mail</li>
                    <li>C-Panel</li>
                    <li>Suporte 24/7</li>
                    <li class="plan-btn recommended">Selecionar</li>
                </ul>
            </div>
            <div class ="plan">
                <ul>
                    <li class="prince">R$150/mês</li>
                    <li class="plan-name">Fã</li>
                    <li>10GB de espaço</li>
                    <li>100 subdominios</li>
                    <li>250 contas de e-mail</li>
                    <li>C-Panel</li>
                    <li>Suporte 24/7</li>
                    <li class="plan-btn">Selecionar</li>
                </ul>
            </div>
            <div class ="plan">
                <ul>
                    <li class="prince">R$950/mês</li>
                    <li class="plan-name">INSANO</li>
                    <li>2709GB de espaço</li>
                    <li>1022 subdominios</li>
                    <li>2500 contas de e-mail</li>
                    <li>C-Panel</li>
                    <li>Suporte 24/7</li>
                    <li class="plan-btn">Selecionar</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="searchdomain-container">
        <h2>Buscar dominio</h2>
        <p>Veja se o dominio que você deseja está disponivel</p>
        <form action="">
            <input type="text" name="domain" placeholder="Digite seu dominio desejado">
            <input type="submit" value="buscar Dominio">
        </form>
    </section>
    <section class="contact-container">
        <h2>Entre em contato</h2>
        <p>Mande uma mensagem para nós</p>
        <form action="">
            <input type="text" placeholder="seu nome">
            <input type="email" placeholder="seu e-mail">
            <textarea placeholder="digite sua mensagem"></textarea>
            <input type="submit" value="enviar">
        </form>
    </section>
        </main>
        <footer>
            <p>um dia vai ter algo aqui</p>
        </footer>
    </div>
</body>
</html>
