<?php

namespace exelrel\method;

use PDO;

class Exelrel
{
    /** @var PDO $conn objeto do banco de dados */
    protected PDO $conn;

    /** @var string $sqlQuery Consulta sql */
    protected string $sqlQuery;

    /** @var string $dir caminho do diretório diretório que será salvo o arquivo */
    protected string $dir;

    /** @var array $header cabeçalho do exel(primeira linha) */
    protected array $header;

    public function __construct(PDO $ObjPDOConection, string $sqlQuery, string $dir, array $header)
    {
        $this->conn     = $ObjPDOConection;
        $this->sqlQuery = $sqlQuery;
        $this->dir      = $dir;
        $this->header   = $header;
    }

}