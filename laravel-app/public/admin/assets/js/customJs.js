$(document).ready(function() {

    $('#category').on('change', function() {
        var category_id = $(this).val();
        if (category_id) {
            $.ajax({
                url: '/subcategories/' + category_id,
                type: 'GET',
                dataType: 'json',
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
});