<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vagas Model
 *
 * @property \App\Model\Table\EmpresasTable&\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Vaga newEmptyEntity()
 * @method \App\Model\Entity\Vaga newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Vaga> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vaga get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Vaga findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Vaga patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Vaga> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vaga|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Vaga saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Vaga>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Vaga>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Vaga>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Vaga> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Vaga>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Vaga>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Vaga>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Vaga> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VagasTable extends Table
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

        $this->setTable('vagas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
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
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->allowEmptyString('titulo');

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        $validator
            ->integer('num_vagas')
            ->allowEmptyString('num_vagas');

        $validator
            ->boolean('vale_alimentacao')
            ->allowEmptyString('vale_alimentacao');

        $validator
            ->boolean('vale_refeicao')
            ->allowEmptyString('vale_refeicao');

        $validator
            ->boolean('vale_combustivel')
            ->allowEmptyString('vale_combustivel');

        $validator
            ->boolean('seguro_vida')
            ->allowEmptyString('seguro_vida');

        $validator
            ->scalar('office')
            ->maxLength('office', 255)
            ->allowEmptyString('office');

        $validator
            ->integer('profissional_area_id')
            ->allowEmptyString('profissional_area_id');

        $validator
            ->boolean('cnh_a')
            ->allowEmptyString('cnh_a');

        $validator
            ->scalar('escolaridade')
            ->maxLength('escolaridade', 100)
            ->allowEmptyString('escolaridade');

        $validator
            ->scalar('ingles')
            ->maxLength('ingles', 100)
            ->allowEmptyString('ingles');

        $validator
            ->scalar('espanhol')
            ->maxLength('espanhol', 100)
            ->allowEmptyString('espanhol');

        $validator
            ->scalar('informatica')
            ->maxLength('informatica', 255)
            ->allowEmptyString('informatica');

        $validator
            ->scalar('outros')
            ->allowEmptyString('outros');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 255)
            ->allowEmptyString('slug');

        $validator
            ->boolean('publicar')
            ->allowEmptyString('publicar');

        $validator
            ->integer('empresa_id')
            ->allowEmptyString('empresa_id');

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
        $rules->add($rules->existsIn('empresa_id', 'Empresas'), ['errorField' => 'empresa_id']);

        return $rules;
    }
}
