# 서브도메인 설정 가이드

이 가이드는 banban.dev의 서브도메인 설정 방법을 설명합니다.

## 1. DNS 설정

1. DNS 제공업체의 관리 페이지에서 다음 레코드를 추가합니다:

```
# 메인 도메인
banban.dev.             A     YOUR_SERVER_IP

# 와일드카드 서브도메인
*.banban.dev.          A     YOUR_SERVER_IP
```

## 2. Nginx 설정

1. Nginx 설정 파일을 생성합니다:

```bash
sudo nano /etc/nginx/sites-available/banban.dev
```

2. 다음 설정을 추가합니다:

```nginx
# 메인 도메인 설정
server {
    listen 80;
    listen [::]:80;
    server_name banban.dev;

    root /var/www/banban/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.4-fpm.sock;
    }
}

# 서브도메인 설정
server {
    listen 80;
    listen [::]:80;
    server_name ~^(?<subdomain>.+)\.banban\.dev$;

    root /var/www/banban/demos/$subdomain/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.4-fpm.sock;
    }
}
```

3. 심볼릭 링크를 생성하고 Nginx를 재시작합니다:

```bash
sudo ln -s /etc/nginx/sites-available/banban.dev /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx
```

## 3. SSL 설정 (권장)

Let's Encrypt를 사용하여 SSL 인증서를 설정합니다:

```bash
sudo certbot --nginx -d banban.dev -d *.banban.dev
```

## 4. 프로젝트 구조

각 데모 프로젝트는 다음 구조를 따릅니다:

```
/var/www/banban/
├── public/          # 메인 사이트
└── demos/
    ├── shop/       # shop.banban.dev
    ├── chat/       # chat.banban.dev
    └── portfolio/  # portfolio.banban.dev
```

## 5. 환경 설정

각 프로젝트의 `.env` 파일에서 다음 설정을 확인합니다:

```env
# 메인 사이트 (.env)
APP_URL=https://banban.dev

# 데모 프로젝트 (.env)
APP_URL=https://{subdomain}.banban.dev
```

## 6. 보안 고려사항

1. 각 서브도메인은 독립된 환경에서 실행됩니다.
2. 데모 데이터베이스는 읽기 전용으로 설정하는 것을 권장합니다.
3. 민감한 기능은 비활성화하거나 제한합니다.
4. 각 데모는 자체 `.env` 파일을 사용하여 설정을 관리합니다.

## 7. 모니터링

1. 각 서브도메인의 접근 로그를 모니터링합니다.
2. 리소스 사용량을 모니터링하여 서버 부하를 관리합니다.
3. 보안 이벤트를 모니터링하고 적절히 대응합니다.

