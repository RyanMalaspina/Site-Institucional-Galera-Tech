CREATE TABLE Usuario 
( 
 User_id INT PRIMARY KEY,  
 User_nome INT,  
 User_senha INT,  
 User_apelido INT,  
 user_ativo INT,  
); 

CREATE TABLE slides 
( 
 slide_id INT PRIMARY KEY,  
 idUsuario INT,  
 slide_img1 INT,  
 slide_2 INT,  
 slide_tag INT,  
 slide_titulo INT,  
 slide_destaque INT,  
 slide_txt1 INT,  
 slide_link1 INT,  
 slide_link2 INT,  
 slide_txt2 INT,  
); 

CREATE TABLE conteudo 
( 
 id_conteudo INT PRIMARY KEY,  
 idUsuario INT,  
 tag_conteudo INT,  
 titulo_conteudo INT,  
 subtitulo_conteudo INT,  
 txt1_conteudo INT,  
 img_conteudo INT,  
 link_conteudo INT,  
 ativo conteudo INT,  
); 

CREATE TABLE depoimentos 
( 
 id_depoimentos INT PRIMARY KEY,  
 idUsuario INT,  
 txt_depoimentos INT,  
 tipo_depoimentos INT,  
 foto_depoimentos INT,  
); 

ALTER TABLE slides ADD FOREIGN KEY(idUsuario) REFERENCES Usuario (idUsuario)
ALTER TABLE conteudo ADD FOREIGN KEY(idUsuario) REFERENCES Usuario (idUsuario)
ALTER TABLE depoimentos ADD FOREIGN KEY(idUsuario) REFERENCES Usuario (idUsuario)
