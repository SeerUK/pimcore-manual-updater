# Pimcore Manual Updater

Is Pimcore struggling to update automatically? Try update manually using this! Be warned, this is a 
fairly rough and ready script, it may not be perfect, and as the Pimcore docs state you may not get
a completely working site by the end of it depending on what custom code you have written.

## Usage

*Before anything, make a backup of everything, literally everything*

Firstly you'll need to download the Pimcore git repository somewhere 
(http://github.com/pimcore/pimcore).

You'll also need to download the version of Pimcore you want to upgrade to and put that somewhere.

Then:

```
$ cd <path to your pimcore webroot>/
$ rm -rf ./pimcore
$ cp -r <path to pimcore version you want>/pimcore ./
$ cp -r <path to pimcore git repo>/update ./
$ git clone https://github.com/SeerUK/pimcore-manual-updater ./updater
$ ./updater/updater <current revision> <target revision>
$ rm -rf ./update
$ rm -rf ./updater
```

