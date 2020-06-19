<?php
include __DIR__ . '/../model/Universidade.php';
class UniversidadeControl extends Universidade
{
    function insert($obj)
    {
        $universidade = new Universidade(null, "", "");
        /* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */
        return $universidade->insert($obj);
    }

    function update($obj, $id)
    {
        $universidade = new Universidade(null, "", "");
        return $universidade->update($obj, $id);
    }

    function delete($obj, $id)
    {
        $universidade = new Universidade(null, "", "");
        return $universidade->delete($obj, $id);
    }

    function find($id = null)
    {
        $universidade = new Universidade(null, "", "");
        return $universidade->find($id);
    }

    function findAll()
    {
        $universidade = new Universidade(null, "", "");
        return $universidade->findAll();
    }
}
