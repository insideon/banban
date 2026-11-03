<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 데모 프로젝트 설정
    |--------------------------------------------------------------------------
    |
    | 각 프로젝트는 고유한 URL을 가지며, 메인 페이지에서 링크로 연결됩니다.
    | url 값이 없으면 방문하기 버튼 비활성화
    | github_url 값이 없으면 GitHub 버튼 비활성화
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
            'name' => 'PL:US ESG 챌린지',
            'status' => 1,
            'url' => 'https://seoul-tourism-plaza.laravel.cloud',
            'thumbnail' => '/images/projects/plus-esg.jpg',
            'description' => '서울관광플라자 임직원 참여형 ESG 챌린지 플랫폼',
            'technologies' => ['Laravel', 'Livewire', 'Tailwind CSS'],
            'features' => [
                '회차별 ESG 미션 운영',
                '사진 업로드 실천 인증',
                '참여 현황 및 공지 안내',
            ],
            'github_url' => '',
        ],
        [
            'name' => 'ROVAN',
            'status' => 1,
            'url' => 'https://www.rovangold.com',
            'thumbnail' => '/images/projects/rovan.jpg',
            'description' => '종로3가 금공장 직판 순금 쇼핑몰',
            'technologies' => ['Laravel', 'Blade'],
            'features' => [
                '콩알금·골드바 판매',
                '맞춤 주얼리 제작 주문',
                '공장 직판 시세 안내',
            ],
            'github_url' => '',
        ],
        [
            'name' => 'RoundLink',
            'status' => 2,
            'url' => 'https://round-link.com',
            'thumbnail' => '/images/projects/roundlink.jpg',
            'description' => '체육관 통합 관리 플랫폼',
            'technologies' => ['Laravel', 'Tailwind CSS'],
            'features' => [
                '회원 및 회원권 관리',
                'PT·출석 관리',
                '매출 리포트 및 직원 관리',
            ],
            'github_url' => '',
        ],
        [
            'name' => 'MediPHR',
            'status' => 2,
            'url' => 'https://mediphr.com',
            'thumbnail' => '/images/projects/mediphr.jpg',
            'description' => '건강정보 고속도로 기반 AI 건강정보 플랫폼',
            'technologies' => ['Laravel', 'Livewire', 'Flux UI', 'Tailwind CSS'],
            'features' => [
                '마이데이터 진료기록 통합 조회',
                'AI 건강 데이터 분석',
                '의료진 진료 참고 정보 제공',
            ],
            'github_url' => '',
        ],
        [
            'name' => '해시푸드',
            'status' => 2,
            'url' => 'https://www.hashfood.io',
            'thumbnail' => '/images/projects/hashfood.jpg',
            'description' => '식자재 원가 계산 및 레피시 분석 플랫폼',
            'technologies' => ['Laravel', 'Livewire', 'Tailwind CSS'],
            'features' => [
                '식자재 원가 계산',
                '요리 레피시',
                '식자재 데이터 분석',
            ],
            'github_url' => '',
        ],
        [
            'name' => 'NextVu',
            'status' => 2,
            'url' => 'https://nextvu.banban.dev',
            'thumbnail' => '/images/projects/nextvu.jpg',
            'description' => 'AI 기반 트레이딩 전략 백테스팅 플랫폼',
            'technologies' => ['Laravel', 'Livewire', 'Tailwind CSS'],
            'features' => [
                '전략 템플릿 시스템',
                'AI 기반 전략 분석',
                '백테스팅 엔진',
            ],
            'github_url' => 'https://github.com/insideon/nextvu',
        ],
        [
            'name' => 'WB OMS',
            'status' => 3,
            'url' => 'https://wb-oms.banban.dev',
            'thumbnail' => '/images/projects/wb-oms.jpg',
            'description' => '와일드베리스 통합 주문관리 시스템',
            'technologies' => ['Laravel', 'Livewire', 'Filament'],
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
            'thumbnail' => '/images/projects/sportslink.jpg',
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
            'url' => '',
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
            'thumbnail' => '/images/projects/tubeinsight.jpg',
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
            'url' => 'https://mindport.banban.dev/',
            'thumbnail' => '/images/projects/mindport.jpg',
            'description' => '심리 케미스트리 플랫폼',
            'technologies' => ['Laravel', 'React', 'Tailwind CSS'],
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
            'thumbnail' => '/images/projects/withtoc.jpg',
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
