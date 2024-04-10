<?php


class Curso {
  public $mensalidade;
  public $turmas;
  public $curso;
  public $turno;
  public $professor;
  public $cadeira;
  public $alunos;
  public $id_curso;

  public function __construct($mensalidade, $turmas, $curso, $turno, $professor, $cadeira, $alunos, $id_curso){
    $this->mensalidade = $mensalidade;
    $this->turmas = $turmas;
    $this->curso = $curso;
    $this->turno = $turno;
    $this->professor = $professor;
    $this->cadeira = $cadeira;
    $this->alunos = $alunos;
    $this->id_curso = $id_curso;
  }
}


$cursos_d = array();
$cursos_t1 = new Curso(5000, "2023.1", "Matemática", "Noite", "Jhonata Pietro", "Lógica Matemática", 40,"bb15bbcf-9726-470e-afed-9e5b327e8e88");
$cursos_d[] = $cursos_t1;

foreach ($cursos_d as $cursos) {
    echo "Curso: " . $cursos->curso . "\n";
    echo "Mensalidade: R$" . $cursos->mensalidade . "\n";
    echo "Turma: " . $cursos->turmas . "\n";
    echo "Turno: " . $cursos->turno . "\n";
    echo "Professores: " . $cursos->professor . "\n";
    echo "Cadeiras: " . $cursos->cadeira . "\n";
    echo "Alunos: " . $cursos->alunos . "\n";
    echo "ID do curso: " . $cursos->id_curso . "\n";
    echo "\n--------------------------\n\n";
}


class Turma extends Curso {
  protected $id_turma;

  public function __construct($id_turma, $alunos, $cadeira, $professor, $turno) {
    $this->id_turma = $id_turma;
    parent::__construct(null, null, null, $turno, $professor, $cadeira, $alunos, null);
  }

}


$turma_d = array();
$turma_t1 = new Turma("bb15bbcf-9726-470e-afed-9e5b327e8e88", 40, "Lógica Matemática", "Jhonata Pietro", "Noite", 5000, "2023.1", "Matemática");
$turma_d[] = $turma_t1;

foreach ($turma_d as $turma_t1) {
    echo "ID de Turma: " . $cursos->id_turma . "\n";
    echo "Turno: " . $cursos->turno . "\n";
    echo "Professores: " . $cursos->professor . "\n";
    echo "Cadeiras: " . $cursos->cadeira . "\n";
    echo "Alunos: " . $cursos->alunos . "\n";
    echo "\n--------------------------\n\n";
}



class Professor {
  public $cadeira_pro;
  public $sal_pro;
  public $forma_aca;
  public $nome;
  public $endereco;
  public $telefone;
  public $cpf;

  public function __construct($cadeira_pro, $sal_pro, $forma_aca, $nome, $cpf, $endereco, $telefone) {

    $this->cadeira_pro = $cadeira_pro;
    $this->sal_pro = $sal_pro + 2000 + 3000;
    $this->forma_aca = $forma_aca;
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->endereco = $endereco;
    $this->telefone = $telefone;
  }

}

$professor_d = array();
$professor_t = new Professor("Matemática", 5000, "Ciências da computação - USP", "Jhonatan Pietro", "12345678900", "Rua do pé de feijão", "(88)99955-6790");
$professor_d[] = $professor_t;

foreach ($professor_d as $professor_t){
  echo "Cadeira: " . $professor_t->cadeira_pro . "\n";
  echo "Salário: " . $professor_t->sal_pro . "\n";
  echo "Formação acadêmica: " . $professor_t->forma_aca . "\n";
  echo "Nome: " . $professor_t->nome . "\n";
  echo "CPF: " . $professor_t->cpf . "\n";
  echo "Endereço: " . $professor_t->endereco . "\n";
  echo "Telefone: " . $professor_t->telefone . "\n";
  echo "\n--------------------------\n\n";
}




class Aluno extends Curso {
  public $nome;
  public $cpf;
  public $matricula;
  public $nascimento;
  public $email;
  public $telefone;

  public function __construct($nome, $cpf, $matricula, $mensalidade, $nascimento, $email, $telefone, $turno, $endereco, $cadeira) {
    parent::__construct($mensalidade, null, null, $turno, null, $cadeira, null, null);

    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->matricula = $matricula;
    $this->mensalidade = $mensalidade;
    $this->nascimento = $nascimento;
    $this->email = $email;
    $this->telefone = $telefone;
    $this->turno = $turno;
    $this->endereco = $endereco;
    $this->cadeira = $cadeira;

  }

}

$alunos_d = array();
$aluno_t = new Aluno("João Silva", "123.456.789-00", "20231130043", 430,00, "21/02/2000","joao@gmail.com","(88) 9 8128-2321", "Noite", "Rua das Flores, 123", "Cadeira01");
$alunos_d[] = $aluno_t;

foreach ($alunos_d as $aluno_t){
  echo "Nome: " . $aluno_t->nome . "\n";
  echo "CPF: " . $aluno_t->cpf . "\n";
  echo "Matrícula: " . $aluno_t->matricula . "\n";
  echo "Mensalidade: R$ " . $aluno_t->mensalidade . "\n";
  echo "Data de nascimento: " . $aluno_t->nascimento . "\n";
  echo "Email: " . $aluno_t->email . "\n";
  echo "Telefone: " . $aluno_t->telefone . "\n";
  echo "Turno: " . $aluno_t->turno . "\n";
  echo "Endereço: " . $aluno_t->endereco . "\n";
  echo "Cadeira: " . $aluno_t->cadeira . "\n";
  echo "\n--------------------------\n\n";
}





class Notas{
  protected $nota1;
  protected $nota2;
  protected $tde1;
  protected $tde2;
  protected $notas;

  public function __construct($nota1, $nota2, $tde1, $tde2){
    $this->nota1 = $nota1;
    $this->nota2 = $nota2;
    $this->tde1 = $tde1;
    $this->tde2 = $tde2;
    $this->calcMedia();
  }

  public function calcMedia() {
    $tde_s = ($this->tde1 + $this->tde2) / 2; 
    $media_s = (($this->nota1 * 0.4) + ($this->nota2 * 0.4) + ($tde_s * 0.2));
    $this->notas = array(
      "Nota1" => $this->nota1,
      "Nota2" => $this->nota2,
      "TDE1" => $this->tde1,
      "TDE2" => $this->tde2,
      "Média" => $media_s
    );
  }

  public function printNotas() {
    foreach ($this->notas as $nota => $value) {
      echo ucfirst($nota) . ": " . $value . "\n";
    }
    echo "\n--------------------------\n\n";
  }
}

$notas_e = new Notas(8, 10, 10, 10);
$notas_e->printNotas();

?>
