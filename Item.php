<?php

class Item
{
    private string $nome;
    private int $tamanho;
    private string $classe;

    public function __construct(string $nome, string $classe,int $tamanho )
    {
        $this->setNome($nome);
        $this->setClasse($classe);
        $this->setTamanho($tamanho);
    }

    //getters
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getTamanho(): int
    {
        return $this->tamanho;
    }

    public function getClasse(): string
    {
        return $this->classe;
    }

    //setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;
    }
}
