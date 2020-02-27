<?php

namespace App\Admin\Controllers;

use App\Jpxx;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JpxxController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '据票信息';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Jpxx());

        $grid->column('id', __('ID'));
        $grid->column('iid', __('序号'));
        $grid->column('jpbh', __('据票编号'));
        $grid->column('jplx', __('据票类型'));
        $grid->column('sdrq', __('收到日期'));
        $grid->column('cpr', __('出票人'));
        $grid->column('cprzh', __('出票人账号'));
        $grid->column('cprq', __('出票日期'));
        $grid->column('dqr', __('到期日'));
        $grid->column('jsfs', __('结算方式'));
        $grid->column('fkryh', __('付款人银行'));
        $grid->column('skr', __('收款人'));
        $grid->column('skrzh', __('收款人账号'));
        $grid->column('skrkhh', __('收款人开户行'));
        $grid->column('je', __('金额'));
        $grid->column('jyhtbh', __('交易合同编号'));
        $grid->column('zb', __('备注'));
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
        $show = new Show(Jpxx::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('iid', __('序号'));
        $show->field('jpbh', __('据票编号'));
        $show->field('jplx', __('据票类型'));
        $show->field('sdrq', __('收到日期'));
        $show->field('cpr', __('出票人'));
        $show->field('cprzh', __('出票人账号'));
        $show->field('cprq', __('出票日期'));
        $show->field('dqr', __('到期日'));
        $show->field('jsfs', __('结算方式'));
        $show->field('fkryh', __('付款人银行'));
        $show->field('skr', __('收款人'));
        $show->field('skrzh', __('收款人账号'));
        $show->field('skrkhh', __('收款人开户行'));
        $show->field('je', __('金额'));
        $show->field('jyhtbh', __('交易合同编号'));
        $show->field('zb', __('备注'));
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
        $form = new Form(new Jpxx());

        $form->text('iid', __('序号'));
        $form->text('jpbh', __('据票编号'));
        $form->text('jplx', __('据票类型'));
        $form->datetime('sdrq', __('收到日期'))->default(date('Y-m-d H:i:s'));
        $form->text('cpr', __('出票人'));
        $form->text('cprzh', __('出票人账号'));
        $form->datetime('cprq', __('出票日期'))->default(date('Y-m-d H:i:s'));
        $form->datetime('dqr', __('到期日'));
        $form->text('jsfs', __('结算方式'));
        $form->text('fkryh', __('付款人银行'));
        $form->text('skr', __('收款人'));
        $form->text('skrzh', __('收款人账号'));
        $form->text('skrkhh', __('收款人开户行'));
        $form->text('je', __('金额'));
        $form->text('jyhtbh', __('交易合同编号'));
        $form->text('zb', __('备注'));

        return $form;
    }
}
