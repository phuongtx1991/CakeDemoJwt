<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MtbProcess Controller
 *
 * @property \App\Model\Table\MtbProcessTable $MtbProcess
 *
 * @method \App\Model\Entity\MtbProces[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MtbProcessController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mtbProcess = $this->paginate($this->MtbProcess);

        $this->set(compact('mtbProcess'));
    }

    /**
     * View method
     *
     * @param string|null $id Mtb Proces id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mtbProces = $this->MtbProcess->get($id, [
            'contain' => []
        ]);

        $this->set('mtbProces', $mtbProces);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mtbProces = $this->MtbProcess->newEntity();
        if ($this->request->is('post')) {
            $mtbProces = $this->MtbProcess->patchEntity($mtbProces, $this->request->getData());
            if ($this->MtbProcess->save($mtbProces)) {
                $this->Flash->success(__('The mtb proces has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb proces could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbProces'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mtb Proces id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mtbProces = $this->MtbProcess->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mtbProces = $this->MtbProcess->patchEntity($mtbProces, $this->request->getData());
            if ($this->MtbProcess->save($mtbProces)) {
                $this->Flash->success(__('The mtb proces has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb proces could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbProces'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mtb Proces id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mtbProces = $this->MtbProcess->get($id);
        if ($this->MtbProcess->delete($mtbProces)) {
            $this->Flash->success(__('The mtb proces has been deleted.'));
        } else {
            $this->Flash->error(__('The mtb proces could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
