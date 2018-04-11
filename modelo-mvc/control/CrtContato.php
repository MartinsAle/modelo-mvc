<?php  

/**
 * class CrtContato: classe que controla os m�todos de visualiza��o, atualiza��o, cadastro e exclus�o dos dados vindos do formul�rio de contato.
 */
require_once('model/DAO/ContatoDAO.php');
require_once('model/Bean/Contato.php');
class CrtContato 
{
    /**
     * private $contatoDao: atributo que receber� o objeto da classe Contato
     * private $contato: atributo que receber� o objeto da classe ContatoDAO
     * private $msg: atributo que receber� um array com uma mensagem de sucesso ou insucesso ao executar um m�todo 
     */
    private $contatoDao;
    private $contato;
    private $msg;

    /**
     * __construct(): obriga a classe CrtContato a ser iniciada somente se os dados dos objetos contato, contatoDAO e msg forem informados
     */
    public function __construct()
    {
    	$this->contatoDao = new ContatoDao();    
    	$this->contato = new Contato();    
    	$this->msg = array();    
    }

    /**
     * getAll(): m�todo que retorna do banco de dados todos os registros da tabela tb_contato
     *
     * @return string
     * @author 
     */
    public function getAll()
    {
    	return $this->contatoDao->getAll();
    }

    /**
     * getById(): m�todo que retorna um registro espec�fico no banco de dados atrav�s de um id previamente informado
     *
     * @return string
     * @author 
     */
    public function getById()
    {
    	$idcontato = $_GET['idContato'];
    	return $this->contatoDao->gettById();
    }

    /**
     * cadastrarContato(): m�todo que cadastra os dados do formul�rio de contato na tabela tb_contato
     *
     * @return string
     * @author 
     */
    public function cadastrarContato()
    {
    	$dados = [
    		'nome' 		=> $_POST['nome'],
    		'sobrenome' => $_POST['sobrenome'],
    		'email' 	=> $_POST['email'],
    		'assunto' 	=> $_POST['assunto'],
    		'mensagem' 	=> $_POST['mensagem']
    	];

    	if($this->contatoDao->cadastrarContato($dados)){
    		$this->msg[] = '<div class="alert alert-success">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">�</button>
                                  <i class="icon-ok"></i><strong>Sucesso!</strong> Sua mesagem foi enviada.
                                </div>'; 
    	}else{
    		$this->msg[] = '<div class="alert alert-danger">
	                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">�</button>
	                              <i class="icon-remove-sign"></i><strong>Erro!</strong> Sua mensagem n�o foi enviada.
	                            </div>';
    	}
        return $this->msg;
    }

    /**
     * atualizarContato(): m�todo que atualiza um registro na tabela tb_contato
     *
     * @return string
     * @author 
     */

    public function atualizarContato()
    {
    	$dados = [
    		'nome' 		=> $_POST['nome'],
    		'sobrenome' => $_POST['sobrenome'],
    		'email' 	=> $_POST['email'],
    		'assunto' 	=> $_POST['assunto'],
    		'mensagem' 	=> $_POST['mensagem']
    	];

    	if($this->contatoDao->atualizarContato($dados)){
    		$this->msg[] = '<div class="alert alert-success">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">�</button>
                                  <i class="icon-ok"></i><strong>Sucesso!</strong> Sua mensagem foi atualizada.
                                </div>'; 
    	}else{
    		$this->msg[] = '<div class="alert alert-danger">
	                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">�</button>
	                              <i class="icon-remove-sign"></i><strong>Erro!</strong> Sua mensagem n�o foi atualizada.
	                            </div>';
    	}
        return $this->msg;
    }
}