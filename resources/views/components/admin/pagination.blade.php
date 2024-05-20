<nav aria-label="Page navigation example">
    <ul class="flex items-center space-x-1 h-10 text-lg">
        <li>
            <a href="#"
                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-[#2B6180] bg-white border border-e-0 border-gray-300 rounded">
                <span class="sr-only">Previous</span>
                <svg class="w-4 h-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
            </a>
        </li>
        <li>
            <a href="#"
                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-[#2B6180] bg-white border border-e-0 border-gray-300 rounded">1</a>
        </li>
        <li>
            {{-- Active Page --}}
            <a href="#"
                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-white bg-[#2B6180] border border-e-0 border-gray-300 rounded">2</a>
        </li>
        <li>
            <a href="#" aria-current="page"
                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-[#2B6180] bg-white border border-e-0 border-gray-300 rounded">3</a>
        </li>
        <li>
            <a href="#"
                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-[#2B6180] bg-white border border-e-0 border-gray-300 rounded">
                <span class="sr-only">Next</span>
                <svg class="w-4 h-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
            </a>
        </li>
    </ul>
</nav>
