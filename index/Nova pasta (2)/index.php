<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="container flex centro-linha centro">
        <form action="cadastrar.php" method="POST"  >
    <div class="faixa-1 "> 
            <div class="caixa-1 flex borda">
                

                <div class="div2 flex arrumar">
                    <img src="data:image/jpeg;base64,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"width="500" height="300"  alt="">
                </div>





            </div>


            <div class="faixa-2"> 
                <div class="caixa-2 flex borda">

                    <div class="div3 flex ">
                        <h1>Crie sua conta</h1>


                    </div>

                    <div class="div4 flex arrumar coluna">
                        <input type="text" class="input"  placeholder="Nome" name="Nome">


                    </div>
                    
                    <div class="div5 flex arrumar coluna">
                        <input type="text" class="input"  placeholder="email" name="email">

                    </div>
                    <div class="div5 flex arrumar coluna">
                        <input type="text" class="input"  placeholder="cpf" name="cpf">

                    </div>
                    <div class="div5 flex arrumar coluna">
                        <input type="password" class="input"  placeholder="Senha" name="Senha">

                    </div>
                    <div class="div6 flex arrumar coluna">
                        <input type="date" class="input" placeholder="Data" name="data">
                        

                    </div>
                    <div class="cadastrar flex">
                        <button class="botao" onclick="cadastrar()">cadastrar</button>


                        
                    </div>



                  



                    </div>

                </div>
            </div>
            </form>
        </div>

    

    
</body>

</html>