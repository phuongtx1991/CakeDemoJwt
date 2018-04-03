<?php
namespace App\Controller\Api;

use App\Controller\Api\AppControllerApi;

/**
 * Cocktails Controller
 *
 * @property \App\Model\Table\CocktailsTable $Cocktails
 *
 * @method \App\Model\Entity\Cocktail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CocktailsController extends AppControllerApi
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $recipes = $this->Cocktails->find('all');
        $this->set([
            'recipes' => $recipes,
            '_serialize' => ['recipes']
        ]);
    }

    public function view($id)
    {
        $recipe = $this->Cocktails->get($id);
        $this->set([
            'recipe' => $recipe,
            '_serialize' => ['recipe']
        ]);
    }

    public function add()
    {
        $recipe = $this->Cocktails->newEntity($this->request->getData());
        if ($this->Cocktails->save($recipe)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'recipe' => $recipe,
            '_serialize' => ['message', 'recipe']
        ]);
    }

    public function edit($id)
    {
        $recipe = $this->Cocktails->get($id);
        if ($this->request->is(['post', 'put'])) {
            $recipe = $this->Cocktails->patchEntity($recipe, $this->request->getData());
            if ($this->Cocktails->save($recipe)) {
                $message = 'Saved';
            } else {
                $message = 'Error';
            }
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function delete($id)
    {
        $recipe = $this->Cocktails->get($id);
        $message = 'Deleted';
        if (!$this->Cocktails->delete($recipe)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

}
