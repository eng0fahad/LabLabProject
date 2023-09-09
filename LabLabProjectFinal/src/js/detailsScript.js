function speech(text) {
  let utterance = new SpeechSynthesisUtterance(text);
  utterance.rate = 0.9;
  speechSynthesis.speak(utterance);
}

$(document).ready(function () {
  $(".start").click(function () {
    let text = $(".textArea").text();
    speech(text);
  });

  $(".stop").click(function () {});
});

//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------

// Call the sendMessage function directly when the page loads.
window.onload = sendMessage();

function sendMessage() {
  // Get the message from the input field.
  const message = $("#title").html();
  // Create an API request object.
  const request = {
    model: "gpt-3.5-turbo",
    messages: [{ role: "system", content: message }],
    temperature: 0.7,
    max_tokens: 200,
  };

  // Make an API request.
  axios({
    url: "https://api.openai.com/v1/chat/completions",
    method: "POST",
    headers: {
      Authorization:
        "Bearer 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",
      "Content-Type": "application/json",
    },
    data: JSON.stringify(request),
  })
    .then((response) => response.data)
    .then((response) => {
      // Get the response message.
      const message = response.choices[0].message.content;

      // Append the message to the chat area.
      document.getElementById("textArea").innerHTML += message + "<br>";
    });
}
