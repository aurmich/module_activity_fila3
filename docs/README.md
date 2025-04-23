# Modulo Activity

## Descrizione

Il modulo Activity fornisce funzionalità di tracciamento delle attività e di audit log all'interno dell'applicazione. Permette di registrare e visualizzare le azioni eseguite dagli utenti all'interno del sistema.

## Analisi PHPStan

Il modulo ha raggiunto un livello di qualità PHPStan 9, dimostrando un'eccellente aderenza alle migliori pratiche di programmazione e tipizzazione.

- [Riassunto dell'analisi PHPStan](phpstan/README.md)
- [Correzioni per raggiungere il livello 10](phpstan_fixes.md)
- [Documentazione generale PHPStan](/docs/phpstan/README.md)

## Principale Funzionalità

- Registrazione delle attività degli utenti
- Tracciamento delle modifiche agli oggetti (subject)
- Identificazione dell'utente che ha eseguito l'azione (causer)
- Memorizzazione delle proprietà dell'entità prima e dopo le modifiche

## Tabelle del Database

- `activity` - Tabella principale per il tracciamento delle attività
- `stored_events` - Archiviazione di eventi nel modello Event Sourcing
- `snapshots` - Registrazioni periodiche dello stato delle entità

## Uso del Modulo

Per utilizzare il modulo Activity, è necessario:

1. Importare il trait `LogsActivity` nei modelli da monitorare
2. Configurare gli attributi da registrare tramite le proprietà del modello
3. Accedere ai log tramite il modello `Activity`

## Collegamenti

- [Documentazione PHPStan generale](/docs/phpstan.md)
- [Problemi e soluzioni PHPStan](/docs/phpstan/problemi_e_soluzioni.md) 
