## Repo
`laravel-model-controller`

## Database
[[2024-02-12 - DB Movies]]

## Todo
Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.

1. create un nuovo progetto Laravel 9
2. tramite `phpMyAdmin` create un nuovo database  `laravel_model_controller`
3. importate nel vostro database la tabella `movies` in allegato
4. inserite le vostre credenziali per il database nel file `.env`
5. create un model `Movie` (`php artisan make:model Movie`)
6. create un controller che gestirà la rotta: `php artisan make:controller Guest/PageController`
7. all’interno della funzione `index()` del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card

### BONUS
Stilare il layout nei dettagli con `Sass`