<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vaga Entity
 *
 * @property int $id
 * @property string|null $titulo
 * @property string|null $descricao
 * @property int|null $num_vagas
 * @property bool|null $vale_alimentacao
 * @property bool|null $vale_refeicao
 * @property bool|null $vale_combustivel
 * @property bool|null $seguro_vida
 * @property string|null $office
 * @property int|null $profissional_area_id
 * @property bool|null $cnh_a
 * @property string|null $escolaridade
 * @property string|null $ingles
 * @property string|null $espanhol
 * @property string|null $informatica
 * @property string|null $outros
 * @property string|null $slug
 * @property bool|null $publicar
 * @property int|null $empresa_id
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Vaga extends Entity
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
        'titulo' => true,
        'descricao' => true,
        'num_vagas' => true,
        'vale_alimentacao' => true,
        'vale_refeicao' => true,
        'vale_combustivel' => true,
        'seguro_vida' => true,
        'office' => true,
        'profissional_area_id' => true,
        'cnh_a' => true,
        'escolaridade' => true,
        'ingles' => true,
        'espanhol' => true,
        'informatica' => true,
        'outros' => true,
        'slug' => true,
        'publicar' => true,
        'empresa_id' => true,
        'created' => true,
        'modified' => true,
        'empresa' => true,
    ];
}
