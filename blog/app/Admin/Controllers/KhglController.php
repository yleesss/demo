<?php

namespace App\Admin\Controllers;

use App\Khgl;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KhglController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '客户信息';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Khgl());

        $grid->column('id', __('ID'));
        $grid->column('iid', __('编号'));
        $grid->column('khmc', __('客户名称'));
        $grid->column('gsmc', __('公司名称'));
        $grid->column('dz', __('地址'));
        $grid->column('lxdh', __('联系电话'));
        $grid->column('bz', __('备注'));
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
        $show = new Show(Khgl::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('iid', __('Iid'));
        $show->field('khmc', __('Khmc'));
        $show->field('gsmc', __('Gsmc'));
        $show->field('dz', __('Dz'));
        $show->field('lxdh', __('Lxdh'));
        $show->field('bz', __('Bz'));
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
        $form = new Form(new Khgl());

        $form->text('iid', __('Iid'));
        $form->text('khmc', __('Khmc'));
        $form->text('gsmc', __('Gsmc'));
        $form->text('dz', __('Dz'));
        $form->text('lxdh', __('Lxdh'));
        $form->text('bz', __('Bz'));

        return $form;
    }
}
