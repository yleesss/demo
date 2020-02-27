<?php

namespace App\Admin\Controllers;

use App\Kc;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KcController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '库存信息';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Kc());

        $grid->column('id', __('ID'));
        $grid->column('iid', __('物品编号'));
        $grid->column('name', __('物品名'));
        $grid->column('brand', __('品牌'));
        $grid->column('xh', __('型号'));
        $grid->column('num', __('数量'));
        $grid->column('money', __('单价'));
        // $grid->column('created_at', __('Created at'));
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
        $show = new Show(Kc::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('iid', __('物品编号'));
        $show->field('name', __('物品名'));
        $show->field('brand', __('品牌'));
        $show->field('xh', __('型号'));
        $show->field('num', __('数量'));
        $show->field('money', __('单价'));
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
        $form = new Form(new Kc());

        $form->text('iid', __('物品编号'));
        $form->text('name', __('物品名'));
        $form->text('brand', __('品牌'));
        $form->text('xh', __('型号'));
        $form->number('num', __('数量'));
        $form->number('money', __('单价'));

        return $form;
    }
}
