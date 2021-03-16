@extends('templates.master')

@section('style-css')
    <link rel="stylesheet" href="{{asset('css/FAQ/faq.css')}}">
    <link rel="stylesheet" href="{{asset('css/FAQ/faq-style.css')}}">

@stop

@section('content')
    <div class="accordion-container">
        <h2>LET’S FAQ</h2>
        <p class="text-center">Everything you want to know before we get dirty.</p>

        <ul class="accordion-list">
            <li>
                <h3>How much does a website cost?</h3>
                <div class="answer">
                    <p>While we would love to be able to give a definitive, fixed price for a website, it really depends on the specific needs for each individual business. If one business needs a website comprised of five pages, while another has a substantially larger site of over 100 pages - obviously those projects are going to command different price points.</p>

                    <p>With that being said - here are some general guidelines on what to expect from a pricing standpoint.</p>

                    <p>If you can get by with a small website (between 3 - 10 pages) using a pre-designed template, you can expect to pay approximately $2,500.00. A mid-sized website that has anywhere from 11 - 25 pages, but still uses a pre-made template, will be between $3,000.00 - $5,000.00. If you have a lot of pages, are looking for something completely custom, or are looking for something that has special functionality such as eCommerce, custom calculators, or integrations with other services, you may be looking at anywhere from $10,000 - $20,000.</p>

                    <p>Ultimately, the takeaway here is that we can accommodate projects of just about any budget - so long as expectations are set accordingly.</p>
                </div>
            </li>
            <li>
                <h3>Are there any monthly fees?</h3>
                <div class="answer"><p>This will vary depending on the type of project. For logo & branding projects, fees will be one-time costs. For website projects, we will typically charge a monthly fee, depending on the level of service you choose. To view a full list of our monthly packages, click here.</p></div>
            </li>
            <li>
                <h3>How much does a logo cost?</h3>
                <div class="answer">
                    <p>Logo projects typically cost between $3,000 - $5000.</p>
                    <p>"Why so much?" many people ask. To answer simply - because they require a lot of work. At least, to do them properly. And of all of the investments that you will make for your business, your logo & branding is one area where you don't want to skimp.</p>

                    <p>In business, image is everything. And while your overall brand is based on far more than just your logo, a bad logo can create a strong first impression (for better or for worse).</p>

                    <p>A properly designed logo requires hours of research, and hundreds of sketches and iterations. And with an increasing number of branded businesses in the world, doing research to verify that your mark is unique is a tedious yet necessary part of the process.</p>

                    <p>With each logo project that we complete, we provide 3 - 5 unique logo concepts, a branding guide that details how to properly use the logo, several versions of the logo that are print-ready, and can be sent to any printer or publisher for easy use, detailed color schemes, typography & associated fonts, and design samples of your new logo.</p>

                    <p>Click here to learn more about how we approach our logo projects, and why we believe that we are the top logo & branding agency in the area.</p>
                </div>
            </li>
            <li>
                <h3>What separates Right Creative from other top design agencies in the area?</h3>
                <div class="answer">
                    <p>Experience, quality, and results.</p>
                    <p><strong>Experience.</strong> We have been designing websites professional since the early days of the web - before CSS was mainstream, and people still used tables for their website layouts. In the 20+ years that we have been doing this, we have work with and learned from many of the top voices in several industries. To put it simply - there are very few people in the world, let alone the area that can top our years of experience.</p>

                    <p><strong>Quality</strong> At Right Creative, we hold an almost unrealistic standard for quality. We demand excellence in every project we take on, and firmly believe that the quality of our work demonstrates our commitment to these standards.</p>

                    <p><strong>Results</strong> More than anything else, our focus is, and will always be getting results for clients. We don't care how pretty something is - if it is not resulting in the growth or obtaining of goals for our clients, then it is not time or money well spent. Our mission is to turn visitors into paying customers - and every decision that we make is rooted in that mission.</p>

                    <p><strong>Other distinguishing features</strong> Some of the other things that separate Right Creative from other top-rated agencies are: we hand-code all of our websites for maximum results. We don't rely on Wordpress, plugins, templates or themes to accomplish things, and are therefore not locked in to the limits they pose.</p>
                </div>
            </li>
            <li>
                <h3>We're just starting out. How can we afford your services?</h3>
                <div class="answer">
                    <p>We started this business from scratch, and know full-well how tight money can be when you are first starting out. We empathize with the struggles of new business owners, and therefore work diligently so that the new businesses that we work with succeed.</p>

                    <p>The primary criteria we look for when working with new businesses is the seriousness of the business owner. While it is natural for a new business owner to be cautious with the money they spend - we do look for a commitment to growth. If you do not have a specific plan for how you intend to grow your business, then the reality is - you will probably never be in a good position to afford our services.</p>

                    <p>With that said - if you are growth-minded, then we are happy to help you achieve that growth, and are willing to work with you to come up with a plan that fits within your budget and comfort level. Whether this is a smaller site, financing options, or a payment plan - we are confident that we can figure out something that will be mutually beneficial.</p>

                </div>
            </li>
            <li>
                <h3>What is the difference between a pre-designed site and a custom site?</h3>
                <div class="answer">
                    <p>The difference between pre-designed and custom sites is a lot like the difference between buying a home versus building a home.</p>

                    <p>Pre-designed sites start with a website that has already been designed and coded. These sites will allow you to customize colors, fonts, photos, content, and your logo - but does not allow you to rearrange, reposition, or change the layout of the site. This option is great for newer businesses or businesses with a smaller budget. You not only get the benefit of a hand-coded, customized site, but you also benefit from a smaller price tag and faster turnaround time.</p>

                    <p>Custom sites are built from scratch, exactly to your businesses needs. While custom sites often have a bigger price tag attached to them, they are also going to be more effective at converting your visitors into paying customers.</p>

                </div>
            </li>
            <li>
                <h3>Can I make edits to my own website once it launches?</h3>
                <div class="answer">
                    <p>Yes and no. With each client that we work with, we designate time to figure out what content clients will need to edit on a regular basis, and create tools to allow them to do that easily. For things such as news, articles, blogs, and portfolios, clients will have access to the Content Management System, and add/edit/delete those things as needed.</p>

                    <p>For other areas of the site, we request that our clients trust us to make those edits, so to maintain the integrity of their website.</p>

                    <p>It is very common for clients who have full control over their site to see it deteriorate after a while due to non-designers & non-developers adding content to the site using markup & styling that is not cohesive with the rest of the site. What results is a website filled with pages containing broken-looking content, and improperly formatted text.</p>

                    <p>Because we care about the quality of our sites, the reputations of our clients, and the results that they see - we prefer to let our clients be the experts at what they do - and us to be the experts at what we do.</p>

                </div>
            </li>
        </ul>
    </div>
@stop

@section('js-style')
    <script src="{{asset('js/FAQ/faq.js')}}" type="text/javascript"></script>

@stop
