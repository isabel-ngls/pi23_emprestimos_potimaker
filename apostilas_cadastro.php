
<div class="box"> 
        <div class="form-box">
        <h2><i class="fa-solid fa-user fa-beat icon"></i>  Cadastre uma Apostila</h2>

        <!--formulário--> 

            <form action="apostilas_admin.php" method="post"> <!--falta matricula pq imagino que tenha que ter varias coisas--> 
                <div class="input-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite nome da apostila" required>
                </div>
                <div class="input-group">
                    <label for="Quantidade">Quantidade</label>
                    <input type="number" id="Quantidade" name="Quantidade" placeholder="Quantos exemplares há no estoque?" required>
                </div>
                <div class="input-group">
                    <label for="matrícula">ISBN:</label>
                    <input type="number" id="isbn" name="isbn" placeholder="Digite a isbn da apostila" required>
                </div>
                <div class="input-group">
                    <label for="Descricao">Descricao:</label>
                    <input type="text" id="Descricao" name="Descricao" placeholder="Esreva Descricao" required>
                </div>
                <div class="criar">
                    <input type="submit" name="criar" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
