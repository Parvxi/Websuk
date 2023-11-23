
// Function to scramble or unscramble the email
function scrambleEmail(email, scramble = true) {
    var emailArray = email.split("");

    if (scramble) {
        // Scramble the email
        for (var i = emailArray.length - 1; i > 0; i--) {
            var j = Math.floor(Math.random() * (i + 1));
            var temp = emailArray[i];
            emailArray[i] = emailArray[j];
            emailArray[j] = temp;
        }
    } else {
        // Unscramble the email
        emailArray.sort(); // Assuming the original email is lowercase and doesn't contain special characters
    }

    return emailArray.join("");
}

// Scramble the email
var scrambledEmail = scrambleEmail("example@example.com");

// Create a new paragraph element
var paragraph = document.createElement('p');

// Set the text of the paragraph to the scrambled email
paragraph.textContent = scrambledEmail;

// Append the paragraph to the body of the document
document.body.appendChild(paragraph);

