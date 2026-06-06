# EDD All Access stubs

Auto-generated PHPStan / IDE stubs for [EDD All Access](https://easydigitaldownloads.com/downloads/all-access/).
Self-contained (safe to `require_once`), so PHPStan can resolve `edd_all_access_get_all_access_downloads`,
`edd_all_access_product_download_url`, and the rest of the EDD All Access type surface without the plugin installed.

## Usage with PHPStan

```neon
parameters:
    bootstrapFiles:
        - vendor/arts/edd-all-access-stubs/edd-all-access-stubs.php
```

## Regenerating

Point `.env` at an EDD All Access checkout (see `.env.example`), then:

```bash
composer install
composer generate
```

The generator scans the plugin source with `php-stubs/generator`, strips stray code, neutralizes
`abstract` methods, injects the `EDD_ALL_ACCESS_*` constants, and appends empty stubs for any
referenced-but-missing parent type so the output loads cleanly on its own. EDD core, EDD Software
Licensing, and EDD Recurring symbols are resolved through their own stub packages (preloaded during
generation) rather than re-stubbed, so the output can be loaded alongside them without redeclaration.
