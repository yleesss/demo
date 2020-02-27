<?php

namespace App\Admin\Controllers;

use App\Zzry;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ZzryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '在职人员';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Zzry());

        $grid->column('id', __('ID'));
        $grid->column('iid', __('编号'));
        $grid->column('code', __('工号'));
        $grid->column('name', __('姓名'));
        $grid->column('xb', __('性别'));
        $grid->column('csrq', __('出生日期'));
        $grid->column('hk', __('户口'));
        $grid->column('ypzw', __('应聘职位'));
        $grid->column('rzsj', __('入职时间'));
        $grid->column('hyzk', __('婚姻状况'));
        $grid->column('gj', __('籍贯'));
        $grid->column('lxdh', __('联系电话'));
        $grid->column('xl', __('学历'));
        $grid->column('byxx', __('毕业学校'));
        $grid->column('zy', __('专业'));
        $grid->column('lb', __('类别'));
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
        $show = new Show(Zzry::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('iid', __('Iid'));
        $show->field('code', __('Code'));
        $show->field('name', __('Name'));
        $show->field('xb', __('Xb'));
        $show->field('csrq', __('Csrq'));
        $show->field('hk', __('Hk'));
        $show->field('ypzw', __('Ypzw'));
        $show->field('rzsj', __('Rzsj'));
        $show->field('hyzk', __('Hyzk'));
        $show->field('gj', __('Gj'));
        $show->field('lxdh', __('Lxdh'));
        $show->field('xl', __('Xl'));
        $show->field('byxx', __('Byxx'));
        $show->field('zy', __('Zy'));
        $show->field('lb', __('Lb'));
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
        $form = new Form(new Zzry());

        $form->text('iid', __('Iid'));
        $form->text('code', __('Code'));
        $form->text('name', __('Name'));
        $form->text('xb', __('Xb'));
        $form->text('csrq', __('Csrq'));
        $form->text('hk', __('Hk'));
        $form->text('ypzw', __('Ypzw'));
        $form->text('rzsj', __('Rzsj'));
        $form->text('hyzk', __('Hyzk'));
        $form->text('gj', __('Gj'));
        $form->text('lxdh', __('Lxdh'));
        $form->text('xl', __('Xl'));
        $form->text('byxx', __('Byxx'));
        $form->text('zy', __('Zy'));
        $form->text('lb', __('Lb'));

        return $form;
    }
}
