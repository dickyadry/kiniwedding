<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'WebController/website';
// $route['default_controller'] = 'WebController/comming_soon';
$route['404_override'] = 'WebController/page404';
$route['translate_uri_dashes'] = FALSE;


########### START MEMBER ###########
/* PAGE DASHBOARD */
$route['member/dashboard'] = 'MemberDashboardController/dashboard';

/* page tiket*/
$route['member/pesanan-saya'] = 'MemberPesananSayaController/order/aktif';
$route['member/pesanan-saya/aktif'] = 'MemberPesananSayaController/order/aktif';
$route['member/pesanan-saya/pending'] = 'MemberPesananSayaController/order/pending';
$route['member/pesanan-saya/detail-tiket/(:any)'] = 'MemberPesananSayaController/detail/$1';
$route['member/pesanan-saya/invoice/(:any)'] = 'MemberPesananSayaController/invoice/$1';
$route['member/pesanan-saya/lengkapi-data/(:any)'] = 'MemberPesananSayaController/lengkapi_data/$1';
$route['member/pesanan-saya/cek-link/(:any)'] = 'MemberPesananSayaController/cek_link/$1';
$route['member/pesanan-saya/save-lengkapi-data/(:any)'] = 'MemberPesananSayaController/save_lengkapi_data/$1';
$route['member/pesanan-saya/buku-tamu/(:any)'] = 'MemberPesananSayaController/buku_tamu/$1';
$route['member/pesanan-saya/buku-tamu/delete/(:any)'] = 'MemberPesananSayaController/buku_tamu_delete/$1';
$route['member/pesanan-saya/buku-tamu/restore/(:any)'] = 'MemberPesananSayaController/buku_tamu_restore/$1';

$route['member/pesanan-saya/delete/(:any)'] = 'MemberPesananSayaController/delete/$1';
$route['member/pesanan-saya/(:any)'] = 'MemberPesananSayaController/myticket/$1';
$route['generate-barcode'] = "MemberPesananSayaController/generate_barcode";


/* page tiket*/
$route['member/tiket'] = 'MemberTiketController/tiket/pending';
$route['member/tiket-aktif'] = 'MemberTiketController/tiket/aktif';
$route['member/tiket-pending'] = 'MemberTiketController/tiket/pending';
$route['member/tiket-lalu'] = 'MemberTiketController/tiket/closed';
$route['member/tiket/detail-tiket/(:any)'] = 'MemberTiketController/detail/$1';
$route['member/tiket/invoice/(:any)'] = 'MemberTiketController/invoice/$1';
$route['member/tiket/delete/(:any)'] = 'MemberTiketController/delete/$1';
$route['member/tiket-saya/(:any)'] = 'MemberTiketController/myticket/$1';
$route['generate-barcode'] = "MemberTiketController/generate_barcode";

$route['member/tiket-aktif'] = 'MemberTiketController/tiket/aktif';
$route['member/tiket-pending'] = 'MemberTiketController/tiket/pending';
$route['member/tiket-lalu'] = 'MemberTiketController/tiket/closed';
$route['member/tiket/detail-tiket/(:any)'] = 'MemberTiketController/detail/$1';
$route['member/tiket/invoice/(:any)'] = 'MemberTiketController/invoice/$1';
$route['member/tiket/delete/(:any)'] = 'MemberTiketController/delete/$1';
$route['member/tiket-saya/(:any)'] = 'MemberTiketController/myticket/$1';
$route['generate-barcode'] = "MemberTiketController/generate_barcode";


/* PAGE PROFILE*/
$route['member/profile'] = 'MemberController/profile';
$route['member/save-profile'] = 'MemberController/save_profile';

/* PAGE UBAH _PASSWORD */
$route['member/ubah-password'] = 'MemberController/change_password';
$route['member/save-ubah-password'] = 'MemberController/save_change_password';


