<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MtbCountry Controller
 *
 * @property \App\Model\Table\MtbCountryTable $MtbCountry
 *
 * @method \App\Model\Entity\MtbCountry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MtbCountryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mtbCountry = $this->paginate($this->MtbCountry);

        $this->set(compact('mtbCountry'));
    }

    /**
     * View method
     *
     * @param string|null $id Mtb Country id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mtbCountry = $this->MtbCountry->get($id, [
            'contain' => []
        ]);

        $this->set('mtbCountry', $mtbCountry);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mtbCountry = $this->MtbCountry->newEntity();
        if ($this->request->is('post')) {
            $mtbCountry = $this->MtbCountry->patchEntity($mtbCountry, $this->request->getData());
            if ($this->MtbCountry->save($mtbCountry)) {
                $this->Flash->success(__('The mtb country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb country could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbCountry'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mtb Country id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mtbCountry = $this->MtbCountry->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mtbCountry = $this->MtbCountry->patchEntity($mtbCountry, $this->request->getData());
            if ($this->MtbCountry->save($mtbCountry)) {
                $this->Flash->success(__('The mtb country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb country could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbCountry'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mtb Country id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mtbCountry = $this->MtbCountry->get($id);
        if ($this->MtbCountry->delete($mtbCountry)) {
            $this->Flash->success(__('The mtb country has been deleted.'));
        } else {
            $this->Flash->error(__('The mtb country could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
