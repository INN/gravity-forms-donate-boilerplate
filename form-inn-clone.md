## Features

Example form: https://inn.org/donate/

- donor-configurable donation amount
- option to have one-time donation or monthly recurring or annual recurring
- collects personal information:
	- first and last names
	- email
	- street address
	- city
	- city, province or region
	- ZIP code or other postal code
- option to cover Stripe credit-card processing fees
- Stripe credit-card form
- option to add user's email to a Mailchimp list


## Instructions

1. Replace all copies of 'tktk' in the form with appropriate messages. This can be done by editing `form-inn-clone.json` on your computer before importing it to Gravity Forms, or after.
2. Open your site's Gravity Forms Import/Export page. This may be found in either of the following placces:
	- `example.org/wp-admin/admin.php?page=gf_export&view=import_form`
	- Dashboard > Forms > Import/Export > Import Forms.
3. Upload the form.
4. If you did not edit the form when it was a `.json` file, edit it now in the Gravity Forms admin.
5. Place the shortcode for the form on a page and check the appearance. If you are using Largo, [install the LESS and PHP files from this repository](./README.md) to the child theme.

## Shortcode

    [gravityform id="1" title="false" description="false" field_values="donation_amt=$10.00"]
