# Day 02 ­ Paragraphs Module

- Setup a new drupal site `d8paragraph`
- Update the `settings.local.php` to create the `config` directory at `../config/sync`.
- Install `paragraph` module
    - Using `drush dl paragraph`.
- Create a new `text format` called `Raw` that doesn't block any HTML tags.
- Create a new paragraph type called `Social Media`
    - Add a `Embed Code` field of type `text long formatted`
    - Add a `Link` field of type `link`.
- Update `Article` content-type to add a new paragraph field.
    - Allow only `Social Media` paragraph type in the field.
- Create a new theme `para`.
    - Add a `paragraph--social-media.html.twig` template which prints Social Media paragraph content in a table.
    - Set the `para` theme as default and the paragraph should render in a table. 
