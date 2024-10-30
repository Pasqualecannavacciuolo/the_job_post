<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Comando per lanciare il progetto

```bash
composer run dev
```

# Elenco delle Route in Laravel

Esegui il seguente comando per visualizzare l'elenco delle route:

```bash
php artisan route:list --except-vendor
```

## Tutti i route registrati

| Metodo | Route      | Controller                        |
| ------ | ---------- | --------------------------------- | ----------------------------- |
| GET    | HEAD       | /                                 |                               |
| GET    | HEAD       | jobs                              | JobController@show            |
| GET    | HEAD       | jobs/{job}                        | JobController@show_details    |
| PATCH  | jobs/{job} | JobController@edit_job            |
| GET    | HEAD       | jobs/{job}/edit                   | JobController@show_edit       |
| GET    | HEAD       | login                             | SessionController@show        |
| POST   | login      | login › SessionController@login   |
| POST   | logout     | SessionController@logout          |
| GET    | HEAD       | register                          | RegisteredUserController@show |
| POST   | register   | RegisteredUserController@register |
