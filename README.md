Yourls-plugin-installer
=======================

Yourls-plugin-installer is a Composer installer for [Yourls](http://yourls.org/) 
plugins. It copies packages with the type `yourls-plugin` to the
`yourls-plugin-dir`.

Usage
=====

In order to use the Yourls-plugin-installer you need a compatible Yourls plugin. 

Example plugin composer.json
--------------------

```json
{
    "type": "yourls-plugin",
    "require": {
        "kennisnet/yourls-plugin-installer": "dev-master"
    },
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/fenuz/yourls-plugin-installer.git"
        }    
    ]
}
```

Example yourls composer.json
----------------------------


```json
{
    "require": {
        "your/yourls-plugin": "dev-master",
        "another/hello-world-plugin": "dev-master"
    },
    "extra": {
        "yourls-plugin-dir": "www/user/plugins"
    }
}
```
