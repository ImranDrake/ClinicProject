<div> {{-- MAIN DIV OPEN --}}
  <form action="" wire:submit.prevent='submit'>

    <div class=" lg:bg-black/40 lg:px-80 lg:pt-28 lg:pb-80">
      <!-- main div open  -->
      <div class="container mx-auto lg:bg-white rounded-xl">
        <!-- parent div open  -->
        <div class="flex items-center gap-3 py-6 lg:py-0 lg:pt-3 ml-4">
          <img alt="" class="cursor-pointer w-5 lg:hidden">
          <h1 class="font-bold text-lg font-title">Your Information</h1>

        </div>
        <div class="lg:border-b lg:border-b-[Grey/300] lg:ml-2 lg:mr-2 lg:mt-3"></div>

        <div class="container mx-auto px-4">
          <div class="lg:grid-cols-2 lg:grid lg:gap-8 lg:items-center">
            <div class=" py-4 ">
              <div class="flex">
                <h3 class="font-medium block text-sm text-[#374151] ">Full Name</h3>
                <span class="relative text-[#B4173A] bottom-1 pl-1  text-lg">*</span>
              </div>
              <input type="text" name="" id="" wire:model="form.full_name"
                class="mt-2  focus:outline-none pl-4 shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)] border border-gray-300  rounded-lg w-full py-2">
                @error('form.full_name')
                <span class='text-red-500 text-xs'>{{$message}}</span>
                @enderror
            </div>

            <div class=" lg:hidden">
              <div class="flex ">
                <h3 class="font-medium text-sm text-[#374151] ">Email</h3>
                <span class="text-[#B4173A]  relative bottom-1 pl-1 text-lg">*</span>
              </div>
              <input type="text" name="" id="" wire:model="form.email"
                class="mt-2 focus:outline-none pl-4 shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)]  border border-gray-300 rounded-lg w-full py-2">
                @error('form.email')
                <span class='text-red-500 text-xs'>{{$message}}</span>
                @enderror
            </div>

            <div class=" hidden lg:block">
              <div class="flex ">
                <h3 class="font-medium text-sm text-[#374151] ">Email ID</h3>
                <span class="text-[#B4173A]  relative bottom-1 pl-1 text-lg">*</span>
              </div>
              <input type="text" name="" id="" wire:model="form.email"
                class="mt-2 focus:outline-none pl-4 shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)]  border border-gray-300 rounded-lg w-full py-2">
                @error('form.email')
                <span class='text-red-500 text-xs'>{{$message}}</span>
                @enderror
            </div>
          </div>


          <div class=" py-4 lg:py-3">
            <div class="flex relative">
              <h3 class="font-medium block text-sm text-[#374151] ">Phone Number</h3>
              <span class="text-[#B4173A]  relative bottom-1 pl-1 text-lg">*</span>
            </div>
            <input type="number" name="" id="" wire:model="form.phone_number"
              class="mt-2 form-control [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none pl-4 focus:outline-none shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)]  border border-gray-300 rounded-lg  w-full py-2">
              @error('form.phone_number')
              <span class='text-red-500 text-xs'>{{$message}}</span>
              @enderror
          </div>

          <div class="lg:py-3">
            <textarea name="" id="" cols="10" rows="8" placeholder="Briefly describe the problem"
              wire:model="description"
              class="w-full pt-3 pl-4 placeholder:text-base focus:outline-none placeholder:font-normal  placeholder:text-[#374151]  shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)] border border-gray-300 rounded-lg"></textarea>
              @error('form.description')
              <span class='text-red-500 text-xs'>{{$message}}</span>
              @enderror
          </div>
          <button
            class="text-black lg:hidden bg-[#A4CB6A] font-semibold mb-6 mt-48 w-full text-center py-3 rounded-lg border-t border-r-4 border-l border-[#212245]   border-r-[#212245] border-b-4 border-b-[#212245] border-t-[#212245]">Proceed
            to Next</button>

        </div>

        <div class="lg:border-t lg:border-t-[Grey/300] lg:mt-3 lg:ml-2 lg:mr-2"></div>

        <div class="lg:pt-6 lg:block hidden lg:px-4">
          <a href="detail-page"><button
              class="text-black text-sm  bg-[#A4CB6A] font-semibold mb-6  text-center py-1.5 px-4 rounded-lg">Confrom
              & Pay</button> </a>
          <a href="appointment"><button
              class="border text-black text-sm border-[#D1D5DB] font-semibold shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)] ml-6 rounded-lg py-1.5 px-4">Cancel</button>
          </a>


        </div>
      </div> <!-- parent div open  -->
    </div> <!-- main div close  -->
  </form>

</div> {{-- MAIN DIV CLOSE --}}