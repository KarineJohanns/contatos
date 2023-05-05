function handleCredentialResponse(response) {
    const data = jwt_decode(response.cedential)
    console.log(data)
}
window.onload = function () {
    google.accounts.id.initialize({
        client_id: "551723582206-8kse6a5g163pas3rg3sq7n0rnkvsoek1.apps.googleusercontent.com",
        callback: handleCredentialResponse
    });
    google.accounts.id.renderButton(
        document.getElementById("buttonDiv"),
        { theme: "outline", size: "large", width:"378", logo_alignment:"center" }  // customization attributes
    );
    google.accounts.id.prompt(); // also display the One Tap dialog
}