<footer>
    <div id='footer-subscribe'>
        <div class='container'>
            <h2>How It Works</h2>
            <div class='flex'>
                    <div>
                        <span class='fas fa-home'></span>
                        <h4>Find your perfect wear.</h4>
                        <p><font color='white'>We will try our best to satisfy.</font></p>
                    </div>

                    <div>
                        <span class='fas fa-dollar-sign'></span>
                        <h4>Payment option.</h4>
                        <p><font color='white'>You're free to buy either cash or credit.</font></p>
                    </div>

                    <div>
                        <span class='fas fa-chart-line'></span>
                        <h4>FeedBack.</h4>
                        <p><font color='white'>You're welcome to leave your experience with us.</font></p>
                    </div>
            </div>

            <div class='flex '>
                    <div class='footer-about'>
                        <h3><font color='orange'>About Stated</font> </h3>
                        <p><font color='white'>Since 2010.</font></p>
                    </div>
            
                    <div class='footer-subscribe'> 
                        <h3><font color='orange'>Follow Us</font> </h3>
                        <ul>
                        <li><a href='https://www.facebook.com/search/top?q=shopping%20online'><span class='fab fa-facebook-f'></span></a></li>
                        <!-- <li><a href='#'><span class='fab fa-twitter'></span></a></li> -->
                        <li><a href='https://www.instagram.com/shoppal.eg/'><span class='fab fa-instagram'></span></a></li>
                        <!-- <li><a href='#'><span class='fab fa-linkedin-in'></span></a></li> -->
                        </ul>
                </div> 
            </div>
        </div>    
    </div>
</footer>

<script>
        $(function () {
            let headerElem = $('header');
            let logo = $('#logo');
            let navMenu = $('#nav-menu');
            let navToggle = $('#nav-toggle');
            navToggle.on('click', () => {
   navMenu.css('right', '0');
});
$('#close-flyout').on('click', () => {
    navMenu.css('right', '-100%');
});
$(document).on('click', (e) => {
   let target = $(e.target);
   if (!(target.closest('#nav-toggle').length > 0 || target.closest('#nav-menu').length > 0)) {
       navMenu.css('right', '-100%');
   }
});
        $(document).scroll(() => {
            let scrollTop = $(document).scrollTop();
            if (scrollTop > 0) {
            navMenu.addClass('is-sticky');
            logo.css('color', '#000');
            headerElem.css('background', '#fff');
            navToggle.css('border-color', '#000');
            navToggle.find('.strip').css('background-color', '#000');
            } else {
            navMenu.removeClass('is-sticky');
            logo.css('color', '#fff');
            headerElem.css('background', 'transparent');
            navToggle.css('bordre-color', '#fff');
            navToggle.find('.strip').css('background-color', '#fff');
            }
            headerElem.css(scrollTop >= 200 ? {'padding': '0.5rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
           });
        $(document).trigger('scroll');
            });
</script>

<script>
function openNav() {
document.getElementById('mySidepanel').style.width = '250px';
}


function closeNav() {
document.getElementById('mySidepanel').style.width = '0';
}
</script>

<script>

var dropdown = document.getElementsByClassName('dropdown-btn');
var i;

for (i = 0; i < dropdown.length; i++) {
dropdown[i].addEventListener('click', function() {
this.classList.toggle('active');
var dropdownContent = this.nextElementSibling;
if (dropdownContent.style.display === 'block') {
dropdownContent.style.display = 'none';
} else {
dropdownContent.style.display = 'block';
}
});
}
</script>
    
</html>
