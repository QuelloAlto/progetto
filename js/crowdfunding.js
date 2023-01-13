const Milestones = [10000, 50000, 100000, 500000, 750000, 1000000];

function changeImportValue(importo)
{
    document.getElementById("donationInput").value = importo;
}

function updateStepper(value)
{
    var arr = document.getElementsByClassName("stepper-item");
    for(var i = 0; i < arr.length; i++)
    {
        if(Milestones[i] <= value)  //Se la milestone è minore dell'importo donato è raggiunta
        {
            arr[i].classList.add("completed");
        }
    }
}

function elaborateDonation()
{
    jQuery.ajax({
        type: "POST",
        url: "elaborateDonations.php",
        data: {donation: document.getElementById("donationInput").value, anon: document.getElementById("anon").checked},
    });
    alert("Donazione effettuata con successo!");
}

function checkImport(value)
{
    if(value <= 0) return false;
    else return true;
}