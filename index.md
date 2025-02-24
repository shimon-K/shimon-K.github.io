---
layout: page
---

<!--<span style="display:block; margin-top:-30px;">
![My face](my_profile2c.jpg)
</span>-->

<img align="left" src="my_profile2c.jpg" width="15%" height="15%">

<br/><br/><br/><br/><br/><br/>

<fieldset>
 <legend>2025 PodCasts:</legend>
 <form>
    <label class="radio-inline">
      <input type="radio" name="option" value="1" id="option1" checked>Podcast 1     
    </label>
    <label class="radio-inline">
      <input type="radio" name="option" value="2" id="option2">Podcast 2 - AI conversation
    </label>
 </form>
<audio controls id="audioPlayer" style="width: 100%;">
  <source id="audioSource" src="https://archive.org/download/full_podcast1/full_podcast1c.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<button id="rewind" onclick="rewind10sec()">Rewind 10&nbsp;s</button>
<button id="forward" onclick="forward10sec()">Forward 10&nbsp;s</button>
<div id="message1" style="display: none;">    
    Jump to Sections:<br>
    - <a href="#" onclick="setTime(0)">00:00:00 - Background and AGI verse AI</a><br>
    - <a href="#" onclick="setTime(1162)">00:19:22 - Teaching importance</a><br>
    - <a href="#" onclick="setTime(2245)">00:37:25 - Ideas in AGI and to promote AGI</a><br>
</div>
<div id="message2" style="display: none;">
    Jump to Sections:<br>
    - <a href="#" onclick="setTime(0)">00:00:00 - Part 1</a><br>
    - <a href="#" onclick="setTime(443)">00:07:23 - Part 2</a><br>
</div>
</fieldset>  





<script>
function setTime(seconds) {
  var audio = document.getElementById("audioPlayer");
  audio.currentTime = seconds;
  audio.play();
}
function rewind10sec() {
  var audio = document.getElementById("audioPlayer");
  audio.currentTime -= 10;
  //audio.play();
}
function forward10sec() {
  var audio = document.getElementById("audioPlayer");
  audio.currentTime += 10;
  //audio.play();
}
// function showMessage(option) {
//     document.getElementById("message1").style.display = (option === 1) ? "block" : "none";
//     document.getElementById("message2").style.display = (option === 2) ? "block" : "none";
// }
// function hideMessages() {
//     document.getElementById("message1").style.display = "none";
//     document.getElementById("message2").style.display = "none";
// }
 function updateContent() {
    let option1 = document.getElementById("option1").checked;
    let option2 = document.getElementById("option2").checked;
    
    // Handle messages
    document.getElementById("message1").style.display = option1 ? "block" : "none";
    document.getElementById("message2").style.display = option2 ? "block" : "none";

    // Handle audio source
    let audioPlayer = document.getElementById("audioPlayer");
    let audioSource = document.getElementById("audioSource");

    if (option1) {
      audioSource.src = "https://archive.org/download/full_podcast1/full_podcast1c.mp3";
    } else if (option2) {
      audioSource.src = "https://archive.org/download/full_podcast2/full_podcast2.mp3";
    } 
    // else {
    //   audioSource.src = "https://archive.org/download/test-audio-file/test-audio-file.mp3";
    // }

    audioPlayer.load(); // Refresh audio player to apply new source
    // audioPlayer.play(); // Auto-play new selection
  }

  // Run when the page loads
  window.onload = updateContent;

  // Attach event listeners to update messages when selection changes
  document.querySelectorAll('input[name="option"]').forEach(radio => {
    radio.addEventListener("change", updateContent);
  });
</script>




<br><br><br>


<!--<p align="center">
  <img src="DENN.gif" alt="Image 1" style="display: inline-block; width: 45%; margin: 0 20px;"><em>DENN</em>
  <img src="DENN.gif" alt="Image 2" style="display: inline-block; width: 45%; margin: 0 20px;"><em>DENN</em><br/><br/>
  <img src="DENN.gif" alt="Image 3" style="display: inline-block; width: 60%; margin: 0 20px;"><em>DENN</em>
</p>

<br/><br/><br/><br/><br/><br/>-->

<div style="display: flex; justify-content: center;">
  <figure style="margin: 0 0px; text-align: center;">
    <figcaption style="font-size: 18px;"><a href="https://shimon-k.github.io/publications.html#DENN">DENN</a></figcaption>
    <img src="DENN-small.gif" alt="Image 1" style="width: 97%;">
  </figure>
  <figure style="margin-left: 4%; text-align: center;">
    <figcaption style="font-size: 18px;"><a href="https://shimon-k.github.io/publications.html#AKREM">AKREM</a></figcaption>
    <img src="AKREM-for-site-short2.gif" alt="Image 2" style="width: 1300px;">    
  </figure>
</div>
<div style="display: flex; justify-content: center;">
  <figure style="margin-left: 0%; text-align: center;">
    <figcaption style="font-size: 18px;"><a href="https://shimon-k.github.io/publications.html#MOM">MOM</a></figcaption>
    <img src="MOM_1min_site.gif" alt="Image 3" style="width: 100%;">
  </figure>
</div>

<br/>

# About me

I'm enthusiastic About AGI. 

Check out
<!--<a style="color:#8dd3c7" href="https://shimon-k.github.io/AGI-Course/">AGI Course</a>,-->
<a style="color:#8dd3c7" href="/cv.html">Full CV</a>,
<a style="color:#8dd3c7" href="/publications.html">Publications</a>.

<!--&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->My email: [cm5099@yahoo.com](mailto:cm5099@yahoo.com)


