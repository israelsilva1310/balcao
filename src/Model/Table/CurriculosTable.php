<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Curriculos Model
 *
 * @property \App\Model\Table\ExperienciasTable&\Cake\ORM\Association\HasMany $Experiencias
 *
 * @method \App\Model\Entity\Curriculo newEmptyEntity()
 * @method \App\Model\Entity\Curriculo newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Curriculo> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Curriculo get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Curriculo findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Curriculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Curriculo> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Curriculo|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Curriculo saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Curriculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Curriculo>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Curriculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Curriculo> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Curriculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Curriculo>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Curriculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Curriculo> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CurriculosTable extends Table
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

        $this->setTable('curriculos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Experiencias', [
            'foreignKey' => 'curriculo_id',
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
            ->integer('candidate_id')
            ->allowEmptyString('candidate_id');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        $validator
            ->date('dt_nasc')
            ->allowEmptyDate('dt_nasc');

        $validator
            ->scalar('estado_civil')
            ->maxLength('estado_civil', 50)
            ->allowEmptyString('estado_civil');

        $validator
            ->boolean('cnh_a')
            ->allowEmptyString('cnh_a');

        $validator
            ->scalar('cnh_outros')
            ->maxLength('cnh_outros', 1)
            ->allowEmptyString('cnh_outros');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 15)
            ->allowEmptyString('celular');

        $validator
            ->scalar('contato_tipo')
            ->maxLength('contato_tipo', 30)
            ->allowEmptyString('contato_tipo');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 15)
            ->allowEmptyString('cep');

        $validator
            ->scalar('logradouro')
            ->maxLength('logradouro', 255)
            ->allowEmptyString('logradouro');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 10)
            ->allowEmptyString('numero');

        $validator
            ->scalar('complemento')
            ->maxLength('complemento', 100)
            ->allowEmptyString('complemento');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 255)
            ->allowEmptyString('bairro');

        $validator
            ->scalar('municipio')
            ->maxLength('municipio', 255)
            ->allowEmptyString('municipio');

        $validator
            ->scalar('uf')
            ->maxLength('uf', 2)
            ->allowEmptyString('uf');

        $validator
            ->scalar('grau_instrucao')
            ->maxLength('grau_instrucao', 100)
            ->allowEmptyString('grau_instrucao');

        $validator
            ->scalar('curso_formacao')
            ->maxLength('curso_formacao', 255)
            ->allowEmptyString('curso_formacao');

        $validator
            ->scalar('instituicao_ensino')
            ->maxLength('instituicao_ensino', 255)
            ->allowEmptyString('instituicao_ensino');

        $validator
            ->scalar('inicio_formacao')
            ->allowEmptyString('inicio_formacao');

        $validator
            ->scalar('fim_formacao')
            ->allowEmptyString('fim_formacao');

        $validator
            ->scalar('outros_cursos_formacao')
            ->maxLength('outros_cursos_formacao', 255)
            ->allowEmptyString('outros_cursos_formacao');

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
            ->maxLength('informatica', 100)
            ->allowEmptyString('informatica');

        $validator
            ->scalar('office')
            ->maxLength('office', 100)
            ->allowEmptyString('office');

        $validator
            ->scalar('outras_habilidades')
            ->maxLength('outras_habilidades', 255)
            ->allowEmptyString('outras_habilidades');

        $validator
            ->scalar('obj_area_atuation')
            ->maxLength('obj_area_atuation', 255)
            ->allowEmptyString('obj_area_atuation');

        $validator
            ->scalar('Conhecimento_geral')
            ->maxLength('Conhecimento_geral', 255)
            ->allowEmptyString('Conhecimento_geral');

        $validator
            ->scalar('conhecimento_informatica')
            ->maxLength('conhecimento_informatica', 255)
            ->allowEmptyString('conhecimento_informatica');

        return $validator;
    }
}
