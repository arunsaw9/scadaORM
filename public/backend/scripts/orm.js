
$(document).ready(function(){
    //------------------- fetch subAssets ---------------
    $("#asset_id").change(function(){
        var assetid = $(this).find('option:selected');
        var extra = assetid.data('id');
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

    //-------------------------Drilling Scada-----------------------------
    
    $("#dril_asset_id").change(function(){
        //var dril_subasset_id = $('#dril_asset_id').val();
        var drilassetid = $(this).find('option:selected');
        var dril_subasset_id = drilassetid.data('id');

        if (dril_subasset_id != '') {
            var token = $('meta[name="csrf-token"]').attr('content');
            var url = '/dril-subasset/' + dril_subasset_id;
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
                  id: dril_subasset_id,
                }        
            })
            .done(function(data){
                $('#drilsubasset').empty();
                for(var i in data){
                    $('#drilsubasset').append('<option value="'+data[i].location+'">'+data[i].location+'</option>');
                }
            })
            .fail(function(response){
                alert('Error: ' + response);
            })
        }
    });


    //--------------------------LocalReportProd---------------------------

    // $("#LocalReportSubmit").click(function(e){
    //     e.preventDefault();
    //     var LocalReportDate = $('#LocalReportDate').val();
    //     var asset_location = $('#location :selected').text();
    //     //alert('sdfsf' + LocalReportDate);


    //     if (LocalReportDate != '' && asset_location != '') {

    //         var token = $('meta[name="csrf-token"]').attr('content');
    //         var url = '/LocalReportProd/' + asset_location + '/' + LocalReportDate;
    //         $.ajax({
    //             method:'POST',
    //             header:{
    //               'X-CSRF-TOKEN': token
    //             },
    //             url: url,
    //             data:{
    //               _token: token,
    //               dataType: 'json', 
    //               contentType:'application/json',
    //               val1: asset_location,
    //               val2: LocalReportDate,
    //             }        
    //         })
    //         .done(function(data){
    //             alert('ok: ' + data);
    //             // $('#drilsubasset').empty();
    //             // for(var i in data){
    //             //     $('#drilsubasset').append('<option value="'+data[i].location+'">'+data[i].location+'</option>');
    //             // }
    //         })
    //         .fail(function(response){
    //             alert('Error: ' + response);
    //             console.log(response);
    //         })
    //     }
    // });
});
