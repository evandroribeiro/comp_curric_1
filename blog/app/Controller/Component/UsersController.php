<?php
/* application/controllers/UsersController.php */
 
class UsersController extends Zend_Controller_Action

{
    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}
 ..............
 
    public function editAction()
    {
        $user_id = (int) $this->_getParam('id');
        $result  = $this->_model->find($user_id);
        if ( count($result) == 0 )
        {
            $this->view->message = "Usu&aacute;rio n&atilde;o encontrado!";
        }
 
        $this->view->user = $result->current();
    }
    if ( $this->getRequest()->isPost() )
    {
        $data = $this->getRequest()->getPost();
 
        if ( ! $this->_model->isUniqueName($data['name'], $data['id']) )
        {
            $this->view->message = sprintf('J&aacute; exite um usu&aacute;rio
                cadastrado com o nome "%s"', $data['name']);
 
            return false;
        }
 
        if ( ! $this->_model->isUniqueEmail($data['email'], $data['id']) )
        {
            $this->view->message = sprintf('J&aacute; exite um usu&aacute;rio
                cadastrado com o email "%s"', $data['email']);
 
            return false;
        }
 
        $this->_update($data);
        $this->_redirect('/users');
    }
 
}
 
/**
 * Executa a atualização do usuário de acordo com os parâmetros
 *
 * @param  array   $data Dados para atualizar
 * @return integer       Numero de linhas atualizadas
 */
private function _update(array $data)
{
    $where = $this->_model->getAdapter()->quoteInto('id = ?', (int) $data['id']);
    $data = array(
        'name'  => $data['name'],
        'email' => $data['email']
    );
 
    return $this->_model->update($data, $where);
}