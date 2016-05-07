Test package for Laravel
========================

This is the a simple Laravel package, which I use a playground to upgrade my Laravel knowledge. Feel free to contact me at (rajat@raynstudios.in)[mailto:rajat@raynstudios.in], in-case you need any help regarding this package.

## Usage
1. Just include the following statement in your app.config.

`Raynstudios\Testpack\TestPackServiceProvider::class,`

2. Update composer.json to include psr-4 clause.
`"Raynstudios\\Testpack\\": "path/to/testpack/src"`

3. Run
`composer update`

4. Open `'http://localhost:8000/testpack/hello'` in your browser.

## License
MIT
