var PageWidth = 0;
var ListButtonsLeft = 0;
var NPListCount = 0;
var NPListWidth = 0;
var NPListLeft = 0;

jQuery.ajaxq = function (queue, options)
{
	// Initialize storage for request queues if it's not initialized yet
	if (typeof document.ajaxq == "undefined") document.ajaxq = {q:{}, r:null};

	// Initialize current queue if it's not initialized yet
	if (typeof document.ajaxq.q[queue] == "undefined") document.ajaxq.q[queue] = [];
	
	if (typeof options != "undefined") // Request settings are given, enqueue the new request
	{
		// Copy the original options, because options.complete is going to be overridden

		var optionsCopy = {};
		for (var o in options) optionsCopy[o] = options[o];
		options = optionsCopy;
		
		// Override the original callback

		var originalCompleteCallback = options.complete;

		options.complete = function (request, status)
		{
			// Dequeue the current request
			document.ajaxq.q[queue].shift ();
			document.ajaxq.r = null;
			
			// Run the original callback
			if (originalCompleteCallback) originalCompleteCallback (request, status);

			// Run the next request from the queue
			if (document.ajaxq.q[queue].length > 0) document.ajaxq.r = jQuery.ajax (document.ajaxq.q[queue][0]);
		};

		// Enqueue the request
		document.ajaxq.q[queue].push (options);

		// Also, if no request is currently running, start it
		if (document.ajaxq.q[queue].length == 1) document.ajaxq.r = jQuery.ajax (options);
	}
	else // No request settings are given, stop current request and clear the queue
	{
		if (document.ajaxq.r)
		{
			document.ajaxq.r.abort ();
			document.ajaxq.r = null;
		}

		document.ajaxq.q[queue] = [];
	}
}

$(document).ready(function(e) {
	PageWidth = $(document).width();

	$("#uparrow").click(function(){
		$(".submenu").slideUp();
		$("#page-band").animate({
			height:50
		});
	});
	ListButtonsLeft = ($(document).width()-1000) / 2;
	if (ListButtonsLeft < 0) { ListButtonsLeft = 0; }
	$("#list-buttons").css("left",ListButtonsLeft);
	$(".choose-btn").css("right",ListButtonsLeft);
	$("#list-buttons a").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
	});
	
	if ($("#new-people-list").length) {
		NPListCount = $("#new-people-list ul li").length;
		NPListWidth = NPListCount * 290;
		$("#new-people-list ul").width(NPListWidth);
		
	}
	$("#new-people-arrows .prev").click(function(){
		NPPrev();
	});
	$("#new-people-arrows .next").click(function(){
		NPNext();
	});
	
	$("#SearchForm").submit(function() {
		alan = $('#SearchValue').val();
		if(alan.length < 5){
			NotyMessage('You should write at least 5 characters!','error');
		}else{
			window.location.href = "http://twimod.com/search/"+encodeURIComponent(alan)+"/";
		}
		return false;
	});

});
/** document.ready bitti **/




function FollowUser_f1(y,t,userID,twitterID,twitterScreen,sKod) {
	
	$("#NP-"+userID).remove();
	fUser(y,t,userID,twitterID,twitterScreen,sKod);
		NPListCount = $("#new-people-list ul li").length;
		NPListWidth = NPListCount * 290;
		$("#new-people-list ul").width(NPListWidth);
		if ((NPListWidth % 870) == 0) {
			NPListLeft = 0;
			$("#new-people-list ul").animate({
				marginLeft: NPListLeft
			},500)
		}
		
		if (NPListCount == 0) {
			$("#new-people").slideUp(function(){
				$(this).remove();
			})
		}

}

function fUser(y,t,userID,twitterID,twitterScreen,sKod){
	
	$.ajaxq ("testqueue", {
      url: "control/fUser.php",
		cache: false,
		method: 'POST',
		data: "t="+t+"&userID="+userID+"&twitterID="+twitterID+"&twitterScreen="+twitterScreen+"&sKod="+sKod,
		success: function(html)
		{
			//alert(html);
			obj = jQuery.parseJSON(html);
			//console.log(obj);
			if(obj.kod == '101'){
				NotyMessage(obj.metin,'information');
				$('#krediAlan_sayi').html(obj.krediSon);	
				
				if(obj.odulVar){
					obj2 = obj.odulBilgi;
					//alert('ödül var');
					NotyMessage(obj2.metin,'information',4);
					$('#gelirAlan_sayi').html(obj2.gelir);	
				}
				
			}else if(obj.kod == '105-x5'){
				window.location.href = "http://twimod.com/tooFast.php";
			}else if(obj.kod == 'TW-x2'){
				// twitter yönlendir
				alert(obj.metin);
				//window.location.href = "http://twimod.com";
			}else if(obj.kod == 'TW-x3'){
				NotyMessage(obj.metin,'information',3);
			}else if(obj.kod == '103'){
				NotyMessage(obj.metin,'error');
			}else{
				NotyMessage('Error!','error');
			}
		}
	});

}

function NotyMessage(msgText,tip,sure,yer) {
	yer = yer || 'topRight'
	sure = sure || 2;
	sureCarp = (sure * 1000);
	noty({
		text: msgText,
		type: tip,
		layout: yer,
		timeout: sureCarp
	});
}
function NPPrev() {
	NPListLeft = NPListLeft + 870;
	if (NPListLeft > 0) {
		NPListLeft = -1 * (NPListWidth - (NPListWidth % 870));
	}
	if (NPListLeft == (-1 * NPListWidth)) {
		NPListLeft = NPListLeft + 870;
	}
	$("#new-people-list ul").animate({
		marginLeft: NPListLeft
	},500)
}
function NPNext() {
	NPListLeft = NPListLeft - 870;
	if (NPListLeft <= (-1*NPListWidth)) {
		NPListLeft = 0;
	}
	$("#new-people-list ul").animate({
		marginLeft: NPListLeft
	},500)
}

/*** altsayfa.html listeleme ***/
var List1BoxCount = 8;
var List2BoxCount = 15;
var List3BoxCount = 12;
var ListCount = 0;
function ListShow(id) {
	$('#left-content').removeClass().addClass('left-content1'+id);
	if (id == 1) {
		ListCount = List1BoxCount;
	}
	if (id == 2) {
		ListCount = List2BoxCount;
	}
	if (id == 3) {
		ListCount = List3BoxCount;
	}
	for (var n = 0; n < $('.commentbox').length; n++) {
		if (n < ListCount) {
			$('.commentbox').eq(n).show();
		} else {
			$('.commentbox').eq(n).hide();
		}
	}
}
function FollowUser2(y,t,userID,twitterID,twitterScreen,sKod) {
	$("#ListUser-"+userID).remove();
	fUser(y,t,userID,twitterID,twitterScreen,sKod);
	if ($('.commentbox').length > 0) {
		$('.commentbox').eq(ListCount-1).show();
	}else{
		$('#left-content').html('<p style="text-align:center;">Sorry, we couldn\'t find any result.</p>');
	}
}

function engelle(id,sKod,alan,kullaniciAd){
	$('#'+alan).remove();
	$.ajaxq ("testqueue", {
      url: "control/engelle.php",
		cache: false,
		method: 'POST',
		data: "userID="+id+"&sKod="+sKod+"&kullaniciAd="+kullaniciAd,
		success: function(html)
		{
			obj = jQuery.parseJSON(html);
			if(obj.kod == '101'){
				NotyMessage(obj.metin,'information');
			}else{
				NotyMessage(obj.metin,'error');
			}
			//alert(html);
		}
	});

}
