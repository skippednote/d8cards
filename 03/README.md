# Day 03 ­ Building Configuration forms

- Setup a new drupal site `d8configform`.
- Update the `settings.local.php` to create the `config` directory at `../config/sync`.
- Create a new module `configform`:
    - Create a `configform.routing.yml` with two routes.
        - `/configform/config` which renders a form.
        - `configform/content` which renders the content of the form or the default config.
    - Create a form extending `ConfigFormBase` which saves value to `configform.settings` config.
    - Create a controller extending `ControllerBase` which use `configform.settings` to get it's value.
    - Create a `configform.settings.yml` to store default settings.