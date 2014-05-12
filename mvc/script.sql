drop table IF EXISTS ValorCompras;
drop table IF EXISTS Faturamento;
drop table IF EXISTS Concorrente;
drop table IF EXISTS Produto;
drop table IF EXISTS Socio;
drop table IF EXISTS Juridico;
drop table IF EXISTS Administrativo;
drop table IF EXISTS Rh;
drop table IF EXISTS Cliente;
drop table IF EXISTS Compra;
drop table IF EXISTS Venda;
drop table IF EXISTS Preco;
drop table IF EXISTS Marketing;
drop table IF EXISTS Empresa;


Create table Empresa (
	numOrdem Int NOT NULL,
	razaoSocial Varchar(80) NOT NULL,
	nomeFantasia Varchar(80) NOT NULL,
	cnpj Varchar(18) NOT NULL,
	ie Varchar(15) NOT NULL,
	dtFundacao Date NOT NULL,
	ramoAtividade Varchar(80) NOT NULL,
	endereco Varchar(60) NOT NULL,
	bairro Varchar(30) NOT NULL,
	cep Varchar(9) NOT NULL,
	cidade Varchar(50) NOT NULL,
	uf Char(2) NOT NULL,
	fone Varchar(10),
	email Varchar(80),
	idSocio Int NOT NULL,
 Primary Key (numOrdem),
 Constraint Relationship11 Foreign Key (idSocio) references Socio (idSocio) on delete  restrict on update  restrict
) ENGINE = MyISAM;

Create table Marketing (
	visitaConcorrencia Int NOT NULL,
	idConcorrente Int NOT NULL,
	pontosFortes Int NOT NULL,
	outrosPontosFortes Varchar(100),
	pontosMelhoria Int NOT NULL,
	outrosPontosMelhoria Varchar(100),
	promocao Int,
	meiosComunicao Int NOT NULL,
	OutrosMeiosComunicacao Varchar(100),
	sinalizacao Int NOT NULL,
	espacaoPromocional Int NOT NULL,
	numOrdem Int NOT NULL,
	idProduto Int NOT NULL,
 Constraint Relationship1 Foreign Key (numOrdem) references Empresa (numOrdem) on delete  restrict on update  restrict,
 Constraint Relationship12 Foreign Key (idProduto) references Produto (idProduto) on delete  restrict on update  restrict,
 Constraint Relationship13 Foreign Key (idConcorrente) references Concorrente (idConcorrente) on delete  restrict on update  restrict
) ENGINE = MyISAM;

Create table Preco (
	formacaoPreco Int NOT NULL,
	outraFormacaoPreco Varchar(50),
	precoConcorrencia Int NOT NULL,
	numOrdem Int NOT NULL,
 Constraint Relationship2 Foreign Key (numOrdem) references Empresa (numOrdem) on delete  restrict on update  restrict
) ENGINE = MyISAM;

Create table Venda (
	diaSemana Int NOT NULL,
	idFat Int NOT NULL,
	periodoInicial Date NOT NULL,
	periodoFinal Date NOT NULL,
	horarioMov Int NOT NULL,
	formaPagto Int NOT NULL,
	outraFormaPagto Varchar(20),
	vlrMedioPorVez Double NOT NULL,
	vlrMedioMensal Double NOT NULL,
	numOrdem Int NOT NULL,
 Constraint Relationship3 Foreign Key (numOrdem) references Empresa (numOrdem) on delete  restrict on update  restrict,
 Constraint Relationship14 Foreign Key (idFat) references Faturamento (idFat) on delete  restrict on update  restrict
) ENGINE = MyISAM;

