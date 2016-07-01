## Importing forms

This repository contains a number of forms, saved as `.json` files, and `.md` documents describing their purpose.

The `.json` files can be imported to Gravity Forms, if you have the following plugins also enabled:

- Gravity Forms Add Subtotal Merge Tag (This is an INN project)
- Gravity Forms MailChimp Add-On
- Gravity Forms Stripe Add-On

## Copying files

1. Copy the LESS and PHP files into your child theme:
	- [ ] `less/*`
	- [ ] `page-clean.php`
	- [ ] `partials/content-page-clean.php`

2. Recompile the LESS using the theme's `grunt` tasks. Minify if necessary.
	- [ ] replace references to a specific form ID with the ID of the correct form
	- [ ] review fonts
	- [ ] review `@variables` in these files to make sure that they are contained in the child theme that will be using them.

3. Test the layout on your page.
	- if there are theme-specific changes, change them in that theme
	- if there are bigger changes, please remember to port them back to this repository
