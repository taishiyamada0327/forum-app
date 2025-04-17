<div class="bg-white shadow overflow-hidden sm:rounded-md">
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

    <ul class="divide-y divide-gray-200">
        @forelse($posts as $post)
        <li>
            <div class="px-4 py-4 sm:px-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img class="h-10 w-10 rounded-full" src="{{ $post['user']['profile_image'] }}" alt="{{ $post['user']['name'] }}">
                        <div class="ml-4">
                            <a href="{{ url('/posts/' . $post['id']) }}" class="text-lg font-medium text-indigo-600 hover:text-indigo-700">
                                {{ $post['title'] }}
                            </a>
                            <div class="mt-1">
                                <span class="text-sm text-gray-500">
                                    投稿者: {{ $post['user']['name'] }} • {{ $post['created_at'] }}
                                </span>
                                <span class="ml-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    {{ $post['category']['name'] }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                        <div>
                            <span class="font-medium">{{ $post['comments_count'] }}</span> 返信
                        </div>
                        <div>
                            <span class="font-medium">{{ $post['views_count'] }}</span> 閲覧
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
