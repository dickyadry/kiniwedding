CKEDITOR.editorConfig = function( config ) {
	config.toolbarGroups = [
		// { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		// { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		// { name: 'forms', groups: [ 'forms' ] },
		// { name: 'styles', groups: [ 'styles' ] },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'align', 'list', 'indent', 'blocks', 'bidi', 'paragraph' ] },
		// { name: 'insert', groups: [ 'insert' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.removeButtons = 'Save,NewPage,Preview,Print,Templates,Cut,Copy,PasteText,Paste,PasteFromWord,Find,Replace,Scayt,SelectAll,Form,Checkbox,Radio,Textarea,TextField,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,Outdent,Indent,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,TextColor,BGColor,Maximize,ShowBlocks,About,Styles,Subscript,Superscript,Flash,Image';
	config.allowedContent = true;
};