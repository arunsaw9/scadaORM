
$(document).ready(function(){
    //------------------- fetch subAssets ---------------
    $("#asset_id").change(function(){
        //var assetid = $("#asset_id").val();
        var assetid = $(this).find('option:selected');
        var extra = assetid.data('id');
        alert(extra);
        if( extra !="" ) {
            var token = $('meta[name="csrf-token"]').attr('content');
            var url = '/subasset/' + extra;
            $.ajax({
                method:'POST',
                header:{
                  'X-CSRF-TOKEN': token
                },
                url: url,
                data:{
                  _token: token,
                  dataType: 'json', 
                  contentType:'application/json',
                  id: extra,
                }        
            })
            .done(function(data) {
                $("#subasset").empty();
                for( var i in data ){
                    $("#subasset").append('<option value="'+data[i].location+'">'+data[i].location+'</option>');
                }
            })
            .fail(function(response) {
                alert("error");
            });
        }
    });

    //--------------------------------Update---------------------------

    $("#updt_asset_id").change(function(){
        var updt_assetid = $("#updt_asset_id").val();
        //alert(updt_assetid);


        if( updt_assetid !="" ) {
            var token = $('meta[name="csrf-token"]').attr('content');
            var url = '/subasset/' + assetid;
            $.ajax({
                method:'POST',
                header:{
                  'X-CSRF-TOKEN': token
                },
                url: url,
                data:{
                  _token: token,
                  dataType: 'json', 
                  contentType:'application/json',
                  id: assetid,
                }        
            })
            .done(function(data) {
                $("#subasset").empty();
                //var obj = JSON.parse(data)
                for( var i in data ){
                    $("#subasset").append('<option value="'+data[i].location+'">'+data[i].location+'</option>');
                    //console.log(data[i].asset_id +" " + data[i].location);
                }
            })
            .fail(function(response) {
                alert("error");
                //console.log(response);
            });

        }

    });

});
