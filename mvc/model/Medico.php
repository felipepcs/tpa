<?php
class Medico{
    
    private $nome;
    private $cpf;
    private $crm;
    private $especializacao;

    private $con;

    public function __construct(){
        $this->con = new PDO(MEDICO, CONSULTA, PACIENTE);        
    }
    
    public function all(){
        
        $sql = $this->con->prepare("SELECT * FROM medico ORDER BY nome");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
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
	public function getCpf()
	{
		return $this->cpf;
	}
	public function setCpf($cpf)
	{
		$this->cpf = $cpf;

		return $this;
	}
	public function getCrm()
	{
		return $this->crm;
	}
	public function setCrm($crm)
	{
		$this->crm = $crm;

		return $this;
	}
	public function getEspecializacao()
	{
		return $this->especializacao;
	}
	public function setEspecializacao($especializacao)
	{
		$this->especializacao = $especializacao;

		return $this;
	}
}
