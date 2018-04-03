<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbProducts Controller
 *
 * @property \App\Model\Table\DtbProductsTable $DtbProducts
 *
 * @method \App\Model\Entity\DtbProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Makers', 'Creators', 'DelivDates', 'Clients', 'Categories']
        ];
        $dtbProducts = $this->paginate($this->DtbProducts);

        $this->set(compact('dtbProducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Dtb Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtbProduct = $this->DtbProducts->get($id, [
            'contain' => ['Makers', 'Creators', 'DelivDates', 'Clients', 'Categories']
        ]);

        $this->set('dtbProduct', $dtbProduct);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtbProduct = $this->DtbProducts->newEntity();
        if ($this->request->is('post')) {
            $dtbProduct = $this->DtbProducts->patchEntity($dtbProduct, $this->request->getData());
            if ($this->DtbProducts->save($dtbProduct)) {
                $this->Flash->success(__('The dtb product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb product could not be saved. Please, try again.'));
        }
        $makers = $this->DtbProducts->Makers->find('list', ['limit' => 200]);
        $creators = $this->DtbProducts->Creators->find('list', ['limit' => 200]);
        $delivDates = $this->DtbProducts->DelivDates->find('list', ['limit' => 200]);
        $clients = $this->DtbProducts->Clients->find('list', ['limit' => 200]);
        $categories = $this->DtbProducts->Categories->find('list', ['limit' => 200]);
        $this->set(compact('dtbProduct', 'makers', 'creators', 'delivDates', 'clients', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dtb Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtbProduct = $this->DtbProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtbProduct = $this->DtbProducts->patchEntity($dtbProduct, $this->request->getData());
            if ($this->DtbProducts->save($dtbProduct)) {
                $this->Flash->success(__('The dtb product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb product could not be saved. Please, try again.'));
        }
        $makers = $this->DtbProducts->Makers->find('list', ['limit' => 200]);
        $creators = $this->DtbProducts->Creators->find('list', ['limit' => 200]);
        $delivDates = $this->DtbProducts->DelivDates->find('list', ['limit' => 200]);
        $clients = $this->DtbProducts->Clients->find('list', ['limit' => 200]);
        $categories = $this->DtbProducts->Categories->find('list', ['limit' => 200]);
        $this->set(compact('dtbProduct', 'makers', 'creators', 'delivDates', 'clients', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dtb Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtbProduct = $this->DtbProducts->get($id);
        if ($this->DtbProducts->delete($dtbProduct)) {
            $this->Flash->success(__('The dtb product has been deleted.'));
        } else {
            $this->Flash->error(__('The dtb product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
