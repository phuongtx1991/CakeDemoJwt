<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MtbRegion Controller
 *
 * @property \App\Model\Table\MtbRegionTable $MtbRegion
 *
 * @method \App\Model\Entity\MtbRegion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MtbRegionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mtbRegion = $this->paginate($this->MtbRegion);

        $this->set(compact('mtbRegion'));
    }

    /**
     * View method
     *
     * @param string|null $id Mtb Region id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mtbRegion = $this->MtbRegion->get($id, [
            'contain' => []
        ]);

        $this->set('mtbRegion', $mtbRegion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mtbRegion = $this->MtbRegion->newEntity();
        if ($this->request->is('post')) {
            $mtbRegion = $this->MtbRegion->patchEntity($mtbRegion, $this->request->getData());
            if ($this->MtbRegion->save($mtbRegion)) {
                $this->Flash->success(__('The mtb region has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb region could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbRegion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mtb Region id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mtbRegion = $this->MtbRegion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mtbRegion = $this->MtbRegion->patchEntity($mtbRegion, $this->request->getData());
            if ($this->MtbRegion->save($mtbRegion)) {
                $this->Flash->success(__('The mtb region has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb region could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbRegion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mtb Region id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mtbRegion = $this->MtbRegion->get($id);
        if ($this->MtbRegion->delete($mtbRegion)) {
            $this->Flash->success(__('The mtb region has been deleted.'));
        } else {
            $this->Flash->error(__('The mtb region could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
