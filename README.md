BibTeX
======

BiBTeX extension for MediaWiki

Features
-----------
- Parse bibtex entries placed between `<bibtex>` and `</bibtex>` tags
- ACM-like popup style to quickly copy-paste a bibtex reference
- A limited but useful emacs-like help mechanism to edit bibtex entries
- A div popup demo (not IE compliant nor XHTML transitional)


1 - Install/Files
================
Unpack the **extension** archive into the extensions directory of your
mediawiki root.

On a Linux machine, you can do the following to unpack:
```
tar -xvzf BibTex.tar.gz
```

If you want to use this extensions, edit the file **LocalSettings.php** located at the root of your mediawiki and write down the line:

```php
require_once( "extensions/BibTex/bibtex.php");
```

Several files are unpacked:

- *bibtex.ph*p: main extension file
- *bibtex.css*: css styles for the divpopup demo
- *bibtex.js*: javascript file containing a few functions
- *bibstyle.php*: file containing all the configuration variables of the extension


2 - Setup and configuration
==========================

All configuration options are in the **_bibstyle.php_** file. The following variables are defined:

* `$wbibLang` selects language (English, French)
* `$wbib_usejavascript` enables/disables javascript use in this extension
* `$wbib_allowbibpopup` enables/disables the ACM-like popup (requires javascript enabled)
* `$wbib_allowdivpopup` enables/disables the divpopup demo
* `$wbib_medianamespace` giving the namespace of uploaded pdf or ps files on your mediawiki
* `$wbib_pdficon` and `$wbib_psicon`: icons to use when displaying PDF or PS fields. Give them the name of an image file uploaded to your mediawiki server. **_(Currently not used)_**


3 - Use and online help mechanism
================================

To add a bibtex reference, put it between `<bibtex>` and `</bibtex>` tags.

If you forget the bibtex syntax or parameters, you can use the help mechanism.
If you only put whitespaces between your `<bibtex>` markups and click
on the preview button, you will have a contextual help giving the names of
the entries you can enter. If javascript is enabled (default) you can click on
the entry type to display it in the edit textarea.

**Be careful! It also deletes everything else. This feature is useful if you only intend to put a single bibtex reference in the page.**

If you put just a @type between your bibtex markups (where type is article,
book, etc ...), you will have the corresponding help related to this entry
type with the same javascript mecanism.

Once your entry is edited, you can save it. If you had specified the following fields, some behavior will be added:

* "pdf": you can put in it a pdf file uploaded in your mediawiki server (just the name without namespace - see bibstyle.php ). A link to this pdf will be automatically made using the icon you specified.
* "ps": the same mechanism applies for postscript files
* "url": allows you to put an external hyperlink to the article

On the bottom of the reference, you have a 'bibtex' link.
If divpopup is enabled, then a div will appear with quite the same information
when you put the mouse over the link.
If bibpopup is enabled, then if you click on the link, an ACM-like popup will
appear containing the rawtext of the bibtex entry.

4 - Examples of templates that use BibTex
========================================

4.a - Template:Bibtex
-------------------
To use this template, each reference has its own template page in the form `Template:Bibtex/id`. This template transcludes the contents of that sub-template and can be used many times.

The template code is as follows:

```
<span id="{{{1}}}">{{Bibtex/{{{1}}}}}</span>
```

To use this template, type:

```
{{Bibtex|id}}
```

4.2 - Template:refa
-----------------

The template code is as follows:

```
[[Template:Bibtex/{{{1}}} | [{{{1}}}]]]
```

This creates a link to the reference's template page.

4.3 - Misc
--------
The bibtex extension was developed with these kinds of templates and use-cases in mind. You may find it appropriate to create a specific namespace called Bibtex and modify the above templates accordingly.


5 - Credits and people who provided help
=======================================
I wish to thank :

* Vincent Le Ligeour for the divpopup demo
* Aurélien Hazan as a beta tester of this extension
* Kinh Tieu for developping and distributing the bibtex class without restriction. It was a great help.
* Louis-Philippe Morency who informed me about the status of the bibtex class developed by Kinh Tieu.

```
Jean-Yves Didier -- Thu, Jul 27, 2006  
```
