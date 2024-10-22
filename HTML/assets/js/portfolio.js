$(document).ready(function(){

    $(".button").click(function(){
        $(this).addClass("active").siblings().removeClass("active");

        var filter = $(this).attr("data-filter");

        if (filter == "all"){
            $(".gallery .image").show(400);
        }
        else{
            $(".gallery .image").not("."+filter).hide(200);
            $(".gallery .image").filter("."+filter).show(400);
        }
    })

    //MAGNIFIC-POPUP
    $(".gallery").magnificPopup({
        delegate: "a:not(.no-popup)", // Excluir enlaces con la clase .no-popup
        type: "image",
        removalDelay: 500, //delay removal by X to allow out-animation
        gallery: {
            enabled: true
        },

        callbacks: {
            beforeOpen: function() {
                // Añade una clase para animaciones
                this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        },
        closeOnContentClick: true,
        midClick: true // Permitir abrir popup con clic medio del ratón
    })

});

