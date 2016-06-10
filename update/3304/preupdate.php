<?php

// Byng: specifically for howden...
try {
    $db = Pimcore_Resource::get();
    $db->query("
        ALTER TABLE
            object_collection_CountriesToSite_7
        DROP INDEX
            p_index_countries;
    ");
} catch (Exception $e) {
    var_dump($e);
}
