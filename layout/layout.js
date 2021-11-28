
var LayoutFixedAbsolute = {
	
	element : null,
	
	offsetTop : 0,
	offsetRight : 0,
	offsetBottom : 0,
	offsetleft : 0,
	
	layoutPanel : {
		fixedTop : {height : 30},
		fixedHeader : {height : 50},
		fixedHeaderMenu : {height : 30},
		fixedLeft : {width : 100},
		fixedRight : {width : 100},
		fixedFooterMenu : {height : 50},
		fixedFooter : {height : 100},
		fixedBottom : {height : 30},
		fixedInnerLeft : {width : 100},
		fixedInnerRight : {width : 100},
		fixedCenter : {},
		
		absoluteTop : {height : 30},
		absoluteHeader : {height : 50},
		absoluteHeaderMenu : {height : 30},
		absoluteLeft : {width : 100},
		absoluteRight : {width : 100},
		absoluteFooterMenu : {height : 50},
		absoluteFooter : {height : 100},
		absoluteBottom : {height : 30},
		absoluteInnerLeft : {width : 100},
		absoluteInnerRight : {width : 100},
		absoluteCenter : {}
	},
	
	absoluteContainer : {top : 0, left : 0, right : 0, bottom : 0}
	
	
	attach : function (element) {
		
		this.element = element;
		
		for (var p=0; p<this.layoutPanel.length; p++) {
			if (this.layoutPanel[p].element === undefined) {
				
			}
		}
		
		for (var panels of this.element.childNodes) {
			
		}
	},
	
	calculatePositions : function () {
		var theTop = this.offsetTop;
		var theLeft = this.offsetLeft;
		var theRight = this.offsetRight;
		var theBottom = this.offsetBottom;
		// top
		if (this.fixedTop.element !== undefined) {
			theTop += this.fixedTop.element.offsetHeight
		}
		if (this.fixedHeader.element !== undefined) {
			this.fixedHeader.element.style.top = theTop + "px";
			theTop += this.fixedHeader.element.offsetHeight;
		}
		if (this.fixedHeaderMenu.element !== undefined) {
			this.fixedHeaderMenu.element.style.top = theTop + "px";
			theTop += this.fixedHeaderMenu.element.offsetHeight;
		}
		if (this.fixedCenter.element !== undefined) {
			this.fixedCenter.element.style.top = theTop + "px";
		}
		if (this.absoluteTop.element !== undefined) {
			this.absoluteTop.element.style.top = theTop + "px";
			theTop += this.absoluteTop.element.offsetHeight
		}
		if (this.absoluteHeader.element !== undefined) {
			this.absoluteHeader.element.style.top = theTop + "px";
			theTop += this.absoluteHeader.element.offsetHeight;
		}
		if (this.absoluteHeaderMenu.element !== undefined) {
			this.absoluteHeaderMenu.element.style.top = theTop + "px";
			theTop += this.absoluteHeaderMenu.element.offsetHeight;
		}
		// left
		if (fixedLeft.element !== undefined) {
			this.theLeft += fixedLeft.element.offsetWidth
		}
		if (this.fixedInnerLeft.element !== undefined) {
			this.fixedInnerLeft.element.style.left = theLeft + "px";
			theLeft += this.fixedInnerLeft.element.offsetWidth;
		}
		if (this.absoluteLeft.element !== undefined) {
			this.absoluteLeft.element.style.left = theLeft + "px";
			theLeft += this.absoluteLeft.element.offsetWidth;
		}
		if (this.absoluteInnerLeft.element !== undefined) {
			this.absoluteInnerLeft.element.style.left = theLeft + "px";
			theLeft += this.absoluteInnerLeft.element.offsetWidth;
		}
		// right
		if (this.fixedRight.element !== undefined) {
			theRight += this.fixedRight.element.offsetWidth
		}
		if (this.fixedInnerRight.element !== undefined) {
			this.fixedInnerRight.element.style.right = theRight + "px";
			theRight += this.fixedInnerRight.element.offsetWidth;
		}
		if (this.absoluteRight.element !== undefined) {
			this.absoluteRight.element.style.right = theRight + "px";
			theRight += this.absoluteRight.element.offsetWidth;
		}
		if (this.absoluteInnerRight.element !== undefined) {
			this.absoluteInnerRight.element.style.right = theRight + "px";
			theRight += this.absoluteInnerRight.element.offsetWidth;
		}
		// bottom
		if (this.fixedBottom.element !== undefined) {
			theBottom += this.fixedBottom.element.offsetHeight
		}
		if (this.fixedFooter.element !== undefined) {
			this.fixedFooter.element.style.bottom = theBottom + "px";
			theBottom += this.fixedFooter.element.offsetHeight;
		}
		if (fixedFooterMenu.element !== undefined) {
			this.fixedFooterMenu.element.style.bottom = theBottom + "px";
			this.theBottom += this.fixedFooterMenu.element.offsetHeight;
		}
		if (this.absoluteBottom.element !== undefined) {
			this.absoluteBottom.element.style.bottom = theBottom + "px";
			theBottom += this.absoluteBottom.element.offsetHeight
		}
		if (this.absoluteFooter.element !== undefined) {
			this.absoluteFooter.element.style.bottom = theBottom + "px";
			theBottom += this.absoluteFooter.element.offsetHeight;
		}
		if (this.absoluteFooterMenu.element !== undefined) {
			this.absoluteFooterMenu.element.style.bottom = theBottom + "px";
			theBottom += this.absoluteFooterMenu.element.offsetHeight;
		}
		
	},
	
	
}

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






var LayoutEditorOptions = {
	
	attach : function (element) {
		
	},
	
	remove : function () {
		
	}
};

var LayoutEditorAttributes = {
	
}

var LayoutEditorDesign = {
	
	
	
};

var LayoutEditor = {
	
	attach : function (element) {
		
	},
	
	remove : function () {
		
	},
	
	attachOptionsPanel : function () {
		
	},
	
	attachAttributesPanel : function () {
		
	},
	
	attachEditor : function () {
		
	},
	
	drop : function () {
		
	}
	
};

var ui_splitPanel = {
	
	onSelect : function () {
	
	}
};

var ui_tabPanel = {
	
};

var ui_panel = {
	
};

