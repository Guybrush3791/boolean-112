# Update vault
Per aggiornare il **valut** aggiornare il repository da *GitHub*:

### Da riga di comando
Aprire terminale nella cartella principale del **valut** e dare il seguente comando:
```sh
git pull
```

In caso di errore, eliminare tutte le modifiche locali (ad eccezione della cartella Personal):
```sh
git stash
git pull
```

### Da Obsidian
Aprire il prompt di comandi con `CTRL + P`
![[Pasted image 20240122125333.png|300]]
Eseguire il comando `Obsidian git: pull`

> [!attention] IN CASO DI ERRORE
> 
> Eliminare le modifiche locali
> `CTRL + P` --> `Obsidian git: CAUTITION: Discard all changes`

