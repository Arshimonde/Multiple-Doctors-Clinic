$(function () {

    /* ACTIVATE TOOL TIP  GLOBALLY*/
    $('[data-toggle="tooltip"]').tooltip();

    /* DASHBOARD START*/
        /* toggle dashboard-add-speciality  */
        $(".dashboard-add-speciality .floating-button").click(function(){
            $(".dashboard-add-speciality form")
            .toggleClass("animated 	jackInTheBox")
        });
    /* DASHBOARD END*/
});