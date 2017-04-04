# Day 08 ­ Plugin System - Text Filters

- Setup a new drupal site `d8plugin`.
- Update the `settings.local.php` to create the `config` directory at `../config/sync`.
- Create a new module `autocapitalize`:
    - Create a `autocapitalize.info.yml`
    - Create a `autocapitalize/src/Plugin/Filter/FilterAutoCapitalize.php`
      - Add a `process` function which takes a strings of word and replaces
        those words with uppercased variants.
      - Add a `settingsForm` method that adds a textfield where you can add
        words to uppercase.
