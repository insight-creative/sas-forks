# Wordpress Starter Theme

A simple-as-possible starter theme and steps for setting up a local Wordpress environment for development.

> These steps are a high level overview and don't include small details in the setup process. If you're unsure about a tool or step in the process, be aware that you'll likely need to do some additional research to get up to speed. If you're completely new to programming or Wordpress, you should still be able to follow the steps and get things set up, but a general understanding of the command line, Git, and PHP is helpful.

## Getting started

To run Wordpress locally and get started with this theme, you'll need to:

1. Get a copy of Wordpress
2. Run a local server to serve the Wordpress installation
3. Create a local database to use for development
4. Copy this theme into the Wordpress themes directory

Let's walk through those steps:

### Download Wordpress

1. Create a directory for your project wherever you want to keep it on your computer.
2. Download a copy of Wordpress core and place it in the project folder. You can do this from the [Wordpress website](https://wordpress.org/download/), otherwise [WP-CLI](http://wp-cli.org) is a useful command line tool for managing Wordpress installations.

### Set up a local server

You'll need a local server that can run PHP. There are many ways to do this – here are a few options:

1. [MAMP](https://www.mamp.info) – MAMP is a tool for running an Apache server and MySQL locally. Download and install it, then configure it to point to your Wordpress directory and start the server using the MAMP app.
2. [WP-CLI](http://wp-cli.org) – If you're using WP-CLI to manage Wordpress, you can use `wp server` to start a PHP server.
3. The PHP development server – You can start a server directly with `php -S localhost:8080` if you're already able to run PHP on your computer.

### Set up a local MySQL database

You'll also need a database to store Wordpress data. Again there are many ways to do this:

1. [MAMP](https://www.mamp.info) – If you're using MAMP, you can use phpMyAdmin to set up the database and database user and then edit `wp-config.php` in your Wordpress directory to connect to it.
2. [MySQL](https://dev.mysql.com/downloads/mysql/) - If you're not using MAMP, you can download MySQL directly and use the command line to create a database and a user and give the user permissions for the database.

### Set up this theme

The last step is to install and run the theme.

1. Download this theme into the `wp-content/themes` directory of your Wordpress directory. You can download the zip and unzip it there, or navigate there in the command line and use Git to clone it.
2. If you don't have NPM, install it by installing [Node](https://nodejs.org).
3. Navigate to the theme directory in the command line if you haven't already and run `npm install`
4. If you're using WP-CLI, start the server and build the stylesheet by running `npm start`. Otherwise, run `npm watch` and run the server with MAMP or your own method.

## Deploying

When you're ready to get Wordpress running on a server for staging or production, here are some steps you can use to get started. There are many ways to deploy a Wordpress site, but this is a common workflow:

1. Coming soon...

## Contributing

1. Fork it!
2. Create your feature branch.
3. Commit your changes.
4. Push to the branch on your fork.
5. Submit a pull request!

*New to Git or programming in general?* To contribute to this project, you'll need to know how to use the command line and Git. If you want to get up to speed on those, read about the [command line](http://kevinmcgillivray.net/introduction-to-text-editors-and-the-command-line/), and [try Git](http://try.github.io). Then install [Atom](http://atom.io) or another text editor. Then, read about [GitHub Flow](https://guides.github.com/introduction/flow/)

## Credits

Made by [Kevin McGillivray](https://kevinmcgillivray.net/about).
