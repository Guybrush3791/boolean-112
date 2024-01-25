## Repo
`php-todo-list-json`

## Todo
Dobbiamo creare una *web-app* che permetta di leggere e scrivere una *lista di Todo*.
Deve essere anche gestita la persistenza dei dati *leggendoli da, e scrivendoli in un file JSON*.

La parte di front-end viene svolta in `VueJS` (tramite `vite`) che interroga l'API in `PHP` tramite `axios`.

La parte di back-end in `PHP`, ritorna una lista di task con il relativo stato (completato/non completato).

La parte di front-end rappresenta i task ricevuti dal back-end.

### Stack
Html, CSS, VueJS, axios, PHP

### Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che componente `VueJS` riesca a comunicare correttamente con il vostro script `PHP` (le vostre *API*).

Lo step successivo è quello di "testare" l'invio di un nuovo task, sapendo che manca comunque la persistenza lato server (ancora non memorizzate i dati da nessuna parte).

Solo a questo punto sarà utile passare alla *lettura della lista da un file JSON*.

### Bonus
- mostrare lo stato del task: se completato, barrare il testo
- permettere di segnare un task come completato facendo click sul testo
- permettere il toggle del task (completato/non completato)
- abilitare l’eliminazione di un task