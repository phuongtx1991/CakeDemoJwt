<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MtbPref Controller
 *
 * @property \App\Model\Table\MtbPrefTable $MtbPref
 *
 * @method \App\Model\Entity\MtbPref[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MtbPrefController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Objects']
        ];
        $mtbPref = $this->paginate($this->MtbPref);

        $this->set(compact('mtbPref'));
    }

    /**
     * View method
     *
     * @param string|null $id Mtb Pref id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mtbPref = $this->MtbPref->get($id, [
            'contain' => ['Objects']
        ]);

        $this->set('mtbPref', $mtbPref);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mtbPref = $this->MtbPref->newEntity();
        if ($this->request->is('post')) {
            $mtbPref = $this->MtbPref->patchEntity($mtbPref, $this->request->getData());
            if ($this->MtbPref->save($mtbPref)) {
                $this->Flash->success(__('The mtb pref has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb pref could not be saved. Please, try again.'));
        }
        $objects = $this->MtbPref->Objects->find('list', ['limit' => 200]);
        $this->set(compact('mtbPref', 'objects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mtb Pref id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mtbPref = $this->MtbPref->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mtbPref = $this->MtbPref->patchEntity($mtbPref, $this->request->getData());
            if ($this->MtbPref->save($mtbPref)) {
                $this->Flash->success(__('The mtb pref has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb pref could not be saved. Please, try again.'));
        }
        $objects = $this->MtbPref->Objects->find('list', ['limit' => 200]);
        $this->set(compact('mtbPref', 'objects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mtb Pref id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mtbPref = $this->MtbPref->get($id);
        if ($this->MtbPref->delete($mtbPref)) {
            $this->Flash->success(__('The mtb pref has been deleted.'));
        } else {
            $this->Flash->error(__('The mtb pref could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
