<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
# PHPStan Report - Livello 10

## Errori rilevati

## Soluzioni proposte

> TODO: descrivere soluzioni architetturali e funzionali

## Collegamenti

- Torna all'indice principale: [Indice Report PHPStan Moduli](/docs/phpstan_modules_index.md)
<<<<<<< HEAD
=======
=======
# Analisi PHPStan - Modulo Activity - Livello 10

[⬅️ Torna alla Roadmap del modulo](../roadmap.md)


Data analisi: 2025-04-11 12:49:25

## Risultato: ERRORI

Rilevati 35 errori a livello 10.

### Dettaglio errori
```
Note: Using configuration file /var/www/html/_bases/base_predict_fila3_mono/laravel/phpstan.neon.
  0/51 [░░░░░░░░░░░░░░░░░░░░░░░░░░░░]   0%[1G[2K 20/51 [▓▓▓▓▓▓▓▓▓▓░░░░░░░░░░░░░░░░░░]  39%[1G[2K 40/51 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░░]  78%[1G[2K 51/51 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

 ------ ---------------------------------------------------------------------- 
  Line   database/migrations/2023_03_31_103350_create_activity_table.php       
 ------ ---------------------------------------------------------------------- 
  :14    Cannot call method bigIncrements() on mixed.                          
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :15    Cannot call method nullable() on mixed.                               
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :15    Cannot call method string() on mixed.                                 
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :16    Cannot call method text() on mixed.                                   
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :17    Cannot call method nullableMorphs() on mixed.                         
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :18    Cannot call method nullableMorphs() on mixed.                         
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :19    Cannot call method json() on mixed.                                   
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :19    Cannot call method nullable() on mixed.                               
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :20    Cannot call method index() on mixed.                                  
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :21    Cannot call method nullable() on mixed.                               
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :21    Cannot call method uuid() on mixed.                                   
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :22    Cannot call method nullable() on mixed.                               
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :22    Cannot call method string() on mixed.                                 
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
  :28    Parameter #1 $table of method                                         
         Modules\Xot\Database\Migrations\XotBaseMigration::updateTimestamps()  
         expects Illuminate\Database\Schema\Blueprint, mixed given.            
         🪪  argument.type                                                     
         ✏️  database/migrations/2023_03_31_103350_create_activity_table.php   
 ------ ---------------------------------------------------------------------- 

 ------ ------------------------------------------------------------------------- 
  Line   database/migrations/2023_10_30_103350_create_stored_events_table.php     
 ------ ------------------------------------------------------------------------- 
  :13    Cannot call method id() on mixed.                                        
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :14    Cannot call method nullable() on mixed.                                  
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :14    Cannot call method uuid() on mixed.                                      
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :15    Cannot call method nullable() on mixed.                                  
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :15    Cannot call method unsignedBigInteger() on mixed.                        
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :16    Cannot call method default() on mixed.                                   
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :16    Cannot call method unsignedTinyInteger() on mixed.                       
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :17    Cannot call method string() on mixed.                                    
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :18    Cannot call method jsonb() on mixed.                                     
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :19    Cannot call method jsonb() on mixed.                                     
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :20    Cannot call method timestamp() on mixed.                                 
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :21    Cannot call method index() on mixed.                                     
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :22    Cannot call method index() on mixed.                                     
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :23    Cannot call method unique() on mixed.                                    
         🪪  method.nonObject                                                     
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
  :27    Parameter #1 $table of method                                            
         Modules\Xot\Database\Migrations\XotBaseMigration::updateTimestamps()     
         expects Illuminate\Database\Schema\Blueprint, mixed given.               
         🪪  argument.type                                                        
         ✏️  database/migrations/2023_10_30_103350_create_stored_events_table.php  
 ------ ------------------------------------------------------------------------- 

 ------ ---------------------------------------------------------------------- 
  Line   database/migrations/2023_10_31_103350_create_snapshots_table.php      
 ------ ---------------------------------------------------------------------- 
  :15    Cannot call method bigIncrements() on mixed.                          
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_10_31_103350_create_snapshots_table.php  
  :16    Cannot call method uuid() on mixed.                                   
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_10_31_103350_create_snapshots_table.php  
  :17    Cannot call method unsignedInteger() on mixed.                        
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_10_31_103350_create_snapshots_table.php  
  :18    Cannot call method jsonb() on mixed.                                  
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_10_31_103350_create_snapshots_table.php  
  :19    Cannot call method index() on mixed.                                  
         🪪  method.nonObject                                                  
         ✏️  database/migrations/2023_10_31_103350_create_snapshots_table.php  
  :23    Parameter #1 $table of method                                         
         Modules\Xot\Database\Migrations\XotBaseMigration::updateTimestamps()  
         expects Illuminate\Database\Schema\Blueprint, mixed given.            
         🪪  argument.type                                                     
         ✏️  database/migrations/2023_10_31_103350_create_snapshots_table.php  
 ------ ---------------------------------------------------------------------- 

 [ERROR] Found 35 errors                                                        
```

### Suggerimenti per la risoluzione

#### Errori di tipo 'Cannot call method on mixed'

Questi errori indicano che PHPStan non può determinare il tipo di una variabile e quindi non può verificare se il metodo chiamato esiste. Per risolvere:

1. Aggiungere annotazioni di tipo PHPDoc per chiarire il tipo della variabile
2. Utilizzare asserzioni di tipo come `assert($var instanceof ClassName)`
3. Aggiungere controlli espliciti con `instanceof` prima di chiamare i metodi
4. Per le migrazioni Laravel, tipizzare correttamente il parametro $table come Blueprint

Esempio di correzione per migrazioni:
```php
Schema::create('table_name', function (Blueprint $table) {
    $table->id(); // Ora PHPStan sa che $table è di tipo Blueprint
});
```

### Consigli generali

1. Iniziare risolvendo gli errori più semplici e ripetitivi
2. Utilizzare `@phpstan-ignore-next-line` solo come ultima risorsa per errori non risolvibili
3. Considerare l'aggiunta di test unitari per verificare il comportamento corretto
4. Aggiornare la documentazione del codice con annotazioni PHPDoc complete
5. Valutare l'utilizzo di classi di tipo dedicate (DTO) per strutture dati complesse
6. Seguire le linee guida di tipizzazione nel documento 'Regole Windsurf per base_predict_fila3_mono'
>>>>>>> 4e57ec8 (.)
>>>>>>> aurmich/dev
