<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * User Controller
 *
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     *
     */
    public function index() {
        //to retrieve all users, need just one line
        $users = $this->set('users', $this->Users->find('all'));
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add(){
 
        $user = $this->Users->newEntity();
        //check if it is a post request
        //this way, we won't have to do if(!empty($this->request->data))
        if ($this->request->is('post')){
            $user = $this->Users->patchEntity($user,$this->request->getData());
            //save new user
            if ($this->Users->save($user)){
             
                //set flash to user screen
                $this->Flash->success('User was added.');
                //redirect to user list
                $this->redirect(array('action' => 'index'));
                 
            }else{
                //if save failed
                $this->Flash->error('Unable to add user. Please, try again.');
                 
            }
        }
        $this->set('post',$user);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit() {
        //get the id of the user to be edited
        $id = $this->request->params['pass'][0];
         
        //set the user id
        $this->Users->id = $id;
        //check if a user with this id really exists
        if( $this->Users->exists($id) ){
         
            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
                //save user
                if( $this->Users->save( $this->request->data ) ){
                 
                    //set to user's screen
                    $this->Session->setFlash('User was edited.');
                     
                    //redirect to user's list
                    $this->redirect(array('action' => 'index'));
                     
                }else{
                    $this->Session->setFlash('Unable to edit user. Please, try again.');
                }
                 
            }else{
             
                //we will read the user data
                //so it will fill up our html form automatically
                $user = $this->Users->get($id);
                $this->set('user',$user);
            }
             
        }else{
            //if not found, we will tell the user that user does not exist
            $this->Session->setFlash('The user you are trying to edit does not exist.');
            $this->redirect(array('action' => 'index'));
                 
            //or, since it we are using php5, we can throw an exception
            //it looks like this
            //throw new NotFoundException('The user you are trying to edit does not exist.');
        }
         
     
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete() {
        $id = $this->request->params['pass'][0];
         
        //the request must be a post request 
        //that's why we use postLink method on our view for deleting user
        if( $this->request->is('get') ){
         
            $this->Session->setFlash('Delete method is not allowed.');
            $this->redirect(array('action' => 'index'));
             
            //since we are using php5, we can also throw an exception like:
            //throw new MethodNotAllowedException();
        }else{
         
            if( !$id ) {
                $this->Session->setFlash('Invalid id for user');
                $this->redirect(array('action'=>'index'));
                 
            }else{
                //delete user
                if( $this->User->delete( $id ) ){
                    //set to screen
                    $this->Session->setFlash('User was deleted.');
                    //redirect to users's list
                    $this->redirect(array('action'=>'index'));
                     
                }else{  
                    //if unable to delete
                    $this->Session->setFlash('Unable to delete user.');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
    }
}
