<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.W.B "Encontre a oportunidade ideal para você!"</title>
    <link rel="shortcut icon" href="../assets/39.png" type="image/x-icon">
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="vagas.css">
</head>
<body>
    <header>
        <div class="div-logo">
            <a href="../index.php"><img class="header-img" src="../assets/39.png" alt=""></a>
        </div>
        <div class="div-btn">
            <a href="vagas.php" class="btn-a b-vagas">Vagas</a>
            <a href="../empresas/empresa.php" class="btn-a">Sou empresa</a>
            <a href="../login/login-pf.html" class="btn-a">Login</a>
            <a href="../cadastro/cadastro.html" class="btn-s btn-a">Cadastre-se</a>
        </div>
    </header>
    <main>
        <div class="parte1">
            <img class="img-t" src="../assets/rede-network.jpg" alt="">
            <div class="titulo">
                <h2 class="hh">Vagas para região de Santos.</h2>
            </div>
            <div class="texto-criativo">
                <h3 class="text">Tem uma habilidade?</h3>
                <h3 class="text">Quer praticidade e conforto?</h3>
                <h4 class="text">Então você está no lugar certo!</h4>
            </div>
            <div class="busca">
                <label for="bairro">Selecione o bairro:</label>
                <select name="bairro" id="bairro">
                    <option value="">Escolha o bairro</option>
                    <option value="Todos">Todos</option>
                    <option value="Ponta da praia">Ponta da praia</option>
                    <option value="Aparecida">Aparecida</option>
                    <option value="Embaré">Embaré</option>
                    <option value="Boqueirão">Boqueirão</option>
                    <option value="Gonzaga">Gonzaga</option>
                    <option value="Macuco">Macuco</option>
                    <option value="Vila_belmiro">Vila belmiro</option>
                    <option value="Vila_matias">Vila matias</option>
                    <option value="Centro">Centro</option>
                    <option value="Chico_paula">Chico de paula</option>
                    <option value="Radioclube">Radio clube</option>
                </select>
            </div>
        </div>
        <div class="parte2">
            <div class="filtro">
                <div class="tipo-contrato">
                    <label for="contrato">Tipo de contrato:</label>
                    <select name="contrato" id="contrato">
                        <option value="">Escolha o tipo de contrato</option>
                        <option value="todos">Todos</option>
                        <option value="clt">CLT</option>
                        <option value="temporario">Temporário</option>
                        <option value="estagio">Estágio</option>
                    </select>
                </div>
                <div class="experiencia">
                    <label for="experiencia">Experiência</label>
                    <select name="experiencia" id="experiencia">
                        <option value="">Escolha o tipo de Experiência</option>
                        <option value="todos">Todos</option>
                        <option value="ensino_medio">Ensino médio</option>
                        <option value="tecnico">Técnico</option>
                        <option value="superior">Superior</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="parte3">
            <h2>VAGAS DISPONIVEIS</h2>
        </div>
    </main>
</body>
</html>