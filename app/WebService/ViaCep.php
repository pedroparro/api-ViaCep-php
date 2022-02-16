<?php

namespace App\WebService;

class ViaCep 
{
    //metodo para consultar o cep
    public static function consultarCep($cep){
        //inicia o curl
        $curl = curl_init();

        //confgurações do curl array
        curl_setopt_array($curl,[
            CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        //response
        $response = curl_exec($curl);

        //fecha o curl
        curl_close($curl);

        //converte o json em array
        $array = json_decode($response, true);

        //retorna o conteudo em array
        return isset($array['cep']) ? $array : null;
        var_dump($response);
    }
}
?>