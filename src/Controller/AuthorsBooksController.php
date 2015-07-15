<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AuthorsBooks Controller
 *
 * @property \App\Model\Table\AuthorsBooksTable $AuthorsBooks
 */
class AuthorsBooksController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Books', 'Authors']
        ];
        $this->set('authorsBooks', $this->paginate($this->AuthorsBooks));
        $this->set('_serialize', ['authorsBooks']);
    }

    /**
     * View method
     *
     * @param string|null $id Authors Book id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $authorsBook = $this->AuthorsBooks->get($id, [
            'contain' => ['Books', 'Authors']
        ]);
        $this->set('authorsBook', $authorsBook);
        $this->set('_serialize', ['authorsBook']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $authorsBook = $this->AuthorsBooks->newEntity();
        if ($this->request->is('post')) {
            $authorsBook = $this->AuthorsBooks->patchEntity($authorsBook, $this->request->data);
            if ($this->AuthorsBooks->save($authorsBook)) {
                $this->Flash->success(__('The authors book has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The authors book could not be saved. Please, try again.'));
            }
        }
        $books = $this->AuthorsBooks->Books->find('list', ['limit' => 200]);
        $authors = $this->AuthorsBooks->Authors->find('list', ['limit' => 200]);
        $this->set(compact('authorsBook', 'books', 'authors'));
        $this->set('_serialize', ['authorsBook']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Authors Book id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $authorsBook = $this->AuthorsBooks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $authorsBook = $this->AuthorsBooks->patchEntity($authorsBook, $this->request->data);
            if ($this->AuthorsBooks->save($authorsBook)) {
                $this->Flash->success(__('The authors book has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The authors book could not be saved. Please, try again.'));
            }
        }
        $books = $this->AuthorsBooks->Books->find('list', ['limit' => 200]);
        $authors = $this->AuthorsBooks->Authors->find('list', ['limit' => 200]);
        $this->set(compact('authorsBook', 'books', 'authors'));
        $this->set('_serialize', ['authorsBook']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Authors Book id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $authorsBook = $this->AuthorsBooks->get($id);
        if ($this->AuthorsBooks->delete($authorsBook)) {
            $this->Flash->success(__('The authors book has been deleted.'));
        } else {
            $this->Flash->error(__('The authors book could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
