<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('编号'));
        $grid->column('name', __('名字'));
        $grid->column('email', __('邮箱'));
     //   $grid->column('email_verified_at', __('Email verified at'));
     //   $grid->column('password', __('密码'));
     //   $grid->column('remember_token', __('Remember token'));
        $grid->column('created_at', __('创建时间'));

        $grid->column('updated_at', __('更新时间'));
        // $grid->filter(function ($filter) {

        //     // 设置created_at字段的范围查询
        //     $filter->between('created_at', 'Created Time')->datetime();
        // });

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('名字'));
        $show->field('email', __('邮箱'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('密码'));
        $show->field('remember_token', __('Remember token'));
        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('更新时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('姓名'));
        $form->email('email', __('邮箱'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('密码'));
        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
