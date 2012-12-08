<?php 
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel
{
  // app/Model/User.php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
  /**
     * O nome é único?
     *
     * Verifica se $name é único na base de dados
     * Caso $id seja informado, ele será usado na cláusula where
     * para selecionar os registros diferentes a este $id.
     *
     * @param  string  $name
     * @param  integer $id [Opcional]
     * @return boolean
     */
    public function isUniqueName($name, $id = null)
    {
        $select = $this->select();
        $select->from($this->_name, 'COUNT(*) AS num')
               ->where('name = ?', $name);
 
        if ( $id != null )
        {
            $select->where('id != ?', (int) $id);
        }
 
        return ($this->fetchRow($select)->num == 0) ? true : false;
    }
/**
     * O email é único?
     *
     * Verifica se $email é único na base de dados
     * Caso $id seja informado, ele será usado na cláusula where
     * para selecionar os registros diferentes a este $id.
     *
     * @param  string  $email
     * @param  integer $id [Opcional]
     * @return boolean
     */
    public function isUniqueEmail($email, $id = null)
    {
        $select = $this->select();
        $select->from($this->_name, 'COUNT(*) AS num')
               ->where('email = ?', $email);
 
        if ( $id != null )
        {
            $select->where('id != ?', (int) $id);
        }
 
        return ($this->fetchRow($select)->num == 0) ? true : false;
    }
 

}
// ...

public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}

// ...
  public $name = 'User';
  public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}

  public $validate = array(
    'username' => array(
      array(
        'rule' => array('notEmpty'),
        'message' => 'A username is required.'
        ),
      array(
        'rule' => 'isUnique',
        'message' => 'This user already exists.'
        )
      ),
    'email' => array(
      array(
        'rule' => array('email'),
        'message' => 'Invalid email.'
        ),
      array(
        'rule' => 'isUnique',
        'message' => 'This user already exists.'
        )
      ),    
    'password' => array(
      'required' => array(
        'rule' => array('notEmpty'),
        'message' => 'A password is required',
        'on' => 'create'
        )
      ),
    'role' => array(
      'valid' => array(
        'rule' => array('inList', array('admin', 'author')),
        'message' => 'Please enter a valid role',
        'allowEmpty' => false
        )
      )
    );   

  public function generateHashChangePassword()
  {
    $salt = Configure::read('Security.salt');
    $salt_v2 = Configure::read('Security.cipherSeed');
    $rand = mt_rand(1,999999999);
    $rand_v2 = mt_rand(1,999999999);

    $hash = hash('sha256',$salt.$rand.$salt_v2.$rand_v2);

    return $hash;
  }   
}
?>