<?php $TRANSLATIONS = array(
"Failed to clear the mappings." => "Cancellazione delle associazioni non riuscita.",
"Failed to delete the server configuration" => "Eliminazione della configurazione del server non riuscita",
"The configuration is valid and the connection could be established!" => "La configurazione è valida e la connessione può essere stabilita.",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "La configurazione è valida, ma il Bind non è riuscito. Controlla le impostazioni del server e le credenziali.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "La configurazione non è valida. Controlla il log di ownCloud per ulteriori dettagli.",
"Deletion failed" => "Eliminazione non riuscita",
"Take over settings from recent server configuration?" => "Vuoi recuperare le impostazioni dalla configurazione recente del server?",
"Keep settings?" => "Vuoi mantenere le impostazioni?",
"Cannot add server configuration" => "Impossibile aggiungere la configurazione del server",
"mappings cleared" => "associazioni cancellate",
"Success" => "Riuscito",
"Error" => "Errore",
"Connection test succeeded" => "Prova di connessione riuscita",
"Connection test failed" => "Prova di connessione non riuscita",
"Do you really want to delete the current Server Configuration?" => "Vuoi davvero eliminare la configurazione attuale del server?",
"Confirm Deletion" => "Conferma l'eliminazione",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>Avviso:</b> le applicazioni user_ldap e user_webdavauth sono incompatibili. Potresti riscontrare un comportamento inatteso. Chiedi al tuo amministratore di sistema di disabilitarne una.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Avviso:</b> il modulo PHP LDAP non è installato, il motore non funzionerà. Chiedi al tuo amministratore di sistema di installarlo.",
"Server configuration" => "Configurazione del server",
"Add Server Configuration" => "Aggiungi configurazione del server",
"Host" => "Host",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "È possibile omettere il protocollo, ad eccezione se è necessario SSL. Quindi inizia con ldaps://",
"Base DN" => "DN base",
"One Base DN per line" => "Un DN base per riga",
"You can specify Base DN for users and groups in the Advanced tab" => "Puoi specificare una DN base per gli utenti ed i gruppi nella scheda Avanzate",
"User DN" => "DN utente",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "Il DN per il client dell'utente con cui deve essere associato, ad esempio uid=agent,dc=example,dc=com. Per l'accesso anonimo, lasciare vuoti i campi DN e Password",
"Password" => "Password",
"For anonymous access, leave DN and Password empty." => "Per l'accesso anonimo, lasciare vuoti i campi DN e Password",
"User Login Filter" => "Filtro per l'accesso utente",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Specifica quale filtro utilizzare quando si tenta l'accesso. %%uid sostituisce il nome utente all'atto dell'accesso.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "utilizza il segnaposto %%uid, ad esempio \"uid=%%uid\"",
"User List Filter" => "Filtro per l'elenco utenti",
"Defines the filter to apply, when retrieving users." => "Specifica quale filtro utilizzare durante il recupero degli utenti.",
"without any placeholder, e.g. \"objectClass=person\"." => "senza nessun segnaposto, per esempio \"objectClass=person\".",
"Group Filter" => "Filtro per il gruppo",
"Defines the filter to apply, when retrieving groups." => "Specifica quale filtro utilizzare durante il recupero dei gruppi.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "senza nessun segnaposto, per esempio \"objectClass=posixGroup\".",
"Connection Settings" => "Impostazioni di connessione",
"Configuration Active" => "Configurazione attiva",
"When unchecked, this configuration will be skipped." => "Se deselezionata, questa configurazione sarà saltata.",
"Port" => "Porta",
"Backup (Replica) Host" => "Host di backup (Replica)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Fornisci un host di backup opzionale. Deve essere una replica del server AD/LDAP principale.",
"Backup (Replica) Port" => "Porta di backup (Replica)",
"Disable Main Server" => "Disabilita server principale",
"Only connect to the replica server." => "Collegati solo al server di replica.",
"Use TLS" => "Usa TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "Da non utilizzare per le connessioni LDAPS, non funzionerà.",
"Case insensitve LDAP server (Windows)" => "Case insensitve LDAP server (Windows)",
"Turn off SSL certificate validation." => "Disattiva il controllo del certificato SSL.",
"If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "Se la connessione funziona esclusivamente con questa opzione, importa il certificato SSL del server LDAP nel tuo server %s.",
"Not recommended, use for testing only." => "Non consigliato, utilizzare solo per test.",
"Cache Time-To-Live" => "Tempo di vita della cache",
"in seconds. A change empties the cache." => "in secondi. Il cambio svuota la cache.",
"Directory Settings" => "Impostazioni delle cartelle",
"User Display Name Field" => "Campo per la visualizzazione del nome utente",
"The LDAP attribute to use to generate the user's display name." => "L'attributo LDAP da usare per generare il nome visualizzato dell'utente.",
"Base User Tree" => "Struttura base dell'utente",
"One User Base DN per line" => "Un DN base utente per riga",
"User Search Attributes" => "Attributi di ricerca utente",
"Optional; one attribute per line" => "Opzionale; un attributo per riga",
"Group Display Name Field" => "Campo per la visualizzazione del nome del gruppo",
"The LDAP attribute to use to generate the groups's display name." => "L'attributo LDAP da usare per generare il nome visualizzato del gruppo.",
"Base Group Tree" => "Struttura base del gruppo",
"One Group Base DN per line" => "Un DN base gruppo per riga",
"Group Search Attributes" => "Attributi di ricerca gruppo",
"Group-Member association" => "Associazione gruppo-utente ",
"Special Attributes" => "Attributi speciali",
"Quota Field" => "Campo Quota",
"Quota Default" => "Quota predefinita",
"in bytes" => "in byte",
"Email Field" => "Campo Email",
"User Home Folder Naming Rule" => "Regola di assegnazione del nome della cartella utente",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Lascia vuoto per il nome utente (predefinito). Altrimenti, specifica un attributo LDAP/AD.",
"Internal Username" => "Nome utente interno",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "In modo predefinito, il nome utente interno sarà creato dall'attributo UUID. Ciò assicura che il nome utente sia univoco e che non sia necessario convertire i caratteri. Il nome utente interno consente l'uso di determinati caratteri:  [ a-zA-Z0-9_.@- ]. Altri caratteri sono sostituiti con il corrispondente ASCII o sono semplicemente omessi. In caso di conflitto, sarà aggiunto/incrementato un numero. Il nome utente interno è utilizzato per identificare un utente internamente. Rappresenta, inoltre, il nome predefinito per la cartella home dell'utente in ownCloud. Costituisce anche una parte di URL remoti, ad esempio per tutti i servizi *DAV. Con questa impostazione, il comportamento predefinito può essere scavalcato. Per ottenere un comportamento simile alle versioni precedenti ownCloud 5, inserisci l'attributo del nome visualizzato dell'utente nel campo seguente. Lascialo vuoto per il comportamento predefinito. Le modifiche avranno effetto solo sui nuovo utenti LDAP associati (aggiunti).",
"Internal Username Attribute:" => "Attributo nome utente interno:",
"Override UUID detection" => "Ignora rilevamento UUID",
"By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." => "In modo predefinito, l'attributo UUID viene rilevato automaticamente. L'attributo UUID è utilizzato per identificare senza alcun dubbio gli utenti e i gruppi LDAP. Inoltre, il nome utente interno sarà creato sulla base dell'UUID, se non è specificato in precedenza. Puoi ignorare l'impostazione e fornire un attributo di tua scelta. Assicurati che l'attributo scelto possa essere ottenuto sia per gli utenti che per i gruppi e che sia univoco. Lascialo vuoto per ottenere il comportamento predefinito. Le modifiche avranno effetto solo sui nuovi utenti e gruppi LDAP associati (aggiunti).",
"UUID Attribute:" => "Attributo UUID:",
"Username-LDAP User Mapping" => "Associazione Nome utente-Utente LDAP",
"Usernames are used to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." => "I nomi utente sono utilizzati per archiviare e assegnare i (meta) dati. Per identificare con precisione e riconoscere gli utenti, ogni utente LDAP avrà un nome utente interno. Ciò richiede un'associazione tra il nome utente e l'utente LDAP. In aggiunta, il DN viene mantenuto in cache per ridurre l'interazione con LDAP, ma non è utilizzato per l'identificazione. Se il DN cambia, le modifiche saranno rilevate. Il nome utente interno è utilizzato dappertutto. La cancellazione delle associazioni lascerà tracce residue ovunque e interesserà esclusivamente la configurazione LDAP. Non cancellare mai le associazioni in un ambiente di produzione, ma solo in una fase sperimentale o di test.",
"Clear Username-LDAP User Mapping" => "Cancella associazione Nome utente-Utente LDAP",
"Clear Groupname-LDAP Group Mapping" => "Cancella associazione Nome gruppo-Gruppo LDAP",
"Test Configuration" => "Prova configurazione",
"Help" => "Aiuto"
);
