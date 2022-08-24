<x-app-layout>
    <x-slot name="header">
        <form>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- ====== Table Section Start -->
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4">
                        <div class="max-w-full overflow-x-auto">
                            <table class="table-auto w-full">
                            <thead>
                                <tr class="bg-gray-600 text-center">
                                    <th
                                        class="
                                        w-1/6
                                        min-w-[160px]
                                        text-lg
                                        font-semibold
                                        text-white
                                        py-4
                                        lg:py-7
                                        px-3
                                        lg:px-4
                                        "
                                        >
                                        TSIN ID
                                    </th>
                                    <th
                                        class="
                                        w-1/6
                                        min-w-[160px]
                                        text-lg
                                        font-semibold
                                        text-white
                                        py-4
                                        lg:py-7
                                        px-3
                                        lg:px-4
                                        border-r border-transparent
                                        "
                                        >
                                        Offer ID
                                    </th>
                                    <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                     SKU
                                    </th>
                                    <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Barcode
                                  </th>
                                  <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Product Label Number
                                  </th>
                                  <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Selling Price
                                  </th>
                                  <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    RRP
                                  </th>
                                  <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Leadtime Days
                                  </th>
                                  <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Leadtime Stock (quantity)
                                  </th>
                                  <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Status
                                  </th>
                                  <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Title
                                  </th>
                                  <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Offer URL
                                  </th>
                                  <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Stock at TakeaLot
                                  </th>
                                    <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Total Stock on Way
                                    </th>
                                    <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Total Stock Cover
                                    </th>
                                    <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Total Stock at Takealot
                                    </th>
                                    <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Created Date
                                    </th>
                                    <th
                                    class="
                                    w-1/6
                                    min-w-[160px]
                                    text-lg
                                    font-semibold
                                    text-white
                                    py-4
                                    lg:py-7
                                    px-3
                                    lg:px-4
                                    "
                                    >
                                    Discount
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($response['offers'] as $offer)
                                <tr>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-[#F3F6FF]
                                        border-b border-l border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['tsin_id']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['offer_id']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-[#F3F6FF]
                                        border-b border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['sku']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['barcode']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-[#F3F6FF]
                                        border-b border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['product_label_number']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['selling_price']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['rrp']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['leadtime_days']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                       {{$offer['leadtime_stock'][0]['quantity_available']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['status']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['title']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['offer_url']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        CPT: {{$offer['stock_at_takealot'][0]['quantity_available']}} <br>
                                        JHB: {{$offer['stock_at_takealot'][1]['quantity_available']}} <br>
                                        Total: {{$offer['stock_at_takealot'][0]['quantity_available'] + $offer['stock_at_takealot'][1]['quantity_available']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['total_stock_on_way']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['total_stock_cover']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['stock_at_takealot_total']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['date_created']}}
                                    </td>
                                    <td
                                        class="
                                        text-center text-dark
                                        font-medium
                                        text-base
                                        py-5
                                        px-2
                                        bg-white
                                        border-b border-r border-[#E8E8E8]
                                        "
                                        >
                                        {{$offer['discount']}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
 <!-- ====== Table Section End -->
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (isset($current_page))
            @php
                $prev = $current_page - 1;
            @endphp

            @if ($current_page >= 1 && $numOfpages > $current_page)
            <a href="{{url('takealotoffers/'.$prev)}}" class="text-xl p-4 mr-10 bg-gray-600 text-white">&laquo; Prev. Page</a>
            <a href="{{url('takealotoffers/'.$next_page)}}" class="text-xl p-4 ml-10 bg-gray-600 text-white">Next Page &raquo;</a>
            @endif
            @endif
        </div>
    </div>
</x-app-layout>
