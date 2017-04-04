# Day 05 ­ Drupal 8 Block System

- Setup a new drupal site `d8block`.
- Update the `settings.local.php` to create the `config` directory at `../config/sync`.
- Create a new module `stockprice`:
    - Create a `stockprice.info.yml`
    - Create a `stockprice.module`
      - Add a `hook_cron` which run with every cron job.
      - Get the list of all the blocks of type `stock_exchange_rate_card`.
      - Loop over each block
        - Get the symbol from each block.
        - Using the symbol send a GET request to the provided URL and decode the result.
        - Use the result to update blocks `Last Price` and `Change` fields.

