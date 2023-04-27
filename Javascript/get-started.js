window.onload(showImageCarousel(1));

function showImageCarousel(count)
{
    switch(count)
    {
        case 1:
            document.getElementById("banner-content-1").style.display = "unset";
            document.getElementById("banner-content-2").style.display = "none";
            document.getElementById("banner-content-3").style.display = "none";
            break;
        case 2:
            document.getElementById("banner-content-1").style.display = "none";
            document.getElementById("banner-content-2").style.display = "unset";
            document.getElementById("banner-content-3").style.display = "none";
            break;
        case 3:
            document.getElementById("banner-content-1").style.display = "none";
            document.getElementById("banner-content-2").style.display = "none";
            document.getElementById("banner-content-3").style.display = "unset";
            break;
        default:
            break;
    }

}