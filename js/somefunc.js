function processImage() {
  var subscriptionKey = "b20b69118a964f51b7c44a166bb4dd76";
  var endPoint = "https://dicodingghifarivision.cognitiveservices.azure.com";
  var uriBase = endPoint + "/vision/v2.0/analyze";

  // Request parameters.
  var params = {
    visualFeatures: "Categories,Description,Color",
    details: "",
    language: "en"
  };

  // Display the image.
  var sourceImageUrl = document.getElementById("inputImage").value;

  document.querySelector("#sourceImage").src = sourceImageUrl;

  // Make the REST API call.
  $.ajax({
    url: uriBase + "?" + $.param(params),

    // Request headers.
    beforeSend: function(xhrObj) {
      xhrObj.setRequestHeader("Content-Type", "application/json");
      xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
    },

    type: "POST",

    // Request body.
    data: '{"url": ' + '"' + sourceImageUrl + '"}'
  })

    .done(function(data) {
      $(".captions_text").html(
        "<p> Keterangan : " + data.description.captions[0].text + "</p>"
      );
    })

    .fail(function(jqXHR, textStatus, errorThrown) {
      // Display error message.
      var errorString =
        errorThrown === ""
          ? "Error. "
          : errorThrown + " (" + jqXHR.status + "): ";
      errorString +=
        jqXHR.responseText === ""
          ? ""
          : jQuery.parseJSON(jqXHR.responseText).message;
      alert(errorString);
    });
}
