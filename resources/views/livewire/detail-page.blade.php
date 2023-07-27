<div> {{-- MAIN DIV OPEN --}}
    
    <div> <!-- main div open  -->
        <div class="lg:mx-40 lg:pt-28"> <!-- parent div open  -->
            <div>
                <div class="flex justify-center mt-10 lg:hidden">

                    <img src="/assets/icons/booking-success.svg" alt="">
                </div>
                <h1 class="text-center font-bold px-10 font-title mt-4 text-xl lg:text-2xl">Appointment Successfully Booked</h1>
                <span class="text-center block px-5 text-[#6B7280] mt-3 lg:text-xl lg:mt-9">Thank you for trusting us with your
                    healthcare.
                    We're looking forward to helping you!"</span>
            </div>

            <div class="lg:px-20 lg:mt-6">
            <h3 class="font-medium text-lg px-5 mt-5 lg:hidden">Your Appointment Details</h3>
            <div class="lg:flex lg:justify-center lg:gap-16">
                <div class="px-5 mt-4 lg:w-[45%] lg:min-w-max">
                    <h2 class="lg:font-medium lg:text-lg lg:text-center  hidden lg:block lg:mt-5">Your Appointment Details</h2>
                    <div class=" shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07) border rounded-lg py-5  lg:pt-0 pb-3 lg:pb-0 lg:w-full lg:mt-10">
                        <div class="flex gap-6 px-4 lg:px-4 lg:py-6 lg:items-center">
                            <img src="{{$doctorid->image}}" alt="">
                            <span class="text-lg font-medium">{{$doctorid->name}}</span>
                        </div>
                        <div class="border-b border-b-[#D1D5D8] ml-2 mr-2 mb-3 mt-3 lg:mt-0 lg:mb-0 lg:border"></div>
                        <div class="px-4 mt-4 lg:mt-0 gap-3  lg:py-6 flex justify-between lg:flex lg:justify-between">
                            <div class="flex items-center gap-2 font-normal lg:flex lg:justify-between lg:items-center">
                                <img src="/assets/icons/calender.svg" alt="">
                                <span>{{session('tab2')}}</span>
                            </div>
                            <div class="flex items-center gap-2 font-normal">
                                <img src="/assets/icons/time.svg" alt="">
                                <span>{{date("h:i A", strtotime(session('slot1')))}}</span>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="px-5 mt-5 lg:mt-4 lg:w-[40%] lg:min-w-max">
                    <h3 class="font-medium text-lg px-5 mt-4 lg:text-center hidden lg:block">Payment Details</h3>
                    <div class="border lg:py-4 shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)] rounded-lg lg:mt-10 lg:py-7">
                        <h1 class="font-medium text-lg px-3 py-3 lg:hidden">Payment Details</h1>
                        <div class="flex px-6 justify-between gap-3 ">
                            <span class="font-normal lg:text-[#6B7280]">Consultation Fees</span>
                            <span class="text-[#6B7280]">{{$doctorid->fee}}</span>
                        </div>
                        <div class="flex px-6 justify-between lg:py-3 py-3">

                            <span class="font-normal text-[#6B7280]"> VAT (0%)</span>
                            <span class="text-[#6B7280]">$0</span>
                        </div>
                        <div class="border-b border-b-[#878787] ml-2 mr-2 mt-2 mb-3 lg:mt-0 lg:mb-0"></div>

                        <div class="flex px-6 justify-between pb-4 gap-3 lg:pb-0 lg:py-4">
                            <span class="font-normal">Total Payable</span>
                            <span class="text-black">{{$doctorid->fee}}</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>


            <div class="mt-7 px-7 lg:hidden">

                <h1 class=" text-center font-medium text-base underline ">What Happens Next?</h1>

                <div class="relative  ">
                    <div class="border bg-black rounded-full w-1.5 h-1.5 absolute left-0 top-2"></div>
                    <p class="text-start text-sm mt-4 ml-5">At your appointment time, please ensure you have a stable
                        internet connection and your WhatsApp is open. Our doctor will initiate the video call.</p>
                </div>

                <div class="relative ">
                    <div class="border bg-black rounded-full w-1.5 h-1.5 absolute left-0 top-2"></div>
                    <p class="text-start text-sm mt-4 ml-5">A confirmation message with all these details and further
                        instructions for the consultation has been sent to your WhatsApp.</p>
                </div>
            </div>
            <div class="px-5 ">
                <button
                    class="text-black lg:hidden bg-[#A4CB6A] font-semibold mb-6 mt-7 w-full text-center py-3 rounded-lg border-t border-r-4 border-l border-[#212245]   border-r-[#212245] border-b-4 border-b-[#212245] border-t-[#212245]">Back
                    to Home</button>

            </div>

            <div class="mt-7 lg:mt-14 lg:px-7 hidden lg:block">
                <h1 class=" text-center font-medium text-base underline ">What Happens Next?</h1>

                <ul class="text-center list-disc list-inside lg:mt-7 text-sm ">
                    <li>At your appointment time, please ensure you have a stable
                        internet connection and your WhatsApp is open. Our doctor will initiate the video call.</li>
                        <ul class="text-center list-disc list-inside lg:mt-5 text-sm">
                            <li>A confirmation message with all these details and further
                                instructions for the consultation has been sent to your WhatsApp.</li>
                        </ul>
                </ul>
            </div>

            <div class="lg:flex hidden justify-center lg:mt-12">
                <a href="/"><button
                    class="text-black  bg-[#A4CB6A] font-semibold mb-6 mt-6 lg:px-28 lg:py-2 lg:text-base text-center py-3 rounded-lg border-t border-r-4 border-l border-[#212245]   border-r-[#212245] border-b-4 border-b-[#212245] border-t-[#212245]">Back
                    to Home</button></a>

            </div>


        </div> <!-- parent div close  -->
    </div> <!-- main div close  -->
    
</div> {{-- MAIN DIV CLOSE --}}
