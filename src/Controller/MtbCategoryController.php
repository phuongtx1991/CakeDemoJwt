<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MtbCategory Controller
 *
 * @property \App\Model\Table\MtbCategoryTable $MtbCategory
 *
 * @method \App\Model\Entity\MtbCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MtbCategoryController extends AppController
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
        $mtbCategory = $this->paginate($this->MtbCategory);

        $this->set(compact('mtbCategory'));
    }

    /**
     * View method
     *
     * @param string|null $id Mtb Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mtbCategory = $this->MtbCategory->get($id, [
            'contain' => ['Objects']
        ]);

        $this->set('mtbCategory', $mtbCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mtbCategory = $this->MtbCategory->newEntity();
        if ($this->request->is('post')) {
            $mtbCategory = $this->MtbCategory->patchEntity($mtbCategory, $this->request->getData());
            if ($this->MtbCategory->save($mtbCategory)) {
                $this->Flash->success(__('The mtb category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb category could not be saved. Please, try again.'));
        }
        $objects = $this->MtbCategory->Objects->find('list', ['limit' => 200]);
        $this->set(compact('mtbCategory', 'objects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mtb Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mtbCategory = $this->MtbCategory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mtbCategory = $this->MtbCategory->patchEntity($mtbCategory, $this->request->getData());
            if ($this->MtbCategory->save($mtbCategory)) {
                $this->Flash->success(__('The mtb category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mtb category could not be saved. Please, try again.'));
        }
        $objects = $this->MtbCategory->Objects->find('list', ['limit' => 200]);
        $this->set(compact('mtbCategory', 'objects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mtb Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mtbCategory = $this->MtbCategory->get($id);
        if ($this->MtbCategory->delete($mtbCategory)) {
            $this->Flash->success(__('The mtb category has been deleted.'));
        } else {
            $this->Flash->error(__('The mtb category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
