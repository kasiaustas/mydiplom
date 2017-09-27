<?php

namespace app\components;
use app\models\Brand;
use app\models\Product;
use yii\base\Widget;
use Yii;

class MenuWidget extends Widget
{
    public $tpl;
    public $data;
    //public $databrand;
    //public $dataform;
    //public $dataproduct;
    public $tree;
    public $menuHtml;
    public $model;


    public function init(){
        parent::init();
        if($this->tpl===null){
            $this->tpl='menu';
        }
        $this->tpl .='.php';
    }


    public function run(){
       // get cache
        //$menu=Yii::$app->cache->get('menu');
        //if($menu){
        //    return $menu;
        //}
       $this->data=Brand::find()->indexBy('id')->asArray()->all();
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

    protected function getMenuHtml($tree, $tab=' '){
        $str='';
        foreach ($tree as $brand){
            $str .=$this->catToTemplate($brand, $tab);
        }
        return $str;
    }

    protected function catToTemplate($brand, $tab){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}
