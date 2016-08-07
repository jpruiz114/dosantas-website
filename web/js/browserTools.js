function loadBrowserQueries() {
	var userAgent = navigator.userAgent;
	
	var browser = "";
	
	if(userAgent.indexOf("Mozilla") >= 0 && userAgent.indexOf("Chrome") >= 0) {
		browser = "chrome";
	}
	
	if(userAgent.indexOf("Mozilla") >= 0 && userAgent.indexOf("Firefox") >= 0) {
		browser = "firefox";
	}
	
	loadScript(
		"/js/browser-queries/" + browser + ".js",
		function() {
			applyFixes();
		}
	);
}

function loadScript(url, callback) {
	var script = document.createElement("script")
	script.type = "text/javascript";
	if(script.readyState) {
		script.onreadystatechange = function() {
			if(script.readyState === "loaded" || script.readyState === "complete") {
				script.onreadystatechange = null;
				callback();
			}
		};
	}
	else {
		script.onload = function() {
			callback();
		};
	}
	
	script.src = url;
	document.getElementsByTagName("head")[0].appendChild(script);
}

function loadjscssfile(filename, filetype) {
	if (filetype == "js") {
		var fileref = document.createElement("script");
		fileref.setAttribute("type", "text/javascript");
		fileref.setAttribute("src", filename);
	}
	else if (filetype == "css") {
		var fileref = document.createElement("link");
		fileref.setAttribute("rel", "stylesheet");
		fileref.setAttribute("type", "text/css");
		fileref.setAttribute("href", filename);
	}
	
	if (typeof fileref != "undefined") {
		document.getElementsByTagName("head")[0].appendChild(fileref);
	}
}
