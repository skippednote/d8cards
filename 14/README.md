# Day 15 - Creating a Custom Field Formatter

- Setup a new drupal site `d8formatter`.
- Update the `settings.local.php` to create the `config` directory at `../config/sync`.
- Create a new module `ratings`:
    - Create a `ratings.info.yml`
    - Create a `attachlibraries.module`
    - Create `src/Plugin/Field/FieldFormatter/RatingsFieldFormatter.php`.
      - Import `DecimalFormater` and extend a class using it.
      - Loop through the fields and update to add a `rating` variable.
        - It's value should be 20 times the value of decimal field.
      - Attach a library to load css for ratings.

