<?php
declare(strict_types=1);

namespace App\Controller\Candidatos;

use App\Controller\AppController;

/**
 * Curriculos Controller
 *
 * @property \App\Model\Table\CurriculosTable $Curriculos
 */
class CurriculosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Curriculos->find();
        $curriculos = $this->paginate($query);

        $this->set(compact('curriculos'));
    }

    /**
     * View method
     *
     * @param string|null $id Curriculo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $curriculo = $this->Curriculos->get($id, contain: ['Experiencias']);
        $this->set(compact('curriculo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $curriculo = $this->Curriculos->newEmptyEntity();
        if ($this->request->is('post')) {
            $curriculo = $this->Curriculos->patchEntity($curriculo, $this->request->getData());
            if ($this->Curriculos->save($curriculo)) {
                $this->Flash->success(__('The curriculo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The curriculo could not be saved. Please, try again.'));
        }
        $this->set(compact('curriculo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Curriculo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $curriculo = $this->Curriculos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curriculo = $this->Curriculos->patchEntity($curriculo, $this->request->getData());
            if ($this->Curriculos->save($curriculo)) {
                $this->Flash->success(__('The curriculo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The curriculo could not be saved. Please, try again.'));
        }
        $this->set(compact('curriculo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Curriculo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $curriculo = $this->Curriculos->get($id);
        if ($this->Curriculos->delete($curriculo)) {
            $this->Flash->success(__('The curriculo has been deleted.'));
        } else {
            $this->Flash->error(__('The curriculo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
