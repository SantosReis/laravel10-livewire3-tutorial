<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class TasksList extends Component
{
    use WithPagination;

    #[Computed()]
    public function tasks()
    {
        return auth()->user()->tasks()->orderBy('id', 'desc')->paginate(5);
    }

    public function render()
    {
        return view('livewire.tasks.tasks-list');
    }
}
