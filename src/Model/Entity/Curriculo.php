<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curriculo Entity
 *
 * @property int $id
 * @property int|null $candidate_id
 * @property string|null $nome
 * @property \Cake\I18n\Date|null $dt_nasc
 * @property string|null $estado_civil
 * @property bool|null $cnh_a
 * @property string|null $cnh_outros
 * @property string|null $celular
 * @property string|null $contato_tipo
 * @property string|null $cep
 * @property string|null $logradouro
 * @property string|null $numero
 * @property string|null $complemento
 * @property string|null $bairro
 * @property string|null $municipio
 * @property string|null $uf
 * @property string|null $grau_instrucao
 * @property string|null $curso_formacao
 * @property string|null $instituicao_ensino
 * @property string|null $inicio_formacao
 * @property string|null $fim_formacao
 * @property string|null $outros_cursos_formacao
 * @property string|null $ingles
 * @property string|null $espanhol
 * @property string|null $informatica
 * @property string|null $office
 * @property string|null $outras_habilidades
 * @property string|null $obj_area_atuation
 * @property string|null $Conhecimento_geral
 * @property string|null $conhecimento_informatica
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Experiencia[] $experiencias
 */
class Curriculo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'candidate_id' => true,
        'nome' => true,
        'dt_nasc' => true,
        'estado_civil' => true,
        'cnh_a' => true,
        'cnh_outros' => true,
        'celular' => true,
        'contato_tipo' => true,
        'cep' => true,
        'logradouro' => true,
        'numero' => true,
        'complemento' => true,
        'bairro' => true,
        'municipio' => true,
        'uf' => true,
        'grau_instrucao' => true,
        'curso_formacao' => true,
        'instituicao_ensino' => true,
        'inicio_formacao' => true,
        'fim_formacao' => true,
        'outros_cursos_formacao' => true,
        'ingles' => true,
        'espanhol' => true,
        'informatica' => true,
        'office' => true,
        'outras_habilidades' => true,
        'obj_area_atuation' => true,
        'Conhecimento_geral' => true,
        'conhecimento_informatica' => true,
        'created' => true,
        'modified' => true,
        'experiencias' => true,
    ];
}
