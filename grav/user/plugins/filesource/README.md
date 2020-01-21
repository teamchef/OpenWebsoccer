
# Grav `filesource` plugin

**filesource** is a plugin for [Grav](http://getgrav.org) with which you
can have text files embedded to a page.


## Installation

### Manual Installation

To install this plugin, just download the zip version of this repository
and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder
to `filesource`.

You should now have all the plugin files under

    /your/site/grav/user/plugins/filesource


## Config defaults 

filesource.yaml:

    enabled: true


# Usage

The plugin is to be called from a page Markdown source file (eg. `item.md`).

### SYNOPSIS

    [plugin:filesource](*filename*)

### OPTIONS

  *filename* is the name of the file to be embedded into the page. *filename*
  must reside in the same directory as the page source file.

### NOTES

  **filesource** can be used to embed *any* file to a page as text and it
  *won't* check the file content type or encoding. Embedding binary or
  other non-text files may have unexpected results.

### BUGS AND TODO

  Please send any comments or bug reports to the plugin's
  [issue tracker](https://github.com/anza/grav-plugin-filesource/issues).

  * sanity checks with paths and reading files
  * options how to format the embedded file would be useful for different
    types of files
    * templates, perhaps?

### AUTHORS

  **filesource** is made by [anza](https://github.com/anza) and it is based on
  [Grav PageInject Plugin](https://github.com/getgrav/grav-plugin-page-inject)
  by [rhukster](https://github.com/rhukster).


> `filesource` README   Last update: Thu Jul  2 01:00:08 EEST 2015
