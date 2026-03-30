
## Installation


```bash
1. git clone https://github.com/tetianaszostek2ma/pokemon.git
2. cd pokemon

3. composer install
4. Add 'pokemon' database
5. php artisan migrate

## Add token in  .env file
4. X_SUPER_SECRET_KEY="MySuperSecretKey"

5. php artisan serve

## API endpoints
### Returns banned pokemons names
[GET] /banned 
Headers: X-SUPER-SECRET-KEY: <secret_key>
Body json: array of names
Response: array of banned names

### Add new banned pokemons names
[POST] /banned
Headers: X-SUPER-SECRET-KEY: <secret_key>
Body: {"name": "pokemon_name"}

### Delete banned pokemon by id
[DELETE] /banned/{id}
Headers: X-SUPER-SECRET-KEY: <secret_key>

### Returns pokemon's info from PokeApi (exclude banned pokemons)
[POST] /info
Body: {"name": ["pokemon_name"]}

