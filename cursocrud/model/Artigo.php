<?php
class Artigo{

    private $id;
    private $titulo;
    private $conteudo;

    private $con;

    public function __construct(){
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){
        $sql = $this->con->prepare("SELECT artigo.*,
		usuario.nome,
		usuario.figura
		FROM artigo
		JOIN usuario ON usuario.id=artigo.usuario_id 
		ORDER BY data_postagem DESC
		LIMIT 30");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function create(){
        $sql = $this->con->prepare("INSERT INTO artigo (titulo, conteudo, usuario_id) VALUES (?,?, ?)");
        $sql->execute([
			$this->getTitulo(), 
			$this->getConteudo(),
			$_SESSION['usuario']->id
			]);

        if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
			header("Location: ./");
   	 	}
    }

	public function read(){
        $sql = $this->con->prepare("SELECT * FROM artigo WHERE id=?");
        $sql->execute([$this->getId()]);
        $row = $sql->fetchObject();
        return $row;		
	}

	public function update(){
		$sql = $this->con->prepare("UPDATE artigo SET titulo=?, conteudo=? WHERE id=?");
		$sql->execute([$this->getTitulo(), $this->getConteudo(), $this->getId()]);

		if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
           header("Location: ./");
		}
	}

	public function delete(){
		$sql = $this->con->prepare("DELETE FROM artigo WHERE id=?");
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
	 * Get the value of titulo
	 *
	 * @return  mixed
	 */
	public function getTitulo()
	{
		return $this->titulo;
	}

	/**
	 * Set the value of titulo
	 *
	 * @param   mixed  $titulo  
	 *
	 * @return  self
	 */
	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;

		return $this;
	}

	/**
	 * Get the value of conteudo
	 *
	 * @return  mixed
	 */
	public function getConteudo()
	{
		return $this->conteudo;
	}

	/**
	 * Set the value of conteudo
	 *
	 * @param   mixed  $conteudo  
	 *
	 * @return  self
	 */
	public function setConteudo($conteudo)
	{
		$this->conteudo = $conteudo;

		return $this;
	}
}
