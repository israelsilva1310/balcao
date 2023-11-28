<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pessoas Model
 *
 * @property \App\Model\Table\MunicipiosTable&\Cake\ORM\Association\BelongsTo $Municipios
 *
 * @method \App\Model\Entity\Pessoa newEmptyEntity()
 * @method \App\Model\Entity\Pessoa newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Pessoa> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Pessoa findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Pessoa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Pessoa> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Pessoa saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Pessoa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pessoa>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pessoa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pessoa> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pessoa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pessoa>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pessoa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pessoa> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PessoasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('pessoas');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Municipios', [
            'foreignKey' => 'municipio_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('municipio_id')
            ->allowEmptyString('municipio_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 255)
            ->allowEmptyString('lastname');

        $validator
            ->scalar('document')
            ->maxLength('document', 25)
            ->allowEmptyString('document');

        $validator
            ->date('date_birth')
            ->allowEmptyDate('date_birth');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('phone1')
            ->maxLength('phone1', 15)
            ->allowEmptyString('phone1');

        $validator
            ->scalar('phone2')
            ->maxLength('phone2', 15)
            ->allowEmptyString('phone2');

        $validator
            ->scalar('cellphone')
            ->maxLength('cellphone', 15)
            ->allowEmptyString('cellphone');

        $validator
            ->scalar('celphone2')
            ->maxLength('celphone2', 15)
            ->allowEmptyString('celphone2');

        $validator
            ->scalar('street')
            ->maxLength('street', 255)
            ->allowEmptyString('street');

        $validator
            ->scalar('number')
            ->maxLength('number', 10)
            ->allowEmptyString('number');

        $validator
            ->scalar('neighborhood')
            ->maxLength('neighborhood', 255)
            ->allowEmptyString('neighborhood');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 15)
            ->allowEmptyString('cep');

        $validator
            ->scalar('complement')
            ->maxLength('complement', 50)
            ->allowEmptyString('complement');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('municipio_id', 'Municipios'), ['errorField' => 'municipio_id']);

        return $rules;
    }
}
