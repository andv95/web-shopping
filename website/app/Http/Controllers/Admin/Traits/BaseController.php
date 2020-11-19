<?php
namespace App\Http\Controllers\Admin\Traits;

use App\Exceptions\NotFoundRecord;
use App\Helper\Helper;

trait BaseController
{
    /**
     * Delete data.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        try {
            $post = $this->model::getByID($id);
            if (empty($post)) {
                throw new NotFoundRecord();
            }
            $post->delete();
            return redirect()->back()->with(Helper::MESSAGE_SUCCESS, __('message.action.delete_success'));
        }
        catch (\Throwable $throwable) {
            return redirect()->back()->withErrors($throwable->getMessage());
        }
    }
}
