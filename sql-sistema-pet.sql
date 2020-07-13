CREATE TABLE clientes(
_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
cliente_nome VARCHAR(120),
cliente_sobrenome VARCHAR(120),
cliente_whatsapp VARCHAR(16),
cliente_canal_captacao VARCHAR(120),
cliente_email VARCHAR(120)
);
CREATE TABLE pets (
_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
pet_nome varchar(120),
pet_raca VARCHAR(120),
pet_tipo ENUM('Gato','Cachorro') DEFAULT 'Cachorro',
pet_cor VARCHAR(80),
pet_descricao TEXT
);
CREATE TABLE agenda (
_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
agenda_dia VARCHAR(10),
agenda_hora VARCHAR(12)
);
CREATE TABLE union_tabelas(
id_cliente INT NOT NULL,
id_pet INT NOT NULL,
id_agenda INT NOT NULL,
data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
data_realizado VARCHAR(20)
);