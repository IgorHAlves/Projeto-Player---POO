<?php

require_once("Item.php");

class Inventario
{
    private int $capacidadeMaxima = 20;
    private array $itens = [];

    public function getCapacidadeMaxima(): int
    {
        return $this->capacidadeMaxima;
    }

    public function getItens(): void
    {
        foreach ($this->itens as $itens) {
            echo "{$itens->getNome()} <br>";
        }
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima)
    {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function setItens(array $itens)
    {
        $this->itens = $itens;
    }

    public function adicionarItem(Item $itemNovo)
    {
        if ($itemNovo->getTamanho() <= $this->capacidadeLivre()) {
            array_push($this->itens, $itemNovo);
            echo "Item inserido com sucesso";
        } else {
            echo "Capacidade máxima excedida, item não inserido";
        }
    }

    public function removerItem($itemRemovido)
    {
        foreach ($this->itens as $index => $item) {
            if ($index == $itemRemovido || $item->getNome() == $itemRemovido) {
                unset($this->itens[$index]);
                echo "Item removido";
                break;
            }
        }
    }

    public function capacidadeLivre(): int
    {
        $totalItens = 0;

        foreach ($this->itens as $item) {
            $totalItens = $totalItens + $item->getTamanho();
        }

        return $this->capacidadeMaxima - $totalItens;
    }
}
