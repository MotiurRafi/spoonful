
var woocommerce_params = {
  ajax_url: "/demo/wp/candore/wp-admin/admin-ajax.php",
  wc_ajax_url: "/demo/wp/candore/?wc-ajax=%%endpoint%%",
};

var viewsCacheL10n = {
  admin_ajax_url:
    "https://webredox.net/demo/wp/candore/wp-admin/admin-ajax.php",
  nonce: "75db598b25",
  post_id: "22",
};

// var wc_cart_fragments_params = {
//   ajax_url: "/demo/wp/candore/wp-admin/admin-ajax.php",
//   wc_ajax_url: "/demo/wp/candore/?wc-ajax=%%endpoint%%",
//   cart_hash_key: "wc_cart_hash_f8203e5a2b6834dda502c81f7c5301e6",
//   fragment_name: "wc_fragments_f8203e5a2b6834dda502c81f7c5301e6",
//   request_timeout: "5000",
// };

var elementorFrontendConfig = {
  environmentMode: { edit: false, wpPreview: false, isScriptDebug: false },
  i18n: {
    shareOnFacebook: "Share on Facebook",
    shareOnTwitter: "Share on Twitter",
    pinIt: "Pin it",
    download: "Download",
    downloadImage: "Download image",
    fullscreen: "Fullscreen",
    zoom: "Zoom",
    share: "Share",
    playVideo: "Play Video",
    previous: "Previous",
    next: "Next",
    close: "Close",
    a11yCarouselWrapperAriaLabel:
      "Carousel | Horizontal scrolling: Arrow Left & Right",
    a11yCarouselPrevSlideMessage: "Previous slide",
    a11yCarouselNextSlideMessage: "Next slide",
    a11yCarouselFirstSlideMessage: "This is the first slide",
    a11yCarouselLastSlideMessage: "This is the last slide",
    a11yCarouselPaginationBulletMessage: "Go to slide",
  },
  is_rtl: false,
  breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
  responsive: {
    breakpoints: {
      mobile: {
        label: "Mobile Portrait",
        value: 767,
        default_value: 767,
        direction: "max",
        is_enabled: true,
      },
      mobile_extra: {
        label: "Mobile Landscape",
        value: 880,
        default_value: 880,
        direction: "max",
        is_enabled: false,
      },
      tablet: {
        label: "Tablet Portrait",
        value: 1024,
        default_value: 1024,
        direction: "max",
        is_enabled: true,
      },
      tablet_extra: {
        label: "Tablet Landscape",
        value: 1200,
        default_value: 1200,
        direction: "max",
        is_enabled: false,
      },
      laptop: {
        label: "Laptop",
        value: 1366,
        default_value: 1366,
        direction: "max",
        is_enabled: false,
      },
      widescreen: {
        label: "Widescreen",
        value: 2400,
        default_value: 2400,
        direction: "min",
        is_enabled: false,
      },
    },
  },
  version: "3.16.5",
  is_static: false,
  experimentalFeatures: {
    e_dom_optimization: true,
    e_optimized_assets_loading: true,
    e_optimized_css_loading: true,
    additional_custom_breakpoints: true,
    "landing-pages": true,
  },
  urls: {
    assets:
      "../assets",
  },
  swiperClass: "swiper-container",
  settings: { page: [], editorPreferences: [] },
  kit: {
    active_breakpoints: ["viewport_mobile", "viewport_tablet"],
    lightbox_enable_counter: "yes",
    lightbox_enable_fullscreen: "yes",
    lightbox_enable_zoom: "yes",
    lightbox_enable_share: "yes",
    lightbox_title_src: "title",
    lightbox_description_src: "description",
  },
  post: {
    id: 22,
    title: "Cand%C3%B3re%20-%20Restaurant",
    excerpt: "",
    featuredImage: false,
  },
};
