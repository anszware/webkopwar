<?php

// namespace App\Livewire\Tables;

// use Livewire\Component;
// use Livewire\WithPagination;
// use Illuminate\Database\Eloquent\Builder;
// use Maatwebsite\Excel\Facades\Excel;
// use Illuminate\Support\Str;
// use App\Exports\ExcelExportHelper;

// class DynamicTable extends Component
// {
//     use WithPagination;

//     public array $columns = [];
//     public string $search = '';
//     public ?string $sortColumn = null;
//     public string $sortDirection = 'asc';

//     public string $modelClass;

//     // Filter state: array ['column_name' => 'filter_value']
//     public array $filters = [];

//     // Untuk enable/disable fitur
//     public bool $enableFilter = false;
//     public bool $enableExport = false;

//     protected $queryString = ['search', 'sortColumn', 'sortDirection', 'page', 'filters'];

//     public function mount(string $modelClass, array $columns, bool $enableFilter = false, bool $enableExport = false)
//     {
//         $this->modelClass = $modelClass;
//         $this->columns = $columns;
//         $this->enableFilter = $enableFilter;
//         $this->enableExport = $enableExport;

//         // Init filters kosong per kolom
//         foreach ($this->columns as $col) {
//             $this->filters[$col] = '';
//         }
//     }

//     public function updatingSearch()
//     {
//         $this->resetPage();
//     }

//     public function updatingFilters()
//     {
//         $this->resetPage();
//     }

//     public function sortBy(string $column)
//     {
//         if ($this->sortColumn === $column) {
//             $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
//         } else {
//             $this->sortColumn = $column;
//             $this->sortDirection = 'asc';
//         }

//         $this->resetPage();
//     }

//     public function exportExcel()
// {
//     if (!$this->enableExport) {
//         return;
//     }

//     $query = call_user_func([$this->modelClass, 'query']);

//     if ($this->search) {
//         $query->where(function ($q) {
//             foreach ($this->columns as $column) {
//                 $q->orWhere($column, 'like', '%'.$this->search.'%');
//             }
//         });
//     }

//     foreach ($this->filters as $column => $value) {
//         if ($value) {
//             $query->where($column, 'like', '%'.$value.'%');
//         }
//     }

//     if ($this->sortColumn && in_array($this->sortColumn, $this->columns)) {
//         $query->orderBy($this->sortColumn, $this->sortDirection);
//     }

//     $data = $query->get($this->columns)->toArray();

//     $filename = 'export_' . now()->format('Ymd_His') . '.xlsx';

//     return \App\Exports\ExcelExportHelper::export($filename, $this->columns, $data);
// }



//     public function render()
//     {
//         $query = call_user_func([$this->modelClass, 'query']);

//         if ($this->search) {
//             $query->where(function (Builder $q) {
//                 foreach ($this->columns as $column) {
//                     $q->orWhere($column, 'like', '%'.$this->search.'%');
//                 }
//             });
//         }

//         // Apply filters
//         foreach ($this->filters as $column => $value) {
//             if ($value) {
//                 $query->where($column, 'like', '%'.$value.'%');
//             }
//         }

//         if ($this->sortColumn && in_array($this->sortColumn, $this->columns)) {
//             $query->orderBy($this->sortColumn, $this->sortDirection);
//         }

//         $rows = $query->paginate(10);

//         return view('livewire.tables.dynamic-table', [
//             'rows' => $rows,
//         ]);
//     }
// }
namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use App\Exports\ExcelExportHelper;

class DynamicTable extends Component
{
    use WithPagination;

    public string $modelClass;
    public array $columns = [];
    public string $search = '';
    public array $filters = [];
    public ?string $sortColumn = null;
    public string $sortDirection = 'asc';
    public bool $enableExport = false;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($column)
    {
        if ($this->sortColumn === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortColumn = $column;
            $this->sortDirection = 'asc';
        }
    }

    public function exportExcel()
    {
        if (!$this->enableExport) return;

        $query = $this->buildQuery();
        $data = $query->get($this->getColumnFields())->toArray();
        $filename = 'export_' . now()->format('Ymd_His') . '.xlsx';

        return ExcelExportHelper::export(
            $filename,
            $this->getColumnLabels(), // label jadi header Excel
            $data
        );
    }

    protected function buildQuery(): Builder
    {
        $query = call_user_func([$this->modelClass, 'query']);

        // Global search
        if (!empty($this->search)) {
            $query->where(function ($q) {
                foreach ($this->getColumnFields() as $field) {
                    $q->orWhere($field, 'like', '%' . $this->search . '%');
                }
            });
        }

        // Filter per kolom
        foreach ($this->filters as $field => $value) {
            if ($value !== '') {
                $query->where($field, 'like', '%' . $value . '%');
            }
        }

        // Sorting
        if ($this->sortColumn && in_array($this->sortColumn, $this->getColumnFields())) {
            $query->orderBy($this->sortColumn, $this->sortDirection);
        }

        return $query;
    }

    public function getColumnFields(): array
    {
        return array_column($this->columns, 'field');
    }

    public function getColumnLabels(): array
    {
        return array_column($this->columns, 'label');
    }

    public function render()
    {
        $query = $this->buildQuery();
        $data = $query->paginate(10);

        return view('livewire.tables.dynamic-table', [
            'rows' => $data,
        ]);
    }
}
