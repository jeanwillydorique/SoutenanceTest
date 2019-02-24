

let link = document.querySelectorAll('a[href]'); 

link.forEach(element => {
    element.addEventListener('mouseover', () => {
        element.classList.add('underline')
    })
    element.addEventListener('mouseout', () => {
        element.classList.remove('underline')
    })
});

// $(document).ready(function() {
//     src = "{{ route('searchajax') }}";
//      $("#search_text").autocomplete({
//         source: function(request, response) {
//             $.ajax({
//                 url: src,
//                 dataType: "json",
//                 data: {
//                     term : request.term
//                 },
//                 success: function(data) {
//                     response(data);
                   
//                 }
//             });
//         },
//         minLength: 3,
       
//     });
// });

// ----- AUTO COMPLETE  

    $("#tagsAuthor").autocomplete({
       source: "/searchajaxAuthor",
       dataType: "json",
       minLength: 1,
    });

    $("#tagsCategory").autocomplete({
       source: "/searchajaxCategory",
       dataType: "json",
       minLength: 1,
    });

    $("#tagsCreator").autocomplete({
       source: "/searchajaxCreator",
       dataType: "json",
       minLength: 1,
    });

    $(".plus").click((el) => {

        debugger;

        let data = el.target.parentElement.previousElementSibling.value ;
        let dataCheck = el.target.closest(".col-auto").nextElementSibling ;
        let name = el.target.nextElementSibling.value ; 

        $(dataCheck).append('<div class="form-check"><input class="form-check-input" type="checkbox" name="' + name + '[]" id="gridRadios1" value="'+ data +'" checked ><label class="form-check-label" for="gridRadios1"> ' + data + '</label><p onclick="supp()">X<p></div>')
    });


    $( window ).on( "load", () => 
    {
        let elements = $(".formAlpha > a");
    

    });

