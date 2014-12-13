jQuery(function($) {
    $(".takeFollowButton").click(function(){
        
        var url = $(this).attr("data-url");
        $.post( url, function( data) {
            console.log(data);
        });
        
        var loop = setInterval(function(){removeImg()}, 100);
        function removeImg(){
            var src = $( ".imagesDiv img" ).eq( 0 ).attr("src");
            if(src != undefined){
                var creditCount = $(".userCredit").html();
                var followerCount = $(".followerCount").html();
                
                if(creditCount<1){
                    
                    clearInterval(loop);
                    alert("Maalesef Krediniz Bitti, Kredi Alın veya Takipçi Alın");
                    //window.location = "";
                }else{
                    
                    $( ".imagesDiv img" ).eq( 0 ).remove();
                
                    $(".userCredit").html(creditCount-1);
                    $(".followerCount").html(parseInt(followerCount)+1);
                }
                
                              
            }else{
                
                clearInterval(loop);
                window.location = "";
            }
        }
    })
});


/*Ajax function*/
function ajax(aurl,dataTag,adtype,atype){
    var sor=confirm("Bu İşlemi Yapmak İstediğine Emin Misin"); 
    if(sor){  
        adtype = typeof adtype !== 'undefined' ? adtype : "json";
        atype = typeof atype !== 'undefined' ? atype : "post";
        $(".loading").fadeIn("0");
        $.ajax({
            type: atype,
            url: aurl,
            dataType: adtype,
            data: $(dataTag).serialize(),
            statusCode: {
                200: function(res) {                    
                    $(".loading").fadeOut();
                    if(res.error){
                        noty({text: res.text,layout: 'top',type: 'warning'});
                    }else{
                        noty({text: res.text,layout: 'top',type: 'success'});
                    }
                },
                404: function() {                    
                    $(".loading").fadeOut();
                    noty({text: "Sayfa Bulunamadı",layout: 'top',type: 'error'});
                },
                500: function() {                    
                    $(".loading").fadeOut();
                    noty({text: "Sunucuda hata meydana geldi",layout: 'top',type: 'error'});
                },
                405: function() {                    
                    $(".loading").fadeOut();
                    noty({text: "Method Not Allowed",layout: 'top',type: 'error'});
                }
            }
        });
    }
}
