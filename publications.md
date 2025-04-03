---
layout: page
title: Media
[comment]: <> (archive)
---


For publications in education studies, see [here](https://shimon-k.github.io/publications.html#pub_education).

<br/><br/><br/>

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




<br/><br/><br/>

## Medium Articles

<a target="_blank" href="https://medium.com/@theAGI/rethinking-education-for-inventors-navigating-the-information-age-7e30817071dd"><img src="https://github-readme-medium-recent-article.vercel.app/medium/@theAGI/0" alt="Recent Article 0"> 

<br/><br/>

<a target="_blank" href="https://github-readme-medium-recent-article.vercel.app/medium/@theAGI/1"><img src="https://github-readme-medium-recent-article.vercel.app/medium/@theAGI/1" alt="Recent Article 1"> 



<br/><br/><br/>
## AGI papers

<a id="DENN"> </a>
- Dynamic and Evolving Neural Network for event discrimination [[Full PrePrint](https://easychair.org/publications/preprint/2dJv), [Video](https://www.youtube.com/watch?v=Qb6owhRVk6w&list=PLvii8t7-Yebi6J25SyKbW5okEmZLME-fh&index=2&t=22s&ab_channel=ArtificialGeneralIntelligence), [Short Conference Paper](https://link.springer.com/chapter/10.1007/978-3-031-19907-3_5)]
<div style="display: flex; justify-content: center;">
  <figure style="margin: 0 0px; text-align: center;">
    <figcaption style="font-weight: bold; font-size: 24px;">Dynamic and Evolving Neural Network (DENN)</figcaption>
    <img src="DENN.gif" alt="Image 1" style="width: 100%;">
  </figure>
</div>

<br /><br /><br /><br />



<a id="AKREM"> </a>
- Hierarchical Temporal DNN and Associative Knowledge Representation [[Full PrePrint](https://easychair.org/publications/preprint/1PLv), [Video](https://www.youtube.com/watch?v=th82r6n59rU&list=PLvii8t7-Yebi6J25SyKbW5okEmZLME-fh&index=3&t=89s&ab_channel=ArtificialGeneralIntelligence), [Short Conference Paper](https://link.springer.com/chapter/10.1007/978-3-031-19907-3_6)]
<div style="display: flex; justify-content: center;">
  <figure style="margin: 0 0px; text-align: center;">
    <figcaption style="font-weight: bold; font-size: 24px;">Associative Knowledge Representation Model (AKREM)</figcaption>
    <img src="AKREM_for_site_long_version (2).gif" alt="Image 1" style="width: 100%;">
  </figure>
</div>

<br /><br /><br /><br />



<a id="MOM"> </a>
- Purposeful and Operation-based Cognitive System for AGI [[Long PrePrint](https://arxiv.org/pdf/2308.04600v2.pdf), [Short PrePrint](https://arxiv.org/abs/2301.13556), [Quick Video (1minute)](https://youtu.be/6MlX7UHeAy0), [Short Video (7minutes)](https://youtu.be/mRM6OJTK5ZI), [Detailed Video (32minutes)](https://youtu.be/-IEDTsZpQ14)]<!--, [Short Conference Paper](https://link.springer.com/chapter/10.1007/978-3-031-19907-3_6)]-->
<div style="display: flex; justify-content: center;">
  <figure style="margin: 0 0px; text-align: center;">
    <figcaption style="font-weight: bold; font-size: 24px;">Model of Models (MOM)</figcaption>
    <img src="MOM_5min_site.gif" alt="Image 3" style="width: 100%;">
  </figure>
</div>


<br/><br/><br/>


<a id="pub_education"> </a>
# Publications in my studies

## Masters Degree

The research is mainly based on "Systems and Control" (017003) [Course](https://shimon-K.github.io/cv.html#Control), specifically on the ideas of Interpolating Control (IC) and Model Predictive Control (MPC).

- Robust Traffic Signal Control for Uncertain Road Networks (M.Sc Thesis) [[Abstract](https://www.graduate.technion.ac.il/Theses/Abstracts.asp?Id=32352)] [[Full pdf](https://github.com/shimon-K/shimon-K.github.io/blob/main/_Publications/Shimon_Theses_ALL.pdf)]

- Robust Interpolating Traffic Signal Control for Uncertain Road Networks [[ECC19 Abstract](https://ieeexplore.ieee.org/document/8795981)] [[GSC19 Abstract](https://iaac.technion.ac.il/workshops/2019/GSC19abstracts.pdf)] [[Full pdf](https://github.com/shimon-K/shimon-K.github.io/blob/main/_Publications/RobustICSignal_ECC19_v18.pdf)]




## PhD Degree

The research is mainly based on "Planning and Reinforcement Learning" (046203) [Course](https://students.technion.ac.il/local/technionsearch/course/46203), specifically on the ideas of Q-learning, Deep-Q-Learning (DQN). Included implementation of graph neural networks (GNNs), both in supervised learning and in reinforcement learning approaches. Also fine-tuning GPT language model with GNNs on synthetic dataset.

- Artificial Intelligence in Traffic Signal Control for Large-Scale Urban Networks (Ph.D. Thesis) [[Abstract - In progress](https://www.graduate.technion.ac.il/Theses/Abstracts.asp?Id=32352)] (Disclosed due to paper review)

- Spatio-temporal Graph Convolutional Neural Network for traffic signal control in large-scale urban networks (in progress) [[Presented in TRB 2022 Conference](https://annualmeeting.mytrb.org/OnlineProgramArchive/Details/17520)] <!--https://onlinepubs.trb.org/onlinepubs/am/SessionsEvents.pdf)]-->

- Preference commands in traffic signal control via Double Deep Q-Network (in progress)

- Converting textual instructions into preference commands for traffic signal control (in progress)



## Reviewing Role

Also reviewed papers at [ECAI2023 conference](https://ecai2023.eu/reviewer) [(see “Call to Arms” award)](https://ecai2023.eu/pca), and at Transportation Research Record (TRR): [here](https://journals.sagepub.com/doi/10.1177/03611981231155024), [here](https://journals.sagepub.com/doi/epub/10.1177/03611981221077091), and [here](https://www.webofscience.com/wos/author/record/GPK-8305-2022).




