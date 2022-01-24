<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="aqui vai vim um meta desc" />
    <link rel="stylesheet" href="./styles/global.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="preloader" as="stylesheet">
    <link rel="shortcut icon" href="/image/favicon.ico" type="image/x-icon">
    <title>EntGames</title>
    <script defer type="text/javascript" src="/scripts/js/form/jquery-3.3.1.min.js"></script>
    <script defer type="text/javascript" src="/scripts/js/form/jquery.mask.min.js"></script>
    <script defer src="/scripts/js/button.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function(){
          $(document).ready(function () {
          $("#cnpj").mask("00.000.000/0000-00")
          $("#tel").mask("(00) 00000-0000")
    })
        })
    </script>

</head>

<body>
    <section id="pagina01">
        <div class="content">
            <div class="titleBox">
                <p>
                    aumentar receitas e diminuir despesas com gamificação e inteligência
                    de dados
                </p>
            </div>
            <div class="logoBox">
                <img src="./image/pagina01/Logo.webp" alt="Logo entGames" />
            </div>
            <div class="buttonBox">
                <button onClick="goToWhatsapp()">quero saber mais</button>
            </div>
        </div>
    </section>
    <section id="pagina02">
        <div class="content">
            <div class="videoBox">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/8-0IS5BMREg"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="textBox">
                <div>
                    <p>
                        Somos uma EdTech que digitaliza o conhecimento da sua empresa e
                        facilita o aprendizado através da gamificação e trilhas de
                        aprendizado. Mas não paramos por aqui!
                    </p>
                    <p>
                        Nossos dois grandes diferenciais são: transformar dados em
                        informações organizadas em painéis inteligentes (medir
                        indicadores) e cruzar dados para ajudar os gestores a tomarem
                        decisões através de BI com o objetivo de melhorar o negócio.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="Pagina03">
        <div class="titleBox">
            <br>Qual destes desafios</br> <b>mais te preocupa?</b>
        </div>
        <div class="challengesBox">
            <div class="challenges">
                <div class="challengeIcon">
                    <img src="image/pagina03/Notebook.webp" alt="Notebook" />
                </div>
                <div class="textBox">
                    <p>
                        A empresa cresceu e ficou difícil
                        <b>treinar tantas pessoas com qualidade</b>
                    </p>
                </div>
            </div>
            <div class="challenges">
                <div class="challengeIcon">
                    <img src="image/pagina03/trofeu.webp" alt="Trofeu" />
                </div>
                <div class="textBox">
                    <p>Meus <b>colaboradores</b> poderiam ser <b>mais engajados</b></p>
                </div>
            </div>
            <div class="challenges">
                <div class="challengeIcon">
                    <img src="./image/pagina03/Grafico.webp" alt="Gráfico" />
                </div>
                <div class="textBox">
                    <p>
                        Ainda não tomo decisões <b>baseadas em inteligência de dados</b>
                    </p>
                </div>
            </div>
        </div>
        <div class="buttonBox">
            <button onclick="goToWhatsapp()">QUERO SABER MAIS</button>
        </div>
    </section>
    <section id="pagina04">
        <div class="content">
            <div class="titulo">
                <h2>Como resolver?</h1>
            </div>
            <div class="resolutionBox">
                <div class="resolution">
                    <div class="challenge">
                        <div class="imgBox">
                            <img src="./image/pagina03/Notebook.webp" alt="notebook">
                        </div>
                        <div class="textBox">
                            <p>A empresa cresceu e ficou difícil <b>treinar tantas pessoas com qualidade</b></p>
                        </div>
                        <div class="arrowBox">
                            <img src="./image/pagina04/seta.webp" alt="seta">
                        </div>
                    </div>
                    <div class="answer">
                        <div class="imgBox">
                            <img src="./image/pagina04/chapeu.webp" alt="chapeu">
                        </div>
                        <p>com uma <b>plataforma de treinamentos online</b> -LMS</p>
                    </div>
                </div>
                <div class="plusBox">
                    <img src="./image/pagina04/mais.webp" alt="mais">
                </div>
                <div class="resolution">
                    <div class="challenge">
                        <div class="imgBox">
                            <img src="./image/pagina03/trofeu.webp" alt="trofeu">
                        </div>
                        <div class="textBox">
                            <p>Meus <b>colaboradores</b> podem ser <b>mais engajados</b></p>
                        </div>
                        <div class="arrowBox">
                            <img src="./image/pagina04/seta.webp" alt="seta">
                        </div>
                    </div>
                    <div class="answer">
                        <div class="imgBox">
                            <img src="./image/pagina04/joystick.webp" alt="joystick">
                        </div>
                        <p><b>Gamificação, visibilidade e meritocracia</b> na empresa</p>
                    </div>
                </div>
                <div class="plusBox">
                    <img src="./image/pagina04/mais.webp" alt="mais">
                </div>
                <div class="resolution">
                    <div class="challenge">
                        <div class="imgBox">
                            <img src="./image/pagina03/Grafico.webp" alt="Grafico">
                        </div>
                        <div class="textBox">
                            <p>Ainda não tomo decisões <b>baseadas em inteligência de dados</b></p>
                        </div>
                        <div class="arrowBox">
                            <img src="./image/pagina04/seta.webp" alt="seta">
                        </div>
                    </div>
                    <div class="answer">
                        <div class="imgBox">
                            <img src="./image/pagina04/cabeca.webp" alt="cabeca">
                        </div>
                        <p><b>Algoritmo</b> cruzando <b>comportamento e resultado</b> das pessoas</p>
                    </div>
                </div>
                <div class="equalBox">
                    <img src="./image/pagina04/igual.webp" alt="igual">
                </div>
                <div class="logoBox">
                    <img src="./image/pagina04/logo.webp" alt="logo">
                </div>
            </div>
            <div class="buttonBox">
                <button onclick="goToWhatsapp()">QUERO SABER MAIS</button>
            </div>
        </div>
    </section>
    <section id="pagina05">
        <div class="titleBox">
            <h2>Como nosso produto funciona</h2>
        </div>
        <div class="productBox">
            <div class="product">
                <div class="productTitle">
                    <span>Jogo</span>
                </div>
                <div class="productImg">
                    <img src="/image/pagina05/MOBILE.GIF" alt="">
                </div>
            </div>
            <div class="bar"></div>
            <div class="product">
                <div class="productTitle">
                    <span>Painel de Gestão</span>
                </div>
                <div class="productImg">
                    <img src="/image/pagina05/PC.gif" alt="">
                </div>
            </div>
        </div>
        <div class="buttonBox">
            <button onClick="goToWhatsapp()">quero saber mais</button>
        </div>
    </section>
    <section id="pagina06">
        <div class="content">
            <div class="titleBox">
                <h2>O que garante o aprendizado:</h2>
                <h3>método TCC</h3>
            </div>
            <div class="methodBox">
                <div class="method">
                    <div class="methodImg">
                        <img src="./image/pagina06/quiz.webp" alt="quiz">
                    </div>
                    <h4>técnica</h4>
                    <p>Treinamento por meio de quizzes sobre os procedimentos da empresa</p>
                </div>
                <div class="plus">
                    <img src="./image/pagina04/mais.webp" alt="mais">
                </div>
                <div class="method">
                    <div class="methodImg">
                        <img src="./image/pagina06/cerebro.webp" alt="cerebro">
                    </div>
                    <h4>comportamento</h4>
                    <p>Análise comportamental do perfil pessoal e profissional do colaborador</p>
                </div>
                <div class="plus">
                    <img src="./image/pagina04/mais.webp" alt="mais">
                </div>
                <div class="method">
                    <div class="methodImg">
                        <img src="./image/pagina06/certo.webp" alt="certo">
                    </div>
                    <h4>checagem</h4>
                    <p>Validação da curva de aprendizado do colaborador através de suas práticas profissionais diárias
                    </p>
                </div>
                <div class="igual">
                    <img src="./image/pagina04/igual.webp" alt="igual">
                </div>
                <div class="result">
                    <div class="methodImg">
                        <img src="./image/pagina06/dinheiro.webp" alt="dinheiro">
                    </div>
                    <h4>aprendizado</h4>
                    <p>Aumento na receita da sua empresa com colaboradores mais engajados</p>
                </div>
            </div>
            <div class="buttonBox">
                <button onclick="goToWhatsapp()">quero saber mais</button>
            </div>
        </div>
    </section>
    <section id="pagina07">
        <div class="content">
            <div class="titulo">
                <h2>Segurança (LGPD)</h2>
            </div>
            <div class="cadeadoBox">
                <img src="image/pagina07/cadeado.webp" alt="Cadeado" />
            </div>
            <div class="buttonBox">
                <button>Seus dados protegidos de acordo com as normas LGPD</button>
            </div>
        </div>
    </section>
    <section id="pagina08">
        <div class="titleBox">
            <h2>Nossos parceiros</h2>
        </div>
        <div class="parternsBox">
            <div class="parterns">
                <img src="/image/pagina08/azure.webp" alt="azure">
            </div>
            <div class="parterns">
                <img src="/image/pagina08/powerBi.webp" alt="powerBI">
            </div>
        </div>
    </section>
    <section id="pagina09">
        <div class="titleBox">
            <br>O que você precisa</br> <b>para ser nosso cliente</b>
        </div>
        <div class="content">
            <img id="desktop" src="/image/pagina09/passos-pc.webp" alt="passos desktop">
            <img id="mobile" src="/image/pagina09/passos-mobile.webp" alt="passos pc">
        </div>
        <div class="buttonBox">
            <button onClick="goToWhatsapp()">quero saber mais</button>
        </div>
    </section>
    <section id="pagina10">
        <h2>Investimento</h2>
        <div class="plansBox">
            <div class="plan">
                <div class="header">
                    <span>Bronze</span>
                </div>
                <div class="setup">
                    <div class="box">
                        <h2>setup inicial +</h2>
                        <h3>R$ 7</h3>
                        <div class="separador"></div>
                        <div class="boxCheck">
                            <img src="image/pagina10/check-01-01.webp" alt="Check">
                            <p>+ 100 pessoas</p>
                        </div>
                        <div class="boxCheck">
                            <img src="image/pagina10/check-01-01.webp" alt="Check">
                            <p>Por usuário-mês</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plan">
                <div class="header">
                    <span>Ouro</span>
                </div>
                <div class="setup">
                    <div class="box">
                        <h2>setup inicial +</h2>
                        <h3>R$ 5</h3>
                        <div class="separador"></div>
                        <div class="boxCheck">
                            <img src="image/pagina10/check-01-01.webp" alt="Check">
                            <p>+ 250 pessoas</p>
                        </div>
                        <div class="boxCheck">
                            <img src="image/pagina10/check-01-01.webp" alt="Check">
                            <p>Por usuário-mês</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plan">
                <div class="header">
                    <span>Diamante</span>
                </div>
                <div class="setup">
                    <div class="box">
                        <h2>setup inicial +</h2>
                        <h3>R$ 4</h3>
                        <div class="separador"></div>
                        <div class="boxCheck">
                            <img src="image/pagina10/check-01-01.webp" alt="Check">
                            <p>+ 500 pessoas</p>
                        </div>
                        <div class="boxCheck">
                            <img src="image/pagina10/check-01-01.webp" alt="Check">
                            <p>Por usuário-mês</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonBox">
            <button>quero saber mais</button>
        </div>
    </section>
    <section id="pagina11">
        <div class="titulo">
            <h3>Contato</h3>
        </div>
        <div class="contato">
            <div class="contactBox">
                <img src="image/pagina11/cara.webp" alt="Pessoa" class="cara">
            </div>
            <div class="box">
                <div class="centerBox">
                    <div>


                    </div>
                    <div class="contactBox">
                        <a
                            href="https://api.whatsapp.com/send?phone=5561991119550&text=Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20a%20Edubrahub%20para%20o%20meu%20neg%C3%B3cio"><img
                                src="image/pagina11/zap.webp" alt="WhatsApp" class="iccon"></a>
                        <p>(61) 99111-9550</p>
                    </div>
                    <div class="contactBox">
                        <a href="https://www.linkedin.com/company/edubrahub/"><img src="image/pagina11/linkedin.webp"
                                alt="linkedin" class="iccon"></a>
                        <p>Edubrahub</p>
                    </div>
                    <div class="contactBox">
                        <img src="image/pagina11/msg.webp" alt="E-mail" class="iccon">
                        <p>atendimento@entgames.com.br</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pagina12">
        <div class="container">
            <form name="form" class="form" method="POST" action="scripts/php/sendEmail.php">
                <input type="text" id="empresa" placeholder="Empresa" required="required" name="empresa">
                <label for="empresa"></label><br>
                <input type="text" id="cnpj" placeholder="CNPJ" name="cnpj">
                <label for="cnpj"></label><br>
                <input type="text" id="nc" placeholder="Número de colaboradores" name="nc">
                <label for="nc"></label><br>
                <input type="email" id="email" placeholder="E-mail" required="required" name="email">
                <label for="email"></label><br>
                <input type="text" id="tel" placeholder="Telefone" required="required" name="tel">
                <label for="tel"></label><br>
                <input type="submit" value="Enviar" />
              </form>
            <h2 class="textBox">
                Preencha o formulário<br>
                e fique sempre por dentro<br>
                das novidade
            </h2>
        </div>
    </section>
</body>

</html>