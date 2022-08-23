<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @foreach($response['sales'] as $sale)
    Member ID: {{ $sale['order_id'] }}
   @endforeach

   @if (isset($current_page))
   @php
     $prev = $current_page - 1;
   @endphp

   @if ($current_page >= 1 && $numOfpages > $current_page)
   <a href="{{url('takealotsales/'.$prev)}}" class="text-3xl">Previous</a>
   <a href="{{url('takealotsales/'.$next_page)}}" class="text-3xl">Next</a>
   @endif
   @endif
</x-app-layout>
