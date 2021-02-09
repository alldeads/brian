<?php

namespace App\Admin\Controllers;

use App\Models\Property;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PropertyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Property';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Property());

        $grid->column('id', __('Id'));
        $grid->column('current_owner', __('Current owner'));
        $grid->column('owner_since', __('Owner since'));
        $grid->column('coop', __('Coop'));
        $grid->column('property_address', __('Property address'));
        $grid->column('dropbox_docs', __('Dropbox docs'));
        $grid->column('dropbox_images', __('Dropbox images'));
        $grid->column('previous_owners', __('Previous owners'));
        $grid->column('market_share_notes', __('Market share notes'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Property::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('current_owner', __('Current owner'));
        $show->field('owner_since', __('Owner since'));
        $show->field('coop', __('Coop'));
        $show->field('property_address', __('Property address'));
        $show->field('dropbox_docs', __('Dropbox docs'));
        $show->field('dropbox_images', __('Dropbox images'));
        $show->field('previous_owners', __('Previous owners'));
        $show->field('market_share_notes', __('Market share notes'));
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
        $form = new Form(new Property());

        $form->text('current_owner', __('Current owner'));
        $form->text('owner_since', __('Owner since'));
        $form->text('coop', __('Coop'));
        $form->text('property_address', __('Property address'));
        $form->text('dropbox_docs', __('Dropbox docs'));
        $form->text('dropbox_images', __('Dropbox images'));
        $form->text('previous_owners', __('Previous owners'));
        $form->text('market_share_notes', __('Market share notes'));

        return $form;
    }
}
