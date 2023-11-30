CREATE TABLE tb_category (
      cat_id INT(11) NOT NULL AUTO_INCREMENT,
      cat_name VARCHAR(100) NOT NULL,
      cat_text TEXT DEFAULT NULL,
      PRIMARY KEY(cat_id),
      UNIQUE KEY(cat_name)
);

CREATE TABLE tb_post (
      post_id INT(11) NOT NULL AUTO_INCREMENT,
      post_id_cat INT(11) NOT NULL,
      post_user VARCHAR(50) NOT NULL,
      post_name VARCHAR(100) NOT NULL,
      post_text TEXT DEFAULT NULL,
      post_date DATE NULL,
      PRIMARY KEY (post_id)
);

CREATE TABLE tb_foto (
      foto_id INT(11) NOT NULL AUTO_INCREMENT,
      foto_id_post INT (11) NOT NULL, 
      foto_name VARCHAR(100) NOT NULL,
      foto_text varchar(100) NOT NULL,
      foto_date DATE NULL,
      foto_title VARCHAR(100) NOT NULL,
      PRIMARY KEY (foto_id)
);