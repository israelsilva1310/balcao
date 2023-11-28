<?php
declare(strict_types=1);

namespace App\Controller\Candidatos;

use App\Controller\AppController;
use Cake\ORM\Entity;

class CurriculosController extends AppController
{
    public function index()
    {
        $query = $this->Curriculos->find();
        $curriculos = $this->paginate($query);

        $this->set(compact('curriculos'));
    }

    public function view($id = null)
    {
        $curriculo = $this->Curriculos->get($id, contain: ['Experiencias']);
        $this->set(compact('curriculo'));
    }

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
