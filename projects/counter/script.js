/* for character, number, and special character count */

let textbox = document.getElementById("textbox");

textbox.addEventListener('input', function() {
    var text = this.value;

    // Count total characters
    let charCount = text.length;
    document.getElementById("char").innerHTML = charCount;

    // Count words
    text = text.trim();
    let words = text.split(" ");
    let cleanlist = words.filter(function(elm) {
        return elm != "";
    });
    document.getElementById("words").innerHTML = cleanlist.length;

    // Count numbers
    let numCount = (text.match(/\d/g) || []).length;
    document.getElementById("numbers").innerHTML = numCount;

    // Count special characters
    let specialCharCount = (text.match(/[!@#$%^&*(),.?":{}|<>]/g) || []).length;
    document.getElementById("specialChars").innerHTML = specialCharCount;
});
