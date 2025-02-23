---
layout: page
---

<!--<span style="display:block; margin-top:-30px;">
![My face](my_profile2c.jpg)
</span>-->

<img align="left" src="my_profile2c.jpg" width="15%" height="15%">

<br/><br/><br/><br/><br/><br/>


<fieldset>
  <legend>Select a maintenance drone:</legend>

  <div class="fieldgroup">
    <input type="radio" id="huey" name="drone" value="huey" checked />
    <label for="huey">Huey</label>
  </div>

  <div class="fieldgroup">
    <input type="radio" id="dewey" name="drone" value="dewey" />
    <label for="dewey">Dewey</label>
  </div class="fieldgroup">

  <div>
    <input type="radio" id="louie" name="drone" value="louie" />
    <label for="louie">Louie</label>
  </div>
</fieldset>

.fieldgroup{
   float: left;
   width: auto;
   margin-left: 3em;
}

<audio controls id="audioPlayer" style="width: 100%;">
  <source src="https://archive.org/download/full_podcast1/full_podcast1b.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<button id="rewind" onclick="rewind10sec()">Rewind 10&nbsp;s</button>
<button id="forward" onclick="forward10sec()">Forward 10&nbsp;s</button>
<br>
Jump to Sections:
- <a href="#" onclick="setTime(0)">00:00:00 - Background and AGI verse AI</a>  
- <a href="#" onclick="setTime(1162)">00:19:22 - Teaching importance</a>  
- <a href="#" onclick="setTime(2245)">00:37:25 - Ideas in AGI and to promote AGI</a>

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


