@php
    
@endphp

@extends('components.layout.onboarding')

@section('title') OJT Information - Step 5 @endsection

@section('subcontent')
<div class="relative z-10 flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">
    <!-- <div class="sm:mx-auto sm:w-full sm:max-w-md -mb-8 relative z-10">
        <img src="{{ asset('img/roc-logo.png') }}" alt="ROC.PH Logo" class="px-3 h-auto w-auto">
    </div> -->

    <div class="sm:mx-auto sm:w-full sm:max-w-2xl bg-white shadow-xl rounded-lg p-10">
        <h2 class="mt-2 text-left text-2xl/9 font-bold tracking-tight text-gray-900">OJT Coordinator/Adviser
        </h2>

        <div class="mt-10">
            <form class="space-y-6" action="{{ route('onboarding.step5') }}" method="POST">
                @csrf
                
                <div class="w-full flex gap-3">
                    <x-form.input type="text" name="first_name" id="first_name" label="First Name" required />

                    <x-form.input type="text" name="middle_name" id="middle_name" label="Middle Name" required />

                    <x-form.input type="text" name="last_name" id="last_name" label="Last Name" required />

                    <x-form.input class="" type="text" name="suffix" id="suffix" label="Suffix" required />
                </div>
                
              

                <x-form.input type="text" name="Position" id="Position" label="Position" required />
                
                <x-form.input type="text" name="Contact Number" id="Contact Number" label="Contact Number" required />

                <x-form.input type="text" name="Email Address" id="Email Address" label="Email Address" required />


                <div class="w-full flex justify-end">
                    <button type="submit"
                        class="flex w-fit justify-center rounded-md bg-primary px-5 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-primary/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary/60">Next</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold text-primary/80 hover:text-primary-500">Login now</a>
            </p>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{{-- ... --}}
@endsection
