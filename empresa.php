
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>G.Estoque</title>
	<link rel="stylesheet" href="css/cadastro.css">
	<link rel="icon" href="img/favico.png"/><a style="visibility: hidden;">;</a>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
    </head>

    <body style="background-image: linear-gradient(to left, #009688, #3F51B5);">
    <!-- Inicio do formulario -->
     <form method="Post" action="processa_empresa.php">
          
          
          
		  
		  
	 
        <div class="cadastro-box" > 
			<h1> Cadastro da Empresa</h1>
			
			
		  <div class="textbox">
		  <i class="fas fa-user-tie"></i>
		     <input name="nome" placeholder="Nome da Empresa"  type="text" id="nome" required>
		  </div>
		  
          <div class="textbox">
		  <i class="fas fa-address-card"></i>
          <input name="razao" placeholder="Razão" type="text" id="razao" required>
          </div>
		  
          <div class="textbox">
		  <i class="fas fa-clipboard-list"></i>
          <input name="cnpj" placeholder="CNPJ" type="text" id="cnpj" required>
          </div>
		  
          <div class="textbox">
		  <i class="fas fa-envelope"></i>
          <input name="email" placeholder="E-Mail" type="email" id="email" required>
          </div>
		  
          <div class="textbox">
		  <i class="fas fa-mobile-alt"></i>
          <input name="telefone" placeholder="Telefone" type="text" id="telefone" required>
          </div>
		 
          
          <div class="textbox">
		  <i class="fas fa-map-marked"></i>
          <input name="cep" placeholder="CEP" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" required />
			 
		  </div>	 
          <div class="textbox">
		  <i class="fas fa-road"></i>
          <input name="rua" placeholder="Rua" type="text" id="rua" />
		  </div>
          <div class="textbox">
		  <i class="fas fa-home"></i>
          <input name="numero" placeholder= "N° " type="text" id="numero" required>
		  </div>
		
	      <div class="textbox">
		  <i class="fas fa-mountain"></i>
          <input name="bairro" placeholder="Bairro" type="text" id="bairro" size="40"/>
		  </div>
		  
		  
          <div class="textbox">
		  <i class="fas fa-building"></i>
          <input name="cidade" placeholder="Cidade" type="text" id="cidade" size="40"/>
		  </div>
		  
		  
          <div class="textbox">
		  <i class="fas fa-flag-usa"></i>
          <input name="uf" placeholder="Estado" type="text" id="uf" size="2" />
          <input name="ibge" type="hidden" id="ibge" size="8" />
		  </div>
		 
		  <div class="textbox">
			<i class="fas fa-user"></i>
            <input name="nome_usu" placeholder="Nome de Usuario" type="text" id="nome_usu" required>
          </div>
		 
          <div class="textbox">
			<i class="fas fa-lock"></i>
			<input name="senha" placeholder="Senha" type="password" id="senha" required>
          </div>
		  
		  <input type="submit" class="btn" value="Cadastrar">
		  <p> Já possui uma conta? <a href="index.php">Login</a></p>
		  
		</div>
     </form>
    </body>

    </html>