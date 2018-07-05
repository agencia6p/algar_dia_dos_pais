// 
// @author: Tiago C.
// @version: 1.1
// @date: 01/2014
//
wView = '';
hView = '';
var app = function(){
    var a = function(){
        $('h1, h2, h3, h4, h5, h6, label').each(function(){ $(this).attr('title', $(this).text()); });
    }
    
    var b = function(){
        if(navigator.appName.indexOf("Microsoft")!= -1){
            wView = document.body.clientWidth; hView = document.body.clientHeight;
        }else{ wView = window.innerWidth; hView = window.innerHeight; }
    }
    
    var c = function(){
        $('img').each(function(){ $(this).attr('title', $(this).attr('alt')); });
    }
    
   
    return {
        init: function(){
            a();
            b();
            c();
        }
    }
}();