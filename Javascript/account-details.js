window.onload(showAccountDetails());

function showAccountDetails()
{
    document.getElementById('personal-info-container').style.display = 'unset';
    document.getElementById('personal-info-header').style.display = 'unset';
    document.getElementById('education-container').style.display = 'none';
    document.getElementById('education-header').style.display = 'none';
    document.getElementById('award-container').style.display = 'none';
    document.getElementById('award-header').style.display = 'none';
}

function showEducationDetails()
{
    document.getElementById('personal-info-container').style.display = 'none';
    document.getElementById('personal-info-header').style.display = 'none';
    document.getElementById('education-container').style.display = 'unset';
    document.getElementById('education-header').style.display = 'unset';
    document.getElementById('award-container').style.display = 'none';
    document.getElementById('award-header').style.display = 'none';
}

function showAwardDetails()
{
    document.getElementById('personal-info-container').style.display = 'none';
    document.getElementById('personal-info-header').style.display = 'none';
    document.getElementById('education-container').style.display = 'none';
    document.getElementById('education-header').style.display = 'none';
    document.getElementById('award-container').style.display = 'unset';
    document.getElementById('award-header').style.display = 'unset';
}