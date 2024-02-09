# Nuovo progetto Laravel
## Progetto vuoto
### Creazione progetto da riga di comando
Dopo aver aperto il terminale nella cartella dove si desidera creare il progetto, lanciare uno dei due seguenti comandi:
```sh
composer create-project --prefer-dist laravel/laravel=9.2 HelloWorldProject

composer create-project --prefer-dist laravel/laravel:^9.2 HelloWorldProject
```

### Aprire progetto in VSCode
Il comando precedente genera una cartella con lo stesso nome del progetto, aprirla con `VSCode`
![[Pasted image 20240208123045.png|500]]

### Lanciare il server
All'interno del terminal di `VSCode` lanciare il seguente comando:
```sh
php artisan serve
```

### Aprire la pagina web
Una volta lanciato il server, la pagina di default puo' essere aperta nel browser all'indirizzo `http://localhost:8000`
![[Pasted image 20240208123411.png|500]]
## Progetto con SASS + Bootstrap (template)
### Template ufficiale
Repository: `https://github.com/Guybrush3791/bool-112-laravel-base`

### Creare repository basato su template
Aprire il link al `repository` che fa da `template` ([link](https://github.com/Guybrush3791/bool-112-laravel-base)) e generare un nuovo `repository` usando quello linkato come template
![[Pasted image 20240209115747.png]]

Creare un normale `repository` avendo cura di selezionare `bool-112-laravel-base` come template e definire il nome del progetto
![[Pasted image 20240209114050.png]]

### Clonare il repository in locale
Attraverso `VSCode` o i comandi da terminale di `git` clonare il repository appena creato
![[Pasted image 20240209114433.png]]

### Aprire progetto
Aprire con `VSCode` la cartella appena creata attraverso il `git`
![[Pasted image 20240209114715.png]]

### Back-end
Dopo aver installato le dipendenze lato `back-end`, lanciare il `php artisan serve`
```sh
composer update
php artisan serve
```

### Front-end
Dopo aver installato le dipendenze lato `front-end`, lanciare il `npm run dev`
```sh
npm i
npm run dev
```

### File `.env`
Clonare il file `.env.example` e rinominarlo `.env`. Dopo aver impostato eventuali credenziali (db, mail, ecc), validare l'`APP_KEY` attraverso il seguente comando
```sh
php artisan key:generate
```

### Verifica finale
Aprire il progetto, posizionando il browser all'indirizzo `http://localhost:8000/` e testare il corretto funzionamento di `Laravel` con `SCSS` e `Bootstrap (CSS + JS)`.