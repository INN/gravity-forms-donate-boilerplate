## Importing forms

This repository contains a number of forms, saved as `.json` files, and `.md` documents describing their purpose.

The `.json` files can be imported to Gravity Forms, if you have the following plugins also enabled:

- [Gravity Forms eCommerce Fields](https://gravitywiz.com/documentation/gravity-forms-ecommerce-fields/), an official plugin replacing INN's former [Gravity Forms Add Subtotal Merge Tag](https://github.com/INN/gravity-forms-add-subtotal-merge-tag).
- [Gravity Forms MailChimp Add-On](http://www.gravityforms.com/add-ons/mailchimp/) (requires Gravity Forms Business license or better)
- [Gravity Forms Stripe Add-On](http://www.gravityforms.com/add-ons/stripe/) (requires Gravity Forms Developer license or better) - this boilerplate uses Stripe, but you could edit the forms to use PayPal instead.

Forms are saved in this repository as `form-{name}.json`, with accompanying documentation in `form-{name}.md`. For form-specific installation instruction, please see the form's `.md` file.

## Preparing child themes for compatibility with forms

The default styles provided with Gravity Forms don't match well with Largo's form styles. For convenience, this repository contains some LESS styles that can be integrated with a Largo child theme, and a "clean page" template for displaying the form on.

### Boilerplate code features

- LESS files
	- Selected radio-button inputs are styled as normal buttons
	- Form sizes are made uniform
	- Largo color and font variables are inherited
- page-clean.php
	- minimalist, centered header
	- no sidebars
	- Largo single-column layout
	- complete footer

### Setup instructions

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
