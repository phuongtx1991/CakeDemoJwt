<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MtbWelfare Controller
 *
 * @property \App\Model\Table\MtbWelfareTable $MtbWelfare
 *
 * @method \App\Model\Entity\MtbWelfare[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MtbWelfareController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mtbWelfare = $this->paginate($this->MtbWelfare);

        $this->set(compact('mtbWelfare'));
    }

    /**
     * View method
     *
     * @param string|null $id Mtb Welfare id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mtbWelfare = $this->MtbWelfare->get($id, [
            'contain' => []
        ]);

        $this->set('mtbWelfare', $mtbWelfare);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mtbWelfare = $this->MtbWelfare->newEntity();
        if ($this->request->is('post')) {
            $mtbWelfare = $this->MtbWelfare->patchEntity($mtbWelfare, $this->request->getData());
            if ($this->MtbWelfare->save($mtbWelfare)) {
                $this->Flash->success(__('The mtb welfare has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb welfare could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbWelfare'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mtb Welfare id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mtbWelfare = $this->MtbWelfare->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mtbWelfare = $this->MtbWelfare->patchEntity($mtbWelfare, $this->request->getData());
            if ($this->MtbWelfare->save($mtbWelfare)) {
                $this->Flash->success(__('The mtb welfare has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb welfare could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbWelfare'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mtb Welfare id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mtbWelfare = $this->MtbWelfare->get($id);
        if ($this->MtbWelfare->delete($mtbWelfare)) {
            $this->Flash->success(__('The mtb welfare has been deleted.'));
        } else {
            $this->Flash->error(__('The mtb welfare could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
