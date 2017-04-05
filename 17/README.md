# Day 17 - Composer in your module to load PHP libraries

- Setup a new drupal site `d8composer`.
- Update the `settings.local.php` to create the `config` directory at `../config/sync`.
- Run `composer require guhelski/forecast-php` in the root of the project.
- Create a new module `weather`:
    - Create a `weather.info.yml`
    - Create a `src/Plugin/Block/Weather.php`
      - Create a block by extending `BlockBase`
      - Create a form to insert latitude and longitude.
      - Create a string from the weather received from Forecast.
