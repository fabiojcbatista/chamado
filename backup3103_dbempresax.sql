--
-- Banco de dados:  dbempresax 
--

-- --------------------------------------------------------

--
-- Estrutura da tabela  atendimento 
--

DROP TABLE IF EXISTS atendimento;
CREATE TABLE IF NOT EXISTS  atendimento  (
   IDATENDIMENTO  int(11) NOT NULL AUTO_INCREMENT,
   IDUSUARIO  int(11) DEFAULT NULL,
   IDCHAMADO  int(11) DEFAULT NULL,
   ACAOATENDIMENTO  varchar(100) DEFAULT NULL,
   DATAATENDIMENTO  timestamp NOT NULL DEFAULT current_timestamp(),
   COMENTARIOATENDIMENTO  varchar(500) DEFAULT NULL,
   responsavelatendimento  int(11) DEFAULT NULL,
  PRIMARY KEY ( IDATENDIMENTO ),
  KEY  FK_USUARIO  ( IDUSUARIO ),
  KEY  FK_CHAMADO  ( IDCHAMADO )
);

--
-- Extraindo dados da tabela  atendimento 
--

INSERT INTO  atendimento  ( IDATENDIMENTO ,  IDUSUARIO ,  IDCHAMADO ,  ACAOATENDIMENTO ,  DATAATENDIMENTO ,  COMENTARIOATENDIMENTO ,  responsavelatendimento ) VALUES
(1, 1, 13, 'ABRIU CHAMADO', '2020-03-28 14:46:18', 'system service', NULL),
(2, 1, 14, 'ABRIU CHAMADO', '2020-03-28 14:50:58', 'system service', NULL),
(3, 3, 15, 'Abertura de chamado', '2020-03-28 15:08:33', 'system service', NULL),
(4, 3, 16, 'Abertura de chamado', '2020-03-28 15:10:34', 'system service', NULL),
(5, 3, 17, 'Abertura de chamado', '2020-03-28 15:13:17', 'system service', NULL),
(6, 3, 18, 'Abertura de chamado', '2020-03-28 15:15:41', 'system service', NULL),
(7, 1, 18, 'Abertura de chamado', '2020-03-29 12:17:35', 'system service', NULL),
(8, 1, 19, 'Abertura de chamado', '2020-03-29 16:23:28', 'system service', NULL),
(9, 1, 1, 'Transferiu para 1', '2020-03-29 16:35:49', 'comentario', 1),
(10, 1, 18, 'Fechou o chamado', '2020-03-29 17:22:13', 'Fechando', 1),
(11, 1, 18, 'Fechou o chamado', '2020-03-29 17:24:45', 'Fechar', 1),
(12, 1, 18, 'Fechou o chamado', '2020-03-29 17:30:49', 'fechar3', 1),
(13, 1, 18, 'Fechou o chamado', '2020-03-29 17:32:30', 'fachar4', 1),
(14, 1, 18, 'Fechou o chamado', '2020-03-29 17:33:43', 'fachar5', 1),
(15, 1, 18, 'Fechou o chamado', '2020-03-29 17:34:22', 'fechar6', 1),
(16, 1, 18, 'Fechou o chamado', '2020-03-29 17:46:11', 'fechar7', 1),
(17, 1, 19, 'Fechou o chamado', '2020-03-29 17:54:39', 'fechando 19', 1),
(18, 3, 7, 'Fechou o chamado', '2020-03-29 18:56:53', 'Mensagem automática funcionando.', 3),
(19, 3, 8, 'Fechou o chamado', '2020-03-29 18:57:33', 'Mensagem automática funcionando.', 3),
(20, 3, 9, 'Fechou o chamado', '2020-03-29 18:57:53', 'Menu está funcionando', 3),
(21, 3, 11, 'Fechou o chamado', '2020-03-29 18:58:32', 'Erro da emissão do chamado, finalizando.', 3),
(22, 3, 17, 'Fechou o chamado', '2020-03-29 18:59:06', 'Erro na emissão do chamado, finalizando.', 3),
(23, 3, 15, 'Fechou o chamado', '2020-03-29 19:00:38', 'Teste ok.', 3),
(24, 3, 14, 'Fechou o chamado', '2020-03-29 19:00:53', 'Teste ok.', 3),
(25, 3, 13, 'Fechou o chamado', '2020-03-29 19:01:26', 'Teste ok.', 3),
(26, 3, 12, 'Fechou o chamado', '2020-03-29 19:02:19', 'Teste ok.', 3),
(27, 3, 10, 'Fechou o chamado', '2020-03-29 19:02:37', 'Teste ok.', 3),
(28, 3, 20, 'Abertura de chamado', '2020-03-29 20:43:56', 'system service', NULL),
(29, 3, 21, 'Abertura de chamado', '2020-03-29 20:45:53', 'system service', NULL),
(30, 3, 22, 'Abertura de chamado', '2020-03-29 21:23:14', 'system service', NULL),
(31, 3, 23, 'Abertura de chamado', '2020-03-29 21:24:02', 'system service', NULL),
(32, 3, 5, 'Fechou o chamado', '2020-03-29 21:26:03', 'fechar', 3),
(33, 3, 24, 'Abertura de chamado', '2020-03-29 21:59:16', 'system service', NULL),
(34, 3, 24, 'Fechou o chamado', '2020-03-29 22:01:53', 'Teste ok', 3),
(35, 3, 23, 'Fechou o chamado', '2020-03-29 22:02:20', 'Teste ok', 3),
(36, 3, 22, 'Fechou o chamado', '2020-03-29 22:02:42', 'Teste ok', 3),
(37, 3, 21, 'Fechou o chamado', '2020-03-29 22:02:55', 'Teste ok', 3),
(38, 3, 20, 'Fechou o chamado', '2020-03-29 22:03:07', 'teste ok', 3),
(39, 3, 25, 'Abertura de chamado', '2020-03-29 22:11:40', 'system service', NULL),
(40, 1, 1, 'Fechou o chamado', '2020-03-30 13:27:23', 'verificar', 1),
(41, 1, 26, 'Abertura de chamado', '2020-03-30 13:41:12', 'system service', NULL),
(42, 1, 26, 'Fechou o chamado', '2020-03-30 13:41:35', 'Finalizando teste', 1),
(43, 1, 27, 'Abertura de chamado', '2020-03-30 13:44:53', 'system service', NULL),
(44, 1, 27, '   Transferiu para 3', '2020-03-30 13:51:31', 'VERIFICAR', 3),
(45, 3, 27, '   Transferiu para ', '2020-03-30 15:09:09', 'verificar', 7),
(46, 3, 27, 'Transferiu para', '2020-03-30 15:10:49', 'verificar', 7),
(47, 3, 27, 'Transferiu para Pedro', '2020-03-30 15:12:24', 'verificar', 7),
(48, 3, 1, 'Reabriu o chamado', '2020-03-30 16:16:35', 'System service', NULL),
(49, 3, 1, 'Reabriu o chamado', '2020-03-30 16:17:45', 'System service', NULL),
(50, 3, 2, 'Reabriu o chamado', '2020-03-30 16:18:37', 'System service', NULL),
(51, 3, 25, 'Transferiu para ADM', '2020-03-30 17:10:49', 'verificar', 1),
(52, 3, 25, 'Transferiu para Pedro', '2020-03-30 17:14:07', 'verificar', 7),
(53, 1, 5, 'Reabriu o chamado', '2020-03-30 17:56:33', 'System service', NULL),
(54, 1, 5, 'Fechou o chamado', '2020-03-30 17:56:44', 'teste ok', 1),
(55, 1, 1, 'Transferiu para Pedro', '2020-03-30 17:57:46', 'verificar', 7),
(56, 1, 1, 'Transferiu para Pedro', '2020-03-30 17:58:24', 'verificar', 7),
(57, 3, 1, 'Fechou o chamado', '2020-03-30 18:00:18', 'teste ok', 3),
(58, 3, 25, 'Transferiu para Pedro', '2020-03-30 18:17:28', 'verificar', 7),
(59, 3, 25, 'Transferiu para FABIO', '2020-03-30 18:19:25', 'verificar', 3),
(60, 3, 2, 'Transferiu para FABIO', '2020-03-30 18:20:24', 'verificar', 3),
(61, 3, 27, 'Fechou o chamado', '2020-03-30 18:32:45', 'teste ok', 3),
(62, 3, 2, 'Fechou o chamado', '2020-03-30 18:42:51', 'Funcionar.', 3),
(63, 3, 6, 'Fechou o chamado', '2020-03-30 18:52:08', 'Sistema funciona como solicitado', 3),
(64, 3, 25, 'Fechou o chamado', '2020-03-30 18:52:55', 'Funciona conforme solicitado', 3),
(65, 3, 28, 'Abertura de chamado', '2020-03-30 18:55:31', 'system service', NULL),
(66, 3, 29, 'Abertura de chamado', '2020-03-30 18:56:03', 'system service', NULL),
(67, 3, 30, 'Abertura de chamado', '2020-03-30 18:56:51', 'system service', NULL),
(68, 3, 31, 'Abertura de chamado', '2020-03-30 18:59:09', 'system service', NULL),
(69, 3, 32, 'Abertura de chamado', '2020-03-30 18:59:52', 'system service', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela  chamado 
--

DROP TABLE IF EXISTS  chamado ;
CREATE TABLE IF NOT EXISTS  chamado  (
   IDCHAMADO  int(11) NOT NULL AUTO_INCREMENT,
   idusuario  int(11) DEFAULT NULL,
   DATAINICHAMADO  timestamp NOT NULL DEFAULT current_timestamp(),
   DESCRICAOCHAMADO  varchar(500) DEFAULT NULL,
   PRIORIDADECHAMADO  varchar(20) DEFAULT NULL,
   STATUSCHAMADO  varchar(10) DEFAULT NULL,
   DATAFIMCHAMADO  datetime DEFAULT NULL,
  PRIMARY KEY ( IDCHAMADO ),
  KEY  fk_usuario  ( idusuario )
);

--
-- Extraindo dados da tabela  chamado 
--

INSERT INTO  chamado  ( IDCHAMADO ,  idusuario ,  DATAINICHAMADO ,  DESCRICAOCHAMADO ,  PRIORIDADECHAMADO ,  STATUSCHAMADO ,  DATAFIMCHAMADO ) VALUES
(1, 1, '2020-02-21 08:59:46', 'CRIAR CHAMADO', 'ALTA', 'Fechado', '2020-03-30 15:00:18'),
(2, 1, '2020-02-21 09:00:14', 'CRIAR CHAMADO', 'ALTA', 'Fechado', '2020-03-30 15:42:51'),
(3, 3, '2020-03-27 19:44:28', 'Fechando um chamado', 'ALTA', 'Fechado', NULL),
(4, 7, '2020-03-27 20:32:06', 'teste03', 'alta', 'Fechado', NULL),
(5, 1, '2020-03-27 21:03:47', 'Novo está funcionando. Falta configurar o layout da tela', 'ALTA', 'Fechado', '2020-03-30 14:56:44'),
(6, 1, '2020-03-27 21:05:01', 'Atendimento precisa configurar para transferir, comentar ou fechar o chamado', 'ALTA', 'Fechado', '2020-03-30 15:52:08'),
(7, 1, '2020-03-28 10:53:42', 'Teste 28/03/2020 - Mensagem automática na abertura de chamados', 'BAIXA', 'Fechado', '2020-03-29 15:56:51'),
(8, 1, '2020-03-28 10:56:44', 'Teste mensagem automatica na abertura do chamado', 'BAIXA', 'Fechado', '2020-03-29 15:57:33'),
(9, 1, '2020-03-28 10:59:08', 'Teste de menu em novo chamado.php', 'BAIXA', 'Fechado', '2020-03-29 15:57:53'),
(10, 1, '2020-03-28 11:00:45', 'Teste 2 de menu na abertura de novo chamado', 'BAIXA', 'Fechado', '2020-03-29 16:02:37'),
(11, 1, '2020-03-28 11:41:18', '', '', 'Fechado', '2020-03-29 15:58:32'),
(12, 1, '2020-03-28 11:49:29', 'teste falho', 'BAIXA', 'Fechado', '2020-03-29 16:02:19'),
(13, 1, '2020-03-28 14:46:18', 'Teste Atendimento01', 'ALTA', 'Fechado', '2020-03-29 16:01:26'),
(14, 1, '2020-03-28 14:50:58', 'Teste Atendimento01', 'ALTA', 'Fechado', '2020-03-29 16:00:53'),
(15, 3, '2020-03-28 15:08:33', 'Teste Atendimento 02', 'ALTA', 'Fechado', '2020-03-29 16:00:38'),
(16, 3, '2020-03-28 15:10:34', '', '', 'Fechado', NULL),
(17, 3, '2020-03-28 15:13:17', '', '', 'Fechado', '2020-03-29 15:59:06'),
(18, 3, '2020-03-28 15:15:41', '', '', 'Fechado', NULL),
(19, 1, '2020-03-29 16:23:28', 'Teste novo', 'ALTA', 'Fechado', '2020-03-29 14:54:39'),
(20, 3, '2020-03-29 20:43:56', '', '', 'Fechado', '2020-03-29 19:03:07'),
(21, 3, '2020-03-29 20:45:53', 'TESTAR', 'BAIXA', 'Fechado', '2020-03-29 19:02:55'),
(22, 3, '2020-03-29 21:23:14', '', '', 'Fechado', '2020-03-29 19:02:42'),
(23, 3, '2020-03-29 21:24:02', 'Criando painel', 'alta', 'Fechado', '2020-03-29 19:02:20'),
(24, 3, '2020-03-29 21:59:15', 'Testar', 'alta', 'Fechado', '2020-03-29 19:01:53'),
(25, 3, '2020-03-29 22:11:40', 'Configurar Transferir', 'ALTA', 'Fechado', '2020-03-30 15:52:55'),
(26, 1, '2020-03-30 13:41:12', 'TESTE 301', 'BAIXA', 'Fechado', '2020-03-30 10:41:35'),
(27, 1, '2020-03-30 13:44:53', 'teste 302', 'BAIXA', 'Fechado', '2020-03-30 15:32:45'),
(28, 3, '2020-03-30 18:55:31', 'Criar combobox para Novo.php> prioridade', 'BAIXA', 'ABERTO', NULL),
(29, 3, '2020-03-30 18:56:03', 'Criar um logotipo para o sistema de chamado', 'BAIXA', 'ABERTO', NULL),
(30, 3, '2020-03-30 18:56:51', 'Criar rodapé para o sistema', 'BAIXA', 'ABERTO', NULL),
(31, 3, '2020-03-30 18:59:09', 'Criar o usuário logado', 'BAIXA', 'ABERTO', NULL),
(32, 3, '2020-03-30 18:59:52', 'Criar destinção de menu administrativo e funcionário', 'ALTA', 'ABERTO', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela  usuario 
--

DROP TABLE IF EXISTS  usuario ;
CREATE TABLE IF NOT EXISTS  usuario  (
   IDUSUARIO  int(11) NOT NULL AUTO_INCREMENT,
   NOMEUSUARIO  varchar(50) DEFAULT NULL,
   LOGINUSUARIO  varchar(50) DEFAULT NULL,
   SENHAUSUARIO  varchar(8) DEFAULT NULL,
  NIVELUSUARIO INT,
  PRIMARY KEY ( IDUSUARIO )
);

--
-- Extraindo dados da tabela  usuario 
--

INSERT INTO USUARIO(NOMEUSUARIO,LOGINUSUARIO,SENHAUSUARIO,NIVELUSUARIO) VALUES('ADM','ADM','123',1);
INSERT INTO USUARIO(NOMEUSUARIO,LOGINUSUARIO,SENHAUSUARIO,NIVELUSUARIO) VALUES('ADM','ADMA','123',2);
INSERT INTO USUARIO(NOMEUSUARIO,LOGINUSUARIO,SENHAUSUARIO,NIVELUSUARIO) VALUES('Fabio','fc','2010',2);
INSERT INTO USUARIO(NOMEUSUARIO,LOGINUSUARIO,SENHAUSUARIO,NIVELUSUARIO) VALUES('Fabio Batista','fcbatista','2011',2);
INSERT INTO USUARIO(NOMEUSUARIO,LOGINUSUARIO,SENHAUSUARIO,NIVELUSUARIO) VALUES('Fabio Jr','fcjr','2012',2);
INSERT INTO USUARIO(NOMEUSUARIO,LOGINUSUARIO,SENHAUSUARIO,NIVELUSUARIO) VALUES('Araujo','ajo','200',2);
INSERT INTO USUARIO(NOMEUSUARIO,LOGINUSUARIO,SENHAUSUARIO,NIVELUSUARIO) VALUES('Pedro','pdro','300',2);
SELECT C.IDCHAMADO AS 'CHAMADO',A.ACAOATENDIMENTO AS 'ACÃO', U.NOMEUSUARIO AS 'USUARIO', C.DATAINICHAMADO AS 'DATA ABERTURA', C.STATUSCHAMADO AS 'STATUS', C.PRIORIDADECHAMADO AS 'PRIORIDADE', C.DATAFIMCHAMADO AS 'DATA FECHAMENTO' FROM chamado C INNER JOIN atendimento A ON C.IDCHAMADO=A.IDCHAMADO INNER JOIN usuario U ON A.IDUSUARIO=U.IDUSUARIO;
