# H2S Framework Project

## Introduction

This is my personal project to create a framework for web development. 
The main goal is to create a simple and easy to use framework that can be used to create web applications. 
Project has been started after having extensive experience with other frameworks like Magento 2 and Symfony.

I saw things that I did like in these and other frameworks and wanted to create something that would be a mix of all the good things I saw in them.
It is not intended as a replacement for any of them, but rather as a personal project to learn and experiment with new things.

It is nowhere near to being finished, but I am working on it in my free time and I hope to have a working version soon.

## Features

- Routing
- Dependency Injection (configurable)
  - Virtual types
  - Plugins
- Event Dispatcher
- Configuration with YAML (any other format can be implemented easily)
- Console commands
- Logging
- Caching
  - Config file caching
  - Static page cache (not implemented yet)
- Database abstraction layer
- Templating engine using native PHP
- Layout building system with XML (similar to Magento 2)
- Translation support
- Asset server
- Modular structure

## Installation

Currently, there is no installation process. You can just clone the repository and start working on it.
All modules are prepared for composer and in the future it will be possible to install them using composer.
Right now, its necessary to include them manually in the `composer.json` file of the project.

Example project setup 
#### composer.json
```json
{
  "name": "h2s/example-project",
  "type": "project",
  "repositories": [
    {
      "type": "path",
      "url": "libs/h2s/core"
    }, 
    ... Include all other modules here
  ],
  "require": {
    "vlucas/phpdotenv": "^5.5",
    "siarkowodor/h2s-core": "^0.1.0",
    "php": "8.1.*"
  },
  "autoload": {
    "psr-4": {
      "Siarko\\": "src/app/"
    },
    "psr-0": {
      "": "generated/"
    }
  },
  "authors": [
    {
      "name": "Siarko",
      "email": "labroqu@gmail.com"
    }
  ]
}

```

Main index.php file will be generated in vendor/bin directory. It should be used to run the application.