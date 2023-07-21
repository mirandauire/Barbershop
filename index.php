<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Don Félix Barbeshop</title>
    <link rel="icon" href="assets/images/icons/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/assets/css/docs.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <a class="logo" href="index.php"><img class="img_logo" src="assets/images/logo.svg"></img></a>
    <div id="fake-navbar"></div>
    <div class="navbar">
        <ul>
            <li><a href="#section0">home</a></li>
            <li><a href="#section1">sobre nós</a></li>
            <li><a href="#section3">serviços</a></li>
            <li><a href="#section5">contato</a></li>
            <li><a href="#section7">agendamento</a></li>
        </ul>
        <span class="navbar-rtext">Aberto de Segunda a Sábado, das 9h às 19h</span>
        <a class="instagram_icon" href="https://www.instagram.com/donfelixbarbershop/"><i class="bi bi-instagram"></i></a>
        <div id="min-navbar">
            <ul>
                <li><a href="#section0"><i class="bi bi-house-door-fill"></i></a></li>
                <li><a href="#section1"><i class="bi bi-bookmarks-fill"></a></i></li>
                <li><a href="#section3"><i class="bi bi-scissors"></i></a></li>
                <li><a href="#section5"><i class="bi bi-telephone-fill"></i></a></li>
                <li><a href="#section7"><i class="bi bi-clock-fill"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="sections">

        <div id="section0">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/alternative/4.jpg" class="d-block w-100" alt="images/alternative/2.jpg">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/alternative/3.jpg" class="d-block w-100" alt="images/alternative/3.jpg">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/alternative/5.jpg" class="d-block w-100" alt="images/alternative/1.jpg">
                  </div>
                </div>         
            </div>
            <div class="content">
                <div class="login-container">
                    <div class="login-content">
                        <form method="POST" action="login.php">
                            <img src="assets/images/logo-title-b.svg">
                            <text class="title">Seja bem-vindo!</text>
                            <div class="input-div one">
                                <div class="i">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div class="user">
                                    <h5>Usuário</h5>
                                    <input name="usuario" type="text" class="input" id="user-login" required>
                                </div>
                            </div>
                            <div class="input-div pass">
                                <div class="i"> 
                                    <i class="bi bi-key-fill"></i>
                                </div>
                                <div class="password">
                                    <h5>Senha</h5>
                                    <input name="senha" spellcheck="false" type="password" class="input" id="password-login" required>
                                    <button class="toggle" type="button" onclick="togglePasswordLogin(this)"></button>
                                </div>
                            </div>
                            <a href="#" class="forg-pass">Esqueceu a senha?</a>
                            <input type="submit" class="btn" value="Login" href="#">
                            <text class="invite">Ainda não está cadastrado?</text>
                            <a class="to-register">Clique aqui</a>
                        </form>
                    </div>
                </div>
                <div class="register-container">
                    <div class="register-content">
                        <form method="POST" action="register.php">
                            <img src="assets/images/logo-title-b.svg">
                            <text class="title">Preencha o seu cadastro</text>
                            <div class="input-div one">
                                <div class="i">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div class="user">
                                    <h5>Nome</h5>
                                    <input type="text" class="input" required>
                                </div>
                            </div>
                            <div class="input-div one">
                                <div class="i">
                                    <i class="bi bi-123"></i>
                                </div>
                                <div class="cpf">
                                    <h5>CPF</h5>
                                    <input type="text" class="input" required>
                                </div>
                            </div>
                            <div class="input-div one">
                                <div class="i">
                                    <i class="bi bi-telephone-inbound-fill"></i>
                                </div>
                                <div class="tel">
                                    <h5>Telefone</h5>
                                    <input type="text" class="input" required>
                                </div>
                            </div>
                            <div class="input-div one">
                                <div class="i">
                                    <i class="bi bi-envelope-at-fill"></i>
                                </div>
                                <div class="email">
                                    <h5>E-mail</h5>
                                    <input type="text" class="input" required>
                                </div>
                            </div>
                            <div class="input-div pass">
                                <div class="i"> 
                                    <i class="bi bi-key-fill"></i>
                                </div>
                                <div class="password">
                                    <h5>Senha</h5>
                                    <input spellcheck="false" type="password" class="input" id="password-register" required>
                                    <button class="toggle" type="button" onclick="togglePasswordRegister(this)"></button>
                                </div>
                            </div>
                            <input type="submit" class="btn" value="Cadastre-se" href="#">
                            <text class="invite">Já está cadastrado?</text>
                            <a class="to-login">Volte para o Login</a>
                        </form>
                    </div>
                </div>
                <script type="text/javascript" src="assets/js/main.js"></script>                
            </div>
        </div>

        <div id="section1">
            <h2>Sobre nós<span class="ic-title"><img src="assets/images/logo-title-b.svg"></img></span></h2>
            <div class="content">
                <p>A Don Felix é a barbearia da sua época. Focada em excelência, ela conta com tudo que o homem moderno precisa. Um ambiente confortável, descontraído e exclusivamente masculino, com cuidados para todos os estilos de barba e cabelo, além de serviços como o "Dia do Noivo". Uma barbearia premium, para cuidar do visual, tomar uma cerveja gelada ou assistir aos seus esportes favoritos. Aqui cada detalhe é minuciosamente trabalhado, desde o corte perfeito até a barba impecável. Na Don Félix, a amizade se une à expertise, proporcionando uma experiência inigualável. Descubra o poder de uma verdadeira conexão entre barbeiro e cliente. Venha para a nossa barbearia e sinta a diferença.</p>
                <!-- <span>Seja um de nossos clientes exclusivos!</span> -->
                <div class="img_section"></div>
            </div>
        </div>

        <div id="section2">
            <div class="background"></div>
            <text>“Don Félix inaugura Barbearia Premium na Barra”</text>
        </div>

        <div id="section3">
            <h2>Serviços<span class="ic-title"><img src="assets/images/logo-title-w.svg"></img></span></h2>
            <div class="content">
                <div class="cards">
                    <div id="card-1">
                        <div class="card text-bg-dark"> 
                            <div class="card-img-overlay"></div>
                            <h5 class="card-title">Cabelo</h5>
                            <h4 class="card-price">R$10</h4>
                        </div>
                    </div>
                    <div id="card-2">
                        <div class="card text-bg-dark"> 
                            <div class="card-img-overlay"></div>
                            <h5 class="card-title">Barba</h5>
                            <h4 class="card-price">R$10</h4>
                        </div>
                    </div>
                    <div id="card-3">
                        <div class="card text-bg-dark"> 
                            <div class="card-img-overlay"></div>
                            <h5 class="card-title">Bigode</h5>
                            <h4 class="card-price">R$10</h4>
                        </div>
                    </div>
                    <div id="card-4">
                        <div class="card text-bg-dark"> 
                            <div class="card-img-overlay"></div>
                            <h5 class="card-title">Pezinho</h5>
                            <h4 class="card-price">R$10</h4>
                        </div>
                    </div>
                    <div id="card-5">
                        <div class="card text-bg-dark"> 
                            <div class="card-img-overlay"></div>
                            <h5 class="card-title">Hidratação</h5>
                            <h4 class="card-price">R$10</h4>
                        </div>
                    </div>
                    <div id="card-6">
                        <div class="card text-bg-dark"> 
                            <div class="card-img-overlay"></div>
                            <h5 class="card-title">Pigmentação</h5>
                            <h4 class="card-price">R$10</h4>
                        </div>
                    </div>
                    <div id="card-7">
                        <div class="card text-bg-dark"> 
                            <div class="card-img-overlay"></div>
                            <h5 class="card-title">Matização</h5>
                            <h4 class="card-price">R$10</h4>
                        </div>
                    </div>
                    <div id="card-8">
                        <div class="card text-bg-dark"> 
                            <div class="card-img-overlay"></div>
                            <h5 class="card-title">Selagem</h5>
                            <h4 class="card-price">R$10</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section4">
            <div class="background"></div>
            <img class="star-rating" src="assets/images/icons/star-rating.svg"></img>
            <text>“Primeira vez na barbearia e saí plenamente satisfeito. Além do resultado fantástico de cabelo e barba, o atendimento do Reny foi espetacular. Virei freguês. Continuo freguês”</text>
        </div>
        <div id="section5">
            <h2>Contato<span class="ic-title"><img src="assets/images/logo-title-b.svg"></img></span></h2>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dolor vero doloremque maiores exercitationem est rerum iste delectus ab incidunt fugit velit voluptates inventore similique, totam, aliquam non quibusdam. Et.
                    Accusamus, possimus eaque sequi error explicabo harum rem asperiores suscipit odio qui sit doloribus eveniet debitis eum autem itaque! Autem, ab architecto nemo quas asperiores maiores eaque nostrum velit praesentium.
                </p>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=640&amp;height=360&amp;hl=en&amp;q=Don Felix Barbershop - Rua César Zama - Barra, Salvador - BA&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div id="section6">
            <div class="background"></div>
            <text>"Barba, cabelo e conforto!"</text>            
        </div>

        <div id="section7">
            <h2>Agendamento<span class="ic-title"><img src="assets/images/logo-title-w.svg"></img></span></h2>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dolor vero doloremque maiores exercitationem est rerum iste delectus ab incidunt fugit velit voluptates inventore similique, totam, aliquam non quibusdam. Et.
                    Accusamus, possimus eaque sequi error explicabo harum rem asperiores suscipit odio qui sit doloribus eveniet debitis eum autem itaque! Autem, ab architecto nemo quas asperiores maiores eaque nostrum velit praesentium.
                </p>
            </div>
        </div>

        <div id="section8">
            <div class="background"></div>
            <text>&copy; 2023 Copyright &reg; Todos direitos reservados</text>
        </div>

    </div>
</body>
</html>