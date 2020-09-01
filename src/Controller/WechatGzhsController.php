<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * WechatGzhs Controller
 *
 * @property \App\Model\Table\WechatGzhsTable $WechatGzhs
 * @method \App\Model\Entity\WechatGzh[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WechatGzhsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $wechatGzhs = $this->paginate($this->WechatGzhs);

        $this->set(compact('wechatGzhs'));
    }

    /**
     * View method
     *
     * @param string|null $id Wechat Gzh id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wechatGzh = $this->WechatGzhs->get($id, [
            'contain' => ['UserWechatOpenids'],
        ]);

        $this->set(compact('wechatGzh'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wechatGzh = $this->WechatGzhs->newEmptyEntity();
        if ($this->request->is('post')) {
            $wechatGzh = $this->WechatGzhs->patchEntity($wechatGzh, $this->request->getData());
            if ($this->WechatGzhs->save($wechatGzh)) {
                $this->Flash->success(__('The wechat gzh has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wechat gzh could not be saved. Please, try again.'));
        }
        $this->set(compact('wechatGzh'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Wechat Gzh id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wechatGzh = $this->WechatGzhs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wechatGzh = $this->WechatGzhs->patchEntity($wechatGzh, $this->request->getData());
            if ($this->WechatGzhs->save($wechatGzh)) {
                $this->Flash->success(__('The wechat gzh has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wechat gzh could not be saved. Please, try again.'));
        }
        $this->set(compact('wechatGzh'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Wechat Gzh id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wechatGzh = $this->WechatGzhs->get($id);
        if ($this->WechatGzhs->delete($wechatGzh)) {
            $this->Flash->success(__('The wechat gzh has been deleted.'));
        } else {
            $this->Flash->error(__('The wechat gzh could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
