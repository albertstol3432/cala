<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="carousel">
                <span class="carousel-left">&ll;</span>
                <span class="carousel-right">&gg;</span>
                <?= $this->Html->image('jeremy-bishop-151467.jpg', array('class' => 'mySlides', 'style' => 'width:100%')) ?>
                <?= $this->Html->image('slider/2.jpg', array('class' => 'mySlides', 'style' => 'width:100%')) ?>
                <?= $this->Html->image('slider/3.jpg', array('class' => 'mySlides', 'style' => 'width:100%')) ?>
                <?= $this->Html->image('slider/4.jpg', array('class' => 'mySlides', 'style' => 'width:100%')) ?>
                <?= $this->Html->image('slider/5.jpg', array('class' => 'mySlides', 'style' => 'width:100%')) ?>
                <ol class="carousel-indicators">
                    <li class="demo" onclick="currentDiv(1)" style="cursor:pointer;"></li>
                    <li class="demo" onclick="currentDiv(2)" style="cursor:pointer;"></li>
                    <li class="demo" onclick="currentDiv(3)" style="cursor:pointer;"></li>
                    <li class="demo" onclick="currentDiv(4)" style="cursor:pointer;"></li>
                    <li class="demo" onclick="currentDiv(5)" style="cursor:pointer;"></li>
                </ol>
            </div>
<!--                <div class="section testimonials">
                    <div class="section-header">
                        <h2 class="pull-left">Co mówią nasi klienci</h2>
                        <a class="pull-right">zobacz więcej opini...</a>
                    </div>
                    <blockquote>
                        <p><?= $displayLastOpinion['Opinion']['content']; ?></p>
                        <cite class="pull-right"><?= $displayLastOpinion['Opinion']['nickname'];?></cite>
                    </blockquote>
                </div>-->
            <div class="section-main">
                <div class="section-header"> 
                <h2>Oferujemy</h2>  
                </div>   
                <div class="section-content mp-thumbnails">
                    <div class="mp-thumbnail">
                        <h3>Pizze</h3>
                        <?= $this->Html->image('pizza.jpg') ?>
                    </div>
                    <div class="mp-thumbnail">
                        <h3>Pasty</h3>
                        <?= $this->Html->image('pasta.jpg') ?>
                    </div>
                    <div class="mp-thumbnail">
                        <h3>Sałatki</h3>
                        <?= $this->Html->image('dennis-klein-123631.jpg') ?>
                    </div>
                </div>
                <div class="redirect-opinion">
                    <a href="#" class="section-btn">Przejdź do menu</a>  
                </div>
            </div>   
            <div class="section-main">
                <div class="section-header"> 
                <h2>opinie o nas</h2>  
                </div>   
                <div class="section-content">
                    <span class="nickname"><?= $displayLastOpinion['Opinion']['nickname'];?></span>
                    <time class="post-date pull-right"><?= $displayLastOpinion['Opinion']['modified'];?></time>
                    <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="redirect-opinion">
                    <a href="#" class="section-btn">Zobacz Wszystkie Opinie</a>  
                </div>
            </div>   
            <div class="section-main">
                <div class="section-header"> 
                <h2>Jak do nas trafić</h2>  
                </div>   
                <div class="section-content">
                    <?= $this->Html->link($this->Html->image('staticmap.png'), '#', array('escape' => false))?>
                </div>
                <div class="redirect-opinion">
                    <a href="#" class="section-btn">Kontakt</a>  
                </div>
            </div>   
            <div class="section-main">
                <div class="section-header"> 
                <h2>Zdjęcia</h2>  
                </div>   
                <div class="section-content mp-thumbnails">
                    <div class="mp-thumbnail">
                        <?= $this->Html->image('joanna-boj-17158.jpg') ?>
                        <?= $this->Html->image('alex-jones-1246.jpg') ?>
                        <?= $this->Html->image('Alley-Street-with-Overhanging-Plants.jpg') ?>
                        <?= $this->Html->image('baehaki-hariri-364652.jpg') ?>
                        <?= $this->Html->image('clem-onojeghuo-175917.jpg') ?>
                        <?= $this->Html->image('darren-coleshill-178479.jpg') ?>
                    </div>
                </div>
                <div class="redirect-opinion">
                    <a href="#" class="section-btn">Galeria</a>  
                </div>
            </div>   
<!--            <div class="section curly">
                <div class="row">
                    <div class="box-column col-md-4">
                        <h3>NOWY SPOSÓB ZAMAWIANIA!</h3><br>
                        <?= $this->Html->image('pizza3.jpg') ?>
                        <p>Teraz możecie Państwo zamówić telefonicznie i przez Internet. Jesteśmy pionierami w Polsce... zapraszamy!</p>
                    </div>
                    <div class="box-column col-md-4">
                        <h3>30-45 MINUT I JESTEŚMY!<br>
                            ...z gorącym posiłkiem</h3>
                        <?= $this->Html->image('delivery.jpg') ?>
                        <p>Masz ochotę na coś dobrego i chcesz zjeść u siebie? Zamów ulubione potrawy telefonicznie lub online</p>
                    </div>
                    <div class="box-column col-md-4">
                        <h3>BRAK GOTÓWKI?<br>
                            ...to żaden kłopot</h3>
                        <?= $this->Html->image('section-reservation.png') ?>
                        <p>Możesz zamówić online i zapłacić kartą lub szybkim przelewem. Poczuj komfort zamawiania przez Internet!</p>
                    </div>
                </div>
            </div>-->
<!--            <div class="section">
                <div class="section-header">
                    <h2 class="pull-left">Nasze promocje:</h2>
                    <a class="pull-right">zobacz wszystkie promocje...</a>
                </div>
                <div class="box white">
                    <?= $this->Html->image('salatka1.jpg', array('class' => 'pull-left')) ?>
                    <div class="promotion-content clearfix">
                        <div class="float-left">
                            <h3>Rabat 5,00 zł !</h3>
                            <p style="width:800px;">Do pierwszego zamówienia</p>
                            <p>Promocja obowiązuje w: <strong>Tylko dostawa</strong></p>
                        </div>
                    </div>
                    <div class="btn">
                        <a class="pull-right button">Zobacz promocje</a>
                    </div>
                </div>
            </div>-->
        </div>   
    </div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
            $(x[i]).hide();
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
        $(x[slideIndex-1]).show();
    }

    dots[slideIndex-1].className += " w3-white";
}
</script>
