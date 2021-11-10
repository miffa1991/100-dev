
function findVideos() {
    let videos = document.querySelectorAll('.video');

    for (let i = 0; i < videos.length; i++) {
    setupVideo(videos[i]);
    }
    // console.log(videos);
}

function setupVideo(video) {
    let link = video.querySelector('.video__link');
    let media = video.querySelector('.video__media');
    let button = video.querySelector('.video__button');
    let id = link ? parseMediaURL(link) : null;

    video.addEventListener('click', () => {
    let iframe = createIframe(id);

    link.remove();
    button.remove();
    video.appendChild(iframe);
    video.classList.add('video--enabled');
    });

    // link.removeAttribute('href');
    // video.classList.add('video--enabled');
}

function parseMediaURL(media) {
    // let regexp = /https:\/\/i\.ytimg\.com\/vi\/([a-zA-Z0-9_-]+)\/hqdefault\.jpg/i;
    // https://i.ytimg.com/vi/_sI_Ps7JSEk/hqdefault.jpg
    let regexp = /https:\/\/youtu\.be\/([a-zA-Z0-9_-]+)/i;
    // https://youtu.be/jvipPYFebWc
    
    let url = media.href;
    let match = url.match(regexp);

 

    return match[1];
}

function createIframe(id) {
    let iframe = document.createElement('iframe');

    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('allow', 'autoplay');
    iframe.setAttribute('src', generateURL(id));
    iframe.classList.add('video__media');

    return iframe;
}

function generateURL(id) {
    let query = '?rel=0&showinfo=0&autoplay=1';

    return 'https://www.youtube.com/embed/' + id + query;
}

// jQuery('.video__button').click(function() {
//    findVideos();
// });

function portfolioAjaxStart() {

    document.querySelectorAll( '.portfolio-section .swiper-container' ).forEach( function( node ) {
        // Getting slides quantity before slider clones them
        var node_nav_next = jQuery(node).parent().parent().find('.swiper-button-next');
        var node_nav_prev = jQuery(node).parent().parent().find('.swiper-button-prev');
        
        // Swiper initialization
        new Swiper( node, {
            speed: 2000,
            loop: true,
            slidesPerView: 4,
            observeParents: true,
            autoplay: {
                delay: 2000,
            },
            spaceBetween: 14,
        navigation: {
                nextEl: node_nav_next,
                prevEl: node_nav_prev,
            },
        breakpoints: {
            767: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 2,
            },
            1280: {
                slidesPerView: 3,
            }
        }
        });
    });
}

jQuery( function( $ ){
    $('.modal-product-link').on('click', function () {
        var productId = $(this).attr('data-product-id');
        // console.log(productId);
        var data = {
            id:productId,
            action:'ajax_quick_view',
            nonce: ajax_quick.nonce
        };
        $.ajax({
            url:ajax_quick.url,
            data:data,
            type: 'POST',
            beforeSend:function(xhr){
                $('#modalService .modal-body').text('');
            },
            success:function(data){
                // console.log(data);
                // alert(data);
                $('#modalService .modal-body').html(data);
                findVideos();
                portfolioAjaxStart();
                jQuery('body').removeClass('open-menu');
                jQuery('.hamburger').removeClass('opened');
            }
        });
    })
});

