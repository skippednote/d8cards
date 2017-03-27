# Day 01 ­ Configuration Management in D8

- Setup a new drupal site `d8dev`
- Create a `content-type` `Book` with two fields:
    - `title`
    - `isbn`
- Create a `view` page using `Book` content-type at `list`.
- Update the `settings.local.php` to create the `config` directory at `../configdev/sync`.
- Export the config using `drush cex`.

- Setup a new drupal site `d8prod`
- Update the `settings.local.php` to create the `config` directory at `../configprod/sync`.
- Update the `site.uuid` to match that of `d8dev`
    - drush config-get system.site uuid (in `d8dev`)
    - drush config-set "system.site" xxx-xxx-xxx-xxx-xxxxx (in `d8prod`)]
- Update the `shortcut.set.default.yml` for `d8prod` to set the uuid to `null`. ([ref](https://www.drupal.org/node/2638392#comment-11816155))
- Copy exported config in `../configdev/sync` to `../configprod/sync`.
- Import config using `drush cim`.