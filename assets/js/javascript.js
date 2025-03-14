const divPai = document.querySelector('.itens')

divPai.addEventListener('click', callbackClickCollapsible)

function callbackClickCollapsible(evento) {
    const elemento = evento.target

    if (!elemento.matches('.item')) return false

    desativarDivs()
    ativarDiv(elemento)
}

function ativarDiv(div) {
    if (!div) return false

    const classe = 'ativo'
    div.classList.add(classe)
}

function desativarDivs() {
    const divItems = document.querySelectorAll('.itens .item')
    const classe = 'ativo'

    for (const div of divItems) {
        div.classList.remove(classe)
    }
}

///////////////////////////////////////////////////////////

const observerLeft = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('showLeft')
        } else {
            entry.target.classList.remove('showLeft')
        }
    })
})

const elementsLeft = document.querySelectorAll('.left')

elementsLeft.forEach((element) => observerLeft.observe(element))

///////////////////////////////////////////////////////////

const observerRight = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('showRight')
        } else {
            entry.target.classList.remove('showRight')
        }
    })
})

const elementsRight = document.querySelectorAll('.right')

elementsRight.forEach((element) => observerRight.observe(element))

///////////////////////////////////////////////////////////

const myObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('showBlur')
        } else {
            entry.target.classList.remove('showBlur')
        }
    })
})

const elements = document.querySelectorAll('.hiddenBlur')

elements.forEach((element) => myObserver.observe(element))

///////////////////////////////////////////////////////////

jQuery(function () {

    const nav = document.querySelector('.header-nav')
    const botaoMenu = nav.querySelector('#menu-mb')
    const opcoesMenu = nav.querySelector('#menu')

    document.addEventListener('click', function (event) {
        var clickBtn = botaoMenu.contains(event.target)
        var verificaOpcoes = opcoesMenu.classList.contains('mostrar')
        var verificaBtn = botaoMenu.classList.contains('ativo')

        if (!clickBtn || verificaOpcoes || verificaBtn) {

            nav.classList.remove('exibir');
            opcoesMenu.classList.remove('mostrar');
            botaoMenu.classList.remove('ativo');

        } else {

            nav.classList.add('exibir');
            opcoesMenu.classList.add('mostrar');
            botaoMenu.classList.add('ativo');

        }

    });

    jQuery(document).ready(function () {
        const lenis = new Lenis();

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
    });

    jQuery(document).ready(function () {
        jQuery(window).on("scroll", function () {
            let scrollTop = jQuery(window).scrollTop(); // Posição do scroll

            jQuery(".section-seven").each(function () {
                let speed = 0.4; // Velocidade do efeito
                let sectionTop = jQuery(this).offset().top;
                let windowHeight = jQuery(window).height();

                if (scrollTop + windowHeight > sectionTop) {
                    let yPos = -(scrollTop - sectionTop) * speed;
                    jQuery(this).css("background-position", `center ${yPos}px`);
                }
            });
        });
    });


    jQuery(document).scroll(function () {

        var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

        var index = 0;

        jQuery('.ancora').each(function () {

            elemento = jQuery(this);

            if ((elemento.offset().top - 150) <= scrollPos) {
                jQuery('.menu-scroll-float li').eq(index).addClass('secao-atual');
                jQuery('.menu-scroll-float li').not(':eq(' + index + ')').removeClass('secao-atual');
            }

            index++;

        });

    });

    if (jQuery(".ancora").length) {

        html_menu = "";

        var index = 0;

        jQuery('.ancora').each(function () {

            var elemento_titulo = jQuery(this).data('titulo');
            var elemento_slug = jQuery(this).attr('id');
            var classe_menu = "";

            if (index == 0) {
                classe_menu = "secao-atual";
            }

            html_menu = html_menu + "<li class='" + classe_menu + "'><a href='#" + elemento_slug + "' data-index='" + index + "'>" + elemento_titulo + "</a></li>";
            index++;

        });

        jQuery("body").prepend('<div class="row-tags d-none d-md-block menu-scroll-float"><ul>' + html_menu + '</ul></div>').animate({
            "left": "0px"
        }, "slow");

    }

    jQuery(document).on('click', '.menu-scroll-float a', function (e) {

        e.preventDefault();
        e.stopPropagation();

        var index = jQuery(this).data('index');
        var href = jQuery(this).attr('href');
        var elemento = jQuery(href);

        elemento.attr('id', '');


        jQuery('html, body').animate({
            scrollTop: jQuery('.ancora').eq(index).offset().top - 100
        }, 1000, function () {



        });


        setTimeout(function () {
            location.hash = href;
            elemento.attr('id', href.replace('#', ''));
        }, 2000);
    });


    jQuery(".grafico").each(function () {

        var elemento = jQuery(this);
        var elemento_id = jQuery(this).attr('id');
        var data_fundo = elemento.data('fundo-id');

        jQuery.ajax({
            dataType: "json",
            url: op.ajaxurl,
            data: {

                'action': 'Grafico',
                'fundo': data_fundo,

            },
            success: function (data) {

                var ctx = document.getElementById(elemento_id).getContext('2d');
                var chart = new Chart(ctx, data);

            }

        });

    });

    jQuery(document).on('click', '.scroll-conteudo', function (e) {

        e.preventDefault();

        elemento = jQuery(this);
        deslocamento = elemento.offset().top + elemento.height();

        jQuery('html, body').animate({ scrollTop: deslocamento }, 3000);

    });



    if (jQuery(window).width() < 700) {

        jQuery(document).on('click', '.menu-item-has-children > a', function (e) {

            e.preventDefault();

        });

    }




    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();

        jQuery(".animar-esquerda").css({
            transform: 'matrix(1, 0, 0, 1, -' + scroll + ', -' + scroll + ')',
        });

        jQuery(".animar-direita").css({
            transform: 'matrix(1, 0, 0, 1, ' + scroll + ', -' + scroll + ')'
        });


        jQuery(".animar-saida-direita").each(function () {

            elemento = jQuery(this);

            calculo = (scroll + elemento.height()) - elemento.offset().top;

            //Só animar se estiver na tela
            if (calculo > 0) {

                elemento.css({
                    transform: 'matrix(1, 0, 0, 1, ' + calculo + ', 0)'
                });

            }


        });




        jQuery(".animar-topo").css({
            transform: 'matrix(1, 0, 0, 1, 0, -' + scroll + ')'
        });


        jQuery(".animar-fade").css("opacity", 1 - jQuery(window).scrollTop() / 250);

    });


    jQuery(document).on('click', '.btn-menu', function (e) {

        e.preventDefault();

        jQuery('.menu-holder, .black').toggleClass('d-none');

    })



});

jQuery('#slide').slick({
    dots: false,
    arrows: false,
    infinite: true,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 2200,
    slidesToShow: 4,
    slidesToScroll: 1
});