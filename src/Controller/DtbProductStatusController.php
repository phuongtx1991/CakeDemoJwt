<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbProductStatus Controller
 *
 * @property \App\Model\Table\DtbProductStatusTable $DtbProductStatus
 *
 * @method \App\Model\Entity\DtbProductStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbProductStatusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProductStatuses', 'Products', 'Creators']
        ];
        $dtbProductStatus = $this->paginate($this->DtbProductStatus);

        $this->set(compact('dtbProductStatus'));
    }

    /**
     * View method
     *
     * @param string|null $id Dtb Product Status id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtbProductStatus = $this->DtbProductStatus->get($id, [
            'contain' => ['ProductStatuses', 'Products', 'Creators']
        ]);

        $this->set('dtbProductStatus', $dtbProductStatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtbProductStatus = $this->DtbProductStatus->newEntity();
        if ($this->request->is('post')) {
            $dtbProductStatus = $this->DtbProductStatus->patchEntity($dtbProductStatus, $this->request->getData());
            if ($this->DtbProductStatus->save($dtbProductStatus)) {
                $this->Flash->success(__('The dtb product status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb product status could not be saved. Please, try again.'));
        }
        $productStatuses = $this->DtbProductStatus->ProductStatuses->find('list', ['limit' => 200]);
        $products = $this->DtbProductStatus->Products->find('list', ['limit' => 200]);
        $creators = $this->DtbProductStatus->Creators->find('list', ['limit' => 200]);
        $this->set(compact('dtbProductStatus', 'productStatuses', 'products', 'creators'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dtb Product Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtbProductStatus = $this->DtbProductStatus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtbProductStatus = $this->DtbProductStatus->patchEntity($dtbProductStatus, $this->request->getData());
            if ($this->DtbProductStatus->save($dtbProductStatus)) {
                $this->Flash->success(__('The dtb product status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb product status could not be saved. Please, try again.'));
        }
        $productStatuses = $this->DtbProductStatus->ProductStatuses->find('list', ['limit' => 200]);
        $products = $this->DtbProductStatus->Products->find('list', ['limit' => 200]);
        $creators = $this->DtbProductStatus->Creators->find('list', ['limit' => 200]);
        $this->set(compact('dtbProductStatus', 'productStatuses', 'products', 'creators'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dtb Product Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtbProductStatus = $this->DtbProductStatus->get($id);
        if ($this->DtbProductStatus->delete($dtbProductStatus)) {
            $this->Flash->success(__('The dtb product status has been deleted.'));
        } else {
            $this->Flash->error(__('The dtb product status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
