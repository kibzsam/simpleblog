$('.post').find('.interaction').find('a').eq(2).find('.btn-default').on('click',function (event) {
    event.preventDefault();
    var postBody = event.target.parentNode.parentNode.childNodes[1].textContent;
    
    $("#post-body").val(postBody);
    $("#edit-modal").modal();
});
