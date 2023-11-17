<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Vagas Controller
 *
 * @property \App\Model\Table\VagasTable $Vagas
 */
class VagasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Vagas->find()
            ->contain(['Empresas']);
        $vagas = $this->paginate($query);

        $this->set(compact('vagas'));
    }

    /**
     * View method
     *
     * @param string|null $id Vaga id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vaga = $this->Vagas->get($id, contain: ['Empresas']);
        $this->set(compact('vaga'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vaga = $this->Vagas->newEmptyEntity();
        if ($this->request->is('post')) {
            $vaga = $this->Vagas->patchEntity($vaga, $this->request->getData());
            if ($this->Vagas->save($vaga)) {
                $this->Flash->success(__('The vaga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaga could not be saved. Please, try again.'));
        }
        $empresas = $this->Vagas->Empresas->find('list', limit: 200)->all();
        $this->set(compact('vaga', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vaga id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vaga = $this->Vagas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vaga = $this->Vagas->patchEntity($vaga, $this->request->getData());
            if ($this->Vagas->save($vaga)) {
                $this->Flash->success(__('The vaga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaga could not be saved. Please, try again.'));
        }
        $empresas = $this->Vagas->Empresas->find('list', limit: 200)->all();
        $this->set(compact('vaga', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vaga id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vaga = $this->Vagas->get($id);
        if ($this->Vagas->delete($vaga)) {
            $this->Flash->success(__('The vaga has been deleted.'));
        } else {
            $this->Flash->error(__('The vaga could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
