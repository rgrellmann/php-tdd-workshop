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
    <h3>The 3-repetition rule on TDD - Triangulation</h3>
    <img alt="Triangulation" src="img/triangulation.png"><br>
</div>

<div align="center">
  <h3>Example mapping</h3>
  <img alt="Example Mapping" src="img/mapping.png"><br>
</div>

### Links

- [TestDesiderata](https://kentbeck.github.io/TestDesiderata/)
- Katas:
  1. [Rock paper scissors](https://hackmd.io/@evalverde/ipc-remote-kata-1)
  2. [Password validator kata](https://www.codurance.com/katas/password-validation)
  3. [Guess the random number](https://www.codurance.com/katas/random-number-kata)
  4. [Morning Routine](https://www.codurance.com/katas/morning-routine-kata)

