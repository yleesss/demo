<?php

namespace App\Admin\Controllers;

use App\Zcgl;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ZcglController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '资产管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Zcgl());

        $grid->column('id', __('ID'));
        $grid->column('iid', __('编号'));
        $grid->column('zcmc', __('资产名称'));
        $grid->column('zcbh', __('资产编号'));
        $grid->column('grsj', __('购入时间'));
        $grid->column('ggxh', __('规格型号'));
        $grid->column('cfdd', __('存放地点'));
        $grid->column('zclx', __('资产类型'));
        $grid->column('llsj', __('录入时间'));
        $grid->column('sbmc', __('设备名称'));
        $grid->column('syzk', __('使用状况'));
        $grid->column('grje', __('购入金额'));

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
        $show = new Show(Zcgl::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('iid', __('Iid'));
        $show->field('zcmc', __('Zcmc'));
        $show->field('zcbh', __('Zcbh'));
        $show->field('grsj', __('Grsj'));
        $show->field('ggxh', __('Ggxh'));
        $show->field('cfdd', __('Cfdd'));
        $show->field('zclx', __('Zclx'));
        $show->field('llsj', __('Llsj'));
        $show->field('sbmc', __('Sbmc'));
        $show->field('syzk', __('Syzk'));
        $show->field('grje', __('Grje'));
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
        $form = new Form(new Zcgl());

        $form->text('iid', __('Iid'));
        $form->text('zcmc', __('Zcmc'));
        $form->text('zcbh', __('Zcbh'));
        $form->datetime('grsj', __('Grsj'))->default(date('Y-m-d H:i:s'));
        $form->text('ggxh', __('Ggxh'));
        $form->text('cfdd', __('Cfdd'));
        $form->text('zclx', __('Zclx'));
        $form->datetime('llsj', __('Llsj'))->default(date('Y-m-d H:i:s'));
        $form->text('sbmc', __('Sbmc'));
        $form->text('syzk', __('Syzk'));
        $form->text('grje', __('Grje'));

        return $form;
    }
}
