<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class TasksList extends Component
{
    use WithPagination;

    public function placeholder()
    {
        return view('skeleton');
    }

    #[Computed()]
    public function tasks()
    {
        return auth()->user()->tasks()->orderBy('id', 'desc')->paginate(5);
    }

    #[On('task-created')]
    public function taskCreated()
    {
        unset($this->tasksByStatus);
    }

    public function render()
    {
        // return view('livewire.tasks.tasks-list', [
        //     'tasks' => auth()->user()->tasks()->orderBy('id', 'desc')->paginate(5)
        // ]);
        return view('livewire.tasks.tasks-list');
    }
}
