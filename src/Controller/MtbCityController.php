<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MtbCity Controller
 *
 * @property \App\Model\Table\MtbCityTable $MtbCity
 *
 * @method \App\Model\Entity\MtbCity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MtbCityController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Regions']
        ];
        $mtbCity = $this->paginate($this->MtbCity);

        $this->set(compact('mtbCity'));
    }

    /**
     * View method
     *
     * @param string|null $id Mtb City id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mtbCity = $this->MtbCity->get($id, [
            'contain' => ['Regions']
        ]);

        $this->set('mtbCity', $mtbCity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mtbCity = $this->MtbCity->newEntity();
        if ($this->request->is('post')) {
            $mtbCity = $this->MtbCity->patchEntity($mtbCity, $this->request->getData());
            if ($this->MtbCity->save($mtbCity)) {
                $this->Flash->success(__('The mtb city has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb city could not be saved. Please, try again.'));
        }
        $regions = $this->MtbCity->Regions->find('list', ['limit' => 200]);
        $this->set(compact('mtbCity', 'regions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mtb City id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mtbCity = $this->MtbCity->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mtbCity = $this->MtbCity->patchEntity($mtbCity, $this->request->getData());
            if ($this->MtbCity->save($mtbCity)) {
                $this->Flash->success(__('The mtb city has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb city could not be saved. Please, try again.'));
        }
        $regions = $this->MtbCity->Regions->find('list', ['limit' => 200]);
        $this->set(compact('mtbCity', 'regions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mtb City id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mtbCity = $this->MtbCity->get($id);
        if ($this->MtbCity->delete($mtbCity)) {
            $this->Flash->success(__('The mtb city has been deleted.'));
        } else {
            $this->Flash->error(__('The mtb city could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
