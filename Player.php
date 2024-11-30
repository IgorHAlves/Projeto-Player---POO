<?php

require_once("Inventario.php");
require_once("Item.php");

class Player
{
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname)
    {
        $this->setNickName($nickname);
        $this->setNivel(1);
        $this->setInventario(new Inventario);
    }

    public function getNickName(): string
    {
        return $this->nickname;
    }

    public function getNivel(): int
    {
        return $this->nivel;
    }

    public function getInventario(): Inventario
    {
        return $this->inventario;
    }

    public function setNickName(string $nickname)
    {
        $this->nickname = $nickname;
    }

    public function setNivel(int $nivel)
    {
        $this->nivel = $nivel;
    }

    public function setInventario(Inventario $inventario)
    {
        $this->inventario = $inventario;
    }

    public function coletarItem(Item $item)
    {
        $this->inventario->adicionarItem($item);
    }

    public function removerItem($item)
    {
        $this->inventario->removerItem($item);
    }

    public function subirNivel()
    {
        $this->setNivel($this->getNivel() + 1);
        $capacidadeNova = 0;

        for ($nivelNovo = $this->nivel; $nivelNovo > 1; $nivelNovo--) {
            $capacidadeNova = $capacidadeNova + ($nivelNovo * 3); //12 -> 21 -> 27
        }
        $capacidadeNova += 20;
        $this->inventario->setCapacidadeMaxima($capacidadeNova);
    }
}
