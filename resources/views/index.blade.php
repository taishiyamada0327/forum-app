@extends('layouts.app')

@section('title', 'フォーラム - ホーム')

@section('content')
    @include('components.header')

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2">
            @include('components.post')
        </div>

        <div class="lg:col-span-1">
            <div class="bg-white shadow rounded-lg mb-6">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        人気のトピック
                    </h3>
                    <div class="mt-4 space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                    <path d="M12 20v-6M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.592V14z"></path>
                                    <path d="M12 14l-6.16-3.422a12.083 12.083 0 00-.665 6.479A11.952 11.952 0 0112 20.592V14z"></path>
                                    <circle cx="12" cy="5" r="3"></circle>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <a href="#" class="text-sm font-medium text-gray-900 hover:text-blue-600">
                                    最新フレームワークの使い方
                                </a>
                                <p class="mt-1 text-xs text-gray-500">
                                    24件のコメント・1.2K閲覧
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                    <path d="M12 20v-6M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.592V14z"></path>
                                    <path d="M12 14l-6.16-3.422a12.083 12.083 0 00-.665 6.479A11.952 11.952 0 0112 20.592V14z"></path>
                                    <circle cx="12" cy="5" r="3"></circle>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <a href="#" class="text-sm font-medium text-gray-900 hover:text-blue-600">
                                    データベース設計のベストプラクティス
                                </a>
                                <p class="mt-1 text-xs text-gray-500">
                                    47件のコメント・2.5K閲覧
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                    <path d="M12 20v-6M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.592V14z"></path>
                                    <path d="M12 14l-6.16-3.422a12.083 12.083 0 00-.665 6.479A11.952 11.952 0 0112 20.592V14z"></path>
                                    <circle cx="12" cy="5" r="3"></circle>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <a href="#" class="text-sm font-medium text-gray-900 hover:text-blue-600">
                                    CI/CDパイプラインの構築方法
                                </a>
                                <p class="mt-1 text-xs text-gray-500">
                                    18件のコメント・980閲覧
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        カテゴリー
                    </h3>
                    <div class="mt-4 space-y-3">
                        @php
                        $categories = [
                            [
                                'id' => 1,
                                'name' => 'ディスカッション',
                                'icon_svg' => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>',
                                'icon_color' => 'text-blue-600',
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
                        <a href="{{ url('/categories/' . $category['id']) }}" class="flex items-center p-3 rounded-md hover:bg-gray-50">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 {{ $category['icon_color'] }}">
                                    {!! $category['icon_svg'] !!}
                                </svg>
                            </div>
                            <div class="ml-3 flex-1">
                                <span class="text-sm font-medium text-gray-900">{{ $category['name'] }}</span>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800">
                                    {{ $category['topics_count'] }}
                                </span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
