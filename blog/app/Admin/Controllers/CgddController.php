<?php

namespace App\Admin\Controllers;

use App\Cgdd;
use App\Kc;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CgddController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '采购订单';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cgdd());

        $grid->column('id', __('ID'));
        $grid->column('iid', __('订单编号'));
        $grid->column('wp_id', __('物品编号'));
        $grid->column('name', __('物品类型'));
        $grid->column('brand', __('品牌'));
        $grid->column('xh', __('型号'));
        $grid->column('num', __('数量'));
        $grid->column('money', __('单价'));
        $grid->column('dd_at', __('订单时间'));
        $grid->column('rkzt', __('入库状态'))->display(function ($released) {
            return $released ? '完成' : "<span style='color:red'>未完成</span>";
        });
        $grid->column('rk_at', __('入库时间'));

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
        $show = new Show(Cgdd::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('iid', __('订单编号'));
        $show->field('wp_id', __('物品编号'));
        $show->field('name', __('物品名'));
        $show->field('brand', __('品牌'));
        $show->field('xh', __('型号'));
        $show->field('num', __('数量'));
        $show->field('money', __('单价'));
        $show->field('dd_at', __('订单时间'));
        $show->field('rkzt', __('入库状态'));
        $show->field('rk_at', __('入库时间'));
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
        $form = new Form(new Cgdd());

        $form->text('iid', __('订单编号'));
        $form->number('wp_id', __('物品编号'));
        $form->text('name', __('物品名'));
        $form->text('brand', __('品牌'));
        $form->text('xh', __('型号'));
        $form->number('num', __('数量'));
        $form->number('money', __('单价'));
        $form->datetime('dd_at', __('订单时间'))->default(date('Y-m-d'));
        $form->switch('rkzt', __('入库状态'));
        $form->datetime('rk_at', __('入库时间'))->default(date('Y-m-d'));

        return $form;
    }
}
