<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BooksCategories Controller
 *
 * @property \App\Model\Table\BooksCategoriesTable $BooksCategories
 */
class BooksCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Books', 'Categories']
        ];
        $this->set('booksCategories', $this->paginate($this->BooksCategories));
        $this->set('_serialize', ['booksCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Books Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $booksCategory = $this->BooksCategories->get($id, [
            'contain' => ['Books', 'Categories']
        ]);
        $this->set('booksCategory', $booksCategory);
        $this->set('_serialize', ['booksCategory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booksCategory = $this->BooksCategories->newEntity();
        if ($this->request->is('post')) {
            $booksCategory = $this->BooksCategories->patchEntity($booksCategory, $this->request->data);
            if ($this->BooksCategories->save($booksCategory)) {
                $this->Flash->success(__('The books category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The books category could not be saved. Please, try again.'));
            }
        }
        $books = $this->BooksCategories->Books->find('list', ['limit' => 200]);
        $categories = $this->BooksCategories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('booksCategory', 'books', 'categories'));
        $this->set('_serialize', ['booksCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Books Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $booksCategory = $this->BooksCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $booksCategory = $this->BooksCategories->patchEntity($booksCategory, $this->request->data);
            if ($this->BooksCategories->save($booksCategory)) {
                $this->Flash->success(__('The books category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The books category could not be saved. Please, try again.'));
            }
        }
        $books = $this->BooksCategories->Books->find('list', ['limit' => 200]);
        $categories = $this->BooksCategories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('booksCategory', 'books', 'categories'));
        $this->set('_serialize', ['booksCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Books Category id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booksCategory = $this->BooksCategories->get($id);
        if ($this->BooksCategories->delete($booksCategory)) {
            $this->Flash->success(__('The books category has been deleted.'));
        } else {
            $this->Flash->error(__('The books category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
