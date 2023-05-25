// Wait for the document to load
$(document).ready(function() {
    // Get a reference to the Status field
    var statusField = $('#services_option');

    // Get a reference to the Comment-1 and Comment-2 fields
    // var comment1Field = $('#comment_1_c');
    var comment1Label = $('[book_artist]');
    var comment2Label = $('[book_session]');
    // var comment2Field = $('#comment_2_c');
    // var comment2Label = $('[data-label=LBL_COMMENT_2]');

    hideAll();
 
    function hideAll(){
        // Hide both fields if selection is empty
        // comment1Field.hide();
        comment1Label.hide();
        // comment2Field.hide();
        comment2Label.hide();
    }
    // Add an event listener to the Status field
    statusField.on('change', function() {
        // var status = $(this).val();

        if ($(this).val() === 'Book Artist') {
            // Hide Comment-2 and show Comment-1
            // comment1Field.show();
            comment1Label.show();
            // comment2Field.hide();
            comment2Label.hide();
        } else if ($(this).val() === 'Book Session') {
            // Hide Comment-1 and show Comment-2
            // comment1Field.hide();
            comment1Label.hide();
            // comment2Field.show();
            comment2Label.show();
        } else {
            hideAll();
        }
    });
});
