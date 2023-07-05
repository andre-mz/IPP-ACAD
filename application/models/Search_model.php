
<?php

class Search_model extends CI_Model{

    private $table_estudante = 'table_estudante';

    function __construct(){
        parent::__construct();
    }




    function SearchStd($searchStd){
        if($this->db->table_exists('table_estudante')){
            $this->db->like('fullname', $searchStd);
            $this->db->or_like('nr_estudante', $searchStd);
            $query = $this->db->get($this->table_estudante);
            return $query->result();
        }else{
            $this->db->query(
                "CREATE TABLE IF NOT EXISTS `sig-acad`.`table_estudante`(
                    `id_estudante`       INT(11) NOT NULL AUTO_INCREMENT,
                    `nome`               VARCHAR(50) NOT NULL , 
                    `nr_estudante`       VARCHAR(12) NOT NULL ,
                    `fullname`           VARCHAR(50) NOT NULL , 
                    `nome_pai`           VARCHAR(50) NOT NULL , 
                    `idade`              VARCHAR(10) NOT NULL , 
                    `genero`             VARCHAR(50) NOT NULL ,
                    `nacionalidade`      VARCHAR(50) NOT NULL ,
                    `naturalidade`       VARCHAR(50) NOT NULL , 
                    `tipo_documento`     VARCHAR(30) NOT NULL ,
                    `nr_documento`       VARCHAR(10) NOT NULL ,
                    `curso`              VARCHAR(50) NOT NULL ,
                    `ano_frequentar`     VARCHAR(10) NOT NULL ,
                    `turma`              VARCHAR(20) NOT NULL ,
                    `periodo`            VARCHAR(15) NOT NULL ,
                    `contato_pessoal`    VARCHAR(10) NOT NULL ,
                    `contato_emergencia` VARCHAR(10) NOT NULL ,
                    `estado_estudante`   VARCHAR(10) NOT NULL ,
                    `morada`             VARCHAR(30) NOT NULL ,
                    `data_adicionado`    DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
                    PRIMARY KEY (`id_estudante`)) ENGINE = InnoDB;
                "
            );
        }
        
    }
}


