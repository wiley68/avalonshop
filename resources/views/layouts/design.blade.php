<?php use App\Property; ?>
<?php use App\Http\Controllers\HelpController; ?>
<?php use App\ProductsCategories; ?>
<?php use App\User; ?>
<?php use App\Category; ?>
<?php use App\Faq; ?>
<?php use App\Product; ?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118342723-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-118342723-3');
    </script>
    <!-- Basic page needs
    ============================================ -->
    @if(Route::current() != null && Route::current()->getName() == 'product' && isset($product))
    @php
    switch ($product->instock) {
    case 'в наличност':
    $availability = "InStock";
    break;
    case 'минимално количество':
    $availability = "LimitedAvailability";
    break;
    case 'очаква се':
    $availability = "PreOrder";
    break;
    default:
    $availability = "OutOfStock";
    break;
    }
    $all_rev = 0;
    $review_author = "";
    $review_datePublished = "";
    $review_description = "";
    $review_name = "";
    foreach ($reviews as $review){
    $all_rev += intval($review->price) + intval($review->value) + intval($review->quantity);
    $review_author = User::where(['id' => $review->user_id])->first()->name;
    $review_datePublished = $review->created_at;
    $review_description = $review->review;
    $review_name = $review->name;
    }
    if ($reviews->count() > 0){
    $all_rev = floor($all_rev / ($reviews->count() * 3));
    }
    $product_category = Category::where(['id' => ProductsCategories::where(['product_id' =>
    $product->id])->first()->category_id])->first();
    $category_id = [];
    $category_id[] = $product_category->id;
    @endphp
    <script type="application/ld+json">
        {
        "@context": "http://schema.org/",
        "@type": "Product",
        "name": "{{ $product->name }}",
        @if (($product->imgurl1 == "") && ($product->imgurl2 == "") && ($product->imgurl3 == "") && ($product->imgurl4 == ""))
        "image": [
            "{{ Config::get('settings.backend') }}/dist/img/noimage.png"
        ],
        @else
        "image": [
            @if ($product->imgurl1 != "")
            "{{ $product->imgurl1 }}"
            @endif
            @if ($product->imgurl2 != "")
            ,"{{ $product->imgurl2 }}"
            @endif
            @if ($product->imgurl3 != "")
            ,"{{ $product->imgurl3 }}"
            @endif
            @if ($product->imgurl4 != "")
            ,"{{ $product->imgurl4 }}"
            @endif
        ],
        @endif
        "description": "{{ $product->description }}",
        "sku": "{{ $product->code }}",
        @if ($product->ean != "")
        "gtin8": "{{ $product->ean }}",
        @else
        "gtin8": "{{ $product->code }}",
        @endif
        "brand": {
            "@type": "Thing",
            "name": "{{ $manufacturer_name }}"
        },
        @if ($all_rev > 0)
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "{{ $all_rev }}",
            "reviewCount": "{{ $reviews->count() }}"
        },
        "review": {
            "@type": "Review",
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": "{{ $all_rev }}",
                "bestRating": "{{ $all_rev }}"
            },
            "author": {
                "@type": "Person",
                "name": "{{ $review_author }}"
            }
        },
        @else
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "reviewCount": "1"
        },
        "review": {
            "@type": "Review",
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": "5",
                "bestRating": "5"
            },
            "author": {
                "@type": "Person",
                "name": "Илко Иванов"
            }
        },
        @endif
        "offers": {
            "@type": "Offer",
            "url": "{{ route('product', ['id' => $product->code]) }}",
            "priceCurrency": "BGN",
            "price": "{{ floatval($product->price) }}",
            "priceValidUntil": "2030-11-05",
            @if (ProductsCategories::where(['product_id' => $product->id, 'category_id' => '34'])->count() > 0)
            "itemCondition": "https://schema.org/UsedCondition",
            @else
            "itemCondition": "https://schema.org/NewCondition",
            @endif
            "availability": "https://schema.org/{{ $availability }}",
            "seller": {
                "@type": "Organization",
                "name": "Авалон ООД"
            }
        }
    }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Начало",
                    "item": "{{ route('index') }}"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "{{ $product_category->name }}",
                    "item": "{{ route('products', ['category_id' => $category_id]) }}"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "{{ $product->name }}",
                    "item": "{{ route('product', ['id' => $product->code]) }}"
                }
            ]
        }
    </script>
    @endif
    @if(Route::current() != null && Route::current()->getName() == 'software' && isset($software))
    @if (!empty(Product::where(['code' => $software->code])->first()))
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "{{$software->name}}",
            "operatingSystem": "Windows 7, Windows 10",
            "applicationCategory": "https://schema.org/BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "{{Product::where(['code' => $software->code])->first()->price}}",
                "priceCurrency": "BGN"
            }
        }
    </script>
    @else
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "{{$software->name}}",
            "operatingSystem": "Windows 7, Windows 10",
            "applicationCategory": "https://schema.org/BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": 0,
                "priceCurrency": "BGN"
            }
        }
    </script>
    @endif
    @endif
    @if(Route::current() != null && Route::current()->getName() == 'desktop.maxtrade_cmr')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "Maxtrade CMR",
            "operatingSystem": "Windows 7, Windows 10",
            "applicationCategory": "https://schema.org/BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "29.00",
                "priceCurrency": "BGN"
            }
        }
    </script>
    @endif
    @if(Route::current() != null && Route::current()->getName() == 'desktop.maxtrade_ctm')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "Maxtrade CTM",
            "operatingSystem": "Windows 7, Windows 10",
            "applicationCategory": "https://schema.org/BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "432.00",
                "priceCurrency": "BGN"
            }
        }
    </script>
    @endif
    @if(Route::current() != null && Route::current()->getName() == 'desktop.maxtrade_lab')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "Maxtrade LAB",
            "operatingSystem": "Windows 7, Windows 10",
            "applicationCategory": "https://schema.org/BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "93.00",
                "priceCurrency": "BGN"
            }
        }
    </script>
    @endif
    @if(Route::current() != null && Route::current()->getName() == 'desktop.maxtrade_slr')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "Maxtrade SLR",
            "operatingSystem": "Windows 7, Windows 10",
            "applicationCategory": "https://schema.org/BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "240.00",
                "priceCurrency": "BGN"
            }
        }
    </script>
    @endif
    @if(Route::current() != null && Route::current()->getName() == 'desktop.maxtrade_smdc')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "Maxtrade SLR",
            "operatingSystem": "Windows 7, Windows 10",
            "applicationCategory": "https://schema.org/BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "99.00",
                "priceCurrency": "BGN"
            }
        }
    </script>
    @endif
    @if(
    Route::current() != null &&
    (
    Route::current()->getName() == 'web.cc_woocommerce' ||
    Route::current()->getName() == 'web.cc_opencart' ||
    Route::current()->getName() == 'web.cc_magento' ||
    Route::current()->getName() == 'web.cc_prestashop'
    )
    )
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "{{ $title }}",
            "operatingSystem": "WEB",
            "applicationCategory": "https://schema.org/BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "144.00",
                "priceCurrency": "BGN"
            }
        }
    </script>
    @endif
    @if(
    Route::current() != null &&
    (
    Route::current()->getName() == 'web-soft.maxtrade_store' ||
    Route::current()->getName() == 'web-soft.maxtrade_storeerp' ||
    Route::current()->getName() == 'web-soft.avamb' ||
    Route::current()->getName() == 'web-service.webservice' ||
    Route::current()->getName() == 'mobile.avambmobile' ||
    Route::current()->getName() == 'industry.ikunk' ||
    Route::current()->getName() == 'industry.kantar'
    )
    )
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "{{ $title }}",
            "operatingSystem": "WEB",
            "applicationCategory": "https://schema.org/BusinessApplication"
        }
    </script>
    @endif
    @if(
    Route::current() != null && Route::current()->getName() == 'web-soft.maxtrade_ins'
    )
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "{{ $title }}",
            "operatingSystem": "WEB",
            "applicationCategory": "https://schema.org/BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "499.00",
                "priceCurrency": "BGN"
            }
        }
    </script>
    @endif
    @if(
    Route::current() != null && Route::current()->getName() == 'web-service.website'
    )
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "Изграждане на Стандартен уеб сайт",
            "operatingSystem": "WEB",
            "applicationCategory": "https://schema.org/BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "600.00",
                "priceCurrency": "BGN"
            }
        }
    </script>
    @endif
    @if(
    Route::current() != null && Route::current()->getName() == 'web-service.onlineshop'
    )
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "Изграждане на стандартен онлайн магазин",
            "operatingSystem": "WEB",
            "applicationCategory": "https://schema.org/BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "1200.00",
                "priceCurrency": "BGN"
            }
        }
    </script>
    @endif
    @if(
    Route::current() != null &&
    (
    Route::current()->getName() == 'for_us' ||
    Route::current()->getName() == 'credit-info' ||
    Route::current()->getName() == 'proizvoditeli' ||
    Route::current()->getName() == 'avalon.shop' ||
    Route::current()->getName() == 'avalon.service' ||
    Route::current()->getName() == 'avalon.service-printeri' ||
    Route::current()->getName() == 'avalon.mrezi' ||
    Route::current()->getName() == 'terms' ||
    Route::current()->getName() == 'gdpr' ||
    Route::current()->getName() == 'politika' ||
    Route::current()->getName() == 'dostavka' ||
    Route::current()->getName() == 'klienti' ||
    Route::current()->getName() == 'klient' ||
    Route::current()->getName() == 'vrashtane' ||
    Route::current()->getName() == 'support.posts' ||
    Route::current()->getName() == 'support.software' ||
    Route::current()->getName() == 'news.all' ||
    Route::current()->getName() == 'news.post'
    )
    )
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://google.com/article"
            },
            "headline": "{{ $title }}",
            "image": [
                "https://avalonbg.com/images/logo.png"
            ],
            "datePublished": "2019-09-10T08:00:00+08:00",
            "dateModified": "2019-09-10T08:00:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Илко Иванов"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Авалон ООД",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://avalonbg.com/images/logo.png"
                }
            },
            "description": "{{ $description }}"
        }
    </script>
    @endif
    @if(Route::current() != null && Route::current()->getName() == 'contact')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://google.com/article"
            },
            "headline": "{{ $title }}",
            "image": [
                "https://avalonbg.com/images/logo.png"
            ],
            "datePublished": "2019-09-10T08:00:00+08:00",
            "dateModified": "2019-09-10T08:00:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Илко Иванов"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Авалон ООД",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://avalonbg.com/images/logo.png"
                }
            },
            "description": "{{ $description }}"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "http://avalonbg.com",
            "contactPoint": [
                {
                    "@type": "ContactPoint",
                    "telephone": "+359 619 22218",
                    "contactType": "sales"
                }
            ]
        }
    </script>
    @endif
    @if(Route::current() != null && Route::current()->getName() == 'faqs.all')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://google.com/article"
            },
            "headline": "{{ $title }}",
            "image": [
                "https://avalonbg.com/images/logo.png"
            ],
            "datePublished": "2019-09-10T08:00:00+08:00",
            "dateModified": "2019-09-10T08:00:00+08:00",
            "author": {
                "@type": "Person",
                "name": "Илко Иванов"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Авалон ООД",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://avalonbg.com/images/logo.png"
                }
            },
            "description": "{{ $description }}"
        }
    </script>
    @php
    $faqs = Faq::all();
    $faqs_count = 0;
    @endphp
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                @foreach ($faqs as $faq)
                {
                    "@type": "Question",
                    "name": "{{ $faq->name }}",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "{!! html_entity_decode($faq->description) !!}"
                    }
                }
                @if ($faqs_count++ < $faqs->count() - 1)
                ,
                @endif
                @endforeach
            ]
        }
    </script>
    @endif
    @php
    $property = Property::where('id', '>', 0)->first();
    $show = false;
    if (!empty($property)){
    if ($property->status == 'Yes'){
    $ip = explode(",", $property->ip);
    foreach ($ip as $ip_address) {
    if (($ip_address == HelpController::getUserIP()) || ('::1' == HelpController::getUserIP())){
    $show = true;
    }
    }
    }else{
    $show = true;
    }
    }
    @endphp
    @if(!$show)
    <meta http-equiv="refresh" content="0; url=/maintanence.html" />
    @endif
    @if(
    Route::current() != null &&
    (
    Route::current()->getName() == 'maintanence' ||
    Route::current()->getName() == 'product.add-to-cart' ||
    Route::current()->getName() == 'product.change-credit-vnoska' ||
    Route::current()->getName() == 'product.change-cart-quantity' ||
    Route::current()->getName() == 'add-download' ||
    Route::current()->getName() == 'cart' ||
    Route::current()->getName() == 'cart-remove-product' ||
    Route::current()->getName() == 'cart-clear' ||
    Route::current()->getName() == 'checkout' ||
    Route::current()->getName() == 'checkout-result' ||
    Route::current()->getName() == 'send-contact-us' ||
    Route::current()->getName() == 'send-contact-form' ||
    Route::current()->getName() == 'login-register' ||
    Route::current()->getName() == 'user-register' ||
    Route::current()->getName() == 'user-login' ||
    Route::current()->getName() == 'user-checkout-login' ||
    Route::current()->getName() == 'news-subscribe' ||
    Route::current()->getName() == 'credit' ||
    Route::current()->getName() == 'credit-danni' ||
    Route::current()->getName() == 'credit-ok' ||
    Route::current()->getName() == 'credit-yes' ||
    Route::current()->getName() == 'credit-no'
    )
    )
    <meta name="robots" content="noindex" />
    @endif

    <meta charset="utf-8">
    <meta name="author" content="Илко Иванов">

    <title>{{ $title ?? "Софтуер - продажба на компютърна техника | Авалон" }}</title>
    <meta name="description"
        content="{{ $description ?? "Проектиране и инсталиране на софтуер. Продажба на компютърна техника." }}">
    <meta name="keywords" content="{{ $keywords ?? "софтуер, програми, компютри, продажба, сержиз, консумативи" }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="cache-control" content="max-age=31536000" />

    <!-- Mobile specific metas
	============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    @if (Route::current()->getName() == 'login-register')
    <meta name="google-signin-client_id"
        content="998560332438-so7e33cobae7u60fa29epf54n1nrqu0g.apps.googleusercontent.com">
    @endif

    <!-- Favicon
	============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/fav_icon.ico">

    <!-- Google web fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i,500,500i,600,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Libs CSS
		============================================ -->
    <link name="first_style" rel="stylesheet" href="{{ asset('css/animate.min.css') }}" disabled>
    <link rel="stylesheet" href="{{ asset('css/fontello.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Theme CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('js/fancybox/source/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/fancybox/source/helpers/jquery.fancybox-thumbs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/rs-plugin/css/settings.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/arcticmodal/jquery.arcticmodal.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">

    <!-- JS Libs
		============================================ -->
    <script defer src="{{ asset('js/modernizr.js') }}"></script>

    <!-- Old IE stylesheet
		============================================ -->
    <!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="css/oldie.css">
		<![endif]-->
