<?php

namespace App\Http\Livewire;

use App\Models\dokter;
use LaravelViews\Views\TableView;
use LaravelViews\Facades\Header;
use App\Filters\FilterBidangSpesialisasi;
use LaravelViews\Facades\UI;
use LaravelViews\Views\Traits\WithAlerts;

class UsersTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = dokter::class;
    protected $primaryKey = 'NIP_Dokter';
    protected $paginate = 20;
    public $searchBy = ['NIP_Dokter','Nama_Dokter','Bidang_Spesialisasi'];
    protected function filters()
    {
        return [
            new FilterBidangSpesialisasi,
        ];
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('NIP')->sortBy('NIP_Dokter'),
            Header::title('Nama')->sortBy('Nama_Dokter'),
            Header::title('Tanggal Lahir')->sortBy('Tanggal_Lahir'),
            Header::title('Jenis Kelamin')->sortBy('Jenis_Kelamin'),
        'Alamat',
        'No HP',
        Header::title('Bidang Spesialisasi')->sortBy('Bidang_Spesialisasi')
    ];
        
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [
            $model->NIP_Dokter,
            UI::editable($model, 'Nama_Dokter'),
            $model->Tanggal_Lahir,
            $model->Jenis_Kelamin,
            UI::editable($model, 'Alamat'),
            $model->No_HP,
            $model->Bidang_Spesialisasi
        ];
    }
    use WithAlerts;
    
    public function update($model, $data)
    {
        $model = dokter::where($model)->update($data);
        $this->success();
    }
}