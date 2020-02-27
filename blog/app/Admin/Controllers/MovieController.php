<?php

namespace App\Admin\Controllers;

use App\Movie;
use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MovieController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Movie';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Movie());


        $grid->column('id', 'ID')->sortable();
        $grid->column('title');
        $grid->column('director',__('导演'))->display(function($userId) {
            return User::find($userId)->name;
        });

        // $grid->column('id', __('编号'));
        // $grid->column('title', __('名字'));
     //    $grid->column('director', __('电影价格'));
        $grid->column('describe', __('简介'));
        $grid->column('rate', __('评价'));
        $grid->column('released', '是否上映')->display(function ($released) {
            return $released ? '是' : '否';
        });
     //   $grid->column('released', __('发行状态'));
        $grid->column('release_at', __('发行时间'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

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
        $show = new Show(Movie::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('标题'));
        $show->field('director', __('导演'));
        $show->field('describe', __('Describe'));
        $show->field('rate', __('Rate'));
        $show->field('released', __('Released'));
        $show->field('release_at', __('Release at'));
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
        $form = new Form(new Movie());

        $form->text('title', __('名字'));
        $form->number('director', __('导演'));
        $form->text('describe', __('简介'));
        $form->number('rate', __('评价'));
        $form->switch('released', __('是否上映'));
        $form->datetime('release_at', __('发行时间'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
