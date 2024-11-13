
    <!-- Formulário de Cadastro -->
    <div class="col-xl-4 col-md-6 mx-auto p-5">
        <div class="card">
          <h1>Cadastre-se</h1>
              
         
            <div class="card-body">
                <p class="card-text"><small class="text-muted">Preencha o formulário abaixo para fazer o seu cadastro </small></p>
                <form name="cadastrar" method="POST" 
                action="<?=URL?>/usuarios/cadastrar" class="mt-4">
                    <div class="form-group">
                        <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                        <input type="text" name="nome" id="nome" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: <sup class="text-danger">*</sup></label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                        <input type="password" name="senha" id="senha" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="confirma_senha">Confirma Senha: <sup class="text-danger">*</sup></label>
                        <input type="password" name="confirma_senha" id="confirma_senha" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                        </div>
                        <div class="col">
                            <a href="<?=URL?>/usuarios/login">Você tem uma conta? Faça login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Elementos decorativos -->
    <div class="circle-decorator"></div>
    <div class="square-decorator"></div>

    <!-- Botão flutuante (opcional) -->
    

    <footer class="footer">
    <p>&copy; 2024 Galeria - Integrantes: Adriano, Antonio, Alliny, Ana Júlia e Victória</p>
</footer>


