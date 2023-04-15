<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentGradeIndex extends Component
{
    public $showingPostModal = false;

    public function showPostModal()
    {
        $this->reset();
        $this->showingPostModal = true;
    }
    
    public function render()
    {
        return view('livewire.student-grade-index');
    }
}
