/* External JavaScript for Overclocked Nights
Source: Custom logic for JS Lab
This function toggles the background color to simulate a "Night Mode"
*/

function toggleTheme() {
    var element = document.body;
    // Toggles between dark grey and pitch black
    if (element.style.backgroundColor === "rgb(17, 17, 17)") {
        element.style.backgroundColor = "#222";
    } else {
        element.style.backgroundColor = "#111";
    }
}
