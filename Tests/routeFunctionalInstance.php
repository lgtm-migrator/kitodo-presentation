<?php

// This router script dynamically sets TYPO3_PATH_ROOT to a TYPO3 test instance,
// then yields control back to PHP server to let it serve the requested file.
//
// In functional tests, this allows us to access the TYPO3 instance via the web
// server. Manually setting TYPO3_PATH_ROOT is necessary because test instances
// merely symlink into "$DLF_ROOT/public/" source files, so TYPO3 would detect
// that as root and not use the correct typo3conf folder.
//
// The TYPO3_PATH_ROOT apparently needs to be absolute, or TYPO3 may throw an
// error about missing extension configuration.

$matches = [];
preg_match("@.*/(?:acceptance|functional-[a-z0-9]+)@", $_SERVER['REQUEST_URI'], $matches);

if (!empty($matches)) {
    $root = realpath($_SERVER['DOCUMENT_ROOT'] . $matches[0]);
    if ($root !== false) {
        putenv('TYPO3_PATH_ROOT=' . $root);
        putenv('TYPO3_PATH_APP=' . $root);
    }
}

return false;
