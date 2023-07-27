<div> {{-- MAIN DIV OPEN --}}
    {{-- {{$doctors[0]->name}} --}}
    <main>
        <div x-data="{
            tab2 : '2023-08-02', slot1: '19:00:00', tab : 1,
            sessiondata() {
                if(this.slot1) {
                Livewire.emit('timeAdded', this.tab, this.tab2, this.slot1);
            }
            }
        }">
            {{-- Dates: {{$dates->addDay()->format('d')}} <br> --}}

            <div class=" container px-5 my-5 mx-auto">
                <!-- Schedule section start  -->
                <h1 class=" text-lg font-bold leading-none hidden lg:block text-center font-title">Schedule Your Online
                    Consultation
                </h1>
                <div class=" flex gap-3">
                    <div class=" mt-1 md:hidden">
                        <img src="/assets/icons/arrow.svg" alt="">
                    </div>
                    <div>
                        <h1 class=" text-lg font-bold leading-none md:hidden font-title">Schedule Your Online</h1>
                        <h1 class=" text-lg font-bold leading-none md:hidden font-title">Consultation</h1>
                    </div>
                </div>
                <!-- Schedule section end  -->
               
                <!-- Paragraph section start  -->
                <div class=" mt-4 lg:mt-10">
                    <p class=" text-sm text-[#6B7280] md:text-center">Choose your preferred doctor and consultation
                        slot.
                        Fill in your details and you'll be one step away from receiving expert care from the comfort of
                        your
                        home.
                    </p>
                </div>
                <!-- Paragraph section end  -->

                <!-- Choose Your Doctor section start  -->
                <div class=" mt-7 lg:mt-10">
                    <div>
                        <h1 class=" font-medium md:text-center md:font-bold">Choose Your Doctor</h1>
                    </div>

                    <!-- Desktop male & female flex section start  -->
                    <div x-data="{
                wantIt: false,
                choosenClass: 'flex px-5 py-5 rounded-lg border-[#212245] border-t border-r-4 border-b-4 border-l mt-5' ,
                unChoosenClass: 'flex px-5 py-5 shadow-[0px_3px_8px_0px_rgba(0,0,0,0.14)] rounded-lg mt-5 '
                }">

                        <div class=" md:flex justify-between gap-16 2xl:mx-96 lg:mt-7" x-cloak>

                            <!-- Doctors section start  -->
                            @foreach ($doctors as $doctor)
                            <div @click="tab = {{$doctor->id}}"
                                :class="tab == {{$doctor->id}} ? choosenClass : unChoosenClass" class="cursor-pointer">
                                <div>
                                    <img src="{{$doctor->image}}" alt="" class=" w-20">
                                </div>
                                <div class=" ml-5">

                                    <h3 class=" text-sm font-medium md:font-bold">{{$doctor->name}}</h3>
                                    <span class=" text-xs text-[#6B7280]">{{$doctor->specialization}}</span>
                                    <h6 class=" text-sm font-semibold mt-3">{{$doctor->fee}}</h6>

                                </div>
                                <div>
                                    <input type="checkbox" name="" id="" class=" w-4 h-4 accent-[#212245]"
                                        @click="tab = {{$doctor->id}}" :checked="tab == {{$doctor->id}} ? true : false">
                                </div>
                            </div>
                            @endforeach
                            <!-- Doctors section end  -->
                        </div>
                    </div>
                    <!-- Desktop male & female flex section end  -->
                    {{$tabs}}

                </div>
                <!-- Choose Your Doctor section end  -->
                <p x-text="tab"></p>
                <p x-text="tab2"></p>
                <p x-text="slot1"></p>
                <!-- Month section start  -->
                <div x-data="{
                
                choosenClass: 'border border-[#878787] bg-[#212245] text-white text-center px-5 py-2 rounded cursor-pointer',
                unChoosenClass: 'border border-[#878787] text-center px-4 py-2 rounded cursor-pointer',
                }">
                    <div>
                        <div class=" mt-6 lg:mt-12 2xl:mx-96">
                            <div class=" mb-4">
                                <h1 class=" font-medium">{{$month}}</h1>
                            </div>


                            <!-- Day section start  -->
                            <div class=" flex gap-4 lg:gap-10 overflow-x-auto lg:mt-10">

                                @foreach ($periods as $period)
                                <div class="cursor-pointer" @click="tab2 = ('{{$period->format('Y-m-d')}}')"
                                    :class="tab2 == ('{{$period->format('Y-m-d')}}') ? choosenClass : unChoosenClass">
                                    <h6 class=" font-medium text-xs">{{strtoupper($period->format('D'))}}</h6>
                                    <h6 class=" font-normal text-xs text-center mt-2">{{$period->format('d')}}</h6>
                                </div>
                                @endforeach

                            </div>
                            <!-- Day section end  -->

                        </div>
                    </div>
                    <!-- June section end  -->

                    <!-- Morning Slots section start  -->
                    <div x-data="{
                 slot2: '', slot3: '',
                tab3 : {{$dates->format('d-m-Y')}},
                unavailable: 'text-[#6B7280] text-xs border border-[#D1D5D8] text-center py-2 cursor-not-allowed',
                available: 'text-xs border border-[#878787] text-center py-2 cursor-pointer',
                booked: 'text-white text-xs border border-[#878787] bg-[#212245] text-center py-2 cursor-pointer'
                }">

                        <div class=" mt-6 lg:mt-16 2xl:mx-96">
                            <div class=" mb-4">
                                <h1 class=" font-medium"> Available Morning Slots:</h1>
                            </div>
                            <!-- Time section start  -->
                            <div class=" grid grid-cols-3 gap-4 lg:gap-10 lg:grid-cols-6 lg:mt-10">
                                @foreach ($mrnghours as $hour)
                                <button :disabled="({{strtotime(date(" d-m-Y H:i:s",time()))}}>
                                    {{strtotime(date('d-m-Y H:i:s',strtotime($hour)))}}) && tab2 ==('{{
                                    $dates->format('d')
                                    }}') ? true : false "
                                    class="cursor-pointer"
                                    @click="slot1 = '{{$hour->format('H:i:s')}}'"
                                    :class=" ({{strtotime(date("d-m-Y H:i:s",time()))}} >
                                    {{strtotime(date('d-m-Y H:i:s',strtotime($hour)))}}) && tab2 ==('{{
                                    $dates->format('Y-m-d')
                                    }}') ? unavailable : slot1 ==
                                    '{{$hour->format('H:i:s')}}' ? booked : available
                                    ">{{$hour->format('h:i A')}}
                                </button>
                                @endforeach
                            </div>
                            <!-- Time section end  -->
                        </div>
                        <!-- Morning Slots section end  -->

                        <!-- Afternoon Slots section start  -->
                        <div class=" mt-6 lg:mt-16 2xl:mx-96">
                            <div class=" mb-4">
                                <h1 class=" font-medium">Afternoon Slots</h1>
                            </div>

                            <!-- Time section start  -->
                            <div class=" grid grid-cols-3 gap-4 lg:gap-10 lg:grid-cols-6 lg:mt-10">
                                @foreach ($aftnhours as $hour)
                                <button :disabled="({{strtotime(date(" d-m-Y H:i:s",time()))}}>
                                    {{strtotime(date('d-m-Y H:i:s',strtotime($hour)))}}) && tab2 ==('{{
                                    $dates->format('d')
                                    }}') ? true : false "
                                    class="cursor-pointer"
                                    @click="slot1 = '{{$hour->format('H:i:s')}}'"
                                    :class=" ({{strtotime(date("d-m-Y H:i:s",time()))}} >
                                    {{strtotime(date('d-m-Y H:i:s',strtotime($hour)))}}) && tab2 ==('{{
                                    $dates->format('Y-m-d')
                                    }}') ? unavailable : slot1 ==
                                    '{{$hour->format('H:i:s')}}' ? booked : available
                                    ">{{$hour->format('h:i A')}}
                                </button>
                                @endforeach

                            </div>
                            <!-- Time section end  -->
                        </div>
                        <!-- Afternoon Slots section end  -->

                        <!-- Evening Slots section start  -->
                        <div class=" mt-6 lg:mt-16 2xl:mx-96">
                            <div class=" mb-4">
                                <h1 class=" font-medium">Evening Slots</h1>
                            </div>

                            <!-- Time section start  -->
                            <div class=" grid grid-cols-3 gap-4 lg:gap-10 lg:grid-cols-6 lg:mt-10">
                                @foreach ($evnhours as $hour)
                                <button :disabled="({{strtotime(date(" d-m-Y H:i:s",time()))}}>
                                    {{strtotime(date('d-m-Y H:i:s',strtotime($hour)))}}) && tab2 ==('{{
                                    $dates->format('d')
                                    }}') ? true : false "
                                    class="cursor-pointer"
                                    @click="slot1 = '{{$hour->format('H:i:s')}}'"
                                    :class=" ({{strtotime(date("d-m-Y H:i:s",time()))}} >
                                    {{strtotime(date('d-m-Y H:i:s',strtotime($hour)))}}) && tab2 ==('{{
                                    $dates->format('Y-m-d')
                                    }}') ? unavailable : slot1 ==
                                    '{{$hour->format('H:i:s')}}' ? booked : available
                                    ">{{$hour->format('h:i A')}}
                                </button>
                                @endforeach

                            </div>
                            <!-- Time section end  -->
                        </div>
                    </div>
                    <!-- Evening Slots section end  -->

                    <!-- Button section start  -->
                    <div class=" flex justify-center mt-10 lg:mt-20">
                        <a
                            class="text-black lg:w-[40%] bg-[#A4CB6A] font-semibold mb-6 w-full text-center py-3 rounded-lg border-[#212245] border-t border-r-4 border-b-4 border-l">
                            <button @click="sessiondata">Proceed to Next</button>
                        </a>
                    </div>
                    <!-- Button section end  -->
                </div>
            </div>
        </div>
    </main>
</div>{{-- MAIN DIV CLOSE --}}