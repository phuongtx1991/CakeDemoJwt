<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MtbPosition Controller
 *
 * @property \App\Model\Table\MtbPositionTable $MtbPosition
 *
 * @method \App\Model\Entity\MtbPosition[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MtbPositionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mtbPosition = $this->paginate($this->MtbPosition);

        $this->set(compact('mtbPosition'));
    }

    /**
     * View method
     *
     * @param string|null $id Mtb Position id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mtbPosition = $this->MtbPosition->get($id, [
            'contain' => []
        ]);

        $this->set('mtbPosition', $mtbPosition);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mtbPosition = $this->MtbPosition->newEntity();
        if ($this->request->is('post')) {
            $mtbPosition = $this->MtbPosition->patchEntity($mtbPosition, $this->request->getData());
            if ($this->MtbPosition->save($mtbPosition)) {
                $this->Flash->success(__('The mtb position has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb position could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbPosition'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mtb Position id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mtbPosition = $this->MtbPosition->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mtbPosition = $this->MtbPosition->patchEntity($mtbPosition, $this->request->getData());
            if ($this->MtbPosition->save($mtbPosition)) {
                $this->Flash->success(__('The mtb position has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb position could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbPosition'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mtb Position id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mtbPosition = $this->MtbPosition->get($id);
        if ($this->MtbPosition->delete($mtbPosition)) {
            $this->Flash->success(__('The mtb position has been deleted.'));
        } else {
            $this->Flash->error(__('The mtb position could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
