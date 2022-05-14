<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="StyleSheet" type="text/css" href="./css/desktop.css"/>

    <title>Sistema de login</title>
</head>
<body>
    <section id="container">
        <section id="box-logo">
            <section id="logo">
                <img src="./assets/logo.png" alt="logo"/>
            </section>
        </section>

        <section id="box-login">
            <section>
                
                <section id="box-input">
                    <form action="./config/login.php" method="post">
                        <input type="text" placeholder="Email" name="email"/>
                        <input type="password" placeholder="Senha" name="senha"/>

                        <section>
                            <button type="submit" name="entrar">Entrar</button>
                        </section>
                    </form>

                    <section id="go-register">
                        <section>
                            <label>Não possui uma conta?  </label>
                            <button id="btn-cadastro">Cadastre-se</button>
                        </section>
                    </section>
                </section>
            </section>
        </section>

        <section id="box-cadastro">
            <section>
                
                <section id="box-input-cadastro">
                    <form action="./config/cadastrar.php" method="post">
                        <input type="text" name="nome" placeholder="Nome"/>
                        <input type="text" name="email" placeholder="Email"/>
                        <input id="senha" type="password" name="senha" placeholder="Senha"/>

                        <section>
                            <button>Cadastrar</button>
                        </section>
                    </form>

                    <section id="go-login">
                        <section>
                            <label>Já possui uma conta?  </label>
                            <button id="btn-login">Faça login</button>
                        </section>
                    </section>
                </section>
                

            </section>
        </section>
    </section>

    <script src="./js/script.js"></script>
    <script src="./js/jquery.js"></script>

    <script type="text/javascript">
        let boxLogin = $('#box-login') 
        let boxCadastro = $('#box-cadastro')
        let btnCadastro = $('#btn-cadastro')
        let btnLogin = $('#btn-login')


        $(btnCadastro).click(function() {
            setTimeout(function(){
 
            $("#soteste").css('display', 'block')
            
            }, 3000);
            $(boxCadastro).css(
                'display', 'block'
            )
            $(boxLogin).css(
                'display', 'none'
            )
        })

        $(btnLogin).click(function() {
            $(boxLogin).css(
                'display', 'block'
            )
            $(boxCadastro).css(
                'display', 'none'
            )
        })
        

    </script>
</body>
</html>