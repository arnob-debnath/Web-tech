console.log("connected");


function analyzeText() {
    let text = document.getElementById("textInput").value;
    let resultDiv = document.getElementById("result");

    let trimmedText = text.trim();


    if (trimmedText === "") {
        resultDiv.innerHTML = "<p>Please enter some text!</p>";
        return;
    }

    
    let charCount = text.length;

    
    let words = trimmedText.split(/\s+/);
    let wordCount = words.length;

    
    let reversedText = text.split("").reverse().join("");

    
    resultDiv.innerHTML = `
        <p><strong>Character Count:</strong> ${charCount}</p>
        <p><strong>Word Count:</strong> ${wordCount}</p>
        <p><strong>Reversed Text:</strong><br>${reversedText}</p>
    `;
}