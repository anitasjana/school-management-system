var c=2;
function fun(){
    if(c%2==0){
        document.getElementById("leftslide").style.width="5%";
        document.getElementById("leftslideadmin").style.display="none";
        document.getElementById("topslide").style.width="93.1%";
        document.getElementById("bodyslide").style.width="94%";
        document.getElementById("leftslide").style.transition="0.5s";
        document.getElementById("bodyslide").style.transition="0.5s";
        document.getElementById("topslide").style.transition="0.5s";
        c++;
    }
    else{
        document.getElementById("leftslide").style.width="19%";
        document.getElementById("leftslideadmin").style.display="block";
        document.getElementById("topslide").style.width="79.1%";
        document.getElementById("bodyslide").style.width="80%";
    c++ ;
    }
}
