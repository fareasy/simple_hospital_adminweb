<?php

namespace App\Actions;

use LaravelViews\Actions\Action;
use LaravelViews\Views\View;
use App\Models\dokter;
use LaravelViews\Actions\Confirmable;

class DeleteUserAction extends Action
{
    public function getConfirmationMessage($item = null)
{
    return 'Apakah anda yakin hapus user ini?';
}
    use Confirmable;
    /**
     * Any title you want to be displayed
     * @var String
     * */
    public $title = "Hapus";

    /**
     * This should be a valid Feather icon string
     * @var String
     */
    public $icon = "trash-2";

    /**
     * Execute the action when the user clicked on the button
     *
     * @param $model Model object of the list where the user has clicked
     * @param $view Current view where the action was executed from
     */
    public function handle($model, View $view)
    {
        // Your code here
        $model->delete();
    }
}
