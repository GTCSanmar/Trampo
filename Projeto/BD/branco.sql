DROP TABLE IF EXISTS tb_categoria;
DROP TABLE IF EXISTS tb_compra;
DROP TABLE IF EXISTS tb_compra_produto;
DROP TABLE IF EXISTS tb_produto;
DROP TABLE IF EXISTS tb_produto_categoria;
DROP TABLE IF EXISTS tb_usuario;

CREATE TABLE tb_categoria (
  Id INTEGER(50) NOT NULL,
  Nome VARCHAR(60) NOT NULL
);
-- --------------------------------------------------------

--
-- Estrutura para tabela "tb_compra"
--

CREATE TABLE tb_compra (
  Id INTEGER(50) NOT NULL,
  Id_usuario INTEGER(50) NOT NULL,
  Valor FLOAT NOT NULL,
  Data DATE NOT NULL
);
-- --------------------------------------------------------

--
-- Estrutura para tabela "tb_compra_produto"
--

CREATE TABLE tb_compra_produto (
  Id_Compra INTEGER(50) NOT NULL,
  Id_Produto INTEGER(50) NOT NULL,
  Quantidade FLOAT NOT NULL
);
-- --------------------------------------------------------

--
-- Estrutura para tabela "tb_produto"
--

CREATE TABLE tb_produto (
  Id INTEGER(50) NOT NULL,
  Nome VARCHAR(100) NOT NULL,
  Descricao VARCHAR(500) NOT NULL,
  Preco FLOAT NOT NULL,
  Quantidade INTEGER(10) NOT NULL
);

-- --------------------------------------------------------

--
-- Estrutura para tabela "tb_produto_categoria"
--

CREATE TABLE tb_produto_categoria (
  Id_produto INTEGER(50) NOT NULL,
  Id_Categoria INTEGER(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Estrutura para tabela "tb_usuario"
--

CREATE TABLE tb_usuario (
  Id INTEGER(50) NOT NULL,
  Nome VARCHAR(50) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  Senha VARCHAR(32) NOT NULL,
  Nascimento DATE NOT NULL,
  Admin INTEGER(50) NOT NULL
);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela "tb_categoria"
--
ALTER TABLE tb_categoria
  ADD PRIMARY KEY (Id);

--
-- Índices de tabela "tb_compra"
--
ALTER TABLE tb_compra
  ADD PRIMARY KEY (Id);

--
-- Índices de tabela "tb_produto"
--
ALTER TABLE tb_produto
  ADD PRIMARY KEY (Id);

--
-- Índices de tabela "tb_usuario"
--
ALTER TABLE tb_usuario
  ADD PRIMARY KEY (Id);
COMMIT;