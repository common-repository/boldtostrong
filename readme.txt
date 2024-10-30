=== Bold To Strong ===
Contributors: zingming
Tags: accessibility, HTML, strong, em, bold, italics, emphasis, XHTML, WCAG, post, page, comments, converter
Requires at least: 3.0.1
Tested up to: 3.0.1
Stable tag: 1.1

Converts HTML tags 'b' and 'i' to 'strong' and 'em' within posts, pages, and comments, making them more accessible.

== Description ==

Converts `<b>` and `</b>` to `<strong>` and `</strong>`, and `<i>` and `</i>` to `<em>` and `</em>`. It works in the non-editor view (normal view) of the posts, pages, and comments.

[HTML Techniques for Web Content Accessibility Guidelines 2.0](http://www.w3.org/TR/2005/WD-WCAG20-HTML-TECHS-20050630/#em "Emphasis") recommends that `strong` and `em` should be used to denote emphasis instead of `b` and `i`.  This is because screen readers (used by blind people, etc. to browse the web) process only `strong` and `em`, not `b` and `i`.
 
Additionally, the `b` and `i` elements were deprecated in HTML 4.01 and XHTML. This plugin corrects these deprecated tags without modifying your data. (If you uninstall the plugin, your blog works as if this plugin was never installed.) 

== Installation ==

Unzip the zip file into the `/wp-content/plugins/` directory. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Can I still use SyntaxHighlighter to post source code with `b` and `i` elements? =

Yes. I have tested this plugin, and it is compatible with the [SyntaxHighlighter Evolved](http://wordpress.org/extend/plugins/syntaxhighlighter/ "SyntaxHighlighter") plugin. If you install the SyntaxHighlighter plugin and you are purposely trying to post HTML code snippets, for example, then `b` and `i` tags will not be converted into `strong` and `em` tags.

== Screenshots ==

1. Some posts, pages, and comments still use `b` and `i` tags, unfortunately.
2. When viewed in a web browser like Firefox, it looks the same.
3. However, the HTML source shows that the tags have been converted. E.g., if you are using Firefox, you can go to View > Page Source and see the changes.

== Changelog ==

= 1.1 =
* Handles uppercase `B` and `I` elements

== Upgrade Notice ==

= 1.1 =
Version 1.1 handles uppercase `B` and `I` elements.
