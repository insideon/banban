<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 데모 프로젝트 설정
    |--------------------------------------------------------------------------
    |
    | 각 프로젝트는 고유한 서브도메인을 가지며, 메인 페이지에서 링크로 연결됩니다.
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
        'development' => '개발 중',
        'live' => '운영 중',
        'maintenance' => '점검 중',
    ],

    'projects' => [
        [
            'name' => 'E-commerce 플랫폼',
            'status' => 'development',
            'subdomain' => 'shop',
            'description' => '현대적인 디자인의 e-commerce 플랫폼 데모',
            'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS'],
            'features' => [
                '반응형 디자인',
                '실시간 장바구니',
                '결제 시스템 연동',
            ],
            'github_url' => 'https://github.com/banban/shop-demo',
        ],
        [
            'name' => '실시간 채팅',
            'status' => 'development',
            'subdomain' => 'chat',
            'description' => '실시간 채팅 및 메시징 플랫폼',
            'technologies' => ['Laravel', 'Livewire', 'Alpine.js', 'Pusher'],
            'features' => [
                '실시간 메시지 전송',
                '읽음 확인',
                '파일 공유',
            ],
            'github_url' => 'https://github.com/banban/chat-demo',
        ],
        [
            'name' => '포트폴리오 빌더',
            'status' => 'development',
            'subdomain' => 'portfolio',
            'description' => '개발자를 위한 포트폴리오 생성 도구',
            'technologies' => ['Laravel', 'React', 'TypeScript'],
            'features' => [
                '마크다운 지원',
                'GitHub 연동',
                '커스텀 도메인',
            ],
            'github_url' => 'https://github.com/banban/portfolio-builder',
        ],
        [
            'name' => '실시간 협업 에디터',
            'status' => 'live',
            'subdomain' => 'editor',
            'description' => '여러 사용자가 동시에 작업할 수 있는 실시간 문서 편집기',
            'technologies' => ['Laravel', 'Vue.js', 'WebSocket', 'Yjs'],
            'features' => [
                '실시간 동시 편집',
                '버전 관리',
                '마크다운 지원',
            ],
            'github_url' => 'https://github.com/banban/collab-editor',
        ],
        [
            'name' => '온라인 코드 플레이그라운드',
            'status' => 'maintenance',
            'subdomain' => 'playground',
            'description' => '다양한 프로그래밍 언어를 브라우저에서 실행하고 공유할 수 있는 플랫폼',
            'technologies' => ['Laravel', 'Docker', 'Monaco Editor', 'WebAssembly'],
            'features' => [
                '20+ 프로그래밍 언어 지원',
                '코드 스니펫 공유',
                '실시간 협업',
            ],
            'github_url' => 'https://github.com/banban/code-playground',
        ],
        [
            'name' => 'AI 이미지 생성 서비스',
            'status' => 'live',
            'subdomain' => 'imagine',
            'description' => 'Stable Diffusion을 활용한 AI 이미지 생성 및 편집 서비스',
            'technologies' => ['Laravel', 'React', 'Python', 'Stable Diffusion'],
            'features' => [
                '텍스트 기반 이미지 생성',
                '이미지 편집 및 변환',
                '갤러리 공유',
            ],
            'github_url' => 'https://github.com/banban/ai-imagine',
        ],
        [
            'name' => '개발자 채용 플랫폼',
            'status' => 'development',
            'subdomain' => 'jobs',
            'description' => '개발자 특화 채용 플랫폼으로 기술 스택 기반 매칭 시스템 제공',
            'technologies' => ['Laravel', 'Next.js', 'TypeScript', 'tRPC'],
            'features' => [
                '기술 스택 기반 매칭',
                '실시간 채팅',
                '기술 면접 시스템',
            ],
            'github_url' => 'https://github.com/banban/dev-jobs',
        ],
        [
            'name' => '온라인 IDE',
            'status' => 'maintenance',
            'subdomain' => 'ide',
            'description' => '브라우저 기반의 통합 개발 환경으로 GitHub 연동 지원',
            'technologies' => ['Laravel', 'Monaco Editor', 'Docker', 'WebSocket'],
            'features' => [
                'Git 통합',
                '실시간 협업',
                '터미널 에뮬레이터',
            ],
            'github_url' => 'https://github.com/banban/web-ide',
        ],
        [
            'name' => '기술 블로그 플랫폼',
            'status' => 'live',
            'subdomain' => 'blog',
            'description' => '개발자를 위한 마크다운 기반 블로그 플랫폼',
            'technologies' => ['Laravel', 'Svelte', 'TailwindCSS'],
            'features' => [
                '마크다운 에디터',
                'SEO 최적화',
                '코드 하이라이팅',
            ],
            'github_url' => 'https://github.com/banban/tech-blog',
        ],
        [
            'name' => '시스템 모니터링 대시보드',
            'status' => 'development',
            'subdomain' => 'monitor',
            'description' => '실시간 서버 및 애플리케이션 모니터링 시스템',
            'technologies' => ['Laravel', 'Vue.js', 'WebSocket', 'Prometheus'],
            'features' => [
                '실시간 메트릭스',
                '알림 설정',
                '로그 분석',
            ],
            'github_url' => 'https://github.com/banban/sys-monitor',
        ],
        [
            'name' => 'API 테스트 플랫폼',
            'status' => 'live',
            'subdomain' => 'apitest',
            'description' => 'RESTful API 테스트 및 문서화 도구',
            'technologies' => ['Laravel', 'React', 'OpenAPI', 'Socket.io'],
            'features' => [
                'API 문서 자동화',
                '테스트 자동화',
                '팀 협업',
            ],
            'github_url' => 'https://github.com/banban/api-test',
        ],
    ],
];
