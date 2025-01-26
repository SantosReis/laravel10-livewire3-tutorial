<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class TaskForm extends Form
{
    #[Rule('required|min:5')]
    public $title;
    #[Rule('required|min:5')]
    public $slug;
    #[Rule('required|min:5')]
    public $description;
    #[Rule('required')]
    public $status;
    #[Rule('required')]
    public $priority;
    #[Rule('required')]
    public $deadline;

    public function createTask()
    {
            auth()->user()->tasks()->create($this->all());
            $this->reset();
            request()->session()->flash('success', __('Task created successfully'));
    }
}
