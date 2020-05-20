<?php


class qa_html_theme_layer extends qa_html_theme_base {

	function head_script()
{
    parent::head_script();

    $this->output_raw('<script type="text/javascript"> 
function disableselect(e){  
return false  
}  

function reEnable(){  
return true  
}  

//if IE4+  
document.onselectstart=new Function ("return false")  
document.oncontextmenu=new Function ("return false")  
//if NS6  
if (window.sidebar){  
document.onmousedown=disableselect  
document.onclick=reEnable  
}
</script>');
}
	
}
/*
   Omit PHP closing tag to help avoid accidental output
 */
