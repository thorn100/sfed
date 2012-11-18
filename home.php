<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <!-- META DATA -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="MSSmartTagsPreventParsing" content="true" />
        <meta http-equiv="imagetoolbar" content="no" />
        <!--[if IE]><meta http-equiv="cleartype" content="on" /><![endif]-->

        <!-- SEO -->
        <title>SFED Code Challenge</title>

        <!-- ICONS -->
        <link rel="shortcut icon" type="image/ico" href="assets/images/favicon.ico" />

        <!-- STYLESHEETS -->
        <link rel="stylesheet" media="screen, projection" href="assets/styles/screen.css" />
        <!--[if IE 9]><link rel="stylesheet" type="text/css" media="screen, projection" href="assets/styles/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" media="screen, projection" href="assets/styles/ie8.css" /><![endif]-->
        <!--[if lte IE 7]><link rel="stylesheet" type="text/css" media="screen, projection" href="assets/styles/ie7.css" /><![endif]-->

        <!-- JQUERY -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="assets/scripts/jquery.min.js"><\/script>')</script>

        <!-- JAVASCRIPT -->
        <script type="text/javascript" src="assets/scripts/global.js"></script>

        <!-- STYLESHEET PRESENTATION -->
        <style type="text/css">
            .grid .grid-row { border: 1px solid #cccccc; }

            .grid .grid-row { background: #FF4C4C; background: rgba(75,74,77,.7); }
            .grid .grid-col:nth-of-type(1n) { background: #19EDED; background: rgba(242,242,242,.9); }
            .grid .grid-col:nth-of-type(2n) { background: #4CC9C9; background: rgba(242,242,242,.5); }

            /*.ribbon { margin-top: 10px; }*/

            /*.btn { margin-bottom: 10px; }*/

            /*.btn + .btn { margin-left: 20px; }*/
        </style>
    </head>

<body>
    <?php include("includes/header.php"); ?>
    
    <div class="wrapper">
        <div class="content section clearfix" role="main">
            <div class="wrapper-inner clearfix">
                <div class="promo-wrap promo-banner">
                    <img src="assets/images/promo-banner.jpg" alt="Experience KitchenAid Quality on the Countertop" />
                </div>

                <div class="grid-row">
                    <div class="grid-col grid-col-12">
                        <div class="media media-nowrap media-feat">
                            <div class="media-elem">
                                <h2 class="hdg hdg-2-feat">Recipes</h2>
                            </div>
                            <div class="media-bd">
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec posuere lacus. Proin ut erat diam. Cras interdum dignissim quam a ullamcorper. Nullam ac sapien sit amet elit congue. Lorem ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-row">
                    <div class="grid-col grid-col-8">
                        <div class="blocks blocks-1up block-feat">
                            <div>
                                <div class="block-img">
                                    <div class="img-wrap">
                                        <img src="assets/images/img-feat.jpg" alt="Christmas Sugar Cookies" />
                                    </div>
                                </div>
                                <div class="block-bd">
                                    <h3 class="hdg hdg-3-feat hdg-sep-feat">
                                        Christmas Sugar Cookies
                                        <span class="comment-count">
                                            <a href="#"><i class="icon icon-comment"></i>9</a>
                                        </span>
                                    </h3>
                                    <p class="block-copy sep-bottom">It's not a Halloween party until somebody screams&#8230; whether with terror or delight is up to the host. Here's a few scarifying soiree suggestions for the adults plus&#8230;<a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a></p>
                                    <span class="article-cat serif">People<i class="icon icon-cat-arrow"></i></span>
                                    <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-col grid-col-4">
                        <div class="grid-row">
                            <div class="grid-col grid-col-12">
                                <div class="promo-wrap promo-feat">
                                    <a href="#"><img src="assets/images/promo-win-trip.jpg" alt="You could win a trip to the Napa Valley Finals" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-newsletter">
                            <div class="panel-hdg"><i class="icon icon-email"></i> Sign up for the Relish Newsletter</div>
                            <form class="form-newsletter">
                                <input class="input-text" type="text" name="email-newsletter" id="email-newsletter" placeholder="Your Email Address" tabindex="2" />
                                <button class="btn">Send It</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="ribbon">
                    <div class="ribbon-wrap">
                        <div class="search-bar clearfix">
                            <div class="hdg-block">
                                <h3 class="hdg hdg-3-alt2 hdg-caps txt-rev">Search Recipies</h3>
                                <a class="link-more-alt txt-rev" href="#">Browse All Recipies<i class="icon icon-more-arrow-rev"></i></a>
                            </div>
                            <form class="form-search-recipies">
                                <input class="input-text" type="text" name="search-recipies" id="search-recipies" placeholder="What are you hungry for?" tabindex="2" />
                                <button class="btn">Search</button>
                            </form>

                            <a class="btn btn-icon" href="#"><i class="icon btn-icon-feed"></i>Feed Me</a>
                            <a class="btn btn-icon" href="#"><i class="icon btn-icon-recipe"></i>My Recipie Box</a>

                            <div class="help">
                                <p class="san-serif-alt tips">Ideas: easy lasagna, baked fries, easy desserts, ribs</p>
                                <p class="login">Please <a href="#">login</a> to use these services.</p>
                            </div>
                        </div>
                    </div>
                </div><!--/.ribbon-->

                <div class="grid-row">
                    <div class="grid-col grid-col-6">
                        <div class="hdg-block">
                            <h2 class="hdg hdg-2 hdg-caps">Most Recent</h2>
                            <a href="#">Browse All Content<i class="icon icon-more-arrow-dk"></i></a>
                        </div>
                        <ol class="blocks blocks-2up">
                            <li>
                                <div class="block-img">
                                    <div class="img-wrap">
                                        <img src="assets/images/img-desserts.jpg" alt="Perfect Desserts" />
                                    </div>
                                </div>
                                <div class="block-bd">
                                    <h3 class="hdg hdg-3 hdg-sep-primary">
                                        Perfect Desserts
                                        <span class="comment-count">
                                            <a href="#"><i class="icon icon-comment"></i>9</a>
                                        </span>
                                    </h3>
                                    <p class="block-copy sep-bottom">Teresa suggests hanging your lantern on the porch, in trees or using as the centerpiece for a festive&#8230;</p>
                                    <span class="article-cat serif">Recipies<i class="icon icon-cat-arrow"></i></span>
                                    <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                                </div>
                            </li>
                            <li>
                                <div class="block-img">
                                    <div class="img-wrap">
                                        <img src="assets/images/img-lobster.jpg" alt="Lobster Tails" />
                                    </div>
                                </div>
                                <div class="block-bd">
                                    <h3 class="hdg hdg-3 hdg-sep-primary">
                                        Lobster Tails
                                        <span class="comment-count">
                                            <a href="#"><i class="icon icon-comment"></i>9</a>
                                        </span>
                                    </h3>
                                    <p class="block-copy sep-bottom">Butternut Squash Filled with Spinach and Ricotta At last – butternut that’s worthy of a company dinner but&#8230;</p>
                                    <span class="article-cat serif">Recipies<i class="icon icon-cat-arrow"></i></span>
                                    <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                                </div>
                            </li>
                            <li>
                                <div class="block-img">
                                    <div class="img-wrap">
                                        <img src="assets/images/img-stew.jpg" alt="Italian Fisherman Stew" />
                                    </div>
                                </div>
                                <div class="block-bd">
                                    <h3 class="hdg hdg-3 hdg-sep-primary">
                                        Italian Fisherman Stew
                                        <span class="comment-count">
                                            <a href="#"><i class="icon icon-comment"></i>9</a>
                                        </span>
                                    </h3>
                                    <p class="block-copy sep-bottom">When we need easy-to-make recipes with a sense of style and flavor, Italian fisherman brought this&#8230;</p>
                                    <span class="article-cat serif">Other Stories<i class="icon icon-cat-arrow"></i></span>
                                    <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                                </div>
                            </li>
                            <li>
                                <div class="block-img">
                                    <div class="img-wrap">
                                        <img src="assets/images/img-cookies.jpg" alt="Christmas Cookies" />
                                    </div>
                                </div>
                                <div class="block-bd">
                                    <h3 class="hdg hdg-3 hdg-sep-primary">
                                        Christmas Cookies
                                        <span class="comment-count">
                                            <a href="#"><i class="icon icon-comment"></i>9</a>
                                        </span>
                                    </h3>
                                    <p class="block-copy sep-bottom">Trays of all sizes and shapes come in handy in the kitchen. I create my own with recycled wooden picture&#8230;</p>
                                    <span class="article-cat serif">Other Stories<i class="icon icon-cat-arrow"></i></span>
                                    <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                                </div>
                            </li>
                        </ol>
                        <div class="media media-nowrap">
                            <div class="media-elem">
                                <div class="img-wrap">
                                    <img src="assets/images/img-shop.jpg" alt="Shop for Health" />
                                </div>
                            </div>
                            <div class="media-bd">
                                <h3 class="hdg hdg-3-alt hdg-recent hdg-sep-primary">Shop for Health</h3>
                                <p class="block-copy sep-bottom">Pushing her grocery cart while scanning the aisles, Karen McCarthy of Dorset, Vt disseminate optimal initiatives through worldwide platforms. Uniquely visualize&#8230;</p>
                                <span class="article-cat serif">Health<i class="icon icon-cat-arrow"></i></span>
                                <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                            </div>
                        </div>
                        <div class="media media-nowrap">
                            <div class="media-elem">
                                <div class="img-wrap">
                                    <img src="assets/images/img-shop.jpg" alt="Shop for Health" />
                                </div>
                            </div>
                            <div class="media-bd">
                                <h3 class="hdg hdg-3-alt hdg-recent hdg-sep-primary">Shop for Health</h3>
                                <p class="block-copy sep-bottom">Pushing her grocery cart while scanning the aisles, Karen McCarthy of Dorset, Vt disseminate optimal initiatives through worldwide platforms. Uniquely visualize&#8230;</p>
                                <span class="article-cat serif">Health<i class="icon icon-cat-arrow"></i></span>
                                <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                            </div>
                        </div>
                        <div class="media media-nowrap">
                            <div class="media-elem">
                                <div class="img-wrap">
                                    <img src="assets/images/img-shop.jpg" alt="Shop for Health" />
                                </div>
                            </div>
                            <div class="media-bd">
                                <h3 class="hdg hdg-3-alt hdg-recent hdg-sep-primary">Shop for Health</h3>
                                <p class="block-copy sep-bottom">Pushing her grocery cart while scanning the aisles, Karen McCarthy of Dorset, Vt disseminate optimal initiatives through worldwide platforms. Uniquely visualize&#8230;</p>
                                <span class="article-cat serif">Health<i class="icon icon-cat-arrow"></i></span>
                                <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                            </div>
                        </div>
                    </div><!--/.grid-col-6-->

                    <div class="grid-col grid-col-6">
                        <h2 class="hdg hdg-2 hdg-caps is-hidden">Categories List</h2>
                        <div class="column-wrap">
                            <div class="column-sep">
                                <div class="list-wrap">
                                    <h3 class="hdg hdg-3-alt2 hdg-caps sep-bottom">Articles By Meals</h3>
                                    <ol class="cat-list">
                                        <li><a href="#">Meal<span class="entry-count">4 Entries</span></a></li>
                                        <li><a href="#">Breakfast<span class="entry-count">6 Entries</span></a></li>
                                        <li><a href="#">Lunch<span class="entry-count">14 Entries</span></a></li>
                                        <li><a href="#">Dinner<span class="entry-count">18 Entries</span></a></li>
                                        <li><a href="#">Snack<span class="entry-count">42 Entries</span></a></li>
                                        <li><a href="#">Dessert<span class="entry-count">20 Entries</span></a></li>
                                    </ol>
                                </div>
                                <div class="list-wrap">
                                    <h3 class="hdg hdg-3-alt2 hdg-caps sep-bottom">Articles By Dish</h3>
                                    <ol class="cat-list">
                                        <li><a href="#">Appetizer<span class="entry-count">4 Entries</span></a></li>
                                        <li><a href="#">Beverage<span class="entry-count">6 Entries</span></a></li>
                                        <li><a href="#">Bread<span class="entry-count">14 Entries</span></a></li>
                                        <li><a href="#">Cake<span class="entry-count">18 Entries</span></a></li>
                                        <li><a href="#">Candy<span class="entry-count">42 Entries</span></a></li>
                                        <li><a href="#">Condiment<span class="entry-count">20 Entries</span></a></li>
                                        <li><a href="#">Cookie/Bar<span class="entry-count">9 Entries</span></a></li>
                                        <li><a href="#">Drink<span class="entry-count">28 Entries</span></a></li>
                                        <li><a href="#">Ice Cream<span class="entry-count">19 Entries</span></a></li>
                                        <li><a href="#">Main Course<span class="entry-count">30 Entries</span></a></li>
                                        <li><a href="#">Marinade<span class="entry-count">3 Entries</span></a></li>
                                        <li><a href="#">Pasta<span class="entry-count">2 Entries</span></a></li>
                                        <li><a href="#">Rice<span class="entry-count">3 Entries</span></a></li>
                                        <li><a href="#">Pie/Tart<span class="entry-count">7 Entries</span></a></li>
                                        <li><a href="#">Pudding<span class="entry-count">14 Entries</span></a></li>
                                        <li><a href="#">Salad<span class="entry-count">18 Entries</span></a></li>
                                        <li><a href="#">Sandwich<span class="entry-count">42 Entries</span></a></li>
                                        <li><a href="#">Sauce<span class="entry-count">28 Entries</span></a></li>
                                        <li><a href="#">Seasoning/Spice<span class="entry-count">19 Entries</span></a></li>
                                        <li><a href="#">Side Dish<span class="entry-count">9 Entries</span></a></li>
                                        <li><a href="#">Soup<span class="entry-count">48 Entries</span></a></li>
                                    </ol>
                                </div>
                                <div class="list-wrap">
                                    <h3 class="hdg hdg-3-alt2 hdg-caps sep-bottom">Articles By Ingredient</h3>
                                    <ol class="cat-list">
                                        <li><a href="#">Beef<span class="entry-count">4 Entries</span></a></li>
                                        <li><a href="#">Cheese<span class="entry-count">6 Entries</span></a></li>
                                        <li><a href="#">Dairy<span class="entry-count">14 Entries</span></a></li>
                                        <li><a href="#">Chocolate<span class="entry-count">18 Entries</span></a></li>
                                        <li><a href="#">Fish<span class="entry-count">42 Entries</span></a></li>
                                        <li><a href="#">Fruit<span class="entry-count">20 Entries</span></a></li>
                                        <li><a href="#">Grain<span class="entry-count">9 Entries</span></a></li>
                                        <li><a href="#">Lamb<span class="entry-count">28 Entries</span></a></li>
                                        <li><a href="#">Pasta/Rice<span class="entry-count">19 Entries</span></a></li>
                                        <li><a href="#">Pork<span class="entry-count">30 Entries</span></a></li>
                                        <li><a href="#">Poultry<span class="entry-count">3 Entries</span></a></li>
                                        <li><a href="#">Seafood<span class="entry-count">2 Entries</span></a></li>
                                        <li><a href="#">Vegetable<span class="entry-count">3 Entries</span></a></li>
                                    </ol>
                                </div>
                            </div> 
                            <div class="column-sep">
                                <div class="list-wrap">
                                    <h3 class="hdg hdg-3-alt2 hdg-caps sep-bottom">Articles By Occasion</h3>
                                    <ol class="cat-list">
                                        <li><a href="#">Barbecue<span class="entry-count">4 Entries</span></a></li>
                                        <li><a href="#">Christmas<span class="entry-count">6 Entries</span></a></li>
                                        <li><a href="#">Cocktail Party<span class="entry-count">14 Entries</span></a></li>
                                        <li><a href="#">Easter<span class="entry-count">18 Entries</span></a></li>
                                        <li><a href="#">Fourth of July<span class="entry-count">42 Entries</span></a></li>
                                        <li><a href="#">Halloween<span class="entry-count">20 Entries</span></a></li>
                                        <li><a href="#">Hanukkah<span class="entry-count">9 Entries</span></a></li>
                                        <li><a href="#">Holiday<span class="entry-count">28 Entries</span></a></li>
                                        <li><a href="#">New Year's<span class="entry-count">19 Entries</span></a></li>
                                        <li><a href="#">Passover<span class="entry-count">30 Entries</span></a></li>
                                        <li><a href="#">Picnic<span class="entry-count">21 Entries</span></a></li>
                                        <li><a href="#">St.Patrick's Day<span class="entry-count">10 Entries</span></a></li>
                                        <li><a href="#">Super Bowl<span class="entry-count">83 Entries</span></a></li>
                                        <li><a href="#">Thanksgiving<span class="entry-count">19 Entries</span></a></li>
                                        <li><a href="#">Valentine's Day<span class="entry-count">8 Entries</span></a></li>
                                        <li><a href="#">Tailgating<span class="entry-count">4 Entries</span></a></li>
                                    </ol>
                                </div>
                                <div class="list-wrap">
                                    <h3 class="hdg hdg-3-alt2 hdg-caps sep-bottom">Articles By Seasonal</h3>
                                    <ol class="cat-list">
                                        <li><a href="#">Spring<span class="entry-count">4 Entries</span></a></li>
                                        <li><a href="#">Summer<span class="entry-count">6 Entries</span></a></li>
                                        <li><a href="#">Fall<span class="entry-count">14 Entries</span></a></li>
                                        <li><a href="#">Winter<span class="entry-count">18 Entries</span></a></li>
                                    </ol>
                                </div>
                                <div class="list-wrap">
                                    <h3 class="hdg hdg-3-alt2 hdg-caps sep-bottom">Articles By Misc</h3>
                                    <ol class="cat-list">
                                        <li><a href="#">Freezable<span class="entry-count">4 Entries</span></a></li>
                                        <li><a href="#">Gifts<span class="entry-count">6 Entries</span></a></li>
                                        <li><a href="#">Healthy<span class="entry-count">14 Entries</span></a></li>
                                        <li><a href="#">Kid-friendly<span class="entry-count">18 Entries</span></a></li>
                                        <li><a href="#">Make-ahead<span class="entry-count">42 Entries</span></a></li>
                                        <li><a href="#">No-cook<span class="entry-count">20 Entries</span></a></li>
                                        <li><a href="#">Quick & Easy<span class="entry-count">9 Entries</span></a></li>
                                        <li><a href="#">Classic/Traditional<span class="entry-count">28 Entries</span></a></li>
                                        <li><a href="#">One-dish<span class="entry-count">19 Entries</span></a></li>
                                        <li><a href="#">Slow-cooker<span class="entry-count">30 Entries</span></a></li>
                                        <li><a href="#">Rustic<span class="entry-count">21 Entries</span></a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div><!--/.grid-col-6-->
                </div>

                <div class="grid-row">
                    <div class="grid-col grid-col-8">
                        <div class="hdg-block hdg-block-secondary">
                            <h2 class="hdg hdg-2 hdg-caps">Relish Community</h2>
                            <a href="#">Browse All Community Offerings<i class="icon icon-more-arrow-dk"></i></a>
                        </div>

                        <div class="grid-col grid-col-7">
                            <div class="blocks blocks-1up">
                                <div>
                                    <div class="block-bd">
                                        <h3 class="hdg hdg-3-alt3"><i class="icon icon-community"></i>Welcome to the Community</h3>
                                        <p>Whether it’s your grandmother’s cookie recipe or the mac and cheese you baked for the office potluck, when you prepare food and share it with others, you’re saying something special. So welcome to Relish. Join the conversation.</p>
                                    </div>
                                    <div class="block-img">
                                        <div class="promo-wrap">
                                            <img src="assets/images/promo-supper-club.png" alt="Supper Club - Join the discussion around the table." />
                                            <img src="assets/images/promo-bake-forward.png" alt="Bake it forward. - Random acts of everyday deliciousness." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-col grid-col-5">
                            <div class="column-sep">
                                <h3 class="hdg hdg-3-alt3"><i class="icon icon-poll"></i>Community Poll</h3>
                                <p>How ofter do you cook at home?</p>
                                <form class="poll">
                                    <ol class="poll-list">
                                        <li>
                                            <input type="radio" name="community-poll" id="poll-choice-1" tabindex="1" value="1-2 Times a week" />
                                            <label for="poll-choice-1">1-2 Times a week</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="community-poll" id="poll-choice-2" tabindex="2" value="2-4 Times a week" />
                                            <label for="poll-choice-2">2-4 Times a week</label>
                                        </li>   
                                        <li>
                                            <input type="radio" name="community-poll" id="poll-choice-3" tabindex="3" value="4-6 Times a week" />
                                            <label for="poll-choice-3">4-6 Times a week</label>
                                        </li>   
                                        <li>
                                            <input type="radio" name="community-poll" id="poll-choice-4" tabindex="4" value="6-8 Times a week" />
                                            <label for="poll-choice-4">6-8 Times a week</label>
                                        </li>   
                                        <li>
                                            <input type="radio" name="community-poll" id="poll-choice-5" tabindex="5" value="8-10 Times a week" />
                                            <label for="poll-choice-5">8-10 Times a week</label>
                                        </li>   
                                        <li>
                                            <input type="radio" name="community-poll" id="poll-choice-6" tabindex="6" value="10+ Times a week" />
                                            <label for="poll-choice-6">10+ Times a week</label>
                                        </li>   
                                    </ol>
                                    <button class="btn btn-submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grid-col grid-col-4 grid-col-last">
                        <div class="hdg-block hdg-block-secondary">
                            <h2 class="hdg hdg-2 hdg-caps">Store</h2>
                        </div>
                        <div class="media media-nowrap">
                            <div class="media-elem">
                                <div class="img-wrap">
                                    <img src="assets/images/img-get-togethers.jpg" alt="Get-Togethers" />
                                </div>
                            </div>
                            <div class="media-bd">
                                <h3 class="hdg hdg-3-alt3 hdg-recent hdg-sep-secondary">Get-Togethers</h3>
                                <p class="block-copy sep-bottom">American Profile focuses on what makes the hometowns of America great: a sense &#8230;</p>
                                <span class="article-cat serif">$39.99</span>
                                <a class="link-more" href="#">More Details<i class="icon icon-more-arrow"></i></a>
                            </div>
                        </div>
                        <div class="media media-nowrap">
                            <div class="media-elem">
                                <div class="img-wrap">
                                    <img src="assets/images/img-cookbooks.jpg" alt="Free Cookbooks" />
                                </div>
                            </div>
                            <div class="media-bd">
                                <h3 class="hdg hdg-3-alt3 hdg-recent hdg-sep-secondary">Shop for Health</h3>
                                <p class="block-copy sep-bottom">Enjoy Simply Stunning Holiday Desserts, Philly Tast of Heaven and Best Holiday Cookies&#8230;</p>
                                <span class="article-cat serif">Free</span>
                                <a class="link-more" href="#">More Details<i class="icon icon-more-arrow"></i></a>
                            </div>
                        </div>
                    </div><!--/.grid-col-4-->
                </div><!--/.grid-row-->

                <div class="grid-row">
                    <div class="grid-col grid-col-4">
                        <div class="hdg-block hdg-block-tertiary">
                            <h2 class="hdg hdg-2 hdg-caps">Health</h2>
                        </div>
                        <div class="media media-nowrap">
                            <div class="media-elem">
                                <div class="img-wrap">
                                    <img src="assets/images/img-shop.jpg" alt="Shop for Health" />
                                </div>
                            </div>
                            <div class="media-bd">
                                <h3 class="hdg hdg-3-alt3 hdg-recent hdg-sep-tertiary">Shop for Health</h3>
                                <p class="block-copy sep-bottom">Pushing her grocery cart while scanning the aisles, Karen McCarthy of Dorset, Vt&#8230;</p>
                                <span class="article-cat serif">Recipies<i class="icon icon-cat-arrow"></i></span>
                                <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                            </div>
                        </div>
                        <div class="media media-nowrap">
                            <div class="media-elem">
                                <div class="img-wrap">
                                    <img src="assets/images/img-bone-health.jpg" alt="Bone Health" />
                                </div>
                            </div>
                            <div class="media-bd">
                                <h3 class="hdg hdg-3-alt3 hdg-recent hdg-sep-tertiary">Bone Health</h3>
                                <p class="block-copy sep-bottom">With its sprightly, fresh taste, this salsa is perfect with chips or salsa is perfect with chips or&#8230;</p>
                                <span class="article-cat serif">Health<i class="icon icon-cat-arrow"></i></span>
                                <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="grid-col grid-col-4">
                        <div class="hdg-block hdg-block-tertiary">
                            <h2 class="hdg hdg-2 hdg-caps">Heroes</h2>
                        </div>
                        <div class="media media-nowrap">
                            <div class="media-elem">
                                <div class="img-wrap">
                                    <img src="assets/images/img-jamie-oliver.jpg" alt="Jamie Oliver" />
                                </div>
                            </div>
                            <div class="media-bd">
                                <h3 class="hdg hdg-3-alt3 hdg-recent hdg-sep-tertiary">Jamie Oliver</h3>
                                <p class="block-copy sep-bottom">When Jamie Oliver encourages kids to get in the kitchen and start connecting the dots&#8230;</p>
                                <span class="article-cat serif">Heroes<i class="icon icon-cat-arrow"></i></span>
                                <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                            </div>
                        </div>
                        <div class="media media-nowrap">
                            <div class="media-elem">
                                <div class="img-wrap">
                                    <img src="assets/images/img-chef-2.jpg" alt="Chef Name Two" />
                                </div>
                            </div>
                            <div class="media-bd">
                                <h3 class="hdg hdg-3-alt3 hdg-recent hdg-sep-tertiary">Shop for Health</h3>
                                <p class="block-copy sep-bottom">With its sprightly, fresh taste, this salsa is perfect with chips or salsa is perfect with chips or&#8230;</p>
                                <span class="article-cat serif">Heroes<i class="icon icon-cat-arrow"></i></span>
                                <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="grid-col grid-col-4 grid-col-last">
                        <div class="hdg-block hdg-block-tertiary">
                            <h2 class="hdg hdg-2 hdg-caps">Partners</h2>
                        </div>
                        <div class="media media-nowrap">
                            <div class="media-elem">
                                <div class="img-wrap">
                                    <img src="assets/images/img-salsa.jpg" alt="Shop for Health" />
                                </div>
                            </div>
                            <div class="media-bd">
                                <h3 class="hdg hdg-3-alt3 hdg-recent hdg-sep-tertiary">Shop for Health</h3>
                                <p class="block-copy sep-bottom">Pushing her grocery cart while scanning the aisles, Karen McCarthy of Dorset, Vt&#8230;</p>
                                <span class="article-cat serif">Partners<i class="icon icon-cat-arrow"></i></span>
                                <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                            </div>
                        </div>
                        <div class="media media-nowrap">
                            <div class="media-elem">
                                <div class="img-wrap">
                                    <img src="assets/images/img-bone-health.jpg" alt="Bone Health" />
                                </div>
                            </div>
                            <div class="media-bd">
                                <h3 class="hdg hdg-3-alt3 hdg-recent hdg-sep-tertiary">Bone Health</h3>
                                <p class="block-copy sep-bottom">With its sprightly, fresh taste, this salsa is perfect with chips or salsa is perfect with chips or&#8230;</p>
                                <span class="article-cat serif">Partners<i class="icon icon-cat-arrow"></i></span>
                                <a class="link-more" href="#">Read More<i class="icon icon-more-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.wrapper-inner-->
        </div><!--/.content-->
    </div><!--/.wrapper-->

    <?php include("includes/footer.php"); ?>
</body>
</html>