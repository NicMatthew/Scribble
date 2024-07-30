<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frequently Ask Question | Scribble</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="\css\variable.css">
    <link rel="stylesheet" href="\css\faq.css">
</head>
<body>
    @include('\components\navbar-logo')
    <div class="container-faq">
        <div class="sidebar">
            <div class="sidebar-top">
                <a href="#purchase" class="b2" style="text-decoration: none">Purchase</a>
                <a href="#delivery" class="b2" style="text-decoration: none">Delivery</a>
                <a href="#myaccount" class="b2" style="text-decoration: none">My Account</a>
                <a href="#wishlist" class="b2" style="text-decoration: none">Wishlist</a>
                <a href="#others" class="b2" style="text-decoration: none">Others</a>
            </div>
            <div class="sidebar-bottom">
                <a href="/" class="b2" style="text-decoration: none">Back to home</a>
            </div>
        </div>

        <div class="content-faq">
            <div class="title-faq">
                <p>Frequently Asked Question</p>
            </div>
            <div class="faq-question-subheader" id="purchase">
                <p>Purchase</p>
                <div class="faq-questions" onclick="clickQuestion(0)">
                    <p>How do I make a purchase on Scribble?</p>
                    <img src="\icons\chevron-down-blue.svg" alt="">
                </div>
                <div class="faq-answers"">
                    <p>You can make a purchase by adding products to your shopping cart and following the steps on the checkout page to complete your payment.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(1)">
                    <p>Can I cancel my order after it's been placed?</p>
                    <img src="\icons\chevron-down-blue.svg" alt="">
                </div>
                <div class="faq-answers"">
                    <p>Yes, you can cancel your order when the status is still packaged or paid, provided it has not been shipped yet. Please contact us for assistance or.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(2)">
                    <p>How can I apply a discount code to my purchase?</p>
                    <img src="\icons\chevron-down-blue.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>You can enter your discount code during the checkout process in the designated field. The discount will be applied to your total amount or shipping fee.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(3)">
                <p>You are sold out online, do you still have it available?</p>
                    <img src="\icons\chevron-down-blue.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>No, it is not available. Customer should wait for the product to be restocked.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(4)">
                    <p>What should I do if I encounter an issue with my payment?</p>
                    <img src="\icons\chevron-down-blue.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>If you encounter any issues with your payment, please contact our customer service team immediately for assistance.<p>
                </div>

            </div>
            <div class="faq-question-subheader" id="delivery">
                <p>Delivery</p>
                <div class="faq-questions" onclick="clickQuestion(5)">
                    <p>How long does delivery take?</p>
                    <img src="\icons\chevron-down-green.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>Delivery times vary depending on your location. Typically, it takes 3-5 business days for domestic orders and 7-14 business days for international orders.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(6)">
                    <p>What should I do if my order hasn't arrived yet?</p>
                    <img src="\icons\chevron-down-green.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>If your order hasn't arrived within the expected delivery time, please contact our customer service team for assistance.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(7)">
                    <p>Can I schedule a delivery time?</p>
                    <img src="\icons\chevron-down-green.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>Currently, we do not offer scheduled delivery times. However, you can track your order and get an estimated delivery date.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(8)">
                    <p>Do you ship internationally?</p>
                    <img src="\icons\chevron-down-green.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>No, we currently are only available in Indonesia.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(9)">
                    <p>What should I do if my order is marked as delivered but I haven't received it?</p>
                    <img src="\icons\chevron-down-green.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>If your order is marked as delivered but you haven't received it, please check with your neighbors or contact the carrier. If you still can't locate your order, contact our customer service team for assistance    .</p>
                </div>

            </div>
            <div class="faq-question-subheader" id="myaccount">
                <p>My Account</p>
                <div class="faq-questions" onclick="clickQuestion(10)">
                    <p>How do I create an account on Scribble?</p>
                    <img src="\icons\chevron-down-yellow.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>You can create an account by clicking on the "Sign Up" button on our homepage and filling out the required information.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(11)">
                    <p>How can I update my account information?</p>
                    <img src="\icons\chevron-down-yellow.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>You can update your account information by logging into your account and navigating to the "Profile" and then "Edit Profile" section.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(12)">
                    <p>Is my personal information secure on Scribble?</p>
                    <img src="\icons\chevron-down-yellow.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>Yes, we take your privacy and security seriously. We use advanced encryption and security measures to protect your personal information.
                    </p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(13)">
                    <p>How can I delete my account?</p>
                    <img src="\icons\chevron-down-yellow.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>If you wish to delete your account, please contact our customer service team for assistance.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(14)">
                    <p>How do I change my email address?</p>
                    <img src="\icons\chevron-down-yellow.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>You can change your email address by logging into your account and updating your email information, navigate to the "Profile" button and then "Edit Profile" section.   </p>
                </div>

            </div>
            <div class="faq-question-subheader" id="wishlist">
                <p>Wishlist</p>
                <div class="faq-questions" onclick="clickQuestion(15)">
                    <p>How do I add items to my wishlist??</p>
                    <img src="\icons\chevron-down-pink.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>You can add items to your wishlist by clicking the "Heart" button on the product page</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(16)">
                    <p>How do I view my wishlist?</p>
                    <img src="\icons\chevron-down-pink.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>You can view your wishlist by logging into your account and navigating to the "Profile" button an then to the "Wishlist" section.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(17)">
                    <p>Can I move items from my wishlist to my cart?</p>
                    <img src="\icons\chevron-down-pink.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>Yes, you can easily move items from your wishlist to your cart by clicking the product and then click the "Add to Cart" button.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(18)">
                    <p>Will items in my wishlist be reserved for me?</p>
                    <img src="\icons\chevron-down-pink.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>No, adding items to your wishlist does not reserve them. We recommend moving items to your cart and completing the purchase to ensure availability.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(19)">
                    <p>How can I remove items from my wishlist?</p>
                    <img src="\icons\chevron-down-pink.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>You can remove items from your wishlist by clicking the 'Remove' button next to the item in your wishlist section.</p>
                </div>

            </div>
            <div class="faq-question-subheader" id="others">
                <p>Others</p>
                <div class="faq-questions" onclick="clickQuestion(20)">
                    <p>How do I contact Scribble customer service?</p>
                    <img src="\icons\chevron-down-blue.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>You can contact our customer service team via email at scribble@gmail.com</p>          </div>

                <div class="faq-questions" onclick="clickQuestion(21)">
                    <p>Where can I find information about promotions and discounts?</p>
                    <img src="\icons\chevron-down-blue.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>Information about promotions and discounts can be found on our homepage.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(22)">
                    <p>Can I change the language on the Scribble website?</p>
                    <img src="\icons\chevron-down-blue.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>No, you can't change the language. Our website is only available in English.</p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(23)">
                    <p>What should I do if I encounter technical issues on the website?</p>
                    <img src="\icons\chevron-down-blue.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>If you encounter technical issues on our website, please clear your browser cache and try again. If the problem persists, contact our customer service team for assistance.  </p>
                </div>

                <div class="faq-questions" onclick="clickQuestion(24)">
                    <p>How do I find product reviews?</p>
                    <img src="\icons\chevron-down-blue.svg" alt="">
                </div>
                <div class="faq-answers">
                    <p>Product reviews can be found on the product detail pages. Scroll down to the 'Reviews' section to read what other customers have to say..</p>
                </div>

            </div>

        </div>
    </div>
<script src="/js/faq.js"></script>
</body>
</html>
