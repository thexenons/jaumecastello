// Activar la primera imagen
$('.homeslider_div .homeslider_img:first-child').addClass('active');
var img_activa = 0;
var img_prev = -1;
var img_next = 1;
var slides = $('.homeslider_img');

// Funcionamiento de los botones de navegación
$('.homeslider_nav_prev').on('click',function(){
    $(slides[img_activa]).removeClass('active');
    $(slides[img_prev]).addClass('active');
    img_activa--;
    img_prev--;
    img_next--;
    if(img_prev<0)
    {
        console.log("img_prev<0")
        img_prev = slides.length-1;
    }
    if(img_activa<0)
    {
        console.log("img_activa<0")
        img_activa = slides.length-1;
    }
    if(img_next<0)
    {
        console.log("img_next<0")
        img_next = slides.length-1;
    }
    console.log("img_prev: "+img_prev);
    console.log("img_activa: "+img_activa);
    console.log("img_next: "+img_next);
    console.log("array size: "+(slides.length-1));
});
$('.homeslider_nav_next').on('click',function(){
    $(slides[img_activa]).removeClass('active');
    $(slides[img_next]).addClass('active');
    img_activa++;
    img_prev++;
    img_next++;
    if(img_prev>slides.length-1)
    {
        console.log("img_prev>slides.length-1")
        img_prev = 0;
    }
    if(img_activa>slides.length-1)
    {
        console.log("img_activa>slides.length-1")
        img_activa = 0;
    }
    if(img_next>slides.length-1)
    {
        console.log("img_next>slides.length-1")
        img_next = 0;
    }
    console.log("img_prev: "+img_prev);
    console.log("img_activa: "+img_activa);
    console.log("img_next: "+img_next);
    console.log("array size: "+(slides.length-1));
});