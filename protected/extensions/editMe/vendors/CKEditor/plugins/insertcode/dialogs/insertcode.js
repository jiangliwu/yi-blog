// JavaScript Document
CKEDITOR.dialog.add('insertcode', function(editor){  
    var escape = function(value){
        value=value.replace(/(<)/g,"&lt;");
        value=value.replace(/(>)/g,"&gt;");        
        return value;  
    };  
    return {  
        title: editor.lang.insertcode.title,  
        resizable: CKEDITOR.DIALOG_RESIZE_BOTH,  
        minWidth: 600,  
        minHeight: 400,         
        contents: [{  
            id: 'cb',  
            name: 'cb',  
            label: 'cb',  
            title: 'cb',  
            elements: [
                {  
                    type: 'select',  
                    style: 'width:100%;height:25px;margin-bottom:10px',
                    label: editor.lang.insertcode.language,  
                    id: 'lang',  
                    required: true,  
                    'default': 'csharp',  
                    items: [
                            ['ActionScript3', 'as3'],
                            ['Bash/shell', 'bash'],
                            ['C#', 'csharp'],
                            ['C++', 'cpp'],
                            ['CSS', 'css'],
                            ['Delphi', 'delphi'],
                            ['Diff', 'diff'],
                            ['Groovy', 'groovy'],
                            ['Html', 'xhtml'],
                            ['JavaScript', 'js'],
                            ['Java', 'java'],
                            ['JavaFX', 'jfx'],
                            ['Perl', 'perl'],
                            ['PHP', 'php'],
                            ['Plain Text', 'plain'],
                            ['PowerShell', 'ps'],
                            ['Python', 'py'],
                            ['Ruby', 'rails'],
                            ['Scala', 'scala'],
                            ['SQL', 'sql'],
                            ['Visual Basic', 'vb'],
                            ['XML', 'xml']
                    ]  
                },
                {  
                    type: 'textarea',                    
                    label: editor.lang.insertcode.code,  
                    id: 'code',  
                    rows: 20 ,
                    style: 'width:100%;margin-top:5px'
                }
            ]  
        }],  
        onOk: function(){  
            var code = this.getValueOf('cb', 'code');  
            var lang = this.getValueOf('cb', 'lang');
            //代码文本输入区域为空，则不进行添加
            if(code.replace(/^\s*|\s*$/g,'')!=""){
                var html ="<pre class=\"brush:" + lang + ";\">";
                html+=escape(code);  
                html+="</pre>";
                editor.insertHtml(html);
            }
        },  
        onLoad: function(){             
        }  
    };  
});