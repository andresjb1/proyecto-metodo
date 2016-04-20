/**
 * Created by Emanuel on 05/03/2016.
 */
$(document).ready(main);

var contador = 1;

function main(){
    $('.menu_bar').click(function(){
        //$('nav').toggle(); /*aparece o desaparece el nav*/
        if(contador == 1){
            $('.nav-1').animate({
                left: '0px',
                position: 'static'
            });
            contador = 0;
        }else {
            contador = 1;
            $('.nav-1').animate({
                left: '-100%',
                position: 'fixed'
            });
        }
    });
};