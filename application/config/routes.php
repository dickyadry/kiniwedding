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
$route['member/tiket'] = 'MemberTiketController/tiket/pending';
$route['member/tiket-aktif'] = 'MemberTiketController/tiket/aktif';
$route['member/tiket-pending'] = 'MemberTiketController/tiket/pending';
$route['member/tiket-lalu'] = 'MemberTiketController/tiket/closed';
$route['member/tiket/detail-tiket/(:any)'] = 'MemberTiketController/detail/$1';
$route['member/tiket/invoice/(:any)'] = 'MemberTiketController/invoice/$1';
$route['member/tiket/delete/(:any)'] = 'MemberTiketController/delete/$1';
$route['member/tiket-saya/(:any)'] = 'MemberTiketController/myticket/$1';
$route['generate-barcode'] = "MemberTiketController/generate_barcode";

/* page esertifikat*/
$route['member/esertifikat'] = 'MemberSertifikatController/load';
$route['member/sertifikat/(:any)'] = 'MemberSertifikatController/show/$1';

/* page materi*/
$route['member/materi'] = 'MemberMateriController/load';
$route['member/materi/(:any)'] = 'MemberMateriController/show/$1';


$route['member/tiket-aktif'] = 'MemberTiketController/tiket/aktif';
$route['member/tiket-pending'] = 'MemberTiketController/tiket/pending';
$route['member/tiket-lalu'] = 'MemberTiketController/tiket/closed';
$route['member/tiket/detail-tiket/(:any)'] = 'MemberTiketController/detail/$1';
$route['member/tiket/invoice/(:any)'] = 'MemberTiketController/invoice/$1';
$route['member/tiket/delete/(:any)'] = 'MemberTiketController/delete/$1';
$route['member/tiket-saya/(:any)'] = 'MemberTiketController/myticket/$1';
$route['generate-barcode'] = "MemberTiketController/generate_barcode";

/*SALES ORDER*/
$route['member/sales-order'] = 'MemberSalesOrderController/sales_order';
$route['member/sales-order/update-status/(:any)'] = 'MemberSalesOrderController/update_status/$1';
$route['member/sales-order/update-status-pembayaran/(:any)/(:any)'] = 'MemberSalesOrderController/update_status_pembayaran/$1/$2';
$route['member/sales-order/restore/(:any)'] = 'MemberSalesOrderController/restore/$1';

/*PAGE EVENT*/
$route['member/event'] = 'MemberEventController/event/aktif';
$route['member/event-draf'] = 'MemberEventController/event/draf';
$route['member/event-lalu'] = 'MemberEventController/event/closed';

$route['member/event/detail-event/(:any)'] = 'MemberEventController/detail/$1';
$route['member/event/buat-event'] = 'MemberEventController/form';
$route['member/event/save'] = 'MemberEventController/save_event';
$route['member/event/edit-event/(:any)'] = 'MemberEventController/form/$1';
$route['member/event/cancel-event/(:any)'] = 'MemberEventController/form_cancel/$1';
$route['member/event/reschedule-event/(:any)'] = 'MemberEventController/form_reschedule/$1';
$route['member/event/view-event/(:any)'] = 'MemberEventController/view/$1';
$route['member/event/update/(:any)'] = 'MemberEventController/update_event/$1';
$route['member/event/reschedule/(:any)'] = 'MemberEventController/reschedule/$1';
$route['member/event/cancel/(:any)'] = 'MemberEventController/cancel_event/$1';
$route['member/event/update-link/(:any)'] = 'MemberEventController/update_link/$1';
$route['member/event/publish/(:any)'] = 'MemberEventController/publish_event/$1';
$route['member/event/closed-event/(:any)'] = 'MemberEventController/closed_event/$1';
$route['member/event/get-kota'] = 'MemberEventController/get_kota';
$route['member/form-tiket'] = 'MemberEventController/form_tiket';
$route['member/form-tiket/(:any)'] = 'MemberEventController/form_tiket/$1';

