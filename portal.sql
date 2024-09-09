CREATE DATABASE portal_noticias;

USE portal_noticias;

CREATE TABLE noticias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    conteudo TEXT NOT NULL,
    autor VARCHAR(100) NOT NULL,
    data_publicacao DATETIME DEFAULT CURRENT_TIMESTAMP
);
