## Repo
`laravel-event-platform`

## Teams
![[Pasted image 20240229112032.png]]

### Leader:
- team 1: Kaid Grabriele Abu Madegem
- team 2: Davide Prencipe
- team 3: Gabriele Di Rocco 
- team 4: Sara Affro
- team 5: Martina Ambrosini
- team 6: Francesco Fabbri Rebecchi
- team 7: Filippo Cafaro
- team 8: Alessio Rugi
- team 9: Grabriele Palma
- team 10: Jacopo Biagi
- team 11: Giuseppe Riccardo Pugliese

## Todo
> [!attention] ATTENZIONE
> - approfittate del lavoro in team per pianificare il lavoro da farsi per ogni milestone e soprattutto per aiutarvi a vicenda
> - avrete a disposizione **SOLO 1 TICKET AL GIORNO**
### Giorno 1
Oggi inizieremo a sviluppare un sistema di gestione Eventi utilizzando *Laravel* + *VueJS*. Questo progetto si arricchirà di nuove funzionalità nei prossimi giorni, ma per ora ci concentreremo sulla gestione dei eventi da back-office e sul loro collegamento ai tag. Per oggi concentratevi su queste milestone:  
#### SETUP PROGETTO
Clonazione, connessione al database, file `.env` e avvio.

#### AUTENTICAZIONE
Iniziamo con l'autenticazione creando un layout di back-office e riorganizzando la dashboard come già visto. 

#### EVENT
Creazione del modello con relativa migrazione, seeder, controller e rotte.  

#### TAG
Creazione del modello relativo, migrazione, seeder, controller e rotte. Questo rappresenterà i tag utilizzati per categorizzare gli eventi.  

#### RELAZIONE EVENT-TAG
Aggiungiamo la relazione **many-to-many** tra `Tag` e `Event` nei relativi modelli (avrete bisogno anche di una migration).  

#### CRUD
Utilizzate il resource controller `Admin\EventController` creato prima per gestire tutte le operazioni CRUD degli Event. 

#### BONUS  
##### RELAZIONE EVENT-USER
Definire relazione di tipo *one-to-many* tra `Event` e `User`.

##### SEEDER - 1
Creare un seeder per gli utenti.

##### SEEDER - 2
Collegare nei seeder degli `Event`, uno `User` casuale per ogni evento creato.

### Giorno 2
#### BONUS GIORNO 1
Se non sono stati fatti, recuperare i [[#Bonus|bonus del giorno 1]]
#### PROTEGGERE ROTTE IN SCRITTURA
Le rotte che permettono di scrivere sul db devono essere protette da autenticazione in modo che solo gli utenti registrati possano effettuare questo tipo di operazioni.

#### INTEGRAZIONE USER IN EVENT CREATE
Durante la fase di creazione di un nuovo evento, recuperare l'utente collegato all'evento dall'utente che ha effettuato l'operazione (login).

#### MODIFICHE INDIVIDUALI
Ogni utente puo' modificare/eliminare **SOLO** gli eventi che sono a lui/lei associati.

#### FRONT-END PUBBLICO
Dopo aver sviluppato un controller dedicato ai servizi **REST**, creare un progetto in **VueJS** che permetta la visualizzazione dei dati presenti in db (solo lettura).

#### BONUS 2
##### Custom login form
Definire un proprio form di login custom da posizionare all'interno della pagina.

### Giorno 3
#### DEFINIRE API PER L'ENTITA' TAG
Nel progetto *Laravel* aggiungere un `Controller`  di tipo *REST* per la visualizzazione dei tag via *API*.

#### INSTALLARE VUE-ROUTE
Installare `vue-route@4` via `npm` come visto a lezione e creare 2 pagine separate:
- ##### Home
	Contenente la lista e la `show` degli `Event`
- ##### Tags
	Contenente la lista ela `show` sui `Tag`
- ##### About
	Contenente una semplice pagina di descrizione degli autori

Da ogni pagina deve essere possibile raggiungere l'altra attraverso un link.

## Note
Ogni milestone dovrebbe coincidere con *ALMENO*:  
- un confronto col team sul da farsi  
- una commit individuale sul **proprio branch** 
- uno merge sul branch **main**
- un confronto col team su quanto si è fatto  