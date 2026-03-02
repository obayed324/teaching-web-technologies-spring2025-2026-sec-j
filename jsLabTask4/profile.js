function validateAll() {

    // reset all errors
    document.getElementById("nameErr").innerText = "";
    document.getElementById("emailErr").innerText = "";
    document.getElementById("genderErr").innerText = "";
    document.getElementById("dobErr").innerText = "";
    document.getElementById("bloodErr").innerText = "";
    document.getElementById("degreeErr").innerText = "";
    document.getElementById("photoErr").innerText = "";

    // -------- NAME VALIDATION --------
    let name = document.getElementById("name").value.trim();
    if (name === "") {
        document.getElementById("nameErr").innerText = "Name cannot be empty.";
        return false;
    }

    let words = name.split(" ");
    let count = 0;
    for (let w of words) if (w !== "") count++;
    if (count < 2) {
        document.getElementById("nameErr").innerText = "At least two words required.";
        return false;
    }

    let firstChar = name[0];
    if (!((firstChar >= 'A' && firstChar <= 'Z') ||
          (firstChar >= 'a' && firstChar <= 'z'))) {
        document.getElementById("nameErr").innerText = "Name must start with a letter.";
        return false;
    }

    for (let i = 0; i < name.length; i++) {
        let ch = name[i];
        if (!((ch >= 'A' && ch <= 'Z') ||
              (ch >= 'a' && ch <= 'z') ||
              ch === '.' || ch === '-' || ch === ' ')) {
            document.getElementById("nameErr").innerText = "Invalid character in name.";
            return false;
        }
    }

    // -------- EMAIL VALIDATION --------
    let email = document.getElementById("email").value.trim();
    if (email === "") {
        document.getElementById("emailErr").innerText = "Email cannot be empty.";
        return false;
    }
    if (email.includes(" ")) {
        document.getElementById("emailErr").innerText = "No spaces allowed.";
        return false;
    }

    let atCount = 0;
    for (let ch of email) if (ch === "@") atCount++;

    if (atCount !== 1) {
        document.getElementById("emailErr").innerText = "Email must contain one '@'.";
        return false;
    }

    let parts = email.split("@");
    if (parts[0] === "" || parts[1] === "") {
        document.getElementById("emailErr").innerText = "Invalid email format.";
        return false;
    }

    if (parts[1].indexOf(".") === -1) {
        document.getElementById("emailErr").innerText = "Domain must contain dot.";
        return false;
    }

    // -------- GENDER VALIDATION --------
    let genders = document.getElementsByName("gender");
    let selected = false;
    for (let g of genders) if (g.checked) selected = true;

    if (!selected) {
        document.getElementById("genderErr").innerText = "Select a gender.";
        return false;
    }

    // -------- DOB VALIDATION --------
    let dd = document.getElementById("dd").value.trim();
    let mm = document.getElementById("mm").value.trim();
    let yyyy = document.getElementById("yyyy").value.trim();

    if (dd === "" || mm === "" || yyyy === "") {
        document.getElementById("dobErr").innerText = "All fields required.";
        return false;
    }

    let day = Number(dd), month = Number(mm), year = Number(yyyy);

    if (isNaN(day) || day < 1 || day > 31) {
        document.getElementById("dobErr").innerText = "Invalid day.";
        return false;
    }
    if (isNaN(month) || month < 1 || month > 12) {
        document.getElementById("dobErr").innerText = "Invalid month.";
        return false;
    }
    if (isNaN(year) || year < 1900 || year > 2026) {
        document.getElementById("dobErr").innerText = "Invalid year.";
        return false;
    }

    // -------- BLOOD GROUP VALIDATION --------
    let bg = document.getElementById("blood").value;
    if (bg === "") {
        document.getElementById("bloodErr").innerText = "Select a blood group.";
        return false;
    }

    // -------- DEGREE VALIDATION --------
    let ssc = document.getElementById("ssc").checked;
    let hsc = document.getElementById("hsc").checked;
    let bsc = document.getElementById("bsc").checked;
    let msc = document.getElementById("msc").checked;

    if (!ssc && !hsc && !bsc && !msc) {
        document.getElementById("degreeErr").innerText = "Select at least 1 degree.";
        return false;
    }

    // -------- PHOTO VALIDATION --------
    let photo = document.getElementById("photo").value;
    if (photo === "") {
        document.getElementById("photoErr").innerText = "Upload a photo.";
        return false;
    }

    alert("All validations passed!");
    return true;
}