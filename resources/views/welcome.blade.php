<x-guest-layout>
    <div class="relative flex justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:tracking-tight">
            <span class="block">Ready to dive in?</span>
            <span class="block text-indigo-600">Control your Takealot seller panel!</span>
        </h2>
        </div>
        <div class="bg-gray-50 mar">
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0 m-3">
            @if (Route::has('login'))
            <div class="fixed px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Go to Your Seller Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">Not to register yet? Get started</a>
                    @endif
                @endauth
            </div>
            @endif
        </div>
        </div>
    </div>
    </div>
</x-guest-layout>
