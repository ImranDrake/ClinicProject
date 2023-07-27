<?php

namespace App\Http\Livewire;

use App\Models\Consultation;
use App\Models\Patient;
use Livewire\Component;
use Psy\Readline\Hoa\Console;

class Information extends Component
{
    public $form = [
        'full_name' => '',
        'email' => '',
        'phone_number' => ''
        //'description' => ''
    ];
    public $description;
   

    public function submit() {
       
      
        $this->validate([
            'form.full_name' => 'required',
            'form.email' => 'required',
            'form.phone_number' => 'required',
            //'form.description' => 'required',
        ]);
       $patientid = Patient::create($this->form);

       session(['patient_name' => $patientid->id]);
       
       $consultation = Consultation::create([
        'doctor_id' =>  session('tab'),
        'patient_id'=> $patientid->id,
        'consultation_date_time' => session('tab2').' '.session('slot1'),
        'health_concerns' => $this->description,
       ]);

       session(['consultation_name' => $consultation->id]);
       

        return redirect()->to('confirm');
    }
    public function render()
    {
        return view('livewire.information');
    }
}
