<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbCustomer Controller
 *
 * @property \App\Model\Table\DtbCustomerTable $DtbCustomer
 *
 * @method \App\Model\Entity\DtbCustomer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbCustomerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries']
        ];
        $dtbCustomer = $this->paginate($this->DtbCustomer);

        $this->set(compact('dtbCustomer'));
    }

    /**
     * View method
     *
     * @param string|null $id Dtb Customer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtbCustomer = $this->DtbCustomer->get($id, [
            'contain' => ['Countries']
        ]);

        $this->set('dtbCustomer', $dtbCustomer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtbCustomer = $this->DtbCustomer->newEntity();
        if ($this->request->is('post')) {
            $dtbCustomer = $this->DtbCustomer->patchEntity($dtbCustomer, $this->request->getData());
            if ($this->DtbCustomer->save($dtbCustomer)) {
                $this->Flash->success(__('The dtb customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb customer could not be saved. Please, try again.'));
        }
        $countries = $this->DtbCustomer->Countries->find('list', ['limit' => 200]);
        $this->set(compact('dtbCustomer', 'countries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dtb Customer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtbCustomer = $this->DtbCustomer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtbCustomer = $this->DtbCustomer->patchEntity($dtbCustomer, $this->request->getData());
            if ($this->DtbCustomer->save($dtbCustomer)) {
                $this->Flash->success(__('The dtb customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb customer could not be saved. Please, try again.'));
        }
        $countries = $this->DtbCustomer->Countries->find('list', ['limit' => 200]);
        $this->set(compact('dtbCustomer', 'countries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dtb Customer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtbCustomer = $this->DtbCustomer->get($id);
        if ($this->DtbCustomer->delete($dtbCustomer)) {
            $this->Flash->success(__('The dtb customer has been deleted.'));
        } else {
            $this->Flash->error(__('The dtb customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
