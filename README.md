
## Development

Install project dependencies

```bash
composer install
```

Set the application key

```bash
php artisan key:generate
```


NPM install

```bash
npm install
```

Running Laravel Mix requires node version v6, install `nvm`

```bash
curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.2/install.sh | bash
```

Setup `nvm`

```bash
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && . "$NVM_DIR/nvm.sh" # This loads nvm
```

Install npm v6.10.1

```bash
nvm install v6.10.1
```

Use it

```bash
nvm use v6.10.1
```

**NOTE:** For more information about nvm, please check the [documentation](https://github.com/creationix/nvm).

Run all Laravel Mix tasks

```bash
npm run dev
```

**NOTE:** For more information about Laravel Mix, please check the [documentation](https://laravel.com/docs/5.4/mix).

**NOTE:** More webpack options can be found in `\package.json`

### Create local database

- Create database through localhost/phpmyadmin
- Create .env file from .env.example

### Migrate database

```bash
php artisan migrate --seed
```


In bootstrap.js, add the followings

```javascript
window.Vue = require('vue');

import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);
