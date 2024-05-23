# php-kata-setup

This is a scaffolding kata setup to practice TDD in PHP.

- Working example in the `src` and `tests` folder.
- PHPUnit installed.
  - `composer test`

### Setup

You can either install the dependencies locally or use the provided docker container:

```bash
docker-compose up
docker exec -ti -u dev php_kata_setup bash
composer install
composer test
```

---

<div align="center">
    <h3>Test-Driven Development</h3>
    <img alt="TDD" src="img/tdd.png"><br>
</div>

<div align="center">
    <h3>The 3 repetition rule on TDD - Triangulation</h3>
    <img alt="Triangulation" src="img/triangulation.png"><br>
</div>

<div align="center">
  <h3>Example mapping</h3>
  <img alt="Example Mapping" src="img/mapping.png"><br>
</div>