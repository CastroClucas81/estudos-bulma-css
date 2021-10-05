<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Cultura!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

</head>

<style>
    body {
        background-color: rgb(245, 244, 244);
    }

    .navbar {
        border-radius: 5px;
    }

    .owl-carousel img {
        border-radius: 5px;
    }

    /* cards verticais*/
</style>

<body>
    <div class="container is-fluid">
        <br>

        <!-- MENU TOPO-->
        <div class="card">
            <div class="card-content">
                <div class="content">
                    <div class="columns">
                        <div class="column is-4">
                            <img src="ifba-logo.png" alt="" style=" max-width:200px; max-height:150px;width: auto;height: auto;">
                        </div>
                        <div class="column is-4">

                        </div>

                        <div class="column">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- NAVBAR-->
        <div class="columns">
            <div class="column">
                <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">

                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-start">
                            <a class="navbar-item rota activerota" href="home.php" style="margin-left: 5px;">
                                Home
                            </a>

                            <a class="navbar-item">
                                Quem somos
                            </a>

                            <a class="navbar-item">
                                Agenda
                            </a>

                            <a class="navbar-item">
                                Eventos Realizados
                            </a>

                        </div>

                        <div class="navbar-end">
                            <div class="navbar-item">
                                <div class="buttons">
                                    <a class="button is-primary" href="cadastro.php">
                                        <strong>Sign up</strong>
                                    </a>
                                    <a class="button is-light" href="login.php">
                                        Log in
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div id="result">

        </div>

    </div>
    <br>

    <script>
        function carregarPagina(e, pagina) {
            // / e.preventDefault();
            $("#result").html('');
            $("#result").load(pagina);
        }
        $(function() {

            $(".rota").each(function(index, el) {
                $(el).click(function(event) {
                    event.preventDefault();
                    carregarPagina(el, $(el).attr('href'));
                });
            });
            $(".activerota").click();
        });
    </script>

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
</body>

</html>