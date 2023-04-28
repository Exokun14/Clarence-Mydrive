window.onload(options(1))

function options(count)
{
    switch(count)
    {
        case 1:
            document.getElementById("section-1-container").style.display = "unset";
            document.getElementById("section-2-container").style.display = "none";
            document.getElementById("section-3-container").style.display = "none";
            document.getElementById("section-4-container").style.display = "none";
            break;
        case 2:
            document.getElementById("section-1-container").style.display = "none";
            document.getElementById("section-2-container").style.display = "unset";
            document.getElementById("section-3-container").style.display = "none";
            document.getElementById("section-4-container").style.display = "none";
            break;
        case 3:
            document.getElementById("section-1-container").style.display = "none";
            document.getElementById("section-2-container").style.display = "none";
            document.getElementById("section-3-container").style.display = "unset";
            document.getElementById("section-4-container").style.display = "none";
            break;
        case 4:
            document.getElementById("section-1-container").style.display = "none";
            document.getElementById("section-2-container").style.display = "none";
            document.getElementById("section-3-container").style.display = "none";
            document.getElementById("section-4-container").style.display = "unset";
            break;
        default:
            break;
    }
}