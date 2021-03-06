<?php
namespace App\Model\Table;

use App\Model\Entity\Sign;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Signs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Proposals
 */
class SignsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('signs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Proposals', [
            'foreignKey' => 'proposal_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('domainid', 'create')
            ->notEmpty('domainid');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('hash', 'create')
            ->notEmpty('hash');

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['proposal_id'], 'Proposals'));
        return $rules;
    }
}
