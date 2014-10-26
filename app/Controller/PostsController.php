<?php

class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }

    public function admin() {
        $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    public function add() {
        if ($this->request->is('post')) {

            $this->Post->create(); // reset Post model
            
            //pr($this->request->data);

            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success" role="alert">Your post has been saved.</div>', true));
                return $this->redirect(array('action' => 'admin'));
            }
            $this->Session->setFlash(__('<div class="alert alert-danger" role="alert">Unable to add your post.</div>', true));
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success" role="alert">Your post has been updated.</div>', true));
                return $this->redirect(array('action' => 'admin'));
            }
            $this->Session->setFlash(__('<div class="alert alert-danger" role="alert">Unable to update your post.</div>', true));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        $this->Post->id = $id;
        $title = $this->Post->field('title');

        if ($this->Post->delete($id)) {
            $this->Session->setFlash(
                __('<div class="alert alert-success" role="alert">%s has been deleted.</div>', h($title), true)
            );
            return $this->redirect(array('action' => 'admin'));
        }
    }
}

?>