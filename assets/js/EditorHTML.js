var EditorHTML = function(){
	var _self = this;
	var height = $(window).height() - 200;
	/* Layout para edição de conteudo */
	this.digitar = this.revisar = this.ditar = function( target ){
		tinymce.init({
			selector: target,
			maxwidth : 825,
			height : height,
			theme: 'modern',
			language: 'pt_BR',
			indentation : '26pt', /* Ajuste para identar seguindo padrão do AllClinic */
			fontsize_formats: "8pt 9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 18pt 19pt 20pt 21pt 22pt 23pt 24pt 36pt",
			toolbar1: 
				'fontselect styleselect| fontsizeselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | ' +
				'bullist numlist outdent indent fullscreen spellchecker',
			image_advtab: true,
			pagebreak_separator: "<page_break>",
			convert_fonts_to_spans : false,
		    spellchecker_rpc_url: 'spellchecker.php',
		    plugins: [
		    	'advlist lists image charmap print preview hr pagebreak',
		    	'searchreplace wordcount visualblocks visualchars fullscreen',
		    	'insertdatetime nonbreaking save table contextmenu directionality',
		    	'paste textcolor colorpicker textpattern imagetools codesample toc spellchecker'
	    	],
	    	formats : {
	    		bold : { inline : 'span', styles : { 'font-weight' : 'bold' } },
	    		italic : { inline : 'span', styles : { 'font-style' : 'italic' } },
	    		underline : { inline : 'span', styles : { 'font-style' : 'underline' } }
	    	},
	    	style_formats: [
	    		{ title: 'Identar Texto', block: 'div', styles: { 'margin-left' : '0.75in', 'text-indent' : '-0.75in' } }
    		],
			protect: [
	          /\<\/?(if|endif)\>/g,  // Protecao <if> & </endif>
	          /\<xsl\:[^>]+\>/g,  // Protecao <xsl:...>
	          /\<script[^>]+\>/g,  // Protecao <script:...>
	          /<\?php.*?\?>/g  // Protecao php
	        ],
	        setup: function(editor) {
	        	editor.on('change', function(e) {
	        		// Previnindo saida
	        		preventGo( true );
	        	});
	        	editor.on('init',function(e) {
	                //editor.execCommand('mceSpellCheck');
	            });
	        }
		});
	}
	/* Layout do editor apenas para visualizacao */
	this.visualizar = function( target ){
		tinymce.init({
			selector : target,
			menubar : false,
			maxwidth : 825,
			language: 'pt_BR',
			height : height,
			convert_fonts_to_spans : false,
			toolbar: "code",
		    spellchecker_rpc_url: 'spellchecker.php',
		    plugins: [ 'spellchecker' ],
			setup: function(editor) {
	        	editor.on('init',function(e) {
	                editor.execCommand('mceSpellCheck');
	            });
	        }
		});
	}
}