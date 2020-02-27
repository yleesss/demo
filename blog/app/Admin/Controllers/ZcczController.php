<?php

namespace App\Admin\Controllers;

use App\Zccz;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ZcczController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '资产处置';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Zccz());

        $grid->column('id', __('ID'));
        $grid->column('iid', __('单据编号'));
        $grid->column('czlx', __('处置类型'));
        $grid->column('czsj', __('处置时间'));
        $grid->column('zcmc', __('资产名称'));
        $grid->column('zclx', __('资产类别'));
        $grid->column('bmmc', __('部门名称'));
        $grid->column('fzr', __('负责人'));
        $grid->column('ggxh', __('规格型号'));
        $grid->column('czr', __('处置人'));
        $grid->column('czfs', __('处置方式'));
        $grid->column('czyy', __('处置原因'));
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
        $show = new Show(Zccz::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('iid', __('Iid'));
        $show->field('czlx', __('Czlx'));
        $show->field('czsj', __('Czsj'));
        $show->field('zcmc', __('资产名称'));
        $show->field('zclx', __('资产类别'));
        $show->field('bmmc', __('部门名称'));
        $show->field('fzr', __('负责人'));
        $show->field('ggxh', __('规格型号'));
        $show->field('czr', __('处置人'));
        $show->field('czfs', __('处置方式'));
        $show->field('czyy', __('处置原因'));
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
        $form = new Form(new Zccz());

        $form->text('iid', __('Iid'));
        $form->text('czlx', __('Czlx'));
        $form->datetime('czsj', __('Czsj'))->default(date('Y-m-d H:i:s'));
        $form->text('zcmc', __('资产名称'));
        $form->text('zclx', __('资产类别'));
        $form->text('bmmc', __('部门名称'));
        $form->text('fzr', __('负责人'));
        $form->text('ggxh', __('规格型号'));
        $form->text('czr', __('处置人'));
        $form->text('czfs', __('处置方式'));
        $form->text('czyy', __('处置原因'));

        return $form;
    }
}
