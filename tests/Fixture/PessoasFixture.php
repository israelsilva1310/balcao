<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PessoasFixture
 */
class PessoasFixture extends TestFixture
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
                'municipio_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'lastname' => 'Lorem ipsum dolor sit amet',
                'document' => 'Lorem ipsum dolor sit a',
                'date_birth' => '2023-11-28',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone1' => 'Lorem ipsum d',
                'phone2' => 'Lorem ipsum d',
                'cellphone' => 'Lorem ipsum d',
                'celphone2' => 'Lorem ipsum d',
                'street' => 'Lorem ipsum dolor sit amet',
                'number' => 'Lorem ip',
                'neighborhood' => 'Lorem ipsum dolor sit amet',
                'cep' => 'Lorem ipsum d',
                'complement' => 'Lorem ipsum dolor sit amet',
                'photo' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
