
var jsu = {
	getElement : function (type, cssClass, eventListeners, style) {
		
		var el = document.createElement(type);
		el.classList.add(cssClass.split(" "));
		for (eventName in eventListeners) {
			el[eventName] = eventListeners[eventName];
		}
		if (zIndex !=== typeof("undefined")) {
			el.style.zIndex
		}
		return el;
	},
	getLink : function (href, html, cssClass) {
		var el = document.createElement("a");
		el.href = href;
		el.innerHTML = html;
		el.classList.add(cssClass.split(" "));
		return el;
	},
	
	print_r : function (object) {
		html = "<table>";
		for (var i in object) {
			html += "<tr><td>"+i+"</td>";
			html += "<td>";
			if (isArray(object[i])) {
				html += jsu.print_r(object[i])+"</td>";
			} else {
				html += "<td>"+object[i]+"</td>";
			}
			html += "</tr>";
		}
		document.write(html);
	}
}

var SimpleEditorUtility = {
	
	element : null,
	contentArea : null,
	
	attach : function (element) {
		
		var that = this;
		this.element = element;
		
		var el_header = document.createElement("div");
		el_header.classList.add("editMenu");
		
		contentArea = document.createElement("div");
		jsu.getLink("href","Layout",{onclick : function (e) {
			that.showEditLayout();
		},"menuLayout");
		jsu.getLink("href","Area",{onclick : function (e) {
			that.showEditArea();
		},"menuArea");
		jsu.getLink("href","File",{onclick : function (e) {
			showEditFile();
		},"menuFile");
		jsu.getLink("href","Settings",{onclick : function (e) {
			showEditSettings();
		},"menuSettings");
		
		<div class="adminContent">
			
			<div class="adminContentEditLayer">
				
			</div>
			
			<div class="editMenu">
				<a class="menuLayout">Layout</a>
				<a class="menuArea">Area</a>
				<a class="menuFile">File</a>
				<a class="menuSettings">Settings</a>
			</div>
		
		</div>
	},
	
	showEditLayout : function () {
		
	},
	
	showEditArea : function () {
		
		<div class="editArea">
		<div class="absoluteContainer">
			<div class="absoluteCenter"><a class="addLink" title="absolute center">+</a></div>
			<div class="absoluteTop"><a class="addLink" title="absolute top">+</a></div>
			<div class="absoluteHeader"><a class="addLink" title="absolute header">+</a></div>
			<div class="absoluteHeaderMenu"><a class="addLink" title="absolute header menu">+</a></div>
			<div class="absoluteLeft"><a class="addLink" title="absolute left">+</a></div>
			<div class="absoluteRight"><a class="addLink" title="absolute right">+</a></div>
			<div class="absoluteFooterMenu"><a class="addLink" title="absolute footer menu">+</a></div>
			<div class="absoluteFooter"><a class="addLink" title="absolute footer">+</a></div>
			<div class="absoluteBottom"><a class="addLink" title="absolute bottom">+</a></div>
			<div class="absoluteInnerLeft"><a class="addLink" title="absolute inner left">+</a></div>
			<div class="absoluteInnerRight"><a class="addLink" title="absolute inner right">+</a></div>
		</div>
		<div class="fixedCenter"><a class="addLink" title="fixed center">+</a></div>
		<div class="fixedTop"><a class="addLink" title="fixed top">+</a></div>
		<div class="fixedHeader"><a class="addLink" title="fixed header">+</a></div>
		<div class="fixedHeaderMenu"><a class="addLink" title="fixed header menu">+</a></div>
		<div class="fixedLeft"><a class="addLink" title="fixed left">+</a></div>
		<div class="fixedRight"><a class="addLink" title="fixed right">+</a></div>
		<div class="fixedFooterMenu"><a class="addLink" title="fixed footer menu">+</a></div>
		<div class="fixedFooter"><a class="addLink" title="fixed footer">+</a></div>
		<div class="fixedBottom"><a class="addLink" title="fixed bottom">+</a></div>
		<div class="fixedInnerLeft"><a class="addLink" title="dixed inner left">+</a></div>
		<div class="fixedInnerRight"><a class="addLink" title="fixed inner right">+</a></div>
	</div>
		
		
	},
	
	showEditFile : function () {
		
	},
	
	showEditSettings : function () {
		
	}
	
};
