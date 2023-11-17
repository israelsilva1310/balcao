<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VagasFixture
 */
class VagasFixture extends TestFixture
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
                'titulo' => 'Lorem ipsum dolor sit amet',
                'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'num_vagas' => 1,
                'vale_alimentacao' => 1,
                'vale_refeicao' => 1,
                'vale_combustivel' => 1,
                'seguro_vida' => 1,
                'office' => 'Lorem ipsum dolor sit amet',
                'profissional_area_id' => 1,
                'cnh_a' => 1,
                'escolaridade' => 'Lorem ipsum dolor sit amet',
                'ingles' => 'Lorem ipsum dolor sit amet',
                'espanhol' => 'Lorem ipsum dolor sit amet',
                'informatica' => 'Lorem ipsum dolor sit amet',
                'outros' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'slug' => 'Lorem ipsum dolor sit amet',
                'publicar' => 1,
                'empresa_id' => 1,
                'created' => '2023-11-17 18:48:56',
                'modified' => 1700246936,
            ],
        ];
        parent::init();
    }
}
