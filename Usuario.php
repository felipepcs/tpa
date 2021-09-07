<?php
class Usuario{

    private $id;
    private $email;
    private $nome;

    private $con;

    public function __construct()
    {
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){

        $sql = $this->con->prepare("SELECT * FROM usuario");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;

    }

    // C do CRUD
    public function create(){

        $sql = $this->con->prepare("INSERT INTO usuario (email, nome) VALUES (?, ?)");
        $sql->execute([$this->getEmail(), $this->getNome()]);

        // OCORREU UM ERRO
        if( $sql->errorCode()!="00000"){
            // EXIBE UMA MENSAGEM DE ERRO DO SQL
            echo $sql->errorInfo()[2];
        }

    }

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

    public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}

}