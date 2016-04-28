<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Signs Controller
 *
 * @property \App\Model\Table\SignsTable $Signs
 */
class SignsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Proposals']
        ];
        $signs = $this->paginate($this->Signs);

        $this->set(compact('signs'));
        $this->set('_serialize', ['signs']);
    }

    /**
     * View method
     *
     * @param string|null $id Sign id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sign = $this->Signs->get($id, [
            'contain' => ['Proposals']
        ]);

        $this->set('sign', $sign);
        $this->set('_serialize', ['sign']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sign = $this->Signs->newEntity();
        if ($this->request->is('post')) {
            $sign = $this->Signs->patchEntity($sign, $this->request->data);
            if ($this->Signs->save($sign)) {
                $this->Flash->success(__('The sign has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sign could not be saved. Please, try again.'));
            }
        }
        $proposals = $this->Signs->Proposals->find('list', ['limit' => 200]);
        $this->set(compact('sign', 'proposals'));
        $this->set('_serialize', ['sign']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sign id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sign = $this->Signs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sign = $this->Signs->patchEntity($sign, $this->request->data);
            if ($this->Signs->save($sign)) {
                $this->Flash->success(__('The sign has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sign could not be saved. Please, try again.'));
            }
        }
        $proposals = $this->Signs->Proposals->find('list', ['limit' => 200]);
        $this->set(compact('sign', 'proposals'));
        $this->set('_serialize', ['sign']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sign id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sign = $this->Signs->get($id);
        if ($this->Signs->delete($sign)) {
            $this->Flash->success(__('The sign has been deleted.'));
        } else {
            $this->Flash->error(__('The sign could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