Create table Compra (
	razaoSocialFantasia Varchar(80) NOT NULL,
	cidadeUf Varchar(120) NOT NULL,
	produtos Varchar(150) NOT NULL,
	loteMinimo Varchar(40) NOT NULL,
	relacionamento Varchar(50) NOT NULL,
	numOrdem Int NOT NULL,
	idvlrCompra Int NOT NULL,
 Constraint Relationship10 Foreign Key (numOrdem) references Empresa (numOrdem) on delete  restrict on update  restrict,
 Constraint Relationship15 Foreign Key (idvlrCompra) references ValorCompras (idvlrCompra) on delete  restrict on update  restrict
) ENGINE = MyISAM;

Create table Cliente (
	qtdeClienteMensal Int NOT NULL,
	perfilCliente Int NOT NULL,
	vendeEmpresa Int NOT NULL,
	percTotalFat Double NOT NULL,
	pesquisaClientes Int NOT NULL,
	frequencia Int,
	numOrdem Int NOT NULL,
 Constraint Relationship9 Foreign Key (numOrdem) references Empresa (numOrdem) on delete  restrict on update  restrict
) ENGINE = MyISAM;

Create table Rh (
	qtdeColaboradores Int NOT NULL,
	treinamento Int NOT NULL,
	area Varchar(30),
	escolaridade Int NOT NULL,
	contratacao Int NOT NULL,
	fatores Int NOT NULL,
	tipoAtividade Int NOT NULL,
	outrasAtividades Varchar(100),
	qtdeDemissao Int NOT NULL,
	qtdeContratacao Int NOT NULL,
	motivo Varchar(60) NOT NULL,
	numOrdem Int NOT NULL,
 Constraint Relationship4 Foreign Key (numOrdem) references Empresa (numOrdem) on delete  restrict on update  restrict
) ENGINE = MyISAM;

Create table Administrativo (
	fluxoCaixa Int,
	controleEstoque Int,
	contasPagar Int,
	contasReceber Char(20),
	admCompras Int,
	admVendas Int,
	fat Int,
	outrosTipos Varchar(100),
	planejamento Int NOT NULL,
	area Varchar(30),
	trabalhaRecursoTerc Int NOT NULL,
	outrosRecursos Varchar(100),
	gastos Int,
	outrosGastos Varchar(100),
	numOrdem Int NOT NULL,
 Constraint Relationship5 Foreign Key (numOrdem) references Empresa (numOrdem) on delete  restrict on update  restrict
) ENGINE = MyISAM;

Create table Juridico (
	impostos Int NOT NULL,
	autuacaoFiscal Int NOT NULL,
	acaoJudicial Int NOT NULL,
	tratativas Int NOT NULL,
	cobrancas Int NOT NULL,
	outraCobranca Varchar(100),
	assessoriaJuridica Int NOT NULL,
	numOrdem Int NOT NULL,
 Constraint Relationship7 Foreign Key (numOrdem) references Empresa (numOrdem) on delete  restrict on update  restrict
) ENGINE = MyISAM;

Create table Socio (
	idSocio Int NOT NULL,
	nome Varchar(80) NOT NULL,
	cargo Varchar(40) NOT NULL,
 Primary Key (idSocio)
) ENGINE = MyISAM;

Create table Produto (
	idProduto Int NOT NULL,
	descProdVendido Varchar(50) NOT NULL,
	qtdeMensal Int NOT NULL,
	unidadeMed Char(2) NOT NULL,
	margemLucro Double NOT NULL,
	percFat Double NOT NULL,
 Primary Key (idProduto)
) ENGINE = MyISAM;

Create table Concorrente (
	idConcorrente Int NOT NULL,
	nome Varchar(80) NOT NULL,
 Primary Key (idConcorrente)
) ENGINE = MyISAM;

Create table Faturamento (
	idFat Int NOT NULL,
	mesAno Varchar(15) NOT NULL,
	fatReais Double NOT NULL,
 Primary Key (idFat)
) ENGINE = MyISAM;

Create table ValorCompras (
	idvlrCompra Int NOT NULL,
	mesAno Varchar(20) NOT NULL,
	compraReais Double NOT NULL,
 Primary Key (idvlrCompra)
) ENGINE = MyISAM;
