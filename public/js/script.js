function opc1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

function opc2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}


function opc3() {
    document.getElementById("myDropdown3").classList.toggle("show");
}

function opc4() {
    document.getElementById("myDropdown4").classList.toggle("show");
}


// Close the dropdown menu if the user clicks outside of it  
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}  