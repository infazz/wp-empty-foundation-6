# WordPress Foundation 6 Starter Template

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/93fb3da66eda459a8109265036bb560a)](https://www.codacy.com/app/infazz/wp-empty-foundation-6?utm_source=github.com&utm_medium=referral&utm_content=infazz/wp-empty-foundation-6&utm_campaign=badger)


## Includes
	
	* Fancybox ( To use uncomment in function.php )
	* TINYMCE Button schortcodes/functions
	* Use of parent Page Template on childs


## WP Security best practices ( Can enable from function.php )
	* REST API is Disabled 
	* RSS Feed links removed from head 
	* File Editor is Disabled
	* WP Version is removed from scripts and styles

## Use
  
Before you start you have to update Foundation with:

```bash
npm install
bower install
```

Finally, run 
```bash
npm start
```
to run the Sass compiler. It will re-run every time you save a Sass file.


## Upgrading

If you'd like to upgrade to a newer version of Foundation down the road just run:


```bash
bower update
```
