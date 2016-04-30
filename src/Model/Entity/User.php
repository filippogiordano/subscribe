<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
/**
 * User Entity.
 *
 * @property string $username
 * @property string $password
 * @property string $role
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $nome
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Proposal[] $proposals
 * @property \App\Model\Entity\Sign[] $signs
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        //'username' => false,
    ];
    
    // Make all fields mass assignable except for primary key field "id".
    /*protected $_accessible = [
    		'*' => true,
    		'id' => false
    ];*/
    
    // ...
    
    protected function _setPassword($password)
    {
    	return (new DefaultPasswordHasher)->hash($password);
    }
    

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    /*protected $_hidden = [
        'password'
    ];*/
}
