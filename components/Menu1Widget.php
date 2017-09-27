<?php

namespace app\components;
use app\models\Brand;
use app\models\Category;
use app\models\Form;
use app\models\Product;
use yii\base\Widget;
use Yii;

class Menu1Widget extends Widget
{
    public $tpl;
    public $data;
    //public $databrand;
    //public $dataform;
    //public $dataproduct;
    public $tree;
    public $menuHtml;


    public function init(){
        parent::init();
        if($this->tpl===null){
            $this->tpl='menu1';
        }
        $this->tpl .='.php';
    }


    public function run(){
        // get cache
        //$menu=Yii::$app->cache->get('menu');
        //if($menu){
        //    return $menu;
        //}
        $this->data=Form::find()->indexBy('id')->asArray()->all();
        $this->tree=$this->getTree();
        $this->menuHtml=$this->getMenuHtml($this->tree);
        //set cache
        //Yii::$app->cache->set('menu', $this->menuHtml, 60);
        return $this->menuHtml;
    }

    protected function getTree(){
        $tree=[];
        foreach ($this->data as $id=>&$node){
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent_id']]['childs'][$node['id']]=&$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree){
        $str='';
        foreach ($tree as $form){
            $str .=$this->catToTemplate($form);
        }
        return $str;
    }

    protected function catToTemplate($form){
        ob_start();
        include __DIR__ . '/menu1_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}
