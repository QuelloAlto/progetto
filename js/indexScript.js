
window.onresize = function(){
    var button = document.getElementById("buttonJoin");
    var earthMaps = document.getElementById("earthMaps");
    var moonMaps = document.getElementById("moonMaps");
    var marsMaps = document.getElementById("marsMaps");
    var footer = document.getElementById("footer");
    switch(getElementOnTop())
    {
        case earthMaps:
            button.style.top = earthMaps.offsetTop + earthMaps.offsetHeight + 20 + "px";
            break;
        case moonMaps:
            button.style.top = moonMaps.offsetTop + moonMaps.offsetHeight + 20 + "px";
            break;
        case marsMaps:
            button.style.top = marsMaps.offsetTop + marsMaps.offsetHeight + 20 + "px";
            break;
    }
}

function planetClick(planet){
    var earthText = document.getElementById("earthText");
    var earthMaps = document.getElementById("earthMaps");
    var moonText = document.getElementById("moonText");
    var moonMaps = document.getElementById("moonMaps");
    var button = document.getElementById("buttonJoin");
    var marsText = document.getElementById("marsText");
    var marsMaps = document.getElementById("marsMaps");
    if(planet == "earth")
    {
        switch(getElementOnTop())
        {
            case earthText:
                return;
            case marsText:
                fade(marsText,"out",1);
                fade(marsMaps,"out",1);
                break;
            case moonText:
                fade(moonText,"out",1);
                fade(moonMaps,"out",1);
                break;
        }
        fade(earthText,"in",2);
        fade(earthMaps,"in",2);
        button.style.top = earthMaps.offsetTop + earthMaps.offsetHeight + 20 + "px";
    }
    else if(planet == "moon")
    {
        switch(getElementOnTop())
        {
            case moonText:
                return;
            case marsText:
                fade(marsText,"out",1);
                fade(marsMaps,"out",1);
                break;
            case earthText:
                fade(earthText,"out",1);
                fade(earthMaps,"out",1);
                break;
        }
        fade(moonText,"in",2);
        fade(moonMaps,"in",2);
        button.style.top = moonMaps.offsetTop + moonMaps.offsetHeight + 20 + "px";
    }
    else if(planet == "mars")
    {
        switch(getElementOnTop())
        {
            case marsText:
                return;
            case moonText:
                fade(moonText,"out",1);
                fade(moonMaps,"out",1);
                break;
            case earthText:
                fade(earthText,"out",1);
                fade(earthMaps,"out",1);
                break;
        }
        fade(marsText,"in",2);
        fade(marsMaps,"in",2);
        button.style.top = marsMaps.offsetTop + marsMaps.offsetHeight + 20 + "px";
    }
}

function fade(element,io,t)
{
    switch(io)
    {
        case "in":
            element.style.opacity = 1;
            break;
        case "out":
            element.style.opacity = 0;
            break;
    }
    element.style.transition = "opacity " + t + "s";
}

function getElementOnTop()
{
    var earthText = document.getElementById("earthText");
    var marsText = document.getElementById("marsText");
    var moonText = document.getElementById("moonText");
    if(earthText.style.opacity == 1) return earthText;
    else if(marsText.style.opacity == 1) return marsText;
    else if(moonText.style.opacity == 1) return moonText;
}