<?php
class Usuario{

    private $id;
    private $email;
    private $nome;

    private $con;

    public function __construct(){
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){
        $sql = $this->con->prepare("SELECT * FROM usuario");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function create(){
        $sql = $this->con->prepare("INSERT INTO usuario (email, nome) VALUES (?,?)");
        $sql->execute([$this->getEmail(), $this->getNome()]);

        if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
			header("Location: ./");
   	 	}
    }

	public function read(){
        $sql = $this->con->prepare("SELECT * FROM usuario WHERE id=?");
        $sql->execute([$this->getId()]);
        $row = $sql->fetchObject();
        return $row;		
	}

	public function update(){
		$sql = $this->con->prepare("UPDATE usuario SET email=?, nome=? WHERE id=?");
		$sql->execute([$this->getEmail(), $this->getNome(), $this->getId()]);

		if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
           header("Location: ./");
		}
	}

	public function delete(){
		$sql = $this->con->prepare("DELETE FROM usuario WHERE id=?");
		$sql->execute([$this->getId()]);

		if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
           header("Location: ./");
		}
	}


	/**
	 * Get the value of id
	 *
	 * @return  mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @param   mixed  $id  
	 *
	 * @return  self
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of email
	 *
	 * @return  mixed
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 *
	 * @param   mixed  $email  
	 *
	 * @return  self
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of nome
	 *
	 * @return  mixed
	 */
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * Set the value of nome
	 *
	 * @param   mixed  $nome  
	 *
	 * @return  self
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}
}
