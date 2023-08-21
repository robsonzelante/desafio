<?php

namespace App\Constants;

class Messages
{
    const DATE_WEEKEND = "A data escolhida e um fim de semana, escolha outra.";
    const REG_EXIST = "Ja existe um registro na data escolhida para este usuario, por favor, escolha uma data diferente.";
    const REG_RECORDED = "Registro adicionado com sucesso.";
    const REG_VOID = "Nao existem registros gravados no banco de dados ate o momento";
    const REG_DONTEXIST = "Nenhum registro encontrado com este id, por favor tente com um id diferente";
    const REG_NOINFORMATION = "Nao existe nenhum registro com este id, tente outro.";
    const REG_GENERICERROR = "Ocorreu um erro, tente novamente.";
    const REG_UPDATED = "Registro alterado com sucesso.";
    const REG_DESTROYED = "Registro excluido com sucesso.";
    const REG_NOREGISTERS = "Nenhum registro encontrado para esta pessoa.";
    const REG_NOTFOUNDRANGE = "Nenhum registro encontrado neste intervalo de data.";
}
