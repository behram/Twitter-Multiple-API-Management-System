/*Ajax function*/
function ajax(aurl,dataTag,atype,adtype){
    var sor=confirm("Bu İşlemi Yapmak İstediğine Emin Misin"); 
    if(sor){  
        NProgress.start();
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
                        NProgress.done();
                        noty({text: res.text,layout: 'top',type: 'warning'});
                    }else{
                        NProgress.done();
                        noty({text: res.text,layout: 'top',type: 'success'});
                    }
                },
                404: function() {                    
                    NProgress.done();
                    noty({text: "Sayfa Bulunamadı",layout: 'top',type: 'error'});
                },
                500: function() {                    
                    NProgress.done();
                    noty({text: "Sunucuda hata meydana geldi",layout: 'top',type: 'error'});
                },
                405: function() {                    
                    NProgress.done();
                    noty({text: "Method Not Allowed",layout: 'top',type: 'error'});
                }
            }
        });
    }
} 