$route['member/event/data-peserta/(:any)'] = 'MemberEventDataPesertaController/data_peserta/$1';
$route['member/event/get-sertifikat/(:any)'] = 'MemberEventDataPesertaController/getsertifikat/$1';
$route['member/event/delete-sertifikat/(:any)'] = 'MemberEventDataPesertaController/deletesertifikat/$1';
$route['member/event/delete-sertifikat-peserta/(:any)'] = 'MemberEventDataPesertaController/deletesertifikatpeserta/$1';
$route['member/event/preview-esertifikat/(:any)'] = 'MemberEventDataPesertaController/previewesertifikat/$1';
$route['member/event/preview-esertifikat-peserta/(:any)'] = 'MemberEventDataPesertaController/previewesertifikatpeserta/$1';
$route['member/event/download/(:any)'] = 'MemberEventDataPesertaController/download/$1';
$route['member/send-mail/(:any)'] = 'MemberEventDataPesertaController/send_mail/$1';

$route['member/event/get-materi/(:any)'] = 'MemberEventDataPesertaController/getmateri/$1';
$route['member/event/delete-materi/(:any)'] = 'MemberEventDataPesertaController/deletemateri/$1';
$route['member/event/delete-materi-peserta/(:any)'] = 'MemberEventDataPesertaController/deletemateripeserta/$1';
$route['member/event/download-materi/(:any)'] = 'MemberEventDataPesertaController/download_materi/$1';

$route['member/event/laporan-penjualan/(:any)'] = 'MemberEventReportController/sales_report/$1';

$route['member/event/checkin-pengunjung/(:any)'] = 'MemberEventCheckinPengunjungController/checkin_pengunjung/$1';
$route['member/event/checkin/(:any)'] = 'MemberEventCheckinPengunjungController/checkin/$1';
$route['member/event/scan/(:any)'] = 'MemberEventCheckinPengunjungController/scan/$1';

$route['member/event/laporan-checkin/(:any)'] = 'MemberEventCheckinPengunjungController/laporan_checkin/$1';

$route['member/event/formulir-data-tambahan/(:any)'] = 'MemberEventController/custom_form/$1';
$route['member/event/update-position-custom-form'] = 'MemberEventController/update_position';
$route['member/event/save-custom-form'] = 'MemberEventController/save_custom_form';
$route['member/event/load-custom-form'] = 'MemberEventController/load_custom_form';
$route['member/event/delete-custom-form/(:any)'] = 'MemberEventController/delete_custom_form/$1';
$route['member/event/delete-all-custom-form'] = 'MemberEventController/delete_all_custom_form';

$route['member/event/multiple-form/(:any)'] = 'MemberEventMultipleFormController/multiple_form/$1';
$route['mf/(:any)'] = 'MemberEventMultipleFormController/mf/$1';
$route['member/event/create-multiple-form'] = 'MemberEventMultipleFormController/create_multiple_form';
$route['member/event/save-multiple-form'] = 'MemberEventMultipleFormController/save_multiple_form';
$route['member/event/load-multiple-form'] = 'MemberEventMultipleFormController/load_multiple_form';
$route['member/event/remove-multiple-form/(:any)'] = 'MemberEventMultipleFormController/remove_multiple_form/$1';
$route['member/event/delete-multiple-form/(:any)'] = 'MemberEventMultipleFormController/delete_multiple_form/$1';
$route['member/event/delete-all-multiple-form'] = 'MemberEventMultipleFormController/delete_all_multiple_form';
$route['event/save-data-multiple-form/(:any)'] = 'MemberEventMultipleFormController/save_data_multiple_form/$1';
$route['member/event/show-data-multiple-form/(:any)'] = 'MemberEventMultipleFormController/show_data_multiple_form/$1';

$route['member/event/rate'] = 'MemberEventController/rate';
$route['member/event/penilaian/(:any)'] = 'MemberEventController/penilaian/$1';

/*PAGE PESANAN KAMU*/
$route['member/pesanan-kamu'] = 'MemberEventController/event/aktif';
$route['member/pesanan-kamu'] = 'MemberEventController/event/draf';
$route['member/pesanan-kamu'] = 'MemberEventController/event/closed';

