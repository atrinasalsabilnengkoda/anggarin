<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['logout'] = 'Login/logout';

$route['addbank'] = 'bank/tambah';
$route['addcustomer'] = 'customer/tambah';
$route['addorder'] = 'order/tambah';
$route['addpayment'] = 'payment/tambah';
$route['addproduct'] = 'product/tambah';
$route['addsupplier'] = 'supplier/tambah';

$route['editbank/:id'] = 'bank/edit';
$route['editcustomer/:id'] = 'customer/edit';
$route['editorder/:id'] = 'order/edit';
$route['editpayment/:id'] = 'payment/edit';
$route['editproduct/:id'] = 'product/edit';
$route['editsupplier/:id'] = 'supplier/edit';

$route['deletebank'] = 'bank/delete';
$route['deletecustomer'] = 'customer/delete';
$route['deleteorder'] = 'order/delete';
$route['deletepayment'] = 'payment/delete';
$route['deleteproduct'] = 'product/delete';
$route['deletesupplier'] = 'supplier/delete';

$route['historiCustomer'] = 'customer/history';
$route['historiSupplier'] = 'supplier/history';

$route['updatebank'] = 'bank/update';
$route['updatecustomer'] = 'customer/fungsiEdit';
$route['updateorder'] = 'order/fungsiEdit';
$route['updatepayment'] = 'payment/fungsiEdit';
$route['updateproduct'] = 'product/fungsiEdit';
$route['updatesupplier'] = 'supplier/fungsiEdit';

$route['bankActive'] = 'bank/bankActive';
$route['bankUnactive'] = 'bank/bankUnactive';

$route['paidCustomer'] = 'customer/paidCustomer';
$route['unpaidCustomer'] = 'customer/unpaidCustomer';

$route['paidSupplier'] = 'supplier/paidSupplier';
$route['unpaidSupplier'] = 'supplier/unpaidSupplier';

$route['paidOrder'] = 'order/paidOrder';
$route['unpaidOrder'] = 'order/unpaidOrder';

$route['paidPayment'] = 'payment/paidPayment';
$route['unpaidPayment'] = 'payment/unpaidPayment';

$route["income2020"] = 'income/income2020';
$route["income2021"] = 'income/income2021';
$route["income2022"] = 'income/income2022';

$route["outcome2020"] = 'outcome/outcome2020';
$route["outcome2021"] = 'outcome/outcome2021';
$route["outcome2022"] = 'outcome/outcome2022';

$route["profitloss2020"] = 'profitloss/profitloss2020';
$route["profitloss2021"] = 'profitloss/profitloss2021';
$route["profitloss2022"] = 'profitloss/profitloss2022';