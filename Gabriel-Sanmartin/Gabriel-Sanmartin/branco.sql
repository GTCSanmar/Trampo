

CREATE TABLE "tb_categoria" (
  "Id" int(50) NOT NULL,
  "Nome" varchar(60) NOT NULL
)
-- --------------------------------------------------------

--
-- Estrutura para tabela "tb_compra"
--

CREATE TABLE "tb_compra" (
  "Id" int(50) NOT NULL,
  "Id_usuario" int(50) NOT NULL,
  "Valor" float NOT NULL,
  "Data" date NOT NULL
)
-- --------------------------------------------------------

--
-- Estrutura para tabela "tb_compra_produto"
--

CREATE TABLE "tb_compra_produto" (
  "Id_Compra" int(50) NOT NULL,
  "Id_Produto" int(50) NOT NULL,
  "Quantidade" float NOT NULL
)
-- --------------------------------------------------------

--
-- Estrutura para tabela "tb_produto"
--

CREATE TABLE "tb_produto" (
  "Id" int(50) NOT NULL,
  "Nome" varchar(100) NOT NULL,
  "Descricao" varchar(500) NOT NULL,
  "Preco" float NOT NULL,
  "Quantidade" int(10) NOT NULL
) 

-- --------------------------------------------------------

--
-- Estrutura para tabela "tb_produto_categoria"
--

CREATE TABLE "tb_produto_categoria" (
  "Id_produto" int(50) NOT NULL,
  "Id_Categoria" int(50) NOT NULL
) 

-- --------------------------------------------------------

--
-- Estrutura para tabela "tb_usuario"
--

CREATE TABLE "tb_usuario" (
  "Id" int(50) NOT NULL,
  "Nome" varchar(50) NOT NULL,
  "Email" varchar(50) NOT NULL,
  "Senha" varchar(32) NOT NULL,
  "Nascimento" date NOT NULL,
  "Admin" int(50) NOT NULL
) 

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela "tb_categoria"
--
ALTER TABLE "tb_categoria"
  ADD PRIMARY KEY ("Id");

--
-- Índices de tabela "tb_compra"
--
ALTER TABLE "tb_compra"
  ADD PRIMARY KEY ("Id");

--
-- Índices de tabela "tb_produto"
--
ALTER TABLE "tb_produto"
  ADD PRIMARY KEY ("Id");

--
-- Índices de tabela "tb_usuario"
--
ALTER TABLE "tb_usuario"
  ADD PRIMARY KEY ("Id");
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
