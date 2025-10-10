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
    | 1. Live      - 완전히 개발 완료되어 실제 운영 중인 프로젝트
    |                (실사용자가 있고 안정적으로 운영 중)
    |
    | 2. Prototype - 개발 중이거나 베타 테스트 단계의 프로젝트
    |                (기본 기능은 작동하지만 완성되지 않음)
    |
    | 3. Concept   - 아이디어/기획 단계의 프로젝트
    |                (개발이 시작되지 않았거나 초기 단계, 데모나 목업만 존재)
    |
    | 4. Legacy    - 더 이상 유지보수하지 않는 아카이브된 프로젝트
    |                (참고용으로만 남겨둔 프로젝트)
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
            'name' => 'WB OMS',
            'status' => 3,
            'url' => 'https://wb-oms.banban.dev',
            'description' => '와일드베리스 통합 주문관리 시스템',
            'technologies' => ['Laravel', 'Livewire', 'Filament', 'PostgreSQL'],
            'features' => [
                'Wildberries API 연동',
                '자동 주문 수집 및 번역',
                'WMS 배송 관리',
            ],
            'github_url' => 'https://github.com/insideon/wb-oms',
        ],
        [
            'name' => 'SportsLink',
            'status' => 3,
            'url' => 'https://sportslink.banban.dev',
            'description' => '스포츠 아카데미 중개 서비스 플랫폼',
            'technologies' => ['Laravel', 'Livewire', 'Tailwind CSS', 'SQLite'],
            'features' => [
                '아카데미 탐색 및 검색',
                '종목별/지역별 필터링',
                '반응형 디자인',
            ],
            'github_url' => 'https://github.com/insideon/sportslink',
        ],
        [
            'name' => 'Foodlytics',
            'status' => 3,
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
            'status' => 3,
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
            'status' => 2,
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
        [
            'name' => 'WithToc',
            'status' => 1,
            'url' => 'https://withtoc.com',
            'description' => '중국 증시 뉴스 및 분석 플랫폼',
            'technologies' => ['WordPress', 'PHP', 'MySQL'],
            'features' => [
                '실적/정책/시황 분석',
                '특징주 및 산업 리포트',
                '카테고리별 기사 분류',
            ],
            'github_url' => '',
        ],
    ],
];
