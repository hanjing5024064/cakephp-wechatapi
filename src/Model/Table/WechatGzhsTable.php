<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WechatGzhs Model
 *
 * @property \App\Model\Table\UserWechatOpenidsTable&\Cake\ORM\Association\HasMany $UserWechatOpenids
 *
 * @method \App\Model\Entity\WechatGzh newEmptyEntity()
 * @method \App\Model\Entity\WechatGzh newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\WechatGzh[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WechatGzh get($primaryKey, $options = [])
 * @method \App\Model\Entity\WechatGzh findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\WechatGzh patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WechatGzh[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\WechatGzh|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WechatGzh saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WechatGzh[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\WechatGzh[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\WechatGzh[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\WechatGzh[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class WechatGzhsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('wechat_gzhs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('UserWechatOpenids', [
            'foreignKey' => 'wechat_gzh_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('appid')
            ->maxLength('appid', 255)
            ->requirePresence('appid', 'create')
            ->notEmptyString('appid');

        $validator
            ->scalar('secret')
            ->maxLength('secret', 255)
            ->requirePresence('secret', 'create')
            ->notEmptyString('secret');

        $validator
            ->scalar('token')
            ->maxLength('token', 255)
            ->requirePresence('token', 'create')
            ->notEmptyString('token');

        $validator
            ->scalar('oauth_scopes')
            ->maxLength('oauth_scopes', 255)
            ->allowEmptyString('oauth_scopes');

        $validator
            ->scalar('oauth_callback')
            ->maxLength('oauth_callback', 255)
            ->allowEmptyString('oauth_callback');

        $validator
            ->scalar('payment')
            ->allowEmptyString('payment');

        $validator
            ->scalar('menu')
            ->allowEmptyString('menu');

        $validator
            ->scalar('template')
            ->allowEmptyString('template');

        $validator
            ->scalar('subscribemsg')
            ->allowEmptyString('subscribemsg');

        return $validator;
    }
}
