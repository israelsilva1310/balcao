<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity
 *
 * @property int $id
 * @property string|null $razaosocial
 * @property string|null $nome_fantasia
 * @property string|null $telefone
 * @property string|null $email
 * @property string|null $user_id
 * @property string|null $missao
 * @property string|null $visao
 * @property string|null $valores
 * @property bool|null $is_pj
 * @property int|null $municipio_id
 * @property string|null $cpfcnpj
 * @property string|null $ie
 * @property bool|null $ativo
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Municipio $municipio
 * @property \App\Model\Entity\Vaga[] $vagas
 */
class Empresa extends Entity
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
        'razaosocial' => true,
        'nome_fantasia' => true,
        'telefone' => true,
        'email' => true,
        'user_id' => true,
        'missao' => true,
        'visao' => true,
        'valores' => true,
        'is_pj' => true,
        'municipio_id' => true,
        'cpfcnpj' => true,
        'ie' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'municipio' => true,
        'vagas' => true,
    ];
}