########### START FRONEND ##########
$route['home'] = 'WebController/website';
$route['contact'] = 'WebController/contact';

$route['event/addcart'] = 'CartController/addcart';
$route['event/register'] = 'CartController/register';
$route['event/set-order'] = 'CartController/set_order';
$route['event/formulir-data-tambahan/(:any)'] = 'CartController/custom_form/$1';
$route['event/completeorder/(:any)'] = 'CartController/completeorder/$1';
$route['completeorder/(:any)'] = 'CartController/completeorder/$1';
$route['gen_qr_code/(:any)'] = 'CartController/gen_qr_code/$1';
$route['event/save-data-tambahan/(:any)'] = 'CartController/save_data_tambahan/$1';

$route['product'] = 'WebController/product';

$route['kolaborasi'] = 'WebController/kolaborasi';
$route['narasumber'] = 'WebController/narasumber';
$route['event/index/(:any)'] = 'WebController/event';
$route['r/(:any)'] = 'WebController/detail_simple_link/$1';
$route['event/(:any)/(:any)'] = 'WebController/detail/$1/$2';
$route['event/category/(:any)'] = 'WebController/category/$1';

$route['product/(:any)'] = 'WebController/detail/$1';
$route['cart/addcart'] = 'CartController/addcart';
$route['cart/checkout'] = 'CartController/checkout';
$route['cart/set-order'] = 'CartController/setorder';
$route['cart/upload-bukti-transfer'] = "FrontEndController/bukti_transfer_upload";

$route['page/services'] = 'StaticPageController/services';
$route['page/panduan'] = 'StaticPageController/panduan';
$route['page/about'] = 'StaticPageController/about';
$route['page/faq'] = 'StaticPageController/faq';
$route['page/contact'] = 'StaticPageController/contact';

$route['payment/notification/(:any)'] = "PaymentController/notification/$1";
$route['payment/finish/(:any)'] = "PaymentController/finish/$1";
$route['payment/unfinish/(:any)'] = "PaymentController/unfinish/$1";
$route['payment/error/(:any)'] = "PaymentController/error/$1";

$route['payment/complete'] = "PaymentController/complete";

$route['login'] = 'AuthController/login';
$route['register'] = 'AuthController/register';
$route['logout'] = 'AuthController/logout';
$route['forgot-password'] = 'AuthController/forgot';
$route['continue'] = 'AuthController/continue';
$route['forgot'] = 'AuthController/forgot';
$route['forgot-action'] = 'AuthController/forgotaction';
$route['change-password/(:any)'] = 'AuthController/changepassword/$1';
$route['verification/(:any)'] = 'AuthController/verification/$1';
$route['login-with-google'] = 'AuthController/login_google/$1';
$route['login-using-google'] = 'AuthController/login_using_google/$1';
$route['login-with-facebook'] = 'AuthController/login_facebook/$1';

######## UPLOAD ###########
$route['member/upload-icon'] = "FrontEndController/icon_upload";


######## PANDUAN ###########
$route['panduan'] = "PanduanController/registrasi";
$route['panduan/registrasi'] = "PanduanController/registrasi";
$route['panduan/buat-event'] = "PanduanController/buat_event";
$route['panduan/pesan-tiket'] = "PanduanController/pesan_tiket";
$route['panduan/formulir-data-tambahan'] = "PanduanController/formulir_data_tambahan";
$route['panduan/persingkat-link'] = "PanduanController/persingkat_link";
$route['panduan/multiple-form'] = "PanduanController/multiple_form";
$route['panduan/data-peserta'] = "PanduanController/data_peserta";
$route['panduan/esertifikat'] = "PanduanController/esertifikat";

######## WEDDING INVITATION ###########
$route['inv/(:any)'] = 'WeddingController/wedding/$1';
$route['inv/(:any)'] = 'WeddingController/wedding/$1';
$route['product/demo/(:any)'] = 'WeddingController/demo/$1';
