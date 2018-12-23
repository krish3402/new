$(document).ready(function () {
							
	// Hang certain characters off the left in Cufon
	var firstCufons	= $("#home-intro cufon")
					.filter(function (i) {
							return $(this).position().left == 0;
						});
	
	firstCufons.each(function (i) {
		var c = $(this).find("cufontext").html().charAt(0);
		if (c=='A' || c=='V' || c=='W' || c=='X' || c=='Y') {
			$(this).css('margin-left','-3px');
		} else if (c=='T' || c=='v' || c=='w') {
			$(this).css('margin-left','-2px');
		}
	});
	
	// prep for IE6 (requires width/height values in home grid
	if ($.browser.msie && $.browser.version < 7) {
		var ie6 = true;
		$('.text-box').css({'width':150, 'height':0});
		$('.grid-box').css({'width':150, 'height':480});
	}
	
	// initialize values
	
	jQuery.easing.def = "easeOutCubic";
	var showSpeed = 800;
	var hideSpeed = showSpeed / 2;
	var gw = 300;	// grid width
	var gh = 470;	// grid height
	var gu = 235;	// grid unit
	
	// Create white mask
	
	$("<div id='mask'></div>").prependTo("#home-grid").css({
		'position' : 'absolute',
		'left' : 0,
		'top' : 0,
		'width' : gw,
		'height' : gh,
		'background' : '#fff',
		'opacity' : 0,
		'z-index' : 1000
	});
	
	// show/hide mask when entering/leaving grid area
	
	$('#home-grid')
		.mouseenter(function(){
			$('#mask')
				.stop(true)
				.animate({ 
					opacity: 0.65
				}, showSpeed -10 );
		})
		.mouseleave(function(){
			$('#mask')
				.stop(true)
				.animate({ 
					opacity: 0
				}, showSpeed -10 );
		});
	
	// Set up the grid links
	
	$(".grid-link:lt(4)").each(function(i,gridlink) {
		
		// set elements
		var gridEl  = $("#grid-" + i);
		var gridImg = $("#grid-" + i + " img");
		var gridTxt	= $("#text-" + i);
		
		// Establish variables
		var gridEndL;
		var gridEndR;
		var gridEndT;
		var gridEndB;
		var gridW;
		var gridH;
		var textStartL;
		var textStartR;
		var textStartT;
		var textStartB;
		var textEndL;
		var textEndR;
		var textEndT;
		var textEndB;
		var textXDir;
		var textYDir;
		var gridRow;
		var gridCol;
		var orientation;
		var hUnits;
		var vUnits;
		
		// find the grid row
		if (i < 4) {
			gridRow = 0;
		}else if (i < 12) {
			gridRow = 1;
		} else {
			gridRow = 2;
		}
		// find the grid column
		gridCol = (i + 1) % 1;
		// set the orientation and img units
		if (gridEl.hasClass('portrait')) {
			orientation = 'portrait';
			hUnits		= 2;
			vUnits		= 3;
		} else {
			orientation = 'landscape';
			hUnits		= 3;
			vUnits		= 2;
		}
			
		// HANDLE PORTRAIT IMAGES
		// ===========================================
		
		if (orientation == 'portrait') {
			// img spans full height
			gridEndT = 0;
			gridEndB = 0;
			gridW = 2 * gu;
			gridH = 3 * gu;
			
			// text is on top
			textEndT 	= 0;
			textEndB 	= 2 * gu;
			textStartT	= 0;
			textStartB	= 3 * gu;
			
			if (gridCol == 2 || gridCol >= 4) {				// Handle img going left
				gridEndL = ((gridCol - hUnits + 1) * gu);
				gridEndR = (gw - ((gridCol + 1) * gu));
			} else {										// Handle img going right
				gridEndL = (gridCol * gu);
				gridEndR = (gw - ((gridCol + hUnits) * gu));
			}
			
			if (gridCol >= 3) {								// Handle text on left
				textEndL = gridEndL - (3 * gu);
				textEndR = gw - gridEndL;
			} else {										// Handle text on right
				textEndL = gw - gridEndR;
				textEndR = gridEndR - (3 * gu);
			}
			
			if (gridCol == 2 || gridCol >= 4) {				// Handle text opening to the right
				textStartL = textEndL;
				textStartR = textEndR + (3 * gu);
			} else {										// Handle text opening to the left
				textStartL = textEndL + (3 * gu);
				textStartR = textEndR;
				gridTxt.find("div").css({
					'left' : 'auto',
					'right' : '24px'
				});
			}
		}
		
		// HANDLE LANDSCAPE IMAGES
		// ===========================================
		
		else {
			gridW = 3 * gu;
			gridH = 2 * gu;
			
			if (gridRow > 0) {								// Handle img going up
				gridEndT = ((gridRow - vUnits + 1) * gu);
				gridEndB = (gh - ((gridRow + 1) * gu));
			} else {										// Handle img going down
				gridEndT = (gridRow * gu);
				gridEndB = (gh - ((gridRow + vUnits) * gu));
			}
			
			if (gridRow == 2) {								// Handle text on top
				textEndT = gridEndT - gu;
				textEndB = gh - gridEndT;
			} else {										// Handle text on bottom
				textEndT = gh - gridEndB;
				textEndB = gridEndB - gu;
			}
			
			if (gridRow > 0) {								// Handle text opening downwards
				textStartT = textEndT;
				textStartB = textEndB + gu;
			} else {										// Handle text opening upwards
				textStartT = textEndT + gu;
				textStartB = textEndB;
				gridTxt.find("div").css({
					'top' : 'auto',
					'bottom' : '0px'
				});
			}
			
			if (gridCol == 5) {								// Handle img & text going left
				gridEndL = ((gridCol - hUnits + 1) * gu);
				gridEndR = (gw - ((gridCol + 1) * gu));
				gridTxt.find("div").css({
					'left' : 'auto',
					'right' : '24px'
				});
			} else if (gridCol == 0) {						// Handle img & text going right
				gridEndL = (gridCol * gu);
				gridEndR = (gw - ((gridCol + hUnits) * gu));
			} else {										// Handle img & text opening from center
				gridEndL = (gridCol * gu) - gu;
				gridEndR = gw - ((gridCol + 2) * gu);
				gridTxt.find("div").css({
					'left' : '40%',
					'margin-left' : '-150px'
				});
			}
			
			// Match text to img L/R
			textEndL	= gridEndL;
			textEndR	= gridEndR;
			textStartL	= gridCol * gu;
			textStartR	= gw - textStartL - gu;				
		
		}
		
		// Initialize start positions for text box in DOM
		gridTxt.css({
			'left' : textStartL,
			'right' : textStartR,
			'top' : textStartT,
			'bottom' : textStartB
		});
		
		// set link data and functions	
		$(gridlink)
			.data("grid", { 
				grid: gridEl,
				img: gridImg,
				imgL: gridImg.css("left"),
				imgT: gridImg.css("top"),
				orientation: orientation,
				gridRow: gridRow,
				gridCol: gridCol,
				gridStartL: gridEl.css("left"),
				gridStartR: gridEl.css("right"),
				gridStartT: gridEl.css("top"),
				gridStartB: gridEl.css("bottom"),
				gridEndL: gridEndL,
				gridEndR: gridEndR,
				gridEndT: gridEndT,
				gridEndB: gridEndB,
				gridW: gridW,
				gridH: gridH,
				text: gridTxt,
				textEndL: textEndL,
				textEndR: textEndR,
				textEndT: textEndT,
				textEndB: textEndB,
				textStartL: textStartL,
				textStartR: textStartR,
				textStartT: textStartT,
				textStartB: textStartB
			})
			.hover(
			
				// HOVER STATE
				function () {
					
					// set the objects for animationn
					var gridAnimObj = {
						left: $(this).data("grid").gridEndL,
						right: $(this).data("grid").gridEndR,
						top: $(this).data("grid").gridEndT,
						bottom: $(this).data("grid").gridEndB
						};						
					var textAnimObj = {
						left: $(this).data("grid").textEndL,
						right: $(this).data("grid").textEndR,
						top: $(this).data("grid").textEndT,
						bottom: $(this).data("grid").textEndB
						};
					
					// also animate width/height in IE6
					if (ie6) {
						gridAnimObj.width = gridW;
						gridAnimObj.height = gridH;
						textAnimObj.width = 3 * gu;
						textAnimObj.height = gu;
					}
					
					$(this).data("grid").grid
						.stop(true)
						.css("z-index",1000)
						.animate(gridAnimObj, showSpeed );
					$(this).data("grid").img
						.stop(true)
						.animate({ 
							left: 0,
							top: 0
						}, showSpeed );					
					$(this).data("grid").text
						.stop(true)
						.css("z-index",1000)
						.show()
						.animate(textAnimObj, showSpeed );
				},
				// OFF STATE
				function () {
					
					// set the objects for animationn
					var gridAnimObj = {
						left: $(this).data("grid").gridStartL,
						right: $(this).data("grid").gridStartR,
						top: $(this).data("grid").gridStartT,
						bottom: $(this).data("grid").gridStartB
						};
						var textAnimObj = {
						left: $(this).data("grid").textStartL,
						right: $(this).data("grid").textStartR,
						top: $(this).data("grid").textStartT,
						bottom: $(this).data("grid").textStartB
						};
					
					// also animate width/height in IE6
					if (ie6) {
						gridAnimObj.width = gu;
						gridAnimObj.height = gu;
						textAnimObj.width = gu;
						textAnimObj.height = 0;
					}
					
					$(this).data("grid").grid
						.stop(true)
						.css("z-index",1000)
						.animate(gridAnimObj, hideSpeed, function() {
							$(this).css("z-index",100)
						});
					$(this).data("grid").img
						.stop(true)
						.animate({ 
							left: $(this).data("grid").imgL,
							top: $(this).data("grid").imgT
						}, hideSpeed );
					$(this).data("grid").text
						.stop(true)
						.css("z-index",1000)
						.animate(textAnimObj, hideSpeed, function() {
							$(this).hide()
						});
				}
			);
		
	});
});
