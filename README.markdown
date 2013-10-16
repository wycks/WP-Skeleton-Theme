# WP-Skeleton - WordPress Theme
-------------------------------

This is a very minimal Bare Bones Responsive WordPress theme based on getskeleton.com

### Features:

* Very Easy to customise, it's basically a blank theme.
* Responsive Media Query Layout
* Very small footprint: Entire theme is only 55kb
* Very small load query, only 15-20 WordPress queries made to the DB by default.
* Bundled with full 960 based CSS Responsive Grid
* Icon support for mobile and web
* IE HTML5shim support



### Default 4 layouts:
- Base 960 Grid       960px
- Tablet (Portrait)   768px
- Mobile (Portrait)   320px
- Mobile (Landscape)  480px

-------------------------------

### What's is included:

*WordPress Menu support ( Drag & Drop)*
 - The menu floats right on the large sizes, then floats left on mobile.

*Widget Support*
 - By default it has a widgitized sidebar and footer.

*Comment, Full Width Page, Author, Search, 404* --> Templates

Some basic template tags for Site Title, Tagline, Post Meta.

-------------------------------

### What it does not have:

Image template or any real image CSS - This is best left outside a framework

Support for `the_excerpt` , by default you must use the "Read More" to split posts in the main loop.

Support for `tag` output in the main loop, I never use tags and they can add to db overhead.

Some pages are just handled by the main loop, such as single.php, archives , category, tags, etc.

Snippets have been removed and put into a [gist here](https://gist.github.com/wycks/7013704).

### Notes
Stripped out the JavaScript tabs that came with the original HTML Skeleton Framework.
The CSS for those elements is still present but it is best to `wp_enqueue` the javascript using native WP functions.

The footer is left completely unstyled, up to you which grids you want to use, supports 1, 2, 3 or 4 columns easily.

To have a left sidebar just move `get_template_part( 'sidebar', 'index' );` to above the loop call (might need minor tweaks).

More grid layout and examples on http://www.getskeleton.com/

-------------------------------
The demo sites keep going down because PHP Cloud based app sites suck..sorry
