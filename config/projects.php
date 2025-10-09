<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 데모 프로젝트 설정
    |--------------------------------------------------------------------------
    |
    | 각 프로젝트는 고유한 URL을 가지며, 메인 페이지에서 링크로 연결됩니다.
    | github_url 값이 없으면 버튼 비활성화
    |
    */

    /*
    |--------------------------------------------------------------------------
    | 프로젝트 상태 설정
    |--------------------------------------------------------------------------
    |
    | 각 상태별 표시 방법을 설정합니다.
    |
    */
    'status_labels' => [
        1 => 'Live',
        2 => 'Prototype',
        3 => 'Concept',
        4 => 'Legacy',
    ],

    'projects' => [
        [
            'name' => 'Foodlytics',
            'status' => 2,
            'url' => 'https://foodlytics.banban.dev',
            'description' => '음식 분석 플랫폼',
            'technologies' => ['Next.js', 'TypeScript', 'Supabase', 'Tailwind CSS'],
            'features' => [
                '음식 데이터 분석',
                '실시간 대시보드',
                '반응형 디자인',
            ],
            'github_url' => 'https://github.com/insideon/foodlytics',
        ],
        [
            'name' => 'TubeInsight',
            'status' => 2,
            'url' => 'https://tube-insight.banban.dev',
            'description' => '유튜브 채널 성과 분석 사이트',
            'technologies' => ['Laravel', 'Livewire', 'Filament', 'Tailwind CSS', 'YouTube API'],
            'features' => [
                '채널 성과 분석',
                '실시간 데이터 시각화',
                '반응형 디자인',
            ],
            'github_url' => 'https://github.com/insideon/tube-insight',
        ],
        [
            'name' => 'MindPort',
            'status' => 1,
            'url' => 'https://mindport.io',
            'description' => '심리 케미스트리 플랫폼',
            'technologies' => ['Laravel', 'React', 'Tailwind CSS', 'PostgreSQL'],
            'features' => [
                '심리 테스트',
                '심리 케미스트리',
                '반응형 디자인',
            ],
            'github_url' => '',
        ],
    ],
];
