        <!-- Current: "bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white", Default: "text-gray-900 hover:text-gray-900 hover:bg-gray-50" -->
        <a href="#"
            class="bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white group rounded-md px-3 py-2 flex items-center text-sm font-medium"
            aria-current="page">
            <!--
                    Heroicon name: outline/user-circle

                    Current: "text-indigo-500 group-hover:text-indigo-500", Default: "text-gray-400 group-hover:text-gray-500"
                -->
            {{ $icon ?? ' ' }}
            <span class="truncate">
                {{ $slot }}
            </span>
        </a>
