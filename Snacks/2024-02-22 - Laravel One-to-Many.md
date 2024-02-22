## Repo
`laravel-one-to-many`

## Todo
Generare nuovo progetto **SENZA** auth (utilizzare la tecnica 2 per la creazione progetti: [[New Laravel Project#Progetto con SASS + Bootstrap (template)|Progetto con SASS + Bootstrap]])

Iniziamo con il definire `migration`, e poi `model` + `factory` + `seeder` per la tabella `Project` con un paio di campi a piacere.

Definire poi `migration` + `model` + `factory` + `seeder` per la tabella `Type`. Questa entità rappresenta la tipologia di progetto ed è in relazione `one-to-many` con i **progetti**.

Per ogni tabella seguire i seguenti passaggi:
- creare migration + verifica in `phpMyAdmin`
- creare `model` + `factory` + `seeder` e verificare la presenza di dati *fake* all'interno del db (*attenzione* alle relazioni!)
- creare un `controller` dedicato per ogni singola entita' 
- definire la funzione `index` per ogni `controller`, associarla ad una rotta nel `web.php`, e fare in modo che la funzione ritorni l'intero contenuto della tabella associata
- definire una `view` per ogni rotta specificata e stampare l'entita' principale cosi' come le entita' associate (se presenti)

- creare la migration per la tabella types
- creare il model Type
- creare la migration di modifica per la tabella projects per aggiungere la chiave esterna
- aggiungere ai model Type e Project i metodi per definire la relazione one to many
- visualizzare nella pagina di dettaglio di un progetto la tipologia associata, se presente
- permettere all’utente di associare una tipologia nella pagina di creazione e modifica di un progetto
- gestire il salvataggio dell’associazione progetto-tipologia con opportune regole di validazione

### Bonus 1
Dare la possibilita' all'utente di eliminare un **progetto**