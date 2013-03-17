CKEDITOR.plugins.add(
		'insertcode', {
	    requires : ['dialog'],
	    lang:['en'],
	    init : function(editor) {
	        editor.addCommand('insertcode', new CKEDITOR.dialogCommand('insertcode'));
	        editor.ui.addButton('insertcode', {
	                    label : 'insert codes',
	                    command : 'insertcode',
	                    icon : this.path + 'images/insertcode.png'
	                });
	        CKEDITOR.dialog.add('insertcode', this.path + 'dialogs/insertcode.js');        
	    }
});