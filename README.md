# Vite for Wordpress

This is an adapter that allows you to use Vite to power a local dev environment for Wordpress.

## Environment

Assumes you're running Wordpress in [Local](https://localwp.com) using the "Site domains" router mode. This should work in DDEV or Docker, but I have not tested it in those envs.

## Setup

```sh
npm i
```

```sh
npm run build
```

## Important files

### /.env

This contains global config values that can be accessd in both the js context and the php context. Feel free to alter these values to suit your specific theme organization.

This setup assumes the following env vars:

- VITE_OUTPUT_DIR
- VITE_ENTRY_POINT
- VITE_PROTOCOL
- VITE_HOST
- VITE_PORT
- WP_ENQUEUE_ID

### /vite.config.js

This is the vite config. Most of the config values are pulled right from the `.env`.

### /lib/vite.php

This is a php class that does a few things:

1. Check the Vite server to see if it is running,
2. If it is running, add the HMR script, if not, load the production assets in the manifest via `wp_enqueue`.

## Gotchas

1. Static files from `/public` referenced in css don't really work. Apparently you can symlink your site root to your template dir, but that seems a little hacky to me, and I'm not sure what the CI/CD story is with that. The place I run into this most often is locally-hosted fonts; I typically just add a fonts.css file with the @font-face declarations alongside the font-files in `/public`, then just enqueue that css file separately.
