<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbCustomerCareer Controller
 *
 * @property \App\Model\Table\DtbCustomerCareerTable $DtbCustomerCareer
 *
 * @method \App\Model\Entity\DtbCustomerCareer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbCustomerCareerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers']
        ];
        $dtbCustomerCareer = $this->paginate($this->DtbCustomerCareer);

        $this->set(compact('dtbCustomerCareer'));
    }

    /**
     * View method
     *
     * @param string|null $id Dtb Customer Career id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtbCustomerCareer = $this->DtbCustomerCareer->get($id, [
            'contain' => ['Customers']
        ]);

        $this->set('dtbCustomerCareer', $dtbCustomerCareer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtbCustomerCareer = $this->DtbCustomerCareer->newEntity();
        if ($this->request->is('post')) {
            $dtbCustomerCareer = $this->DtbCustomerCareer->patchEntity($dtbCustomerCareer, $this->request->getData());
            if ($this->DtbCustomerCareer->save($dtbCustomerCareer)) {
                $this->Flash->success(__('The dtb customer career has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb customer career could not be saved. Please, try again.'));
        }
        $customers = $this->DtbCustomerCareer->Customers->find('list', ['limit' => 200]);
        $this->set(compact('dtbCustomerCareer', 'customers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dtb Customer Career id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtbCustomerCareer = $this->DtbCustomerCareer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtbCustomerCareer = $this->DtbCustomerCareer->patchEntity($dtbCustomerCareer, $this->request->getData());
            if ($this->DtbCustomerCareer->save($dtbCustomerCareer)) {
                $this->Flash->success(__('The dtb customer career has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb customer career could not be saved. Please, try again.'));
        }
        $customers = $this->DtbCustomerCareer->Customers->find('list', ['limit' => 200]);
        $this->set(compact('dtbCustomerCareer', 'customers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dtb Customer Career id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtbCustomerCareer = $this->DtbCustomerCareer->get($id);
        if ($this->DtbCustomerCareer->delete($dtbCustomerCareer)) {
            $this->Flash->success(__('The dtb customer career has been deleted.'));
        } else {
            $this->Flash->error(__('The dtb customer career could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
