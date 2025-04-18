<div class="bg-white shadow rounded-lg overflow-hidden">
    @php
    $posts = [
        [
            'id' => 1,
            'title' => '新しいプロジェクトの始め方について',
            'user' => [
                'name' => '田中太郎',
                'profile_image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'
            ],
            'category' => [
                'id' => 1,
                'name' => 'ディスカッション'
            ],
            'created_at' => '1時間前',
            'comments_count' => 23,
            'views_count' => 156
        ],
        [
            'id' => 2,
            'title' => '最新のフレームワークアップデートについて',
            'user' => [
                'name' => '鈴木花子',
                'profile_image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'
            ],
            'category' => [
                'id' => 3,
                'name' => 'お知らせ'
            ],
            'created_at' => '3時間前',
            'comments_count' => 15,
            'views_count' => 89
        ]
    ];
    @endphp

    <div class="border-b border-gray-200 px-4 py-4 sm:px-6 bg-gray-50">
        <h2 class="text-lg font-medium text-gray-900">最新の投稿</h2>
    </div>

    <ul class="divide-y divide-gray-200">
        @forelse($posts as $post)
        <li class="hover:bg-gray-50 transition duration-150">
            <div class="px-4 py-5 sm:px-6">
                <div class="flex items-start">
                    <div class="flex-shrink-0 mr-4">
                        <img class="h-10 w-10 rounded-full" src="{{ $post['user']['profile_image'] }}" alt="{{ $post['user']['name'] }}">
                    </div>
                    <div class="flex-1 min-w-0">
                        <a href="{{ url('/posts/' . $post['id']) }}" class="text-lg font-medium text-blue-600 hover:text-blue-700 hover:underline">
                            {{ $post['title'] }}
                        </a>
                        <div class="mt-1 flex items-center">
                            <span class="text-sm font-medium text-gray-900">{{ $post['user']['name'] }}</span>
                            <span class="mx-1 text-sm text-gray-500">•</span>
                            <span class="text-sm text-gray-500">{{ $post['created_at'] }}</span>
                            <span class="mx-1 text-sm text-gray-500">•</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                {{ $post['category']['name'] }}
                            </span>
                        </div>
                    </div>
                    <div class="flex-shrink-0 ml-4 flex items-center space-x-4 text-sm text-gray-500">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1 text-gray-400">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                            <span>{{ $post['comments_count'] }}</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1 text-gray-400">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <span>{{ $post['views_count'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @empty
        <li class="px-4 py-6 text-center text-gray-500">
            投稿がありません
        </li>
        @endforelse
    </ul>
</div>