</head>

<body class="front_page">
    @if (Route::current() != null && Route::current()->getName() == 'product')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v4.0&appId=102732653253201&autoLogAppEvents=1">
    </script>
    @endif

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- index controller -->
    <!-- Include Libs & Plugins
	============================================ -->
    <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script defer src="{{ asset('js/queryloader2.min.js') }}"></script>
    <script defer src="{{ asset('js/jquery.elevateZoom-3.0.8.min.js') }}"></script>
    <script defer src="{{ asset('js/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <script defer src="{{ asset('js/fancybox/source/helpers/jquery.fancybox-media.js') }}"></script>
    <script defer src="{{ asset('js/fancybox/source/helpers/jquery.fancybox-thumbs.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script defer src="{{ asset('js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script defer src="{{ asset('js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script defer src="{{ asset('js/jquery.appear.js') }}"></script>
    <script defer src="{{ asset('js/owlcarousel/owl.carousel.min.js') }}"></script>
    <script defer src="{{ asset('js/jquery.countdown.plugin.min.js') }}"></script>
    <script defer src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script defer src="{{ asset('js/arcticmodal/jquery.arcticmodal.js') }}"></script>
    <script defer src="{{ asset('twitter/jquery.tweet.min.js') }}"></script>
    <script defer src="{{ asset('js/colorpicker/colorpicker.js') }}"></script>
    <script defer src="{{ asset('js/retina.min.js') }}"></script>
    <!-- Theme files
	============================================ -->
    <script defer src="{{ asset('js/theme.plugins.js') }}"></script>
    <script defer src="{{ asset('js/theme.core.js') }}"></script>
    @if (Route::current()->getName() == 'login-register')
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    @endif
    <!-- index controller -->
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script>
        // $(document).ready(function(){ 
        //     var imgDefer = document.getElementsByTagName('img');
        //     for (var i=0; i<imgDefer.length; i++) {
        //         if(imgDefer[i].getAttribute('data-src')) {
        //             imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
        //         } 
        //     } 
        //     document.getElementsByName('first_style').forEach(element => element.removeAttribute('disabled'));
        // });
        
        window.cookieconsent.initialise({
            "palette": {
            "popup": {
            "background": "#3937a3"
            },
            "button": {
                "background": "#e62576"
            }
        },
        "content": {
            "message": "Нашият сайт използва cookies за да подобри Вашата работа сайта ни. Желаете ли да използвате cookies.",
            "dismiss": "Разбрах!",
            "link": "Виж подробно.",
            "href": "/politika.html"
        }
        });
    </script>
    @yield('scripts')
</body>

</html>