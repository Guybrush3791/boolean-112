## Repo
`laravel-many-to-many`

## Todo
Ciao ragazzi,
continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità **Technology**. Questa entità rappresenta le tecnologie utilizzate ed è in relazione **many to many** con i **progetti**.

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:
- creare la migration per la tabella `technologies`
- creare la `migration` per la tabella magica `project_technology`
- aggiungere alla migration `add_foreign_key` le nuove relazioni
- creare il model `Technology`
- aggiungere ai model `Technology` e `Project` i metodi per definire la relazione **many to many**
- creare factory + seeder per la tabella `Technology` (attenzione alle relazioni!)
- visualizzare nella `index` del progetto le tecnologie utilizzate, se presenti
- generare le operazioni di creazione e aggiornamento della tabella project tramite form

### Bonus 1
gestire il salvataggio dell’associazione progetto-tecnologie con opportune regole di validazione

### Bonus 2
aggiungere le operazioni CRUD per il model Technology, in modo da gestire le tecnologie utilizzate nei progetti direttamente dal pannello di amministrazione.