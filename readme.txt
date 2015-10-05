=== qTranslate support for GravityForms ===
Tags: qtranslate, gravityforms
Requires at least: 3.0.1
Tested up to: 4.1.1
Stable tag: 1.1.2
License: MIT
License URI: http://plugins.svn.wordpress.org/qtranslate-support-for-gravityforms/trunk/LICENSE

== Description ==

Plugin to make qTranslate work with GravityForms. No more need to duplicate forms for each language.

In order to use you need both qTranslate and GravityForms installed.

After it is installed, you can use the qTranslate quicktags (see http://www.qianqin.de/qtranslate/forum/viewtopic.php?f=3&t=3&p=15#p15) for your field names, confirmation messages, etc.

e.g. if you use "[:en]Your name[:de]Ihr Name[:lb]Ären Numm" as a label, qTranslate - with the help of this plugin - will automatically choose the correct language (in this example either English, German or Luxembourgish) when displaying the form.

To report a bug or contribute to the plugin, please create an issue at the project page on GitHub: https://github.com/mweimerskirch/wordpress-qtranslate-support-for-gravityforms

I won't answer to requests in the support forum.

== Changelog ==

= 1.1.2 =
* Support for placeholders (Contributed by Johny Goerend)

= 1.1.1 =
* Eliminated a few PHP warnings

= 1.1.0 =
* Refactored the code to be more readable
* Compatibility with qTranslate-X

= 1.0.3 =
* Support for multipage forms (Contributed by Dasteem)

= 1.0.2 =
* Small code optimisations
* Check if qTranslate functions exist before executing the filters (prevents sites from breaking during upgrades)
* Support for the poll add-on

= 1.0.1 =
* Added translations to notifications and confirmation mails (Contributed by qatryk)
