<?php

namespace App\Livewire;

use Livewire\Component;

class Click extends Component
{
        public $text = 'A';
      
        public function click($click)
        {
          $this->dispatch($click);
        }
      
        public function emitEventA()
        {
          $this->text = 'A';
        }
      
        public function emitEventB()
        {
          $this->text = 'B';
        }
      
        public function render()
        {
        //   return view('livewire.click');
        return view('candidate');
        }
}
