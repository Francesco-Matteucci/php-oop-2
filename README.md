# E-commerce per Animali

Un progetto di e-commerce per la vendita di prodotti per animali domestici. Questo progetto include diverse funzionalità, come la gestione del login, uno sconto per gli utenti autenticati e una struttura ben organizzata in PHP con OOP.

## Funzionalità Implementate

- **Login e Logout degli Utenti**: Gli utenti possono effettuare il login utilizzando un'email valida e una password. Le credenziali valide sono fornite nel file `login.php`. 

- **Sconto del 20% per Utenti Autenticati**: Gli utenti che effettuano il login ricevono uno sconto del 20% sui prodotti visualizzati.

- **Organizzazione del Codice**:
  - **PHP OOP**: I prodotti sono strutturati utilizzando classi e sottoclassi per organizzare le informazioni. Le classi utilizzate includono `Product`, `Category`, `Food`, `Toy` e `Bed`.
  - **Separazione delle Responsabilità**: Il progetto è suddiviso in più file per separare le varie responsabilità (e.g., `header.php`, `footer.php`, `db.php`).

- **Visualizzazione Prodotti**: I prodotti sono visualizzati in una griglia all'interno della pagina principale (`index.php`). Gli utenti autenticati vedono sia il prezzo originale che il prezzo scontato dei prodotti.

## Struttura del Progetto

- **index.php**: La pagina principale che visualizza tutti i prodotti disponibili. Gestisce anche la logica di sessione per determinare se un utente è loggato e mostrare lo sconto sui prodotti.
- **login.php**: Gestisce il login degli utenti, permettendo di accedere all'applicazione con le credenziali valide.
- **logout.php**: Distrugge la sessione corrente, permettendo agli utenti di disconnettersi.
- **db.php**: Contiene i dati dei prodotti, organizzati come oggetti PHP per una gestione più pulita e orientata agli oggetti.
- **header.php e footer.php**: Include l'intestazione e il footer del sito. Il `header` mostra anche il pulsante per il login/logout.
- **Cart.php**: Inizialmente progettato per gestire un carrello della spesa (al momento non incluso nella versione finale).

## Utilizzo del Progetto

### Requisiti

- **PHP 7+**: Assicurarsi di avere una versione recente di PHP.
- **MAMP**: Questo progetto può essere eseguito in locale utilizzando server locali come MAMP.

### Installazione

1. **Clona il Repository**
   ```sh
   git clone
   ```
2. **Avvia il Server Locale**
   - Assicurati di mettere la cartella del progetto nella directory corretta (e.g., `htdocs` per MAMP).
3. **Accedi al Progetto**
   - Apri il browser e naviga all'URL locale, come `http://localhost/php-oop-2/index.php`.

### Credenziali di Accesso
- Utilizza una delle email presente nel login, password compresa. 


## Tecnologie Utilizzate

- **PHP**: Utilizzato per la logica di back-end, con particolare attenzione alla programmazione orientata agli oggetti.
- **HTML/CSS**: Struttura e stile delle pagine, con l'utilizzo di Bootstrap per un layout reattivo.
- **Bootstrap**: Per rendere l'interfaccia reattiva e accattivante.
- **FontAwesome**: Per le icone, come quelle utilizzate nelle categorie dei prodotti.
- **Vue.js**: Parzialmente utilizzato per la gestione dinamica del menu e del login/logout.

## Struttura delle Classi

- **Product**: Classe base per i prodotti.
- **Category**: Rappresenta una categoria di prodotti (e.g., `Cani`, `Gatti`).
- **Food, Toy, Bed**: Estendono la classe `Product` per rappresentare diversi tipi di prodotti per animali.

## Possibili Miglioramenti Futuri
- **Carrello**: Aggiungere la funzionalità di un carrello che consenta agli utenti di aggiungere prodotti e procedere al pagamento.
- **Sistema di Pagamento**: Implementare una simulazione di pagamento tramite carta di credito.
- **Gestione degli Utenti**: Aggiungere una funzionalità di registrazione utenti per migliorare la personalizzazione del sito.

## Problemi Conosciuti
- **Carrello**: Al momento, la funzionalità del carrello è stata parzialmente implementata, ma non è ancora completamente operativa.

## Autori
Progetto sviluppato da Francesco, attraverso un esercizio del team Boolean.

## Licenza
Questo progetto è stato creato per scopi educativi. Nessuna licenza commerciale applicata.