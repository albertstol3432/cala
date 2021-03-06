
<div id="header">
    <div class="header-wrapper">
            <div class="logo-container"><?php echo $this->Html->link($this->Html->image('logo121.png', array('class' => 'logo')), 
                            array('controller' => 'pages', 'action' => 'home'), array('escape' => false)); ?>
            </div>   
        <div class="navigation">
            <ul>
                <li><?php echo $this->Html->link('STRONA GŁÓWNA', array('controller' => 'pages', 'action' => 'home'),array('class' => 'elements', 'onclick' => "markElement(event)")); ?></li>
                <li list_el_numb="second"><?php echo $this->Html->link('MENU', array('controller' => 'mains', 'action' => 'menu'),array('class' => 'elements', 'onclick' => "markElement(event)")); ?></li>
                <li><?php echo $this->Html->link('OPINIE', array('controller' => 'opinions', 'action' => 'opinions'),array('class' => 'elements', 'onclick' => "markElement(event)")); ?></li>
                <li><?php echo $this->Html->link('KONTAKT', array('controller' => 'mains', 'action' => 'contact'),array('class' => 'elements', 'onclick' => "markElement(event)")); ?></li>
                <li><?php echo $this->Html->link('GALERIA', array('controller' => 'mains', 'action' => 'gallery'),array('class' => 'elements', 'onclick' => "markElement(event)")); ?></li>
            </ul>
        </div>
    </div>
</div>  

<div class="toTop"><i class="fa fa-angle-up fa-5x" aria-hidden="true"></i></div>

<script>
function markElement(evt) {
    var i, elements;
    elements = document.getElementsByClassName("elements");
    for (i = 0; i < elements.length; i++) {
        elements[i].className = elements[i].className.replace(" active", "");
    }
    evt.currentTarget.className += " active";
}

function markElementOnLoad(){
    var ii, el, pathname;
    el = document.getElementsByClassName("elements");
    pathname = window.location.pathname;
    for (ii = 0; ii < el.length; ii++) {
        var umpteenth_el = el[ii].getAttribute("href");
        if (pathname === umpteenth_el) {
            el[ii].className += " active";
            break;
        }
    }
}

window.onload = markElementOnLoad();

var toTop = $('.toTop');
$(window).scroll(function(){
    var bodyScroll = $(window).scrollTop();
    if (bodyScroll > 20) {
        toTop.css('opacity', '1');
    }
    else {
        toTop.css('opacity', '0');
    }
});

toTop.click(function(){
    $('html, body').animate({
        scrollTop : 0
    }, 1500);
});
</script>