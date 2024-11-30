<?php

require_once("Inventario.php");
require_once("Item.php");
require_once("ItemAtaque.php");
require_once("ItemDefesa.php");
require_once("ItemMagia.php");
require_once("Player.php");

//Criando um player
$player = new Player("Jaja");

//Criando item de ataque
$itemAtaque = new ItemAtaque("Faca de Statik", "Espada");

echo "O nome do player cadastrado é: {$player->getNickName()}";
echo "<hr>";

//Consultar nível
echo "Consultar o nivel do player <br>";
echo "{$player->getNivel()}";
echo "<hr>";


//Consultar capacidade máxima
echo "Consultar a capacidade máxima do player <br>";
echo "{$player->getInventario()->getCapacidadeMaxima()}";
echo "<hr>";

//Adicionar item
echo "Adicionando o item {$itemAtaque->getNome()} da classe {$itemAtaque->getClasse()} do tamanho {$itemAtaque->getTamanho()} <br>";
$player->coletarItem($itemAtaque);
echo "<hr>";


//Consultar capacidade restante
echo "Consultar a nova capacidade restante do player <br>";
echo "{$player->getInventario()->capacidadeLivre()}";
echo "<hr>";

//Subir nível do player
echo "Subindo um nivel do player <br>";
$player->subirNivel();

//Consultar nível do player
echo "{$player->getNivel()} <br>";
echo "<hr>";

//Consultar nova capacidade máxima
echo "Consultar a nova capacidade máxima do player <br>";
echo "{$player->getInventario()->getCapacidadeMaxima()}";
echo "<hr>";

//Criando item de defesa
$itemDefesa = new ItemDefesa("Warmog", "Escudo");

//Adicionar item
echo "Adicionando o item {$itemDefesa->getNome()} da classe {$itemDefesa->getClasse()} do tamanho {$itemDefesa->getTamanho()} <br>";
$player->coletarItem($itemDefesa);
echo "<hr>";

//Consultar nova capacidade livre
echo "Consultando a nova capacidade do player <br>";
echo "{$player->getInventario()->capacidadeLivre()}";
echo "<hr>";

//Criando item de magia
$itemMagia = new ItemMagia("Rabadom", "Bastão");

//Adicionando item de magia
echo "Adicionando o item {$itemMagia->getNome()} da classe {$itemMagia->getClasse()} do tamanho {$itemMagia->getTamanho()} <br>";
$player->coletarItem($itemMagia);
echo "<hr>";

//Consultando nova capacidade restante
echo "Consultando a nova capacidade do player <br>";
echo "{$player->getInventario()->capacidadeLivre()}";


echo "<br>";
echo "<br>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<br>";
//////////////////////////////////////////////////////novo player

//Criando um player
$player2 = new Player("Juju");

//Criando item de ataque
$itemAtaque2 = new ItemAtaque("Cutelo Negro", "Cutelo");


echo "O nome do player cadastrado é: {$player2->getNickName()}";
echo "<hr>";

//Consultar nível
echo "Consultar o nivel do player <br>";
echo "{$player2->getNivel()}";
echo "<hr>";


//Consultar capacidade máxima
echo "Consultar a capacidade máxima do player <br>";
echo "{$player2->getInventario()->getCapacidadeMaxima()}";
echo "<hr>";

//Adicionar item
echo "Adicionando o item {$itemAtaque->getNome()} da classe {$itemAtaque->getClasse()} do tamanho {$itemAtaque->getTamanho()} <br>";
$player2->coletarItem($itemAtaque);
echo "<hr>";

echo "Adicionando o item {$itemAtaque2->getNome()} da classe {$itemAtaque2->getClasse()} do tamanho {$itemAtaque2->getTamanho()} <br>";
$player2->coletarItem($itemAtaque2);
echo "<hr>";


//Consultar capacidade restante
echo "Consultar a nova capacidade restante do player <br>";
echo "{$player2->getInventario()->capacidadeLivre()}";
echo "<hr>";

//Subir nível do player
echo "Subindo um nivel do player <br>";
$player2->subirNivel();

//Consultar nível do player
echo "{$player2->getNivel()} <br>";
echo "<hr>";

//Consultar nova capacidade máxima
echo "Consultar a nova capacidade máxima do player <br>";
echo "{$player2->getInventario()->getCapacidadeMaxima()}";
echo "<hr>";


//Consultar capacidade restante
echo "Consultar a nova capacidade restante do player <br>";
echo "{$player2->getInventario()->capacidadeLivre()}";
echo "<hr>";

//Criando item de defesa
$itemDefesa = new ItemDefesa("Warmog", "Armadura");

//Adicionar item
echo "Adicionando o item {$itemDefesa->getNome()} da classe {$itemDefesa->getClasse()} do tamanho {$itemDefesa->getTamanho()} <br>";
$player2->coletarItem($itemDefesa);
echo "<hr>";

//Consultar nova capacidade livre
echo "Consultando a nova capacidade do player <br>";
echo "{$player2->getInventario()->capacidadeLivre()}";
echo "<hr>";

//Criando item de magia
$itemMagia = new ItemMagia("Rabadom", "Chapeu");

//Adicionando item de magia
echo "Adicionando o item {$itemMagia->getNome()} da classe {$itemMagia->getClasse()} do tamanho {$itemMagia->getTamanho()} <br>";
$player2->coletarItem($itemMagia);
echo "<hr>";

//Consultando nova capacidade restante
echo "Consultando a nova capacidade do player <br>";
echo "{$player2->getInventario()->capacidadeLivre()}";
echo "<hr>";


$itemDefesa2 = new ItemDefesa("Escudo de doram", "Escudo");
$itemMagia2 = new ItemMagia("Cajado do vazio", "Cajado");

//Adicionar item
echo "Adicionando o item {$itemDefesa2->getNome()} da classe {$itemDefesa2->getClasse()} do tamanho {$itemDefesa2->getTamanho()} <br>";
$player2->coletarItem($itemDefesa2);
echo "<hr>";

//Adicionando novo item de magia
echo "Adicionando o item {$itemMagia2->getNome()} da classe {$itemMagia2->getClasse()} do tamanho {$itemMagia2->getTamanho()} <br>";
$player2->coletarItem($itemMagia2);
echo "<hr>";

//Consultando nova capacidade restante
echo "Consultando a nova capacidade do player <br>";
echo "{$player2->getInventario()->capacidadeLivre()}";
echo "<hr>";

echo "Tentando adicionar um novo item com o inventario cheio <br>";

$itemDefesa3 = new ItemDefesa("Capa de fogo solar", "Capa");

//Adicionar item
echo "Adicionando o item {$itemDefesa3->getNome()} da classe {$itemDefesa3->getClasse()} do tamanho {$itemDefesa3->getTamanho()} <br>";
$player2->coletarItem($itemDefesa3);
echo "<hr>";

//Descartando item
$player2->getInventario()->removerItem("Rabadom");
echo "<br>";
echo "<Hr>";
//Listando itens do inventário
$player2->getInventario()->getItens();
