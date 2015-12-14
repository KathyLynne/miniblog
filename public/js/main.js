/**
 * Created by Kate on 2015-09-23.
 */

 /*****************
 * Yo, Doc Ready  *
 *****************/
$(function(){
  $('textarea').keypress(function(){
    if(this.value.length > 500){
        return false;
    }
    $("#chars").html("You have " +(500 - this.value.length)+ " characters remaining " );
  });
});
