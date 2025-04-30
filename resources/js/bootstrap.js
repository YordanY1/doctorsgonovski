import axios from "axios";
window.axios = axios;

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";


document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.mySwiper', {
        modules: [Navigation, Pagination, Autoplay],
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        spaceBetween: 24,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});


window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
