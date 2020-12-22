// CKEDITOR.plugins.add('custom'{
// 	icons: this.path + 'icons/image',
// 	init: function(editor){
// 		editor.addCommand('mySimpleCommand',{
// 			exec: function(edt){
//                 $('#article_photo').modal('show');
// 			}
// 		});

// 		editor.ui.addButton('Custom', {
// 			label: "Click me",
//             command: 'mySimpleCommand',
//             toolbar: 'insert'
// 		});
// 	}
// });

CKEDITOR.plugins.add( 'custom', {
    icons: 'timestamp',
    init: function( editor ) {
        editor.addCommand( 'imageCropper', {
            exec: function( editor ) {
                var base_url = window.location.origin;
                var pathArray = window.location.pathname.split( '/' );
                var url = base_url + '/' + pathArray[1] + '/';
                window.open(url + 'list_photo?CKEditor=editor1&CKEditorFuncNum=1&langCode=en');
            }
        });
        editor.ui.addButton( 'Timestamp', {
            label: 'Insert & Crop Image',
            command: 'imageCropper',
            toolbar: 'insert'
        });
    }
});