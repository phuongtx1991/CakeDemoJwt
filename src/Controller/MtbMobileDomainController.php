<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MtbMobileDomain Controller
 *
 * @property \App\Model\Table\MtbMobileDomainTable $MtbMobileDomain
 *
 * @method \App\Model\Entity\MtbMobileDomain[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MtbMobileDomainController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mtbMobileDomain = $this->paginate($this->MtbMobileDomain);

        $this->set(compact('mtbMobileDomain'));
    }

    /**
     * View method
     *
     * @param string|null $id Mtb Mobile Domain id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mtbMobileDomain = $this->MtbMobileDomain->get($id, [
            'contain' => []
        ]);

        $this->set('mtbMobileDomain', $mtbMobileDomain);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mtbMobileDomain = $this->MtbMobileDomain->newEntity();
        if ($this->request->is('post')) {
            $mtbMobileDomain = $this->MtbMobileDomain->patchEntity($mtbMobileDomain, $this->request->getData());
            if ($this->MtbMobileDomain->save($mtbMobileDomain)) {
                $this->Flash->success(__('The mtb mobile domain has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb mobile domain could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbMobileDomain'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mtb Mobile Domain id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mtbMobileDomain = $this->MtbMobileDomain->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mtbMobileDomain = $this->MtbMobileDomain->patchEntity($mtbMobileDomain, $this->request->getData());
            if ($this->MtbMobileDomain->save($mtbMobileDomain)) {
                $this->Flash->success(__('The mtb mobile domain has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb mobile domain could not be saved. Please, try again.'));
        }
        $this->set(compact('mtbMobileDomain'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mtb Mobile Domain id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mtbMobileDomain = $this->MtbMobileDomain->get($id);
        if ($this->MtbMobileDomain->delete($mtbMobileDomain)) {
            $this->Flash->success(__('The mtb mobile domain has been deleted.'));
        } else {
            $this->Flash->error(__('The mtb mobile domain could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
