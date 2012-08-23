=== SEO Stoppord ===
Contributors: mkjellstrom
Donate link: http://www.mkwebdesign.ca/donate
Tags: seo, slug, wordpress, url, file name, search engine, stoppord, svenska, swedish, titlar
Requires at least: 2.0.2
Tested up to: 3.4.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Removes common Swedish words like 'i', 'på', 'att' from post slugs to improve SEO.

== Description ==

The SEO Stoppord Wordpress plugin removes common Swedish words like 'i', 'på', 'att' from post slugs to improve search engine optimization.

For example, when you publish a post with a title like this: 

"What You Can Do Immediately For Higher Rankings",

Wordpress automatically assigns a long filename to your post, called a post slug:

/what-you-can-do-immediately-for-higher-rankings

SEO Stoppord plugin strips common words like "Att", "här" or "där" out of your post slug to make it more search engine friendly. With SEO Stoppord plugin activated, the slug for our example blog post would look like this:

/immediately-higher-rankings

The slug is generated on saving a post (so you get a chance to look at it before publishing, and change it), or on publish. It won't overwrite an existing slug. You can force a new slug generation by deleting the existing one.


== Installation ==

1. Upload 'seo-stoppord.php' to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress

Now, when editing a post, give it a title and press Save and Continue Editing. The SEO Stoppord plugin will generate a slug. If you edit it, the plugin will honor your slug and won't change it.

== Frequently Asked Questions ==

= How to add more stop words =

You can modify the stop words and add more if you edit the seo-stoppord.php file at line 36.

== Screenshots ==

1. Showing the permalink being optimized by removing stop words
2. Swedish and a few english stop words

== Changelog ==

= 1.0 =
Initial release.

== Upgrade Notice ==

= 1.0 =
First stable release
