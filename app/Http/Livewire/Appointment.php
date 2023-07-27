<?php

namespace App\Http\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class Appointment extends Component
{

    public $counts = [];
    public $doctors;
    public $dates;
    public $month;
    public $date;
    public $day;
    public $startDate;
    public $endDate;

    public $tabs;
    // public $periods;

    public function booking($tab)
    {
        $this->tabs = $tab;
    }

    public $listeners = ['timeAdded' => 'time_booking'];
    public function time_booking($doctor_id,$book_date,$book_time){
        session(['tab'=>$doctor_id]);
        session(['tab2'=>$book_date]);
        session(['slot1'=>$book_time]);
        return redirect()->to('/information');
        
    }
    public function mount()
    {
        $this->doctors = Doctor::all();
        $this->dates = Carbon::now();
        $this->month = Carbon::today()->format('F');
        //$this->date = Carbon::today();
        //$this->day = Carbon::today();
        $this->startDate = Carbon::now()->copy();;
        $this->endDate = Carbon::now()->copy()->addDays(6);
    }
    public function sessiondata1()
    {
        $this->emit('postAdded',);
        // dd('Testing');
    }

    public function render()
    {
        $hours = [];
        $hoursSplit = [];
        $mrngStartPeriod = Carbon::parse('10:00');
        $mrngEndPeriod   = Carbon::parse('12:30');
        $time = CarbonPeriod::create($mrngStartPeriod, '30 minutes', $mrngEndPeriod);
        foreach ($time as $date) {
            $mrnghours[] = $date;
        }
        $aftnStartPeriod = Carbon::parse('14:00');
        $aftnEndPeriod   = Carbon::parse('16:00');
        $time2 = CarbonPeriod::create($aftnStartPeriod, '30 minutes', $aftnEndPeriod);
        foreach ($time2 as $date) {
            $aftnhours[] = $date;
        }
        $evnStartPeriod = Carbon::parse('17:30');
        $evnEndPeriod   = Carbon::parse('19:00');
        $time3 = CarbonPeriod::create($evnStartPeriod, '30 minutes', $evnEndPeriod);
        foreach ($time3 as $date) {
            $evnhours[] = $date;
        }

        $periods  = CarbonPeriod::create($this->startDate, $this->endDate);
        //dd($evnhours);

        return view('livewire.appointment', [
            'periods' => $periods,
            'time' => $time,
            'mrnghours' => $mrnghours,
            'aftnhours' => $aftnhours,
            'evnhours' => $evnhours
        ]);
    }
}
