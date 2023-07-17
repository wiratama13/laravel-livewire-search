<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;
class StudentTable extends Component
{
    public $search = '';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.student-table',[
            'students' => Student::where('name','LIKE','%'. $this->search .'%')->paginate(5)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
