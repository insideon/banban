<div class="mt-16">
    <!-- 상태 필터 -->
    <div class="mb-8 flex flex-wrap gap-3 justify-center">
        <a href="/?status=all" @class([
            'px-5 py-2.5 rounded-lg text-sm font-medium transition-all duration-200',
            'bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-lg' => $statusFilter === 'all',
            'bg-white/5 text-gray-300 hover:bg-white/10 border border-white/10' => $statusFilter !== 'all',
        ])>
            전체
        </a>
        @foreach($statusLabels as $status => $label)
            <a href="/?status={{ $status }}" @class([
                'px-5 py-2.5 rounded-lg text-sm font-medium transition-all duration-200 flex items-center gap-2',
                'bg-gradient-to-r from-emerald-500 to-emerald-600 text-white shadow-lg' => $statusFilter == $status && $status === 1,
                'bg-gradient-to-r from-yellow-500 to-yellow-600 text-white shadow-lg' => $statusFilter == $status && $status === 2,
                'bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-lg' => $statusFilter == $status && $status === 3,
                'bg-gradient-to-r from-gray-500 to-gray-600 text-white shadow-lg' => $statusFilter == $status && $status === 4,
                'bg-white/5 text-gray-300 hover:bg-white/10 border border-white/10' => $statusFilter != $status,
            ])>
                <span @class([
                    'w-2 h-2 rounded-full',
                    'bg-emerald-400' => $status === 1,
                    'bg-yellow-300' => $status === 2,
                    'bg-blue-400' => $status === 3,
                    'bg-gray-400' => $status === 4,
                ])></span>
                {{ $label }}
            </a>
        @endforeach
    </div>

    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach($projects as $project)
            <div class="group bg-white/5 backdrop-blur rounded-xl border border-white/10 hover:border-white/20 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col h-full">
                <!-- 썸네일 -->
                <div class="relative h-48 bg-black/30 overflow-hidden">
                    @if(isset($project['thumbnail']))
                        <img
                            src="{{ $project['thumbnail'] }}"
                            alt="{{ $project['name'] }}"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        >
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center p-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-white/80 mb-2">{{ $project['name'] }}</div>
                                <div class="text-sm text-white/70 max-w-sm">{{ $project['description'] }}</div>
                            </div>
                        </div>
                    @endif
                    <div class="absolute top-3 right-3">
                        <span @class([
                            'px-3 py-1.5 text-xs rounded-full backdrop-blur-md bg-white/10',
                            'text-emerald-400 font-bold' => $project['status'] === 1, // Live
                            'text-yellow-300 font-bold' => $project['status'] === 2, // Prototype
                            'text-blue-400 font-bold' => $project['status'] === 3, // Concept
                            'text-gray-400 font-bold' => $project['status'] === 4  // Legacy
                        ])>
                            {{ config('projects.status_labels.'.$project['status']) }}
                        </span>
                    </div>
                </div>

                <!-- 내용 -->
                <div class="flex flex-col flex-1 p-6">
                    <div class="flex-1">
                        <!-- 기능 목록 -->
                        <div class="space-y-1 mb-4">
                            @foreach($project['features'] as $feature)
                                <div class="text-sm text-gray-400">• {{ $feature }}</div>
                            @endforeach
                        </div>

                        <!-- 기술 스택 -->
                        <div class="my-4 flex flex-wrap gap-2">
                            @foreach($project['technologies'] as $tech)
                                <span class="px-2.5 py-1 text-xs font-medium bg-white/10 text-blue-200 rounded-full">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <!-- 버튼들 -->
                    <div class="pt-8 mt-auto border-t border-white/10 flex items-center gap-3">
                        <a
                            href="{{ $project['url'] }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="flex items-center justify-center flex-1 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white py-2 px-4 rounded-lg text-sm font-medium transition-colors"
                        >
                            방문하기
                            <svg class="w-4 h-4 ml-1.5 -mr-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        @if(isset($project['github_url']) && $project['github_url'])
                            <a
                                href="{{ $project['github_url'] }}"
                                target="_blank"
                                class="p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                aria-label="GitHub 저장소"
                            >
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8 flex justify-center">
        {{ $projects->links() }}
    </div>
</div>