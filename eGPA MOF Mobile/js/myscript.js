function toggleMenu() {
    $('.menu').toggle();
}

function toParent() {
    //history.go(-1);
    window.location.href="dashboard.php";
}

function toggleSubMenu(e) {
    toggleMenu();
    $('ion-side-menu .active').removeClass("active").next().addClass("ng-hide");
    
    if($(e).hasClass("active")) {
        $(e).removeClass("active").next().addClass("ng-hide");
    }
    else {
        $(e).addClass("active").next().removeClass("ng-hide");
    }
}

function showLegend() {
    window.location = "panduan.php";
}


	function gup( name )
	{
		name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");  
		var regexS = "[\\?&]"+name+"=([^&#]*)";  
		var regex = new RegExp( regexS );  
		var results = regex.exec( window.location.href ); 
		if( results == null )    return "";  
		else    return results[1];
		
	}
	