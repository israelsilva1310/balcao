<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CurriculosFixture
 */
class CurriculosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'candidate_id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'dt_nasc' => '2023-11-17',
                'estado_civil' => 'Lorem ipsum dolor sit amet',
                'cnh_a' => 1,
                'cnh_outros' => 'L',
                'celular' => 'Lorem ipsum d',
                'contato_tipo' => 'Lorem ipsum dolor sit amet',
                'cep' => 'Lorem ipsum d',
                'logradouro' => 'Lorem ipsum dolor sit amet',
                'numero' => 'Lorem ip',
                'complemento' => 'Lorem ipsum dolor sit amet',
                'bairro' => 'Lorem ipsum dolor sit amet',
                'municipio' => 'Lorem ipsum dolor sit amet',
                'uf' => 'Lo',
                'grau_instrucao' => 'Lorem ipsum dolor sit amet',
                'curso_formacao' => 'Lorem ipsum dolor sit amet',
                'instituicao_ensino' => 'Lorem ipsum dolor sit amet',
                'inicio_formacao' => 'Lorem ipsum dolor sit amet',
                'fim_formacao' => 'Lorem ipsum dolor sit amet',
                'outros_cursos_formacao' => 'Lorem ipsum dolor sit amet',
                'ingles' => 'Lorem ipsum dolor sit amet',
                'espanhol' => 'Lorem ipsum dolor sit amet',
                'informatica' => 'Lorem ipsum dolor sit amet',
                'office' => 'Lorem ipsum dolor sit amet',
                'outras_habilidades' => 'Lorem ipsum dolor sit amet',
                'obj_area_atuation' => 'Lorem ipsum dolor sit amet',
                'Conhecimento_geral' => 'Lorem ipsum dolor sit amet',
                'conhecimento_informatica' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-11-17 19:37:54',
                'modified' => 1700249874,
            ],
        ];
        parent::init();
    }
}
