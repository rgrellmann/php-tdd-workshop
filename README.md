# php-kata-setup

This is a scaffolding kata setup to practice TDD in PHP.

- Working example in the `src` and `tests` folder.
- PHPUnit installed.
  - `composer test`

You can either install the dependencies locally or use the provided docker container:

```bash
docker-compose up
docker exec -ti -u dev php_kata_setup bash
composer install
composer test
```
