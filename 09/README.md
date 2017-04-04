# Day 09 - Attaching assets (css/js) on D8

- Setup a new drupal site `d8libraries`.
- Update the `settings.local.php` to create the `config` directory at `../config/sync`.
- Create a new module `attachlibraries`:
    - Create a `attachlibraries.info.yml`
    - Create a `attachlibraries.module`
      - Add a `attachlibraries_element_info_alter` which is called for a
        specific element.
      - Check for `table` element.
      - If table elements exisits add attach `attachlibraries/table`.

