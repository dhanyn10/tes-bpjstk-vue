# BPJS
Berikut ini adalah panduan cara menjalankannya:
1. Pastikan untuk menginstall docker desktop dan docker compose di komputer
2. jalankan apps dengan menggunakan command
    ```bash
    docker-compose up -d
    ```
3. untuk melanjutkan menggunakan fungsi auto-generate database, tunggu dulu >= 10 detik setelah command sebelumnya selesai, lalu jalankan command
    ```bash
    docker exec bpjs-api php artisan migrate
    ```