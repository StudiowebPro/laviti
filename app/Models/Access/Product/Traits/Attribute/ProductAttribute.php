<?php

namespace App\Models\Access\Product\Traits\Attribute;

/**
 * Class ProductAttribute.
 */
trait ProductAttribute
{

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return  $this->getEditButtonAttribute().
//            $this->getClearSessionButtonAttribute().
//            $this->getLoginAsButtonAttribute().
//            $this->getShowButtonAttribute().
//            $this->getChangePasswordButtonAttribute().
//            $this->getStatusButtonAttribute().
            $this->getConfirmedButtonAttribute().
            $this->getDeleteButtonAttribute();
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.access.product.edit', $this).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getConfirmedLabelAttribute()
    {
        if ($this->isVisible()) {
            return "<label class='label label-success'>".trans('labels.general.yes').'</label>';
        }
        return "<label class='label label-danger'>".trans('labels.general.no').'</label>';
    }

    /**
     * @return string
     */
    public function getConfirmedButtonAttribute()
    {
        if (! $this->isVisible()) {
            return '<a href="'.route('admin.access.user.account.confirm.resend', $this).'" class="btn btn-xs btn-success"><i class="fa fa-refresh" data-toggle="tooltip" data-placement="top" title='.trans('buttons.backend.access.users.resend_email').'"></i></a> ';
        }
        return '';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        if ($this->id != access()->id()) {
            return '<a href="'.route('admin.access.user.destroy', $this).'"
                 data-method="delete"
                 data-trans-button-cancel="'.trans('buttons.general.cancel').'"
                 data-trans-button-confirm="'.trans('buttons.general.crud.delete').'"
                 data-trans-title="'.trans('strings.backend.general.are_you_sure').'"
                 class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.delete').'"></i></a> ';
        }
        return '';
    }

    /**
     * @return bool
     */
    public function isVisible()
    {
        return $this->is_visible == 1;
    }

}