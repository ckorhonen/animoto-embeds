# Animoto Embeds Agent Guide

This legacy WordPress plugin has one runtime file, `animoto-embeds.php`. Keep its WordPress API use (`wp_embed_defaults`, `add_query_arg`, `wp_remote_get`, and `wp_embed_register_handler`) intact, and update the plugin header and `readme.txt` metadata together when a release-facing change needs both.

The handler requests oEmbed data for a post URL and returns provider HTML. Treat provider URLs and returned HTML as an external trust boundary; preserve the existing `reject_unsafe_urls` option and do not add network probes merely to validate an instruction or documentation edit. Read-only provider or WordPress checks may be used when useful, while remote mutations or publication still require an explicit task or applicable standing authorization.

There is no declared package manager or test runner. For a PHP-only change, use `php -l animoto-embeds.php` when PHP is available and report that this syntax check does not exercise a WordPress runtime or current provider availability.
