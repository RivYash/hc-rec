<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    {{-- <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div> --}}


<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            <div x-data="{ open: true }" class="sm:py-5 sm:px-4">
                <button @click="open = !open" class="w-full bg-gray-200 text-gray-800 dark:text-gray-200 dark:bg-gray-800 text-left py-5 px-4  mb-2 rounded-md cursor-pointer hover:bg-gray-300 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-gray-300 hover:shadow-neon-red">
                    Update Profile Information
                </button>
                <div x-show="open" class=" bg-gray-200 text-gray-800 dark:text-gray-200 dark:bg-gray-800 text-left py-2 px-4 mb-2 rounded-md cursor-pointer shadow overflow-hidden rounded-lg mt-2">
                    @livewire('profile.update-profile-information-form')
                </div>
            </div>
            <x-section-border />
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div x-data="{ open: false }" class="py-1 px-20">
                <button @click="open = !open" class="w-full bg-gray-200 text-gray-800 dark:text-gray-200 dark:bg-gray-800 text-left py-5 px-4  mb-2 rounded-md cursor-pointer hover:bg-gray-300 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-gray-300 hover:shadow-neon-red">
                    Update Password
                </button>
                <div x-show="open" class=" bg-gray-200 text-gray-800 dark:text-gray-200 dark:bg-gray-800 text-left py-2 px-4 mb-2 rounded-md cursor-pointer shadow overflow-hidden rounded-lg mt-2">
                    @livewire('profile.update-password-form')
                </div>
            </div>
            <x-section-border />
        @endif

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
          <div x-data="{ open: false }" class="py-1 px-20">
                <button @click="open = !open" class="w-full bg-gray-200 text-gray-800 dark:text-gray-200 dark:bg-gray-800 text-left py-5 px-4  mb-2 rounded-md cursor-pointer hover:bg-gray-300 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-gray-300 hover:shadow-neon-red">
                    Additional Account Managment
                </button>
                <div x-show="open" class=" bg-gray-200 text-gray-800 dark:text-gray-200 dark:bg-gray-800 text-left py-2 px-4 mb-2 rounded-md cursor-pointer shadow overflow-hidden rounded-lg mt-2">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <div x-show="open" class=" bg-gray-200 text-gray-800 dark:text-gray-200 dark:bg-gray-800 text-left py-2 px-4 mb-2 rounded-md cursor-pointer shadow overflow-hidden rounded-lg mt-2">
                @livewire('profile.logout-other-browser-sessions-form')
                
                @endif

        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
           
         
                <div  class=" bg-gray-200 text-gray-800 dark:text-gray-200 dark:bg-gray-800 text-left py-2 px-4 mb-2 rounded-md cursor-pointer shadow overflow-hidden rounded-lg mt-2">
                    @livewire('profile.delete-user-form')
                </div>
            </div>
        @endif
       
    
            {{-- <div x-show="open" class=" bg-gray-200 text-gray-800 dark:text-gray-200 dark:bg-gray-800 text-left py-2 px-4 mb-2 rounded-md cursor-pointer shadow overflow-hidden rounded-lg mt-2">
                @livewire('profile.logout-other-browser-sessions-form')
            </div> --}}
        

        {{-- @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <x-section-border />
         
                <div  class=" bg-gray-200 text-gray-800 dark:text-gray-200 dark:bg-gray-800 text-left py-2 px-4 mb-2 rounded-md cursor-pointer shadow overflow-hidden rounded-lg mt-2">
                    @livewire('profile.delete-user-form')
                </div>
            </div>
        @endif --}}
    </div>
</div>
</x-app-layout>
