# Yii 2 Ninja Application Template

[![Code Quality](https://img.shields.io/scrutinizer/g/creocoder/yii2-app-ninja/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/creocoder/yii2-app-ninja/?branch=master)

Yii 2 Ninja Application Template is a skeleton Yii 2 application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: frontend, backend and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

You can then install the application using the following command

```bash
$ composer global require fxp/composer-asset-plugin
$ composer create-project --stability=dev creocoder/yii2-app-ninja
```

## Getting started

After you install the application, you have to conduct the following steps to initialize
the installed application. You only need to do these once for all.

1. Create a new database and adjust the `.env` configuration file accordingly.
2. Apply migrations with console command `yii migrate`. This will create tables needed for the application to work.
3. Set document roots of your Web server:

- for frontend `/path/to/yii2-app-ninja/frontend/web/`
- for backend `/path/to/yii2-app-ninja/backend/web/`

To login into the application, you need to first sign up, with any of your email address, username and password.
Then, you can login into the application with same email address and password at any time.

## Directory structure

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
```

## Donating

Support this project and [others by creocoder](https://gratipay.com/creocoder/) via [gratipay](https://gratipay.com/creocoder/).

[![Support via Gratipay](https://cdn.rawgit.com/gratipay/gratipay-badge/2.3.0/dist/gratipay.svg)](https://gratipay.com/creocoder/)
