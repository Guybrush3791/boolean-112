# Nuovo progetto Laravel
## Creazione progetto da riga di comando
Dopo aver aperto il terminale nella cartella dove si desidera creare il progetto, lanciare uno dei due seguenti comandi:
```sh
composer create-project --prefer-dist laravel/laravel=9.2 HelloWorldProject

composer create-project --prefer-dist laravel/laravel:^9.2 HelloWorldProject
```

## Aprire progetto in VSCode
Il comando precedente genera una cartella con lo stesso nome del progetto, aprirla con `VSCode`
![[Pasted image 20240208123045.png|500]]

## Lanciare il server
All'interno del terminal di `VSCode` lanciare il seguente comando:
```sh
php artisan serve
```

## Aprire la pagina web
Una volta lanciato il server, la pagina di default puo' essere aperta nel browser all'indirizzo `http://localhost:8000`
![[Pasted image 20240208123411.png|500]]