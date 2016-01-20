# Pimcore Manual Updater

Is Pimcore struggling to update automatically? Try update manually using this! Be warned, this is a 
fairly rough and ready script, it may not be perfect, and as the Pimcore docs state you may not get
a completely working site by the end of it depending on what custom code you have written.

## Usage

*Before anything, make a backup of everything, literally everything*

Firstly you'll need to download the Pimcore git repository somewhere 
(http://github.com/pimcore/pimcore).

You'll also need to download the version of Pimcore you want to upgrade to and put that somewhere.

Then, download this repo somewhere too.

Then:

```
$ cd <path to your pimcore webroot>/
$ rm -rf ./pimcore
$ cp -r <path to pimcore version you want>/pimcore ./
$ ln -s <path to pimcore git repo>/update ./
$ ln -s <path to this git repo> ./updater
$ ./updater/updater <current revision> <target revision>
$ rm ./update
$ rm ./updater
```

## Common Issues

* Make sure you run the script from the root of your repo, regardless of whether you symlink this
repo into your project, or clone it into it. The script uses the current working directory to find
the update scripts.
