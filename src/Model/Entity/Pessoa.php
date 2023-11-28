<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $id
 * @property int|null $municipio_id
 * @property string|null $name
 * @property string|null $lastname
 * @property string|null $document
 * @property \Cake\I18n\Date|null $date_birth
 * @property string|null $email
 * @property string|null $phone1
 * @property string|null $phone2
 * @property string|null $cellphone
 * @property string|null $celphone2
 * @property string|null $street
 * @property string|null $number
 * @property string|null $neighborhood
 * @property string|null $cep
 * @property string|null $complement
 * @property string|null $photo
 *
 * @property \App\Model\Entity\Municipio $municipio
 */
class Pessoa extends Entity
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
        'municipio_id' => true,
        'name' => true,
        'lastname' => true,
        'document' => true,
        'date_birth' => true,
        'email' => true,
        'phone1' => true,
        'phone2' => true,
        'cellphone' => true,
        'celphone2' => true,
        'street' => true,
        'number' => true,
        'neighborhood' => true,
        'cep' => true,
        'complement' => true,
        'photo' => true,
        'municipio' => true,
    ];
}