$route['member/pesanan-kamu/detail-event/(:any)'] = 'MemberEventController/detail/$1';
$route['member/pesanan-kamu/buat-event'] = 'MemberEventController/form';
$route['member/pesanan-kamu/save'] = 'MemberEventController/save_event';
$route['member/pesanan-kamu/edit-event/(:any)'] = 'MemberEventController/form/$1';
$route['member/pesanan-kamu/cancel-event/(:any)'] = 'MemberEventController/form_cancel/$1';
$route['member/pesanan-kamu/reschedule-event/(:any)'] = 'MemberEventController/form_reschedule/$1';
$route['member/pesanan-kamu/view-event/(:any)'] = 'MemberEventController/view/$1';
$route['member/pesanan-kamu/update/(:any)'] = 'MemberEventController/update_event/$1';
$route['member/pesanan-kamu/reschedule/(:any)'] = 'MemberEventController/reschedule/$1';
$route['member/pesanan-kamu/cancel/(:any)'] = 'MemberEventController/cancel_event/$1';
$route['member/pesanan-kamu/update-link/(:any)'] = 'MemberEventController/update_link/$1';
$route['member/pesanan-kamu/publish/(:any)'] = 'MemberEventController/publish_event/$1';
$route['member/pesanan-kamu/closed-event/(:any)'] = 'MemberEventController/closed_event/$1';
$route['member/pesanan-kamu/get-kota'] = 'MemberEventController/get_kota';
$route['member/form-tiket'] = 'MemberEventController/form_tiket';
$route['member/form-tiket/(:any)'] = 'MemberEventController/form_tiket/$1';

/* PAGE PROFILE*/
$route['member/profile'] = 'MemberController/profile';
$route['member/save-profile'] = 'MemberController/save_profile';

/* PAGE UBAH _PASSWORD */
$route['member/ubah-password'] = 'MemberController/change_password';
$route['member/save-ubah-password'] = 'MemberController/save_change_password';

/* PAGE LEGAL */
$route['member/legal'] = 'MemberController/legal';
$route['member/save-legal'] = 'MemberController/save_legal';

/* PAGE REKENING */
$route['member/rekening'] = 'MemberController/rekening';
$route['member/rekening/add'] = 'MemberController/add_rekening';
$route['member/rekening/save'] = 'MemberController/save_rekening';
$route['member/rekening/edit/(:any)'] = 'MemberController/edit_rekening/$1';
$route['member/rekening/update/(:any)'] = 'MemberController/update_rekening/$1';
$route['member/rekening/delete/(:any)'] = 'MemberController/delete_rekening/$1';

/* PAGE SALDO */
$route['member/saldo'] = 'MemberSaldoController/saldo';
$route['member/saldo/pencairan'] = 'MemberSaldoController/pencairan';
########### END MEMBER ###########

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

$route['event'] = 'WebController/event';
$route['kolaborasi'] = 'WebController/kolaborasi';
$route['narasumber'] = 'WebController/narasumber';
$route['event/index/(:any)'] = 'WebController/event';
$route['r/(:any)'] = 'WebController/detail_simple_link/$1';
$route['event/(:any)/(:any)'] = 'WebController/detail/$1/$2';
$route['event/category/(:any)'] = 'WebController/category/$1';

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
$route['member/upload-banner'] = "FrontEndController/banner_upload";
$route['member/upload-icon'] = "FrontEndController/icon_upload";
$route['member/upload-document'] = "FrontEndController/document_upload";
$route['event/upload-cover'] = "FrontEndController/photo_upload";
$route['event/upload-account'] = "FrontEndController/account_upload";
$route['event/upload-icon'] = "FrontEndController/icon_upload";
$route['event/upload-sertifikat'] = "FrontEndController/sertifikat_upload";
$route['event/upload-template-sertifikat'] = "FrontEndController/template_sertifikat_upload";
$route['event/upload-materi'] = "FrontEndController/materi_upload";
$route['event/upload-file'] = "FrontEndController/file_upload";
$route['event/upload-bukti-transfer'] = "FrontEndController/bukti_transfer_upload";

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
