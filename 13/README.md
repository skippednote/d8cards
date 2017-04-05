# Day 13 - Logging in D8

- Setup a new drupal site `d8logging`.
- Update the `settings.local.php` to create the `config` directory at `../config/sync`.
- Create a new module `loggy`:
    - Create a `attachlibraries.info.yml`
    - Create a `attachlibraries.module`
      - Add a `hook_node_update`.
        - Pass the entity to it.
        - Use `\Drupal::logger()->notice()` to log message on update,

