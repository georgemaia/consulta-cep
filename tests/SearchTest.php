<?php

use PHPUnit\Framework\TestCase;
use Georgemaia\ConsultaCep\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado)
    {
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);

        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste(){
        return [
            "Endereço Praça da Sé" => 
            [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "unidade" => "",
                    "ibge" => "3550308",
                    "gia" => "1004",
                ]
            ],
            "Endereço Avenida das Alagoas" => 
            [
                "59086200",
                [
                    "cep" => "59086-200",
                    "logradouro" => "Avenida das Alagoas",
                    "complemento" => "até 1267/1268",
                    "bairro" => "Neópolis",
                    "localidade" => "Natal",
                    "uf" => "RN",
                    "unidade" => "",
                    "ibge" => "2408102",
                    "gia" => "",
                ]
            ]
        ];
    }
}