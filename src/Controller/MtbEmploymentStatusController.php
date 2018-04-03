<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MtbEmploymentStatus Controller
 *
 * @property \App\Model\Table\MtbEmploymentStatusTable $MtbEmploymentStatus
 *
 * @method \App\Model\Entity\MtbEmploymentStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MtbEmploymentStatusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mtbEmploymentStatus = $this->paginate($this->MtbEmploymentStatus);

        $this->set(compact('mtbEmploymentStatus'));
    }

    /**
     * View method
     *
     * @param string|null $id Mtb Employment Status id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mtbEmploymentStatus = $this->MtbEmploymentStatus->get($id, [
            'contain' => []
        ]);

        $this->set('mtbEmploymentStatus', $mtbEmploymentStatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mtbEmploymentStatus = $this->MtbEmploymentStatus->newEntity();
        if ($this->request->is('post')) {
            $mtbEmploymentStatus = $this->MtbEmploymentStatus->patchEntity($mtbEmploymentStatus, $this->request->getData());
            if ($this->MtbEmploymentStatus->save($mtbEmploymentStatus)) {
                $this->Flash->success(__('The mtb employment status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb employment status could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbEmploymentStatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mtb Employment Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mtbEmploymentStatus = $this->MtbEmploymentStatus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mtbEmploymentStatus = $this->MtbEmploymentStatus->patchEntity($mtbEmploymentStatus, $this->request->getData());
            if ($this->MtbEmploymentStatus->save($mtbEmploymentStatus)) {
                $this->Flash->success(__('The mtb employment status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb employment status could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbEmploymentStatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mtb Employment Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mtbEmploymentStatus = $this->MtbEmploymentStatus->get($id);
        if ($this->MtbEmploymentStatus->delete($mtbEmploymentStatus)) {
            $this->Flash->success(__('The mtb employment status has been deleted.'));
        } else {
            $this->Flash->error(__('The mtb employment status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
