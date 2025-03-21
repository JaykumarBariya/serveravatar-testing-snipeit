<?php

return [
    'about_assets_title'           => 'Om aktiver',
    'about_assets_text'            => 'Aktiver er poster sporet af serienummer eller aktiv tag. De har tendens til at være højere værdi elementer, hvor identifikation af en bestemt genstand betyder noget.',
    'archived'  				=> 'arkiverede',
    'asset'  					=> 'Asset',
    'bulk_checkout'             => 'Masseudtjekning',
    'bulk_checkin'              => 'Bulk Checkin',
    'checkin'  					=> 'Checkin Asset',
    'checkout'  				=> 'Checkout Asset',
    'clone'  					=> 'Klonaktiver',
    'deployable'  				=> 'Deployable',
    'deleted'  					=> 'Dette aktiv er blevet slettet.',
    'delete_confirm'            => 'Er du sikker på, at du vil slette dette aktiv?',
    'edit'  					=> 'Rediger aktiv',
    'model_deleted'  			=> 'Denne aktivmodel er blevet slettet. Du skal gendanne modellen, før du kan gendanne aktivet.',
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => 'kan anmodes',
    'requested'				    => 'Anmodet',
    'not_requestable'           => 'Ikke Anmodet',
    'requestable_status_warning' => 'Ændr ikke status for anfordring',
    'restore'  					=> 'Gendan aktiv',
    'pending'  					=> 'Verserende',
    'undeployable'  			=> 'Undeployable',
    'undeployable_tooltip'  	=> 'Dette aktiv har en status etiket, der ikke kan installeres og kan ikke tjekkes ud på dette tidspunkt.',
    'view'  					=> 'Se aktiv',
    'csv_error' => 'Du har en fejl i din CSV-fil:',
    'import_text' => '<p>Upload en CSV, der indeholder aktivhistorik. Aktiver og brugere SKAL allerede findes i systemet, eller de vil blive sprunget over. Matchende aktiver for historik import sker mod asset tag. Vi vil forsøge at finde en matchende bruger baseret på den brugers navn, du giver, og de kriterier, du vælger nedenfor. Hvis du ikke vælger nogen kriterier nedenfor, det vil blot forsøge at matche på det brugernavn format, du konfigurerede i <code>Admin &gt; Generelle indstillinger</code>.</p><p>Felter inkluderet i CSV skal matche overskrifterne: <strong>Asset Tag, Navn, Checkout Dato, Checkin Date</strong>. Eventuelle yderligere felter vil blive ignoreret. </p><p>Checkin Dato: tom eller fremtidig checkin datoer vil checkout elementer til tilknyttet bruger. Eksklusive Checkin Date kolonnen vil oprette en checkin dato med dagens dato.</p>
    ',
    'csv_import_match_f-l' => 'Prøv at matche brugere med <strong>fornavn.lastname</strong> (<code>jane.smith</code>) format',
    'csv_import_match_initial_last' => 'Prøv at matche brugere med <strong>første oprindelige efternavn</strong> (<code>jsmith</code>) format',
    'csv_import_match_first' => 'Prøv at matche brugere med <strong>fornavn</strong> (<code>jane</code>) format',
    'csv_import_match_email' => 'Prøv at matche brugere via <strong>e-mail</strong> som brugernavn',
    'csv_import_match_username' => 'Prøv at matche brugere med <strong>brugernavn</strong>',
    'error_messages' => 'Fejlmeddelelser:',
    'success_messages' => 'Beskeder med succes:',
    'alert_details' => 'Se venligst nedenfor for detaljer.',
    'custom_export' => 'Brugerdefineret Eksport',
    'mfg_warranty_lookup' => ':manufacturer Garanti Status Opslag',
    'user_department' => 'Bruger Afdeling',
];
