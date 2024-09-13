function redirectToTeam() {
    window.location.href = "../html/team.html";
}
function load() {
    var names = ["Saheel Saneef", "C.Ishara ", "K.Dilshan", "S.Kavishani","K.Santhusha"]
    var positions = ["Web Developer", "UI/UX Designer", "Digital Marketer", "Data Aanalyst","Project Manager"]
    var description = ["I breathe life into the virtual realm,crafting elegant code and weaving interactive elements to build a dynamic and seamless job portal.", "With a brush of creativity and a touch of empathy,I shape delightful user experiences that transform job searching into a joyful journey.", "I'm the catalyst for our job portal's visibility and growth,blending strategic acumen and digital sorcery to connect seekers and employers.","As a data virtuoso,I unlock the hidden pattern and insighhts within our job portal's data,empowering informed decision-making and growth.","I orchestrate the symphony of talen,timelines,and milestones to ensure our online job portal surpasses expectations and delivers success"]
    var socilaLinks = [
        ["http://www.facebook.com", "http://www.twitter.com", "http://www.linkedin.com"],
        ["http://www.facebook.com", "", "http://www.linkedin.com"],
        ["", "http://www.twitter.com", "http://www.linkedin.com"],
        ["http://www.facebook.com", "http://www.twitter.com", ""],
        ["", "", "http://www.linkedin.com"]]
    for (let index = 1; index < 6; index++) {
        document.getElementById("round" + index).style.backgroundImage = "url('../images/profiles/" + index + ".jpg')";
        document.getElementById("name" + index).innerHTML = names[index - 1];
        document.getElementById("position" + index).innerHTML = positions[index - 1];
        document.getElementById("description" + index).innerHTML = description[index - 1];
        var links = socilaLinks[index - 1]
        var imageIndex = 1
        for (let i = 0; i < links.length; i++) {
            if (links[i] != "") {
                console.log("ssdsd");
                document.getElementById("social" + index + imageIndex).style.backgroundImage = "url('../images/social/" + (i + 1) + ".png')";
                document.getElementById("social" + index + imageIndex).style.cursor = "pointer";
                document.getElementById("social" + index + imageIndex).setAttribute("link", links[i]);
                imageIndex += 1
            }

        }
    }
}
function loadPage(div) {
    window.open(div.getAttribute("link"));


}