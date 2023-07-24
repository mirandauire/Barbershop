    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title> Don Félix Barbeshop</title>
        <meta name="description" content="A Don Felix é a barbearia da sua época. Focada em excelência, ela conta com tudo que o homem moderno precisa.">
        <meta name="author" content="Equipe Fullstack do SENAC">
        <meta name="keywords" content="Don Félix, Barbearia, Barbershop"/>
        <meta name="geo.region" content="BR" />
        <meta name="geo.placename" content="Salvador, Bahia" />
        <meta name="geo.position" content="-13.004825344672984;-38.53035840052431" />
        <meta property="og:type"            content="website" />
        <meta property="og:locale"          content="pt_BR" />
        <link rel="icon" href="assets/images/icons/icon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/assets/css/docs.css">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <div id="fake-navbar"></div>
        <nav class="navbar">
            <a class="logo" href="index.php"><img class="img_logo" src="assets/images/logo.svg"></img></a>
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
        </nav>
        <div class="sections">

            <header id="section0">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <figure class="carousel-item active">
                            <img src="assets/images/alternative/4.jpg" class="d-block w-100" alt="images/alternative/2.jpg">
                        </figure>
                        <figure class="carousel-item">
                            <img src="assets/images/alternative/3.jpg" class="d-block w-100" alt="images/alternative/3.jpg">
                        </figure>
                        <figure class="carousel-item">
                            <img src="assets/images/alternative/5.jpg" class="d-block w-100" alt="images/alternative/1.jpg">
                        </figure>
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
                                <input type="submit" class="btn"
                               name="botaoConfirmar" 
                                value="Login" href="#">
                                <text class="invite">Ainda não está cadastrado?</text>
                                <a class="to-register">Clique aqui</a>
                            </form>
                        </div>
                    </div>
                    <div class="register-container">
                        <div class="register-content">
                            <form method="POST" action="cadastro.php">
                                <img src="assets/images/logo-title-b.svg">
                                <text class="title">Preencha o seu cadastro</text>
                                <div class="input-div one">
                                    <div class="i">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div class="user">
                                        <h5>Nome</h5>
                                        <input type="text" class="input" name="nome" required>
                                    </div>
                                </div>
                                <div class="input-div one">
                                    <div class="i">
                                        <i class="bi bi-123"></i>
                                    </div>
                                    <div class="cpf">
                                        <h5>CPF</h5>
                                        <input type="number" class="input" name="CPF" required>
                                    </div>
                                </div>
                                <div class="input-div one">
                                    <div class="i">
                                        <i class="bi bi-telephone-inbound-fill"></i>
                                    </div>
                                    <div class="tel">
                                        <h5>Telefone</h5>
                                        <input type="number" class="input" name="telefone" required>
                                    </div>
                                </div>
                                <div class="input-div one">
                                    <div class="i">
                                        <i class="bi bi-envelope-at-fill"></i>
                                    </div>
                                    <div class="email">
                                        <h5>E-mail</h5>
                                        <input type="email" class="input" name="email" required>
                                    </div>
                                </div>
                                <div class="input-div pass">
                                    <div class="i"> 
                                        <i class="bi bi-key-fill"></i>
                                    </div>
                                    <div class="password">
                                        <h5>Senha</h5>
                                        <input spellcheck="false" type="password" class="input" id="password-register" name="senha" required>
                                        <button class="toggle" type="button" onclick="togglePasswordRegister(this)"></button>
                                    </div>
                                </div>
                                <input type="submit" class="btn" name="botaoConfirmar" value="cadastrar" href="#">
                                <text class="invite">Já está cadastrado?</text>
                                <a class="to-login">Volte para o Login</a>
                            </form>
                        </div>
                    </div>
                    <script type="text/javascript" src="assets/js/main.js"></script>                
                </div>
            </header>

            <main id="section1">
                <h2>Sobre nós<span class="ic-title"><img src="assets/images/logo-title-b.svg"></img></span></h2>
                <div class="content">
                    <article class="s1-linha1">
                        <p>A Don Felix é a barbearia da sua época. Focada em excelência, ela conta com tudo que o homem moderno precisa. Um ambiente confortável, descontraído e exclusivamente masculino, com cuidados para todos os estilos de barba e cabelo, além de serviços como o "Dia do Noivo". Uma barbearia premium, para cuidar do visual, tomar uma cerveja gelada ou assistir aos seus esportes favoritos. Aqui cada detalhe é minuciosamente trabalhado, desde o corte perfeito até a barba impecável. Na Don Félix, a amizade se une à expertise, proporcionando uma experiência inigualável. Descubra o poder de uma verdadeira conexão entre barbeiro e cliente. Venha para a nossa barbearia e sinta a diferença.</p>
                        <figure class="img_section"></figure>
                    </article>
                    <div class="s1-linha2">
                        <h3>Equipe Principal</h3>
                        <div class="cards">
                            <figure id="team-card-0">
                                <div class="card text-bg-dark"> 
                                    <div class="card-img-overlay"></div>
                                    <h5 class="card-title">Antoni Rafael</h5>
                                </div>
                            </figure>
                            <figure id="team-card-1">
                                <div class="card text-bg-dark"> 
                                    <div class="card-img-overlay"></div>
                                    <h5 class="card-title">Johnny Silva</h5>
                                </div>
                            </figure>
                            <figure id="team-card-2">
                                <div class="card text-bg-dark"> 
                                    <div class="card-img-overlay"></div>
                                    <h5 class="card-title">José Sulivan</h5>
                                </div>
                            </figure>
                            <figure id="team-card-3">
                                <div class="card text-bg-dark"> 
                                    <div class="card-img-overlay"></div>
                                    <h5 class="card-title">Frank Carlos</h5>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </main>

            <section id="section2">
                <div class="background"></div>
                <text>“Don Félix inaugura Barbearia Premium na Barra”.</text>
            </section>

            <section id="section3">
                <h2>Serviços<span class="ic-title"><img src="assets/images/logo-title-w.svg"></img></span></h2>
                <div class="content">
                    <div class="cards">
                        <figure id="card-0">
                            <div class="card text-bg-dark"> 
                                <div class="card-img-overlay"></div>
                                <h5 class="card-title">Cabelo</h5>
                                <h4 class="card-price">R$30</h4>
                            </div>
                        </figure>
                        <figure id="card-1">
                            <div class="card text-bg-dark"> 
                                <div class="card-img-overlay"></div>
                                <h5 class="card-title">Barba</h5>
                                <h4 class="card-price">R$25</h4>
                            </div>
                        </figure>
                        <figure id="card-2">
                            <div class="card text-bg-dark"> 
                                <div class="card-img-overlay"></div>
                                <h5 class="card-title">Bigode</h5>
                                <h4 class="card-price">R$20</h4>
                            </div>
                        </figure>
                        <figure id="card-3">
                            <div class="card text-bg-dark"> 
                                <div class="card-img-overlay"></div>
                                <h5 class="card-title">Sobrancelha</h5>
                                <h4 class="card-price">R$15</h4>
                            </div>
                        </figure>
                        <figure id="card-4">
                            <div class="card text-bg-dark"> 
                                <div class="card-img-overlay"></div>
                                <h5 class="card-title">Pezinho</h5>
                                <h4 class="card-price">R$10</h4>
                            </div>
                        </figure>
                        <figure id="card-5">
                            <div class="card text-bg-dark"> 
                                <div class="card-img-overlay"></div>
                                <h5 class="card-title">Escova</h5>
                                <h4 class="card-price">R$20</h4>
                            </div>
                        </figure>
                        <figure id="card-6">
                            <div class="card text-bg-dark"> 
                                <div class="card-img-overlay"></div>
                                <h5 class="card-title">Hidratação</h5>
                                <h4 class="card-price">R$30</h4>
                            </div>
                        </figure>
                        <figure id="card-7">
                            <div class="card text-bg-dark"> 
                                <div class="card-img-overlay"></div>
                                <h5 class="card-title">Matização</h5>
                                <h4 class="card-price">R$40</h4>
                            </div>
                        </figure>
                        <figure id="card-8">
                            <div class="card text-bg-dark"> 
                                <div class="card-img-overlay"></div>
                                <h5 class="card-title">Pintura</h5>
                                <h4 class="card-price">R$50</h4>
                            </div>
                        </figure>
                        <figure id="card-9">
                            <div class="card text-bg-dark"> 
                                <div class="card-img-overlay"></div>
                                <h5 class="card-title">Selagem</h5>
                                <h4 class="card-price">R$99</h4>
                            </div>
                        </figure>
                    </div>
                </div>
            </section>

            <section id="section4">
                <div class="background"></div>
                <img class="star-rating" src="assets/images/icons/star-rating.svg"></img>
                <text>“Primeira vez na barbearia e saí plenamente satisfeito. Além do resultado fantástico de cabelo e barba, o atendimento do Reny foi espetacular. Virei freguês. Continuo freguês”.</text>
            </section>
            <section id="section5"> 
                <h2>Contato<span class="ic-title"><img src="assets/images/logo-title-b.svg"></img></span></h2>
                <div class="content">
                    <div class="contact-info">
                        <p><span><i class="bi bi-geo-alt-fill"></i>Endereço: </span>Rua César Zama, 05 - Barra, 40140-030.</p>
                        <p><span><i class="bi bi-telephone-inbound-fill"></i>Telefone: </span>(071) 9 9993-4070</p>
                        <p><span><i class="bi bi-envelope-at-fill"></i>E-mail: </span>donferlix@barbershop.com</p>
                        <p><span><i class="bi bi-instagram"></i>Instagram: </span>@donfelixbarbershop</p>
                        <div class="payment-forms">
                            <p><span><i class="bi bi-credit-card-fill"></i>Formas de Pagamento: </span></p>
                            <p class="payment-text"><i class="bi bi-coin"></i> Dinheiro, PIX, Cartão de Crédito e Débito: Visa, Mastercard, Hipercard, Elo, Maestro/Redeshop, Visa Electron.</p>
                        </div>
                    </div>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=640&amp;height=360&amp;hl=en&amp;q=Don Felix Barbershop - Rua César Zama - Barra, Salvador - BA&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section6">
                <div class="background"></div>
                <text>"Barba, cabelo e conforto!"</text>            
            </section>

            <section id="section7">
                <h2>Agendamento<span class="ic-title"><img src="assets/images/logo-title-w.svg"></img></span></h2>
                <div class="content">
                    <h3>Faça seu agendamento:</h3>
                    <p><span class="ic-title"><i class="bi bi-exclamation-triangle-fill"></i></span>Lembre-se que para fazer o agendamento você precisa estar logado na sua conta.</p>
                    <div class="appointment" id="appointment">
                        <form action="appointment.php" method="POST">
                        <span>Escolha o serviço:</span>
                            <div class="checkbox-services">
                                <input type="checkbox" class="services" name="services" value="cabelo" id="service0"><label for="service0">Cabelo</label><div class=price>R$30</div>
                                <input type="checkbox" class="services" name="services" value="barba" id="service1"><label for="service1">Barba</label><div class=price>R$25</div>
                                <input type="checkbox" class="services" name="services" value="cabelo" id="service2"><label for="service2">Bigode</label><div class=price>R$20</div>
                                <input type="checkbox" class="services" name="services" value="cabelo" id="service3"><label for="service3">Sobrancelha</label><div class=price>R$15</div>
                                <input type="checkbox" class="services" name="services" value="cabelo" id="service4"><label for="service4">Pezinho</label><div class=price>R$10</div>
                                <input type="checkbox" class="services" name="services" value="cabelo" id="service5"><label for="service5">Escova</label><div class=price>R$20</div>
                                <input type="checkbox" class="services" name="services" value="cabelo" id="service6"><label for="service6">Hidratação</label><div class=price>R$30</div>
                                <input type="checkbox" class="services" name="services" value="cabelo" id="service7"><label for="service7">Matização</label><div class=price>R$40</div>
                                <input type="checkbox" class="services" name="services" value="cabelo" id="service8"><label for="service8">Pintura</label><div class=price>R$50</div>
                                <input type="checkbox" class="services" name="services" value="cabelo" id="service9"><label for="service9">Selagem</label><div class=price>R$99</div>
                            </div>
                        <span>Escolha a data disponível:</span>
                        <input type="datetime-local" name="date" class="box" required>
                        <input type="submit" value="Agende" name="submit" class="btn-appointment">
                        </form>
                    </div>  
                </div>
            </section>

            <footer id="section8">
                <div class="background"></div>
                <div class="content">
                    <div class="ftt-linha1">
                        <div class="coluna1">
                            <a class="ftt-logo" href="index.php"><img class="ftt_img_logo" src="assets/images/logo.svg"></img></a>
                        </div>
                        <div class="coluna2">
                            <h2>Horário de funcionamento:</h2>
                            <p>Nós funcionamos de Segunda a Sábado, das 9h às 19h, com estacionamento gratuito.</p>
                        </div>
                        <div class="coluna3">
                            <h2>Onde nós estamos?</h2>
                            <p>Nós estamos na Rua César Zama, 05 - no bairro da Barra, Salvador - BA, CEP: 40140-030.</p>
                        </div>
                        <div class="coluna4">
                            <h2>Contatos</h2>
                            <a class="ftt-instagram_icon" href="https://www.instagram.com/donfelixbarbershop/"><i class="bi bi-instagram"></i></a>
                            <p><span><i class="bi bi-telephone-inbound-fill"></i></span> 71 9 9993-4070</p>
                        </div>
                    </div>
                    <div class="ftt-linha2">
                        <text>&copy; 2023 Copyright &reg; Todos direitos reservados</text>
                    </div>
                </div>
            </footer>

        </div>
    </body>
    </html>