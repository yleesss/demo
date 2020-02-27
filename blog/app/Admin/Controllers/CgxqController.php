<?php

namespace App\Admin\Controllers;

use App\Cgxq;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CgxqController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '采购需求';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cgxq());

        $grid->column('id', __('ID'));
        $grid->column('xh', __('编号'));
        $grid->column('xqbh', __('采购编号'));
        $grid->column('bm', __('部门'));
        $grid->column('zdr', __('制单人'));
        $grid->column('zdsj', __('制单时间'));
        $grid->column('shrq', __('审核日期'));
        $grid->column('lldj', __('来源单据'));
        $grid->column('xqrq', __('需求日期'));
        $grid->column('chbh', __('存货编号'));
        $grid->column('chmc', __('存货名称'));
        $grid->column('chsl', __('存货数量'));
        $grid->column('gys', __('供应商'));
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
        $show = new Show(Cgxq::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('xh', __('Xh'));
        $show->field('xqbh', __('Xqbh'));
        $show->field('bm', __('Bm'));
        $show->field('zdr', __('Zdr'));
        $show->field('zdsj', __('Zdsj'));
        $show->field('shrq', __('Shrq'));
        $show->field('lldj', __('Lldj'));
        $show->field('xqrq', __('Xqrq'));
        $show->field('chbh', __('Chbh'));
        $show->field('chmc', __('Chmc'));
        $show->field('chsl', __('Chsl'));
        $show->field('gys', __('Gys'));
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
        $form = new Form(new Cgxq());

        $form->text('xh', __('Xh'));
        $form->text('xqbh', __('Xqbh'));
        $form->text('bm', __('Bm'));
        $form->text('zdr', __('Zdr'));
        $form->datetime('zdsj', __('Zdsj'))->default(date('Y-m-d H:i:s'));
        $form->datetime('shrq', __('Shrq'))->default(date('Y-m-d H:i:s'));
        $form->text('lldj', __('Lldj'));
        $form->datetime('xqrq', __('Xqrq'))->default(date('Y-m-d H:i:s'));
        $form->text('chbh', __('Chbh'));
        $form->text('chmc', __('Chmc'));
        $form->text('chsl', __('Chsl'));
        $form->text('gys', __('Gys'));

        return $form;
    }
}
