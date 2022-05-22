@extends('layouts.guest')

@section('content')
    <div id="main-container" class="container inner">
        <div class="row">
            <div id="main-content" class="main-page col-xs-12">
                <main id="main" class="site-main clearfix" role="main">
                    <div data-elementor-type="wp-page" data-elementor-id="48" class="elementor elementor-48"
                        data-elementor-settings="[]">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <section
                                    class="elementor-element elementor-element-2684e1b elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="2684e1b" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-b8cf301 elementor-column elementor-col-100 elementor-top-column"
                                                data-id="b8cf301" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-e67d3e8 elementor-widget elementor-widget-spacer"
                                                            data-id="e67d3e8" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-7c20830 elementor-widget elementor-widget-heading"
                                                            data-id="7c20830" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    Find Nearby Attractions</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-8cf0074 elementor-widget elementor-widget-text-editor"
                                                            data-id="8cf0074" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                    <p>Expolore top-rated attractions,
                                                                        activities and more</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d1c5322 elementor-widget elementor-widget-apus_listings_search_form"
                                                            data-id="d1c5322" data-element_type="widget"
                                                            data-widget_type="apus_listings_search_form.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="widget-listingsearch listingsearch-horizontal ">


                                                                    <form class="job_search_form  js-search-form"
                                                                        action="https://www.demoapus-wp1.com/findus/listings/"
                                                                        method="get" role="search">



                                                                        <div
                                                                            class="search_jobs clearfix search_jobs--frontpage">

                                                                            <div class="inner-left">
                                                                                <div class="inner-content number-3">
                                                                                    <!-- keywords -->
                                                                                    <div
                                                                                        class="search-field-wrapper search-filter-wrapper ">
                                                                                        <i class="icon-pencil"></i>
                                                                                        <input
                                                                                            class="search-field apus-autocompleate-input"
                                                                                            autocomplete="off" type="text"
                                                                                            name="search_keywords"
                                                                                            placeholder="Keywords..."
                                                                                            value="">
                                                                                    </div>
                                                                                    <!-- categories -->
                                                                                    <div
                                                                                        class="search_categories  search-filter-wrapper">
                                                                                        <i class="icon-layers"></i>
                                                                                        <select name='search_categories[]'
                                                                                            id='search_categories'
                                                                                            class='job-manager-category-dropdown '
                                                                                            data-placeholder='Filter by category'
                                                                                            data-no_results_text='No results match'
                                                                                            data-multiple_text='Select Some Options'>
                                                                                            <option value="">
                                                                                                Filter by
                                                                                                category
                                                                                            </option>
                                                                                            <option class="level-0"
                                                                                                value="39">
                                                                                                Business
                                                                                            </option>
                                                                                            <option class="level-0"
                                                                                                value="43">
                                                                                                Education
                                                                                            </option>
                                                                                            <option class="level-0"
                                                                                                value="42">Food
                                                                                                &amp;
                                                                                                Restaurants
                                                                                            </option>
                                                                                            <option class="level-0"
                                                                                                value="45">
                                                                                                Intertainment
                                                                                            </option>
                                                                                            <option class="level-0"
                                                                                                value="38">
                                                                                                Shopping
                                                                                            </option>
                                                                                            <option class="level-0"
                                                                                                value="40">Sport
                                                                                            </option>
                                                                                            <option class="level-0"
                                                                                                value="37">
                                                                                                Travel &amp;
                                                                                                Tour</option>
                                                                                        </select>
                                                                                    </div>

                                                                                    <!-- region -->

                                                                                    <!-- region -->

                                                                                    <!-- location -->
                                                                                    <div
                                                                                        class="search_location last-search search-filter-wrapper">
                                                                                        <i class="icon-map-pin"></i>
                                                                                        <input type="text"
                                                                                            name="search_location"
                                                                                            placeholder="Location"
                                                                                            id="search_location_distance">
                                                                                        <span class="clear-location"><i
                                                                                                class="ti-close"></i></span>
                                                                                        <span class="loading-me"></span>
                                                                                        <span class="find-me"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="15px" height="15px"
                                                                                                viewbox="0 0 15 15"
                                                                                                version="1.1">
                                                                                                <g stroke="none"
                                                                                                    stroke-width="1"
                                                                                                    fill="none"
                                                                                                    fill-rule="evenodd">
                                                                                                    <g transform="translate(-964.000000, -626.000000)"
                                                                                                        fill-rule="nonzero"
                                                                                                        fill="#9B9B9B">
                                                                                                        <g
                                                                                                            transform="translate(731.000000, 611.000000)">
                                                                                                            <g
                                                                                                                transform="translate(233.000000, 15.000000)">
                                                                                                                <g>
                                                                                                                    <path
                                                                                                                        d="M7.48790875,4.76543726 C5.98346008,4.76543726 4.76543726,5.98346008 4.76543726,7.48790875 C4.76543726,8.99235741 5.98346008,10.2103802 7.48790875,10.2103802 C8.99235741,10.2103802 10.2103802,8.99235741 10.2103802,7.48790875 C10.2103802,5.98346008 8.99235741,4.76543726 7.48790875,4.76543726 Z M13.5730894,6.80652091 C13.2604848,3.96798479 11.0072338,1.71473384 8.16869772,1.40272814 L8.16869772,0 L6.80714829,0 L6.80714829,1.40272814 C3.96858365,1.71473384 1.71536122,3.96798479 1.40210076,6.80652091 L0,6.80652091 L0,8.1693251 L1.40272814,8.1693251 C1.71596008,11.0078612 3.96921103,13.2611122 6.80774715,13.5731179 L6.80774715,14.975846 L8.16929658,14.975846 L8.16929658,13.5731179 C11.0078327,13.2611122 13.2610837,11.0078897 13.5736882,8.1693251 L14.975789,8.1693251 L14.975789,6.80652091 C14.975846,6.80652091 13.5730894,6.80652091 13.5730894,6.80652091 Z M7.48790875,12.253346 C4.85341255,12.253346 2.72247148,10.1224049 2.72247148,7.48790875 C2.72247148,4.85341255 4.85341255,2.72247148 7.48790875,2.72247148 C10.1224049,2.72247148 12.253346,4.85341255 12.253346,7.48790875 C12.253346,10.1224049 10.1224049,12.253346 7.48790875,12.253346 Z">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </svg></span>
                                                                                        <input type="hidden"
                                                                                            name="search_lat">
                                                                                        <input type="hidden"
                                                                                            name="search_lng">
                                                                                    </div>

                                                                                    <div class="submit ali-right">
                                                                                        <button
                                                                                            class="search-submit btn btn-theme"
                                                                                            name="submit">
                                                                                            Search </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <section
                                                            class="elementor-element elementor-element-fe095cc elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                                            data-id="fe095cc" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-element elementor-element-1a29b31 elementor-column elementor-col-100 elementor-inner-column"
                                                                        data-id="1a29b31" data-element_type="column">
                                                                        <div
                                                                            class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-8b84a2f elementor-widget elementor-widget-spacer"
                                                                                    data-id="8b84a2f"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="spacer.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-spacer">
                                                                                            <div
                                                                                                class="elementor-spacer-inner">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-c9f3a22 elementor-widget__width-auto elementor-widget elementor-widget-apus_listings_category_banner"
                                                                                    data-id="c9f3a22"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="apus_listings_category_banner.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div
                                                                                            class="widget-listing-category-banner ">

                                                                                            <a
                                                                                                href="listing-category/shopping/index.htm">
                                                                                                <div
                                                                                                    class="category-banner-inner ">
                                                                                                    <div
                                                                                                        class="inner">
                                                                                                        <div
                                                                                                            class="category-icon">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-plane"></i>
                                                                                                        </div>
                                                                                                        <h4
                                                                                                            class="title">
                                                                                                            Shopping
                                                                                                        </h4>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-34944f2 elementor-widget__width-auto elementor-widget elementor-widget-apus_listings_category_banner"
                                                                                    data-id="34944f2"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="apus_listings_category_banner.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div
                                                                                            class="widget-listing-category-banner ">

                                                                                            <a
                                                                                                href="listing-category/education/index.htm">
                                                                                                <div
                                                                                                    class="category-banner-inner ">
                                                                                                    <div
                                                                                                        class="inner">
                                                                                                        <div
                                                                                                            class="category-icon">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-paint-brush"></i>
                                                                                                        </div>
                                                                                                        <h4
                                                                                                            class="title">
                                                                                                            Education
                                                                                                        </h4>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-ba67490 elementor-widget__width-auto elementor-widget elementor-widget-apus_listings_category_banner"
                                                                                    data-id="ba67490"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="apus_listings_category_banner.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div
                                                                                            class="widget-listing-category-banner ">

                                                                                            <a
                                                                                                href="listing-category/sport/index.htm">
                                                                                                <div
                                                                                                    class="category-banner-inner ">
                                                                                                    <div
                                                                                                        class="inner">
                                                                                                        <div
                                                                                                            class="category-icon">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-file-alt"></i>
                                                                                                        </div>
                                                                                                        <h4
                                                                                                            class="title">
                                                                                                            Sport
                                                                                                        </h4>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-70d9963 elementor-widget__width-auto elementor-widget elementor-widget-apus_listings_category_banner"
                                                                                    data-id="70d9963"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="apus_listings_category_banner.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div
                                                                                            class="widget-listing-category-banner ">

                                                                                            <a
                                                                                                href="listing-category/intertainment/index.htm">
                                                                                                <div
                                                                                                    class="category-banner-inner ">
                                                                                                    <div
                                                                                                        class="inner">
                                                                                                        <div
                                                                                                            class="category-icon">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-glass-martini"></i>
                                                                                                        </div>
                                                                                                        <h4
                                                                                                            class="title">
                                                                                                            Relax
                                                                                                        </h4>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-606fc2b elementor-widget__width-auto elementor-widget elementor-widget-apus_listings_category_banner"
                                                                                    data-id="606fc2b"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="apus_listings_category_banner.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div
                                                                                            class="widget-listing-category-banner ">

                                                                                            <a
                                                                                                href="listing-category/business/index.htm">
                                                                                                <div
                                                                                                    class="category-banner-inner ">
                                                                                                    <div
                                                                                                        class="inner">
                                                                                                        <div
                                                                                                            class="category-icon">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-briefcase"></i>
                                                                                                        </div>
                                                                                                        <h4
                                                                                                            class="title">
                                                                                                            Business
                                                                                                        </h4>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <div class="elementor-element elementor-element-8df170e elementor-widget elementor-widget-spacer"
                                                            data-id="8df170e" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-element elementor-element-b63fd1e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="b63fd1e" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-14fe785 elementor-column elementor-col-100 elementor-top-column"
                                                data-id="14fe785" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-1d7f7e8 elementor-widget elementor-widget-spacer"
                                                            data-id="1d7f7e8" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-0777db7 elementor-widget elementor-widget-heading"
                                                            data-id="0777db7" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    Top & Popular <span
                                                                        class="text-theme">Listings</span>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-104527b elementor-widget elementor-widget-spacer"
                                                            data-id="104527b" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-cf9791d elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                            data-id="cf9791d" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                    <p>At vero eos et accusamus et iusto odio
                                                                        dignissimos ducimus qui blanditiis
                                                                        praesentium voluptatum deleniti atque
                                                                        corrupti quos dolores et quas molestias
                                                                        excepturi</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-88101c0 elementor-widget elementor-widget-spacer"
                                                            data-id="88101c0" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d587d8f elementor-widget elementor-widget-apus_listings"
                                                            data-id="d587d8f" data-element_type="widget"
                                                            data-widget_type="apus_listings.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="widget-listing style-grid   ">
                                                                    <div class="widget-content ">
                                                                        <div class="row">
                                                                            <div
                                                                                class="full-smallest col-xs-12 col-sm-6 col-md-4  md-clearfix  sm-clearfix xs-clearfix">
                                                                                <div class="job-grid-style post-524 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-food-restaurants job_listing_category-shopping job_listing_type-freelance job_listing_amenity-accepts-credit-cards job_listing_amenity-alarm-system job_listing_amenity-bike-parking job_listing_amenity-coupons job_listing_amenity-elevator job_listing_amenity-outdoor-seating job_listing_amenity-parking-street job_listing_amenity-reservations job_listing_amenity-security-cameras job_listing_amenity-smoking-allowed job_listing_amenity-wireless-internet job_listing_region-new-york job_listing_region-usa job-type-freelance"
                                                                                    data-latitude="40.760552"
                                                                                    data-longitude="-73.926861"
                                                                                    data-img="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-4-540x300.jpg"
                                                                                    data-thumb="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-4-150x150.jpg"
                                                                                    data-permalink="https://www.demoapus-wp1.com/findus/listing/healthy-food/">

                                                                                    <div class="listing-image">
                                                                                        <a class="listing-image-inner"
                                                                                            href="listing/healthy-food/index.htm">
                                                                                            <div class="image-wrapper">
                                                                                                <img width="540"
                                                                                                    height="300"
                                                                                                    src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 300'%2F%3E"
                                                                                                    class="attachment-findus-card-image size-findus-card-image unveil-image"
                                                                                                    alt=""
                                                                                                    data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-4-540x300.jpg">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="flags-top-wrapper">
                                                                                            <span class="price-range">
                                                                                                <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">60</span>
                                                                                                - <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">85</span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="flags-bottom-wrapper">
                                                                                            <div class="listing-review">
                                                                                                <span
                                                                                                    class="review-avg">3.9</span>
                                                                                            </div>
                                                                                            <div class="top-imformation">
                                                                                                <div
                                                                                                    class="listing-btn-wrapper listing-bookmark">
                                                                                                    <a href="#apus-bookmark-add"
                                                                                                        class="apus-bookmark-not-login"
                                                                                                        data-id="524">
                                                                                                        <i
                                                                                                            class="ti-heart"></i><span
                                                                                                            class="bookmark-text">Save</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bottom-grid">
                                                                                        <div class="listing-content">
                                                                                            <div class="listing-logo">
                                                                                                <div
                                                                                                    class="inner">
                                                                                                    <div
                                                                                                        class="image-wrapper">
                                                                                                        <img width="150"
                                                                                                            height="150"
                                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 150 150'%2F%3E"
                                                                                                            class="attachment-thumbnail size-thumbnail unveil-image"
                                                                                                            alt=""
                                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-3-150x150.jpg"
                                                                                                            data-srcset="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-3-150x150.jpg 150w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-3-300x300.jpg 300w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-3-768x768.jpg 768w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-3-400x400.jpg 400w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-3-600x600.jpg 600w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-3-110x110.jpg 110w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-3-100x100.jpg 100w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-3.jpg 770w"
                                                                                                            data-sizes="(max-width: 150px) 100vw, 150px">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="listing-content-inner clearfix">
                                                                                                <h3 class="listing-title">
                                                                                                    <a
                                                                                                        href="listing/healthy-food/index.htm">Healthy
                                                                                                        Food</a>
                                                                                                </h3>
                                                                                                <div
                                                                                                    class="listing-tagline">
                                                                                                    Villa,food
                                                                                                    for you
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="listing-contact">
                                                                                            <div
                                                                                                class="grid-contact-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-location listing-address">
                                                                                                    <i
                                                                                                        class="flaticon-placeholder"></i><a
                                                                                                        href="region/new-york/index.htm">New
                                                                                                        York</a>,
                                                                                                    <a
                                                                                                        href="region/usa/index.htm">USA</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="phone-wrapper listing-phone phone-hide">
                                                                                                    <a class="phone"
                                                                                                        href="tel:+88-123-456-789">
                                                                                                        <i
                                                                                                            class="flaticon-call"></i>+88-123-456-789
                                                                                                    </a>
                                                                                                    <span
                                                                                                        class="phone-show"
                                                                                                        onclick="this.parentNode.classList.add('show');"><i
                                                                                                            class="flaticon-call"></i>
                                                                                                        +88-123-4***
                                                                                                        <span
                                                                                                            class="bg-theme">show</span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="listing-content-bottom">
                                                                                            <div
                                                                                                class="grid-metas-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-category">
                                                                                                    <a
                                                                                                        href="listing-category/food-restaurants/index.htm"><span
                                                                                                            class="icon-cate"
                                                                                                            style="background: #fd5c05;"><i
                                                                                                                class="fas fa-wine-glass"></i></span>Food
                                                                                                        &amp;
                                                                                                        Restaurants</a>
                                                                                                    <div
                                                                                                        class="more-categories">
                                                                                                        <span
                                                                                                            class="count-cat">+1</span>
                                                                                                        <div
                                                                                                            class="more-categories-inner">
                                                                                                            <a
                                                                                                                href="listing-category/shopping/index.htm"><span
                                                                                                                    class="icon-cate"
                                                                                                                    style="background: #f73d51;"><i
                                                                                                                        class="fas fa-briefcase"></i></span><span
                                                                                                                    class="name-category">Shopping</span></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="listing-time closed">
                                                                                                    Closed
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="full-smallest col-xs-12 col-sm-6 col-md-4 ">
                                                                                <div class="job-grid-style post-523 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-education job_listing_category-intertainment job_listing_category-sport job_listing_type-internship job_listing_amenity-accepts-credit-cards job_listing_amenity-alarm-system job_listing_amenity-bike-parking job_listing_amenity-coupons job_listing_amenity-elevator job_listing_amenity-outdoor-seating job_listing_amenity-parking-street job_listing_amenity-reservations job_listing_amenity-security-cameras job_listing_amenity-smoking-allowed job_listing_amenity-wheelchair-accesible job_listing_region-new-york job_listing_region-usa job-type-internship"
                                                                                    data-latitude="40.758883"
                                                                                    data-longitude="-73.937499"
                                                                                    data-img="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-5-540x300.jpg"
                                                                                    data-thumb="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-5-150x150.jpg"
                                                                                    data-permalink="https://www.demoapus-wp1.com/findus/listing/dance-composer/">

                                                                                    <div class="listing-image">
                                                                                        <a class="listing-image-inner"
                                                                                            href="listing/dance-composer/index.htm">
                                                                                            <div class="image-wrapper">
                                                                                                <img width="540"
                                                                                                    height="300"
                                                                                                    src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 300'%2F%3E"
                                                                                                    class="attachment-findus-card-image size-findus-card-image unveil-image"
                                                                                                    alt=""
                                                                                                    data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-5-540x300.jpg">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="flags-top-wrapper">
                                                                                            <span class="price-range">
                                                                                                <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">100</span>
                                                                                                - <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">120</span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="flags-bottom-wrapper">
                                                                                            <div class="listing-review">
                                                                                                <span
                                                                                                    class="review-avg">4.4</span>
                                                                                            </div>
                                                                                            <div class="top-imformation">
                                                                                                <div
                                                                                                    class="listing-btn-wrapper listing-bookmark">
                                                                                                    <a href="#apus-bookmark-add"
                                                                                                        class="apus-bookmark-not-login"
                                                                                                        data-id="523">
                                                                                                        <i
                                                                                                            class="ti-heart"></i><span
                                                                                                            class="bookmark-text">Save</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bottom-grid">
                                                                                        <div class="listing-content">
                                                                                            <div class="listing-logo">
                                                                                                <div
                                                                                                    class="inner">
                                                                                                    <div
                                                                                                        class="image-wrapper">
                                                                                                        <img width="150"
                                                                                                            height="150"
                                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 150 150'%2F%3E"
                                                                                                            class="attachment-thumbnail size-thumbnail unveil-image"
                                                                                                            alt=""
                                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-150x150.jpg"
                                                                                                            data-srcset="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-150x150.jpg 150w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-300x300.jpg 300w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-768x768.jpg 768w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-400x400.jpg 400w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-600x600.jpg 600w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-110x110.jpg 110w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-100x100.jpg 100w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2.jpg 770w"
                                                                                                            data-sizes="(max-width: 150px) 100vw, 150px">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="listing-content-inner clearfix">
                                                                                                <h3 class="listing-title">
                                                                                                    <a
                                                                                                        href="listing/dance-composer/index.htm">Dance
                                                                                                        Composer</a>
                                                                                                    <span
                                                                                                        class="listing-claimed-icon"
                                                                                                        data-toggle="tooltip"
                                                                                                        title="Claimed"><i
                                                                                                            class="ti-check"></i></span>
                                                                                                </h3>
                                                                                                <div
                                                                                                    class="listing-tagline">
                                                                                                    Outdoor,
                                                                                                    luxury for
                                                                                                    you</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="listing-contact">
                                                                                            <div
                                                                                                class="grid-contact-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-location listing-address">
                                                                                                    <i
                                                                                                        class="flaticon-placeholder"></i><a
                                                                                                        href="region/new-york/index.htm">New
                                                                                                        York</a>,
                                                                                                    <a
                                                                                                        href="region/usa/index.htm">USA</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="phone-wrapper listing-phone phone-hide">
                                                                                                    <a class="phone"
                                                                                                        href="tel:+89-456-888-666">
                                                                                                        <i
                                                                                                            class="flaticon-call"></i>+89-456-888-666
                                                                                                    </a>
                                                                                                    <span
                                                                                                        class="phone-show"
                                                                                                        onclick="this.parentNode.classList.add('show');"><i
                                                                                                            class="flaticon-call"></i>
                                                                                                        +89-456-8***
                                                                                                        <span
                                                                                                            class="bg-theme">show</span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="listing-content-bottom">
                                                                                            <div
                                                                                                class="grid-metas-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-category">
                                                                                                    <a
                                                                                                        href="listing-category/education/index.htm"><span
                                                                                                            class="icon-cate"
                                                                                                            style="background: #18bad9;"><i
                                                                                                                class="fas fa-graduation-cap"></i></span>Education</a>
                                                                                                    <div
                                                                                                        class="more-categories">
                                                                                                        <span
                                                                                                            class="count-cat">+2</span>
                                                                                                        <div
                                                                                                            class="more-categories-inner">
                                                                                                            <a
                                                                                                                href="listing-category/intertainment/index.htm"><span
                                                                                                                    class="icon-cate"
                                                                                                                    style="background: #ff465a;"><i
                                                                                                                        class="fas fa-glass-martini"></i></span><span
                                                                                                                    class="name-category">Intertainment</span></a><a
                                                                                                                href="listing-category/sport/index.htm"><span
                                                                                                                    class="icon-cate"
                                                                                                                    style="background: #37b475;"><i
                                                                                                                        class="fas fa-futbol"></i></span><span
                                                                                                                    class="name-category">Sport</span></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="listing-time opening">
                                                                                                    Open </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="full-smallest col-xs-12 col-sm-6 col-md-4  sm-clearfix xs-clearfix">
                                                                                <div class="job-grid-style post-522 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-sport job_listing_type-full-time job_listing_amenity-accepts-credit-cards job_listing_amenity-alarm-system job_listing_amenity-bike-parking job_listing_amenity-coupons job_listing_amenity-elevator job_listing_amenity-outdoor-seating job_listing_amenity-reservations job_listing_amenity-security-cameras job_listing_amenity-smoking-allowed job_listing_amenity-wheelchair-accesible job_listing_region-new-york job_listing_region-usa job-type-full-time"
                                                                                    data-latitude="40.766410"
                                                                                    data-longitude="-73.938238"
                                                                                    data-img="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-13-540x300.jpg"
                                                                                    data-thumb="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-13-150x150.jpg"
                                                                                    data-permalink="https://www.demoapus-wp1.com/findus/listing/services-auto/">

                                                                                    <div class="listing-image">
                                                                                        <a class="listing-image-inner"
                                                                                            href="listing/services-auto/index.htm">
                                                                                            <div class="image-wrapper">
                                                                                                <img width="540"
                                                                                                    height="300"
                                                                                                    src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 300'%2F%3E"
                                                                                                    class="attachment-findus-card-image size-findus-card-image unveil-image"
                                                                                                    alt=""
                                                                                                    data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-13-540x300.jpg">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="flags-top-wrapper">
                                                                                            <span class="price-range">
                                                                                                <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">20</span>
                                                                                                - <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">50</span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="flags-bottom-wrapper">
                                                                                            <div class="listing-review">
                                                                                                <span
                                                                                                    class="review-avg">4.6</span>
                                                                                            </div>
                                                                                            <div class="top-imformation">
                                                                                                <div
                                                                                                    class="listing-btn-wrapper listing-bookmark">
                                                                                                    <a href="#apus-bookmark-add"
                                                                                                        class="apus-bookmark-not-login"
                                                                                                        data-id="522">
                                                                                                        <i
                                                                                                            class="ti-heart"></i><span
                                                                                                            class="bookmark-text">Save</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bottom-grid">
                                                                                        <div class="listing-content">
                                                                                            <div class="listing-logo">
                                                                                                <div
                                                                                                    class="inner">
                                                                                                    <div
                                                                                                        class="image-wrapper">
                                                                                                        <img width="150"
                                                                                                            height="150"
                                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 150 150'%2F%3E"
                                                                                                            class="attachment-thumbnail size-thumbnail unveil-image"
                                                                                                            alt=""
                                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-150x150.png"
                                                                                                            data-srcset="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-150x150.png 150w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-298x300.png 298w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-110x110.png 110w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1.png 301w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-100x100.png 100w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-300x300.png 300w"
                                                                                                            data-sizes="(max-width: 150px) 100vw, 150px">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="listing-content-inner clearfix">
                                                                                                <h3 class="listing-title">
                                                                                                    <a
                                                                                                        href="listing/services-auto/index.htm">Services
                                                                                                        Auto</a>
                                                                                                    <span
                                                                                                        class="listing-claimed-icon"
                                                                                                        data-toggle="tooltip"
                                                                                                        title="Claimed"><i
                                                                                                            class="ti-check"></i></span>
                                                                                                </h3>
                                                                                                <div
                                                                                                    class="listing-tagline">
                                                                                                    Active for
                                                                                                    you, my
                                                                                                    friend</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="listing-contact">
                                                                                            <div
                                                                                                class="grid-contact-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-location listing-address">
                                                                                                    <i
                                                                                                        class="flaticon-placeholder"></i><a
                                                                                                        href="region/new-york/index.htm">New
                                                                                                        York</a>,
                                                                                                    <a
                                                                                                        href="region/usa/index.htm">USA</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="phone-wrapper listing-phone phone-hide">
                                                                                                    <a class="phone"
                                                                                                        href="tel:+89-123-456-789">
                                                                                                        <i
                                                                                                            class="flaticon-call"></i>+89-123-456-789
                                                                                                    </a>
                                                                                                    <span
                                                                                                        class="phone-show"
                                                                                                        onclick="this.parentNode.classList.add('show');"><i
                                                                                                            class="flaticon-call"></i>
                                                                                                        +89-123-4***
                                                                                                        <span
                                                                                                            class="bg-theme">show</span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="listing-content-bottom">
                                                                                            <div
                                                                                                class="grid-metas-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-category">
                                                                                                    <a
                                                                                                        href="listing-category/sport/index.htm"><span
                                                                                                            class="icon-cate"
                                                                                                            style="background: #37b475;"><i
                                                                                                                class="fas fa-futbol"></i></span>Sport</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="listing-time closed">
                                                                                                    Closed
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="full-smallest col-xs-12 col-sm-6 col-md-4  md-clearfix ">
                                                                                <div class="job-grid-style post-521 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-intertainment job_listing_category-sport job_listing_type-part-time job_listing_amenity-accepts-credit-cards job_listing_amenity-bike-parking job_listing_amenity-elevator job_listing_amenity-outdoor-seating job_listing_amenity-parking-street job_listing_amenity-reservations job_listing_amenity-security-cameras job_listing_amenity-smoking-allowed job_listing_amenity-wheelchair-accesible job_listing_amenity-wireless-internet job_listing_region-new-york job_listing_region-usa job-type-part-time job_position_featured"
                                                                                    data-latitude="40.763260"
                                                                                    data-longitude="-73.957052"
                                                                                    data-img="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-11-540x300.jpg"
                                                                                    data-thumb="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-11-150x150.jpg"
                                                                                    data-permalink="https://www.demoapus-wp1.com/findus/listing/summer-music/">

                                                                                    <div class="listing-image">
                                                                                        <a class="listing-image-inner"
                                                                                            href="listing/summer-music/index.htm">
                                                                                            <div class="image-wrapper">
                                                                                                <img width="540"
                                                                                                    height="300"
                                                                                                    src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 300'%2F%3E"
                                                                                                    class="attachment-findus-card-image size-findus-card-image unveil-image"
                                                                                                    alt=""
                                                                                                    data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-11-540x300.jpg">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="flags-top-wrapper">
                                                                                            <span class="price-range">
                                                                                                <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">110</span>
                                                                                                - <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">115</span>
                                                                                            </span>
                                                                                            <div
                                                                                                class="listing-featured-label">
                                                                                                Featured </div>
                                                                                        </div>
                                                                                        <div class="flags-bottom-wrapper">
                                                                                            <div class="listing-review">
                                                                                                <span
                                                                                                    class="review-avg">3.8</span>
                                                                                            </div>
                                                                                            <div class="top-imformation">
                                                                                                <div
                                                                                                    class="listing-btn-wrapper listing-bookmark">
                                                                                                    <a href="#apus-bookmark-add"
                                                                                                        class="apus-bookmark-not-login"
                                                                                                        data-id="521">
                                                                                                        <i
                                                                                                            class="ti-heart"></i><span
                                                                                                            class="bookmark-text">Save</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bottom-grid">
                                                                                        <div class="listing-content">
                                                                                            <div class="listing-logo">
                                                                                                <div
                                                                                                    class="inner">
                                                                                                    <div
                                                                                                        class="image-wrapper">
                                                                                                        <img width="150"
                                                                                                            height="150"
                                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 150 150'%2F%3E"
                                                                                                            class="attachment-thumbnail size-thumbnail unveil-image"
                                                                                                            alt=""
                                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-4-150x150.jpg"
                                                                                                            data-srcset="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-4-150x150.jpg 150w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-4-300x300.jpg 300w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-4-400x400.jpg 400w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-4-110x110.jpg 110w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-4-100x100.jpg 100w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-4.jpg 600w"
                                                                                                            data-sizes="(max-width: 150px) 100vw, 150px">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="listing-content-inner clearfix">
                                                                                                <h3 class="listing-title">
                                                                                                    <a
                                                                                                        href="listing/summer-music/index.htm">Summer
                                                                                                        Music</a>
                                                                                                    <span
                                                                                                        class="listing-claimed-icon"
                                                                                                        data-toggle="tooltip"
                                                                                                        title="Claimed"><i
                                                                                                            class="ti-check"></i></span>
                                                                                                </h3>
                                                                                                <div
                                                                                                    class="listing-tagline">
                                                                                                    Outdoor,
                                                                                                    luxury for
                                                                                                    you</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="listing-contact">
                                                                                            <div
                                                                                                class="grid-contact-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-location listing-address">
                                                                                                    <i
                                                                                                        class="flaticon-placeholder"></i><a
                                                                                                        href="region/new-york/index.htm">New
                                                                                                        York</a>,
                                                                                                    <a
                                                                                                        href="region/usa/index.htm">USA</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="phone-wrapper listing-phone phone-hide">
                                                                                                    <a class="phone"
                                                                                                        href="tel:+75-123-456-789">
                                                                                                        <i
                                                                                                            class="flaticon-call"></i>+75-123-456-789
                                                                                                    </a>
                                                                                                    <span
                                                                                                        class="phone-show"
                                                                                                        onclick="this.parentNode.classList.add('show');"><i
                                                                                                            class="flaticon-call"></i>
                                                                                                        +75-123-4***
                                                                                                        <span
                                                                                                            class="bg-theme">show</span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="listing-content-bottom">
                                                                                            <div
                                                                                                class="grid-metas-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-category">
                                                                                                    <a
                                                                                                        href="listing-category/intertainment/index.htm"><span
                                                                                                            class="icon-cate"
                                                                                                            style="background: #ff465a;"><i
                                                                                                                class="fas fa-glass-martini"></i></span>Intertainment</a>
                                                                                                    <div
                                                                                                        class="more-categories">
                                                                                                        <span
                                                                                                            class="count-cat">+1</span>
                                                                                                        <div
                                                                                                            class="more-categories-inner">
                                                                                                            <a
                                                                                                                href="listing-category/sport/index.htm"><span
                                                                                                                    class="icon-cate"
                                                                                                                    style="background: #37b475;"><i
                                                                                                                        class="fas fa-futbol"></i></span><span
                                                                                                                    class="name-category">Sport</span></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="listing-time opening">
                                                                                                    Open </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="full-smallest col-xs-12 col-sm-6 col-md-4  sm-clearfix xs-clearfix">
                                                                                <div class="job-grid-style post-520 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-food-restaurants job_listing_type-part-time job_listing_amenity-accepts-credit-cards job_listing_amenity-alarm-system job_listing_amenity-bike-parking job_listing_amenity-coupons job_listing_amenity-elevator job_listing_amenity-outdoor-seating job_listing_amenity-parking-street job_listing_amenity-reservations job_listing_amenity-security-cameras job_listing_amenity-smoking-allowed job_listing_amenity-wheelchair-accesible job_listing_region-new-york job_listing_region-usa job-type-part-time job_position_featured"
                                                                                    data-latitude="40.754979"
                                                                                    data-longitude="-73.967173"
                                                                                    data-img="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-3-540x300.jpg"
                                                                                    data-thumb="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-3-150x150.jpg"
                                                                                    data-permalink="https://www.demoapus-wp1.com/findus/listing/hotel-govendor/">

                                                                                    <div class="listing-image">
                                                                                        <a class="listing-image-inner"
                                                                                            href="listing/hotel-govendor/index.htm">
                                                                                            <div class="image-wrapper">
                                                                                                <img width="540"
                                                                                                    height="300"
                                                                                                    src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 300'%2F%3E"
                                                                                                    class="attachment-findus-card-image size-findus-card-image unveil-image"
                                                                                                    alt=""
                                                                                                    data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-3-540x300.jpg">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="flags-top-wrapper">
                                                                                            <span class="price-range">
                                                                                                <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">75</span>
                                                                                                - <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">85</span>
                                                                                            </span>
                                                                                            <div
                                                                                                class="listing-featured-label">
                                                                                                Featured </div>
                                                                                        </div>
                                                                                        <div class="flags-bottom-wrapper">
                                                                                            <div class="listing-review">
                                                                                                <span
                                                                                                    class="review-avg">4.4</span>
                                                                                            </div>
                                                                                            <div class="top-imformation">
                                                                                                <div
                                                                                                    class="listing-btn-wrapper listing-bookmark">
                                                                                                    <a href="#apus-bookmark-add"
                                                                                                        class="apus-bookmark-not-login"
                                                                                                        data-id="520">
                                                                                                        <i
                                                                                                            class="ti-heart"></i><span
                                                                                                            class="bookmark-text">Save</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bottom-grid">
                                                                                        <div class="listing-content">
                                                                                            <div class="listing-logo">
                                                                                                <div
                                                                                                    class="inner">
                                                                                                    <div
                                                                                                        class="image-wrapper">
                                                                                                        <img width="150"
                                                                                                            height="150"
                                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 150 150'%2F%3E"
                                                                                                            class="attachment-thumbnail size-thumbnail unveil-image"
                                                                                                            alt=""
                                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-150x150.png"
                                                                                                            data-srcset="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-150x150.png 150w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-298x300.png 298w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-110x110.png 110w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1.png 301w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-100x100.png 100w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-1-300x300.png 300w"
                                                                                                            data-sizes="(max-width: 150px) 100vw, 150px">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="listing-content-inner clearfix">
                                                                                                <h3 class="listing-title">
                                                                                                    <a
                                                                                                        href="listing/hotel-govendor/index.htm">Hotel
                                                                                                        Govendor</a>
                                                                                                </h3>
                                                                                                <div
                                                                                                    class="listing-tagline">
                                                                                                    House,
                                                                                                    luxury food
                                                                                                    for you
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="listing-contact">
                                                                                            <div
                                                                                                class="grid-contact-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-location listing-address">
                                                                                                    <i
                                                                                                        class="flaticon-placeholder"></i><a
                                                                                                        href="region/new-york/index.htm">New
                                                                                                        York</a>,
                                                                                                    <a
                                                                                                        href="region/usa/index.htm">USA</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="phone-wrapper listing-phone phone-hide">
                                                                                                    <a class="phone"
                                                                                                        href="tel:+88-123-888-999">
                                                                                                        <i
                                                                                                            class="flaticon-call"></i>+88-123-888-999
                                                                                                    </a>
                                                                                                    <span
                                                                                                        class="phone-show"
                                                                                                        onclick="this.parentNode.classList.add('show');"><i
                                                                                                            class="flaticon-call"></i>
                                                                                                        +88-123-8***
                                                                                                        <span
                                                                                                            class="bg-theme">show</span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="listing-content-bottom">
                                                                                            <div
                                                                                                class="grid-metas-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-category">
                                                                                                    <a
                                                                                                        href="listing-category/food-restaurants/index.htm"><span
                                                                                                            class="icon-cate"
                                                                                                            style="background: #fd5c05;"><i
                                                                                                                class="fas fa-wine-glass"></i></span>Food
                                                                                                        &amp;
                                                                                                        Restaurants</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="listing-time closed">
                                                                                                    Closed
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="full-smallest col-xs-12 col-sm-6 col-md-4 ">
                                                                                <div class="job-grid-style post-519 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-education job_listing_category-sport job_listing_type-full-time job_listing_amenity-accepts-credit-cards job_listing_amenity-bike-parking job_listing_amenity-coupons job_listing_amenity-elevator job_listing_amenity-outdoor-seating job_listing_amenity-parking-street job_listing_amenity-reservations job_listing_amenity-security-cameras job_listing_amenity-smoking-allowed job_listing_amenity-wheelchair-accesible job_listing_amenity-wireless-internet job_listing_region-new-york job_listing_region-usa job-type-full-time"
                                                                                    data-latitude="40.752630"
                                                                                    data-longitude="-73.940804"
                                                                                    data-img="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-12-540x300.jpg"
                                                                                    data-thumb="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-12-150x150.jpg"
                                                                                    data-permalink="https://www.demoapus-wp1.com/findus/listing/yoga-meditaion/">

                                                                                    <div class="listing-image">
                                                                                        <a class="listing-image-inner"
                                                                                            href="listing/yoga-meditaion/index.htm">
                                                                                            <div class="image-wrapper">
                                                                                                <img width="540"
                                                                                                    height="300"
                                                                                                    src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 300'%2F%3E"
                                                                                                    class="attachment-findus-card-image size-findus-card-image unveil-image"
                                                                                                    alt=""
                                                                                                    data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/l-12-540x300.jpg">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div class="flags-top-wrapper">
                                                                                            <span class="price-range">
                                                                                                <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">100</span>
                                                                                                - <span
                                                                                                    class="currency-symbol">$</span><span
                                                                                                    class="price">120</span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="flags-bottom-wrapper">
                                                                                            <div class="listing-review">
                                                                                                <span
                                                                                                    class="review-avg">4.0</span>
                                                                                            </div>
                                                                                            <div class="top-imformation">
                                                                                                <div
                                                                                                    class="listing-btn-wrapper listing-bookmark">
                                                                                                    <a href="#apus-bookmark-add"
                                                                                                        class="apus-bookmark-not-login"
                                                                                                        data-id="519">
                                                                                                        <i
                                                                                                            class="ti-heart"></i><span
                                                                                                            class="bookmark-text">Save</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bottom-grid">
                                                                                        <div class="listing-content">
                                                                                            <div class="listing-logo">
                                                                                                <div
                                                                                                    class="inner">
                                                                                                    <div
                                                                                                        class="image-wrapper">
                                                                                                        <img width="150"
                                                                                                            height="150"
                                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 150 150'%2F%3E"
                                                                                                            class="attachment-thumbnail size-thumbnail unveil-image"
                                                                                                            alt=""
                                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-150x150.jpg"
                                                                                                            data-srcset="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-150x150.jpg 150w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-300x300.jpg 300w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-768x768.jpg 768w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-400x400.jpg 400w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-600x600.jpg 600w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-110x110.jpg 110w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2-100x100.jpg 100w, https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/2020/01/user-2.jpg 770w"
                                                                                                            data-sizes="(max-width: 150px) 100vw, 150px">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="listing-content-inner clearfix">
                                                                                                <h3 class="listing-title">
                                                                                                    <a
                                                                                                        href="listing/yoga-meditaion/index.htm">Yoga
                                                                                                        &#038;
                                                                                                        Meditaion</a>
                                                                                                </h3>
                                                                                                <div
                                                                                                    class="listing-tagline">
                                                                                                    Active for
                                                                                                    you, my
                                                                                                    friend</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="listing-contact">
                                                                                            <div
                                                                                                class="grid-contact-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-location listing-address">
                                                                                                    <i
                                                                                                        class="flaticon-placeholder"></i><a
                                                                                                        href="region/new-york/index.htm">New
                                                                                                        York</a>,
                                                                                                    <a
                                                                                                        href="region/usa/index.htm">USA</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="phone-wrapper listing-phone phone-hide">
                                                                                                    <a class="phone"
                                                                                                        href="tel:+80-123-888-999">
                                                                                                        <i
                                                                                                            class="flaticon-call"></i>+80-123-888-999
                                                                                                    </a>
                                                                                                    <span
                                                                                                        class="phone-show"
                                                                                                        onclick="this.parentNode.classList.add('show');"><i
                                                                                                            class="flaticon-call"></i>
                                                                                                        +80-123-8***
                                                                                                        <span
                                                                                                            class="bg-theme">show</span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="listing-content-bottom">
                                                                                            <div
                                                                                                class="grid-metas-inner flex-middle">
                                                                                                <div
                                                                                                    class="listing-category">
                                                                                                    <a
                                                                                                        href="listing-category/education/index.htm"><span
                                                                                                            class="icon-cate"
                                                                                                            style="background: #18bad9;"><i
                                                                                                                class="fas fa-graduation-cap"></i></span>Education</a>
                                                                                                    <div
                                                                                                        class="more-categories">
                                                                                                        <span
                                                                                                            class="count-cat">+1</span>
                                                                                                        <div
                                                                                                            class="more-categories-inner">
                                                                                                            <a
                                                                                                                href="listing-category/sport/index.htm"><span
                                                                                                                    class="icon-cate"
                                                                                                                    style="background: #37b475;"><i
                                                                                                                        class="fas fa-futbol"></i></span><span
                                                                                                                    class="name-category">Sport</span></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="listing-time closed">
                                                                                                    Closed
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-e248e1d elementor-widget elementor-widget-spacer"
                                                            data-id="e248e1d" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-element elementor-element-82140e3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="82140e3" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-b12704b elementor-column elementor-col-100 elementor-top-column"
                                                data-id="b12704b" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-822e9ef elementor-widget elementor-widget-spacer"
                                                            data-id="822e9ef" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4612953 elementor-widget elementor-widget-heading"
                                                            data-id="4612953" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    Most Popular <span
                                                                        class="text-theme">Categories</span>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-edfa57e elementor-widget elementor-widget-spacer"
                                                            data-id="edfa57e" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-0f663f7 elementor-widget elementor-widget-text-editor"
                                                            data-id="0f663f7" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                    <p>At vero eos et accusamus et iusto odio
                                                                        dignissimos ducimus qui blanditiis</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-b6adc9e elementor-widget elementor-widget-spacer"
                                                            data-id="b6adc9e" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2428bef elementor-widget elementor-widget-apus_listings_category_list_banner"
                                                            data-id="2428bef" data-element_type="widget"
                                                            data-widget_type="apus_listings_category_list_banner.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="widget-listing-category-list-banner style1 ">
                                                                    <div class="slick-carousel " data-items="3"
                                                                        data-medium="2" data-smallmedium="1"
                                                                        data-extrasmall="1" data-pagination="false"
                                                                        data-nav="true" data-autoplay="false"
                                                                        data-loop="true">

                                                                        <a href="listing-category/business/index.htm">
                                                                            <div class="category-banner-list style1">
                                                                                <div class="banner-image">
                                                                                    <div class="image-wrapper">
                                                                                        <img width="540" height="270"
                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 270'%2F%3E"
                                                                                            class="attachment-540x270x1x1 size-540x270x1x1 unveil-image"
                                                                                            alt=""
                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/elementor/thumbs/business-ol6nnis36honxlms8boqkxdyt65xj62iqnwnujxyto.jpg">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="inner">
                                                                                    <div class="left-inner">
                                                                                        <div class="category-icon"
                                                                                            style="background-color:#5565D0;">
                                                                                            <i
                                                                                                class="fas fa-briefcase"></i>
                                                                                        </div>

                                                                                        <h4 class="title">
                                                                                            Business </h4>

                                                                                    </div>
                                                                                    <div class="bottom-link">
                                                                                        <span
                                                                                            class="btn-forwarded">Browse</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="listing-category/education/index.htm">
                                                                            <div class="category-banner-list style1">
                                                                                <div class="banner-image">
                                                                                    <div class="image-wrapper">
                                                                                        <img width="540" height="270"
                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 270'%2F%3E"
                                                                                            class="attachment-540x270x1x1 size-540x270x1x1 unveil-image"
                                                                                            alt=""
                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/elementor/thumbs/education-ol6nnis36honxlms8boqkxdyt65xj62iqnwnujxyto.jpg">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="inner">
                                                                                    <div class="left-inner">
                                                                                        <div class="category-icon"
                                                                                            style="background-color:#F73D51;">
                                                                                            <i
                                                                                                class="fas fa-graduation-cap"></i>
                                                                                        </div>

                                                                                        <h4 class="title">
                                                                                            Education </h4>

                                                                                    </div>
                                                                                    <div class="bottom-link">
                                                                                        <span
                                                                                            class="btn-forwarded">Browse</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a
                                                                            href="listing-category/food-restaurants/index.htm">
                                                                            <div class="category-banner-list style1">
                                                                                <div class="banner-image">
                                                                                    <div class="image-wrapper">
                                                                                        <img width="540" height="270"
                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 270'%2F%3E"
                                                                                            class="attachment-540x270x1x1 size-540x270x1x1 unveil-image"
                                                                                            alt=""
                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/elementor/thumbs/food-ol6nnis36honxlms8boqkxdyt65xj62iqnwnujxyto.jpg">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="inner">
                                                                                    <div class="left-inner">
                                                                                        <div class="category-icon"
                                                                                            style="background-color:#F5B83B;">
                                                                                            <i
                                                                                                class="fas fa-glass-martini-alt"></i>
                                                                                        </div>

                                                                                        <h4 class="title">
                                                                                            Food & Restaurants
                                                                                        </h4>

                                                                                    </div>
                                                                                    <div class="bottom-link">
                                                                                        <span
                                                                                            class="btn-forwarded">Browse</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="listing-category/sport/index.htm">
                                                                            <div class="category-banner-list style1">
                                                                                <div class="banner-image">
                                                                                    <div class="image-wrapper">
                                                                                        <img width="540" height="270"
                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 270'%2F%3E"
                                                                                            class="attachment-540x270x1x1 size-540x270x1x1 unveil-image"
                                                                                            alt=""
                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/elementor/thumbs/sport-ol6nnis36honxlms8boqkxdyt65xj62iqnwnujxyto.jpg">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="inner">
                                                                                    <div class="left-inner">
                                                                                        <div class="category-icon"
                                                                                            style="background-color:#37B475;">
                                                                                            <i class="fas fa-futbol"></i>
                                                                                        </div>

                                                                                        <h4 class="title">
                                                                                            Sport </h4>

                                                                                    </div>
                                                                                    <div class="bottom-link">
                                                                                        <span
                                                                                            class="btn-forwarded">Browse</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="listing-category/intertainment/index.htm">
                                                                            <div class="category-banner-list style1">
                                                                                <div class="banner-image">
                                                                                    <div class="image-wrapper">
                                                                                        <img width="540" height="270"
                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 270'%2F%3E"
                                                                                            class="attachment-540x270x1x1 size-540x270x1x1 unveil-image"
                                                                                            alt=""
                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/elementor/thumbs/travel-ol6nnis36honxlms8boqkxdyt65xj62iqnwnujxyto.jpg">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="inner">
                                                                                    <div class="left-inner">
                                                                                        <div class="category-icon"
                                                                                            style="background-color:#FD5C05;">
                                                                                            <i class="fab fa-fly"></i>
                                                                                        </div>

                                                                                        <h4 class="title">
                                                                                            Intertainment </h4>

                                                                                    </div>
                                                                                    <div class="bottom-link">
                                                                                        <span
                                                                                            class="btn-forwarded">Browse</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="listing-category/travel-tour/index.htm">
                                                                            <div class="category-banner-list style1">
                                                                                <div class="banner-image">
                                                                                    <div class="image-wrapper">
                                                                                        <img width="540" height="270"
                                                                                            src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 540 270'%2F%3E"
                                                                                            class="attachment-540x270x1x1 size-540x270x1x1 unveil-image"
                                                                                            alt=""
                                                                                            data-src="https://g5p6r6b9.stackpathcdn.com/findus/wp-content/uploads/elementor/thumbs/shopping-ol6nnis36honxlms8boqkxdyt65xj62iqnwnujxyto.jpg">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="inner">
                                                                                    <div class="left-inner">
                                                                                        <div class="category-icon"
                                                                                            style="background-color:#F73D51;">
                                                                                            <i
                                                                                                class="fas fa-plane-departure"></i>
                                                                                        </div>

                                                                                        <h4 class="title">
                                                                                            Travel & Tour </h4>

                                                                                    </div>
                                                                                    <div class="bottom-link">
                                                                                        <span
                                                                                            class="btn-forwarded">Browse</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1ece12f elementor-widget elementor-widget-spacer"
                                                            data-id="1ece12f" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-element elementor-element-5c877f4 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="5c877f4" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-f084ecc elementor-column elementor-col-100 elementor-top-column"
                                                data-id="f084ecc" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-9946247 elementor-widget elementor-widget-spacer"
                                                            data-id="9946247" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ab63df0 elementor-widget elementor-widget-heading"
                                                            data-id="ab63df0" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    Top Places <span class="text-theme">Listing</span>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c68f4d0 elementor-widget elementor-widget-spacer"
                                                            data-id="c68f4d0" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-5fb295c elementor-widget elementor-widget-text-editor"
                                                            data-id="5fb295c" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                    <p>At vero eos et accusamus et iusto odio
                                                                        dignissimos ducimus qui blanditiis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-element elementor-element-42da4e9 elementor-section-stretched elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="42da4e9" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-9bd952c elementor-column elementor-col-50 elementor-top-column"
                                                data-id="9bd952c" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-58c62c6 elementor-widget elementor-widget-apus_listings_city_banner"
                                                            data-id="58c62c6" data-element_type="widget"
                                                            data-widget_type="apus_listings_city_banner.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="city-banner ">

                                                                    <a class=""
                                                                        href="region/new-york/index.htm">
                                                                        <div class="city-banner-inner">

                                                                            <div class="city-image"
                                                                                style="background-image:url(/assets/findus/wp-content/uploads/2020/01/place-1.jpg)">
                                                                            </div>

                                                                            <div class="inner-content">
                                                                                <h4 class="title">
                                                                                    New York </h4>

                                                                                <span class="more_text">
                                                                                    Get All Listing </span>
                                                                                <span class="number">9
                                                                                    Listings</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a71e537 elementor-column elementor-col-50 elementor-top-column"
                                                data-id="a71e537" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-53afd4c elementor-widget elementor-widget-apus_listings_city_banner"
                                                            data-id="53afd4c" data-element_type="widget"
                                                            data-widget_type="apus_listings_city_banner.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="city-banner ">

                                                                    <a class=""
                                                                        href="region/los-angeles/index.htm">
                                                                        <div class="city-banner-inner">

                                                                            <div class="city-image"
                                                                                style="background-image:url(/assets/findus/wp-content/uploads/2020/01/place-22.jpg)">
                                                                            </div>

                                                                            <div class="inner-content">
                                                                                <h4 class="title">
                                                                                    Los Angeles </h4>

                                                                                <span class="more_text">
                                                                                    Get All Listing </span>
                                                                                <span class="number">2
                                                                                    Listings</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-element elementor-element-b185834 elementor-section-stretched elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="b185834" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-700a1af elementor-column elementor-col-50 elementor-top-column"
                                                data-id="700a1af" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-1ebe6ac elementor-widget elementor-widget-apus_listings_city_banner"
                                                            data-id="1ebe6ac" data-element_type="widget"
                                                            data-widget_type="apus_listings_city_banner.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="city-banner ">

                                                                    <a class=""
                                                                        href="region/new-zealand/index.htm">
                                                                        <div class="city-banner-inner">

                                                                            <div class="city-image"
                                                                                style="background-image:url(/assets/findus/wp-content/uploads/2020/01/place-3.jpg)">
                                                                            </div>

                                                                            <div class="inner-content">
                                                                                <h4 class="title">
                                                                                    New Zealand </h4>

                                                                                <span class="more_text">
                                                                                    Get All Listing </span>
                                                                                <span class="number">1
                                                                                    Listing</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3937d11 elementor-column elementor-col-50 elementor-top-column"
                                                data-id="3937d11" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-fae157b elementor-widget elementor-widget-apus_listings_city_banner"
                                                            data-id="fae157b" data-element_type="widget"
                                                            data-widget_type="apus_listings_city_banner.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="city-banner ">

                                                                    <a class=""
                                                                        href="region/london/index.htm">
                                                                        <div class="city-banner-inner">

                                                                            <div class="city-image"
                                                                                style="background-image:url(/assets/findus/wp-content/uploads/2020/01/place-4.jpg)">
                                                                            </div>

                                                                            <div class="inner-content">
                                                                                <h4 class="title">
                                                                                    London </h4>

                                                                                <span class="more_text">
                                                                                    Get All Listing </span>
                                                                                <span class="number">1
                                                                                    Listing</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-element elementor-element-e52a191 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="e52a191" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-e71fb9f elementor-column elementor-col-100 elementor-top-column"
                                                data-id="e71fb9f" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-2ab8ca7 elementor-widget elementor-widget-spacer"
                                                            data-id="2ab8ca7" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-element elementor-element-af7e86f elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="af7e86f" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-62c8ce3 elementor-column elementor-col-25 elementor-top-column"
                                                data-id="62c8ce3" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-8f19365 elementor-widget elementor-widget-counter"
                                                            data-id="8f19365" data-element_type="widget"
                                                            data-widget_type="counter.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-counter">
                                                                    <div class="elementor-counter-number-wrapper">
                                                                        <div class="elementor-counter-icon">
                                                                            <span class="counter-icon">
                                                                                <i class="icon-trophy"></i>
                                                                            </span>
                                                                        </div>
                                                                        <span
                                                                            class="elementor-counter-number-prefix"></span>
                                                                        <span class="elementor-counter-number"
                                                                            data-duration="2000" data-to-value="200"
                                                                            data-from-value="0" data-delimiter=",">0</span>
                                                                        <span
                                                                            class="elementor-counter-number-suffix">+</span>
                                                                    </div>
                                                                    <div class="elementor-counter-title">Awards
                                                                        Winning</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-324dfb2 elementor-column elementor-col-25 elementor-top-column"
                                                data-id="324dfb2" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-bda84d0 elementor-widget elementor-widget-counter"
                                                            data-id="bda84d0" data-element_type="widget"
                                                            data-widget_type="counter.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-counter">
                                                                    <div class="elementor-counter-number-wrapper">
                                                                        <div class="elementor-counter-icon">
                                                                            <span class="counter-icon">
                                                                                <i class="icon-layers"></i>
                                                                            </span>
                                                                        </div>
                                                                        <span
                                                                            class="elementor-counter-number-prefix"></span>
                                                                        <span class="elementor-counter-number"
                                                                            data-duration="2000" data-to-value="307"
                                                                            data-from-value="0" data-delimiter=",">0</span>
                                                                        <span
                                                                            class="elementor-counter-number-suffix">+</span>
                                                                    </div>
                                                                    <div class="elementor-counter-title">Done
                                                                        Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4e2e944 elementor-column elementor-col-25 elementor-top-column"
                                                data-id="4e2e944" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-5581c47 elementor-widget elementor-widget-counter"
                                                            data-id="5581c47" data-element_type="widget"
                                                            data-widget_type="counter.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-counter">
                                                                    <div class="elementor-counter-number-wrapper">
                                                                        <div class="elementor-counter-icon">
                                                                            <span class="counter-icon">
                                                                                <i class="icon-happy"></i>
                                                                            </span>
                                                                        </div>
                                                                        <span
                                                                            class="elementor-counter-number-prefix"></span>
                                                                        <span class="elementor-counter-number"
                                                                            data-duration="2000" data-to-value="700"
                                                                            data-from-value="0" data-delimiter=",">0</span>
                                                                        <span
                                                                            class="elementor-counter-number-suffix">+</span>
                                                                    </div>
                                                                    <div class="elementor-counter-title">Happy
                                                                        Clients</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-bd1301c elementor-column elementor-col-25 elementor-top-column"
                                                data-id="bd1301c" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-a8ef3f5 elementor-widget elementor-widget-counter"
                                                            data-id="a8ef3f5" data-element_type="widget"
                                                            data-widget_type="counter.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-counter">
                                                                    <div class="elementor-counter-number-wrapper">
                                                                        <div class="elementor-counter-icon">
                                                                            <span class="counter-icon">
                                                                                <i class="icon-dial"></i>
                                                                            </span>
                                                                        </div>
                                                                        <span
                                                                            class="elementor-counter-number-prefix"></span>
                                                                        <span class="elementor-counter-number"
                                                                            data-duration="2000" data-to-value="770"
                                                                            data-from-value="0" data-delimiter=",">0</span>
                                                                        <span
                                                                            class="elementor-counter-number-suffix">+</span>
                                                                    </div>
                                                                    <div class="elementor-counter-title">Cups
                                                                        Of Cofee</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-element elementor-element-8a99cf2 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="8a99cf2" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-120c922 elementor-column elementor-col-100 elementor-top-column"
                                                data-id="120c922" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-c8942a3 elementor-widget elementor-widget-spacer"
                                                            data-id="c8942a3" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-fc90543 elementor-widget elementor-widget-heading"
                                                            data-id="fc90543" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    What Say <span class="text-theme">Our
                                                                        Customers</span></h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-26a2b3d elementor-widget elementor-widget-spacer"
                                                            data-id="26a2b3d" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-418e9c8 elementor-widget elementor-widget-text-editor"
                                                            data-id="418e9c8" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                    <p>At vero eos et accusamus et iusto odio
                                                                        dignissimos ducimus qui blanditiis</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2523b8e elementor-widget elementor-widget-spacer"
                                                            data-id="2523b8e" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1e0413e elementor-widget elementor-widget-apus_testimonials"
                                                            data-id="1e0413e" data-element_type="widget"
                                                            data-widget_type="apus_testimonials.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="widget-testimonials  ">
                                                                    <div class="slick-carousel" data-items="1"
                                                                        data-smalldesktop="1" data-medium="1"
                                                                        data-smallmedium="1" data-loop="true"
                                                                        data-extrasmall="1" data-pagination="false"
                                                                        data-nav="true">
                                                                        <div class="item">
                                                                            <div class="testimonials-item">

                                                                                <div class="avarta">
                                                                                    <img src="/assets/findus/wp-content/uploads/2020/01/user-1.png"
                                                                                        alt="Rout Millance">
                                                                                </div>
                                                                                <h3 class="name-client">Rout
                                                                                    Millance</h3>
                                                                                <span class="job">Web
                                                                                    Designer</span>

                                                                                <div class="description">"
                                                                                    Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing
                                                                                    elit. Autem commodi eligendi
                                                                                    facilis itaque minus non
                                                                                    odio, quaerat ullam unde
                                                                                    voluptatum eligendi facilis
                                                                                    itaque minus non odio,
                                                                                    quaerat ullam unde Lorem
                                                                                    ipsum dolor sit amet,
                                                                                    consectetur adipisicing
                                                                                    elit. Autem commodi
                                                                                    eligendi."</div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="testimonials-item">

                                                                                <div class="avarta">
                                                                                    <img src="/assets/findus/wp-content/uploads/2020/01/user-2.jpg"
                                                                                        alt="Maria Bowman">
                                                                                </div>
                                                                                <h3 class="name-client">
                                                                                    Maria Bowman</h3>
                                                                                <span class="job">Website
                                                                                    &amp; Software</span>

                                                                                <div class="description">"
                                                                                    Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing
                                                                                    elit. Autem commodi eligendi
                                                                                    facilis itaque minus non
                                                                                    odio, quaerat ullam unde
                                                                                    voluptatum eligendi facilis
                                                                                    itaque minus non odio,
                                                                                    quaerat ullam unde Lorem
                                                                                    ipsum dolor sit amet,
                                                                                    consectetur adipisicing
                                                                                    elit. Autem commodi
                                                                                    eligendi."</div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="testimonials-item">

                                                                                <div class="avarta">
                                                                                    <img src="/assets/findus/wp-content/uploads/2020/01/user-4.jpg"
                                                                                        alt="Peter Hawkins">
                                                                                </div>
                                                                                <h3 class="name-client">
                                                                                    Peter Hawkins</h3>
                                                                                <span class="job">Accounting
                                                                                    &amp; Finance</span>

                                                                                <div class="description">"
                                                                                    Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing
                                                                                    elit. Autem commodi eligendi
                                                                                    facilis itaque minus non
                                                                                    odio, quaerat ullam unde
                                                                                    voluptatum eligendi facilis
                                                                                    itaque minus non odio,
                                                                                    quaerat ullam unde Lorem
                                                                                    ipsum dolor sit amet,
                                                                                    consectetur adipisicing
                                                                                    elit. Autem commodi
                                                                                    eligendi."</div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="testimonials-item">

                                                                                <div class="avarta">
                                                                                    <img src="/assets/findus/wp-content/uploads/2020/01/user-2.jpg"
                                                                                        alt="Rout Millance">
                                                                                </div>
                                                                                <h3 class="name-client">Rout
                                                                                    Millance</h3>
                                                                                <span class="job">Web
                                                                                    Designer</span>

                                                                                <div class="description">"
                                                                                    Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing
                                                                                    elit. Autem commodi eligendi
                                                                                    facilis itaque minus non
                                                                                    odio, quaerat ullam unde
                                                                                    voluptatum eligendi facilis
                                                                                    itaque minus non odio,
                                                                                    quaerat ullam unde Lorem
                                                                                    ipsum dolor sit amet,
                                                                                    consectetur adipisicing
                                                                                    elit. Autem commodi
                                                                                    eligendi."</div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-14345fa elementor-widget elementor-widget-spacer"
                                                            data-id="14345fa" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </main><!-- .site-main -->
            </div><!-- .content-area -->

        </div>
    </div>
@endsection
