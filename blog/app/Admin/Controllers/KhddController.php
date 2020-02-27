<?php

namespace App\Admin\Controllers;

use App\Khdd;
use App\Kc;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KhddController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '销售订单';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Khdd());

        $grid->column('id', __('ID'));
        $grid->column('iid', __('订单编号'));
        // $grid->column('wp_id', __('物品编号'));
        $grid->column('name', __('物品类型'));
        $grid->column('brand', __('品牌'));
        $grid->column('xh', __('型号'));
        $grid->column('num', __('订单数量'));
        $grid->column('money', __('价格'));
        $grid->column('dd_at', __('签单时间'));
        $grid->column('jh_at', __('交货时间'));
        $grid->column('wp_id', __('库存数量提醒'))->display(function ($wp_id) {
            $kc_num = Kc::find($wp_id)->num;
         //   $num = Khdd::find(1)->num;
            // if($num>)
            return "<span style='color:red'>$kc_num</span>";
        });
        $grid->column('jhzt', __('订单状况'))->display(function ($released) {
            return $released ? '完成' : "<span style='color:red'>未完成</span>";
        });
        
        

        // $grid->column('created_at', __('创建时间'));
        // $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Khdd::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('iid', __('订单编号'));
        $show->field('wp_id', __('物品编号'));
        $show->field('name', __('物品名'));
        $show->field('brand', __('品牌'));
        $show->field('xh', __('型号'));
        $show->field('num', __('数量'));
        $show->field('money', __('价格'));
        $show->field('dd_at', __('签单时间'));
        $show->field('jhzt', __('完成状态'));
        $show->field('jh_at', __('交货时间'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Khdd());

        $form->text('iid', __('订单编号'));
        $form->number('wp_id', __('物品编号'));
        $form->text('name', __('物品名'));
        $form->text('brand', __('品牌'));
        $form->text('xh', __('型号'));
        $form->number('num', __('数量'));
        $form->number('money', __('单价'));
        $form->datetime('dd_at', __('签单时间'))->default(date('Y-m-d'));
        $form->switch('jhzt', __('完成状况'));
        $form->datetime('jh_at', __('交货时间'))->default(date('Y-m-d'));

        return $form;
    }
}
