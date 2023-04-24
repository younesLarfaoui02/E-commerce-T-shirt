$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#category').on('change', function() {
        var category_id = $(this).val();
        if (category_id) {
            $.ajax({
                url: '/subcategories/' + category_id,
                type: 'GET',
                success: function(data) {
                    $('#sous_category').prop('disabled', false).html('');
                    $.each(data, function(i, subcategory) {
                        $('#sous_category').append($('<option>', {
                            value: subcategory.id,
                            text: subcategory.nom
                        }));
                    });
                },
                error : function(err){
                    alert('request faild')
                }
            });
        } else {
            $('#subcategory').prop('disabled', true).html('');
        }
    });

/*
    $('#category-create').submit(function (e){
        var url = $(this).attr('data-action');
        e.preventDefault();
        $.ajax({
            url : url,
            method : 'POST',
            data : $(this).serialize(),
            success : function (data){
                alert(data)
            },
            error : function (){

            }
        })
    })
*/



/*
    $('#delete-category').submit( function(e){

        var url = $(this).attr('data-action');
        e.preventDefault();
        $.ajax({
            url: url,
            method : 'POST',
            data :$('#delete-category').serialize() ,
            dataType : 'html',
            success : function (data) {
                    console.log(data)
                    // $('tbody').empty();
                    // $('tbody').html()
            },
            error : function (){
                alert('failed request')
            }
        })
    });
*/
});
