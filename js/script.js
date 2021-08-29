$(function(){
    var provinceObject = $('#Proviance');
    var amphureObject = $('#District');
    var group_id = $('#Subdistrict');
    var Postcode = $('#Postcode');
    // on change province
    provinceObject.on('change', function(){
        var provinceId = $(this).val();

        amphureObject.html('<option value="0">เลือกเขต/อำเภอ</option>');
      

        $.get('getdata.php?province_id=' + provinceId, function(data){
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                amphureObject.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });

        // on change amphure
        amphureObject.on('change', function(){
            var amphureId = $(this).val();
     
            group_id.html('<option value="0">เลือกตำบล/แขวง</option>');
            
            $.get('getdata.php?group_id=' + amphureId, function(data){
                var result = JSON.parse(data);
                $.each(result, function(index, item){
                    group_id.append(
                        $('<option></option>').val(item.id).html(item.name_th)
                    );
                });
            });
        });

        group_id.on('change', function(){
            var PostcodeId = $(this).val();
     
          
            
            $.get('getdata.php?group_id2=' + PostcodeId, function(data){
                var result = JSON.parse(data);
                $.each(result, function(index, item){
                    Postcode.val(item.zip_code);
                });
            });
        });


});



