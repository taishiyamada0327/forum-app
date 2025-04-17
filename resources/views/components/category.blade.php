<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    @php
    $categories = [
        [
            'id' => 1,
            'name' => 'ディスカッション',
            'icon_svg' => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>',
            'icon_color' => 'text-indigo-600',
            'topics_count' => 142
        ],
        [
            'id' => 2,
            'name' => 'コミュニティ',
            'icon_svg' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>',
            'icon_color' => 'text-green-600',
            'topics_count' => 89
        ],
        [
            'id' => 3,
            'name' => 'お知らせ',
            'icon_svg' => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline>',
            'icon_color' => 'text-orange-600',
            'topics_count' => 35
        ]
    ];
    @endphp

    @foreach($categories as $category)
    <div class="bg-white overflow-hidden shadow rounded-lg">
        <a href="{{ url('/categories/' . $category['id']) }}">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 {{ $category['icon_color'] }}">
                            {!! $category['icon_svg'] !!}
                        </svg>
                    </div>
                    <div class="ml-5">
                        <h3 class="text-lg font-medium text-gray-900">{{ $category['name'] }}</h3>
                        <p class="mt-1 text-sm text-gray-500">{{ $category['topics_count'] }} トピック</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
