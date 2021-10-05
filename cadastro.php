<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bulma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--
        notification : cria os cards bonitos
        is-primary : cor igual ao bootstrap
        is-bold: deixa a cor mais escura
        hero : usa todo o campo da tela do site (width e height) (margin quase 0)
        hero-head: cabeçalho da head
        hero-body: corpo (centraliza e o margin é maior)
        is-medium : pega metade da tela (height)

        navbar : navbar do bulma
        navbar-brand : alinhar os campos ao superior esquerdo
        navbar-item : item da navbar. Cria um efeito hover
        navbar-menu : cria um menu navbar
        navbar-end : todos os itens ficam no final (float: right)
        is-fullheight : pela a tela inteira
        has-text-centered: toda a informação ficará centralizada no meio da pg
        title: class título do bulma
        subtitle: class de subtítulo do bulma

        has-background-success
        is-centered
    -->
</head>

<body>
    <section class="hero is-primary is-fullheight">
        <!-- NAVBAR -->
        <nav class="navbar is-light has-background-light" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">

                <!-- LOGO MENU -->
                <a class="navbar-item" href="login.html">
                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                </a>

            </div>

        </nav>

        <!--CADASTRO-->
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-5-tablet is-4-desktop is-4-widescreen">
                        <form action="" class="box">
                            <div class="field">
                                <label for="" class="label">Nome</label>
                                <div class="control has-icons-left">
                                    <input type="password" placeholder="Insira o seu nome" class="input" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">E-mail</label>
                                <div class="control has-icons-left">
                                    <input type="email" placeholder="Insira o seu E-mail" class="input" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">Senha</label>
                                <div class="control has-icons-left">
                                    <input type="password" placeholder="Digite uma senha" class="input" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Repita a senha</label>
                                <div class="control has-icons-left">
                                    <input type="password" placeholder="Repita a senha" class="input" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                <button class="button is-primary">
                                    Efetuar Cadastro
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>

</html>