<?php

namespace exelrel\method;

class Generate extends  Exelrel
{
    private array $arrayExel;

    public function generateExel() {

        $result = $this->conn->query($this->sqlQuery);
        $countFileds = $result->columnCount();
        $result = $result->fetchAll(\PDO::FETCH_NUM);
        $this->certificateDir($this->dir);
        $fileExel = fopen($this->dir.date('Hms').'.csv', 'c+');
        fputcsv($fileExel, $this->header, ';');
        foreach ($result as $rowValue) {
            $this->arrayExel = [];
            for ($i = 0; $i < $countFileds; $i++) {
                $this->getFieldValue($rowValue[$i]);
            }
            fputcsv($fileExel, $this->arrayExel, ';');
        }
    }

    /**
     * Pega valores do campo e adiciona no array da linha do exel
     * @return void
     */
    public function getFieldValue($value){
        $this->arrayExel[] = $value;
    }

    /** Confere se existe o diretório
     *  caso não exista, crie
     */
    public function certificateDir($directory){
        $directory = dirname($this->dir);
        if (!is_dir($directory))
        {
            mkdir($directory, 0755, true);
        }
    }

}