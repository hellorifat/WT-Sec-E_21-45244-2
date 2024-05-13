<html>
    <body style="background-color:#b1e21f">
    <head>
<style>
body {
  font-family: "Montserrat", sans-serif;
  background-color: #6d6c6c;
}

p {
  font-size: 14px;
}

h3 {
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 1px;
  color: #f1f1f1;
}

h5 {
font-size: 11px;
display: block;
font-weight: 600;
letter-spacing: 1px;
}

h6 {
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 1px;
  color: #f1f1f1;
  text-shadow: 1px 1px 1px #000000;
}

.hand-icon {
  font-size: 24px;
  font-weight: 600;
  text-shadow: 2px 2px 2px #000000;

}

.tiny {
  font-size: 9px;
  font-weight: 300;
  color: #f1f1f1;

}

.time {
  font-size: 9px;
  font-weight: 600;
  color: #f1f1f1;
}


.container {
margin-left:50px;
width:700px;
background-color: #557200;
animation-name: fade;
animation-duration: 4s;
animation-fill-mode: forwards;
border-radius: 5px;
box-shadow: 5px 5px 5px #242324;

}

@keyframes fade {
from {opacity: 0}

to {opacity: 1}
}


.header {
  padding: 1em;
  background-color: #557200;
  color: #f1f1f1;
  text-shadow: 1px 1px 1px #000000;
  letter-spacing: 1.5px;
  font-weight: 600;
  font-size: 14px;
  border:1px solid orangered;
  border-bottom: none;
  border-top-left-radius:4px;
  border-top-right-radius: 4px;
}

.tab {
  overflow: hidden;
  border:1px solid orangered;
  border-top: none;
  background-color: #557200;
  padding-left:10px;
}

/* Style the buttons inside the tab */
.tab button {
  margin-bottom: 15px;
  margin-left: 13px;
  background-color: inherit;
  float: left;
  border-radius: 4px;
  outline: 1px solid rgb(223, 220, 220);
  cursor: pointer;
  padding: 10px 7px;
  transition: 0.3s;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 1px;
  border: 1px solid orangered;
}

/* Change background color of buttons on hover */
.tab button:hover {
  outline: 1px solid rgb(177, 226, 31);
  background-color: lime;
  color: #000000;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: lime;
  color: #000000;
 
}

.tablinks {
  color: rgb(177, 226, 31);
}

.mail{
  color: lightblue;
  text-shadow: 1px 1px 1px #000000;
}

.openart {
  margin-top:5px;
  padding: 1em;
  background-image: -moz-linear-gradient(90deg, #ff8a00, #e52e71);
  background-image: -webkit-linear-gradient(90deg, #ff8a00, #e52e71);
  background-image: -ms-linear-gradient(90deg, #ff8a00, #e52e71);

}

.google {
  margin-top: 5px;;
  background-color: #f1f1f1;
  box-shadow: none;

}

.more {
  text-decoration: underline;
}

.social {
  color: lime;
  text-shadow: 1px 1px 1px #000000;
}

.system {
color: yellow;
text-shadow: 1px 1px 1px #000000;
}

.warning {
color: rgb(236, 135, 2);
text-shadow: 1px 1px 1px #000000;
}

.error {
color: red;
text-shadow: 1px 1px 1px #000000;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 1em 2em;
  padding-bottom: 30px;
  border:1px solid orangered;
  border-top: none;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

ul {
  list-style-type: none;
  font-size: 14px;
  color: #bbb9b9;
  letter-spacing: 0.5px;
  border-radius: 5px;
  width:200px;
  margin-left: -20px;
}

.specs {
  color:#f1f1f1;
  font-size: 13px;
}

table {
  width: 100%;
}

td {
letter-spacing: 0.5px;
background-color: #585656;
padding-left:15px;
padding-right:15px;
cursor: pointer;
border-radius: 3px;
box-shadow: 3px 3px 3px orangered;
}


.row-1, .row-2, .row-3 {
  padding:12px 10px;
}

tr {
  padding-bottom: 10px;
}


.row-1:hover {
background-color: #7c7979;
}

.row-2:hover {
  background-color: #7c7979;
}

.row-3:hover {
  background-color: #7c7979;
}



a.more {
  text-decoration: none;
  color: #202020;
  font-size: 11px;
  margin-left: -6px;
}


input[type="radio"] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: 1px solid #555;
    border-radius: 2px;
    width: 12px;
    height: 12px;
    cursor: pointer;
    outline: none;
}

input[type="radio"]:checked {
    background-color: #fafafc;
}

label {
    cursor: pointer;
}


.star {
color:rgb(177, 226, 31);
}



.mail-item {
  font-size: 22px;
  vertical-align: middle; /* Align text vertically */
}

.mail-item-new {
  color:rgb(177, 226, 31);
}


.mail-item-old {
  color:#444242;
}


.mail-title {
  display: block;
  font-weight: 600;
  font-size: 11px;
  letter-spacing: 1px;
  color:#f1f1f1;
  margin-left: 2px; /* Add some spacing between icon and text */
}

.mail-start {
font-size: 11px;
font-weight: 500;
letter-spacing: 0.5px;
color: lime;
text-shadow: 1px 1px 1px #000000;
}

.google {
  padding: 1em;
  background-color: #f1f1f1;
}


.mail-subject {
  font-weight: 500;
  font-size: 11px;
  letter-spacing: 0.5px;
  color: #f1f1f1;
}

 td.row-title{
  font-size:11px;
  font-weight: 600;
  border: none;
  text-decoration: none;
  letter-spacing: 1px;;
  color: #444242;
  background-color:transparent;
  text-decoration: none;
 
}

.codepen-mail {
  margin-top: 5px;
  padding: 1em;
  background-color: #585656;
  color: #f1f1f1;
}

.row-4 {
  padding-top:3px;
  background-color: transparent;
  box-shadow: none;
}

td.icon {
  margin-top:5px;
  height: 34px;
}

.social-icon {
  font-size: 16px;  
}

.color-icon:hover {
  color: #444242;
}


.fa-youtube::before {
  color: red;
}

.close {
  float: right;
  margin-top:-4px;
  padding-left: 3px;
  cursor: pointer;
  text-decoration: none;
  color: #f1f1f1;
  font-size: 24px;
  font-weight: 500;
}

.open-message {
  float: right;
  margin-top:-4px;
  padding-left: 3px;
  cursor: pointer;
  text-decoration: none;
  color: lime;
  font-size: 9px;
  font-weight: 600;
}


/*******************MAIL************************/

.collapsible-content {
  border-radius: 4px;
}


.collapsible-content {
  display: none;
}

.codepen-header {
  background-color: #f1f1f1;
  background-image: -moz-linear-gradient(180deg, #ff8a00, #e52e71,orangered);
  background-image: -webkit-linear-gradient(180deg, #ff8a00, #e52e71, orangered);
  background-image: -ms-linear-gradient(180deg, #ff8a00, #e52e71,orangered);
  padding: 5px 8px;
  border-radius: 4px;
}

.codepen-title, .codepen-title2 {
  padding: 1em;
  letter-spacing: 1px;
  vertical-align: middle; /* Align text vertically */
}

.codepen-title {
font-size: 11px;
font-weight: 500;
color:#f1f1f1;
background-color: #505050;
}

.codepen-title2 {
background-color: rgb(27, 27, 27);
text-align: center;
}

.codepen-link {
  display: block;
  text-decoration: none;
  color: #f1f1f1;
  font-size: 10px;
  text-align: center;
}


.codepen-link:hover {
text-decoration: underline;
}




  .social-insta {
    display: flex;
    flex-direction: row;
    color: #f1f1f1;
    column-gap: 10px;
    align-items: center;
    margin-bottom: 10px;
  }


  .social-name {
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.5px;
    color: rgb(38, 86, 243);
    cursor: pointer;
  }


  .ago {
    font-size: 14px;
    letter-spacing: 0.5px;
    color: #9e9d9d;
  }

  .follow {
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.5px;
    padding: 7px 12px;
    border-radius: 4px;
    border:none;
    background-color: rgb(38, 86, 243);
    color: #f1f1f1;
    cursor: pointer;
  }

  .row {
    margin-bottom: 1em;
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.row-titles {
  display: flex;
  border-radius: 4px;
}

.col {
width: 70px;
height: 70px;
border-radius: 50%;
}

.col-1 {
border: 10px solid orangered;
border-top-color: lime;
border-bottom-color: orangered;
border-left-color: lime;
border-right-color: orangered;
}

.temp {
    display: block;
    text-align: center;
    color: #f1f1f1;
}

td.temp,.disk,.cpu,.mem,.fan {
  box-shadow: 1px 1px 1px 1px transparent;
}

.col-2 {
    border: 10px solid orangered;
    border-top-color: lime;
    border-bottom-color: lime;
    border-left-color: lime;
    border-right-color: orangered;
    }

    .col-stats {
    border: 1px solid orangered;
    color: #f1f1f1;
    width: 133px;
    text-align: center;
  }





.warning-container {
  color: #f1f1f1;
  font-size: 14px;
}

.warning-icon {
  font-size: 27px;
  font-weight: 600;
  color: orange;
}

.warning-icon-red {
  font-size: 27px;
  font-weight: 600;
  color: red;
}




</style>
</head>


  <div class="container">
    <div class="header">Notification center <span class="close">&times;</span></div>
    <div class="tab">
      <button class="tablinks" onclick="notifications(event, 'Mail')">My Project Deals <span class="mail">(3)</span></button>
      <button class="tablinks" onclick="notifications(event, 'Warning')">Warning <span class="warning">(3)</span></button>

    </div>


    <div id="Mail" class="tabcontent">
      <span class="mail-title">New messages (3)</span>
      <table class="mailbox" cellspacing="10">
        <tbody>
          <tr>
            <div>
            <td class="row-1" onclick="toggleCollapsible('collapsible-content')"><span class="mail-item-new">&#128233; </span> <span class="star spin">&#9733;</span>
              <span class="mail-start">CityGroup</span><span class="tiny"> investments@citygroup.com</span> <span class="mail-subject">#[Important update] new terms of use.
                -</span> <span class="time">:35</span> <span class="open-message">open/close</span>
                <div id="collapsible-content" class="collapsible-content openart">
                  <h5>Dear Alif [Digifarm Farmer],</h5>
<p>
We’re reaching out to express our interest on the project 242871, Please share the history of production and sales in the past years.
Please reach out to us if you have any concern. </p>

<h6><span class="hand-icon">👉 </span>What's changing?</h6>
<p>
  The return on investment percentage has to be revised unless...  &nbsp;<span class="more">..read more</span></p>
                </div>
             
            </td>
          </div>
         
          </tr>
          <tr>
            <div>
            <td class="row-1" onclick="toggleCollapsible('collapsible-content')"><span class="mail-item-new">&#128233; </span> <span class="star spin">&#9733;</span>
              <span class="mail-start">CityGroup</span><span class="tiny"> investments@citygroup.com</span> <span class="mail-subject">#[Important update] new terms of use.
                -</span> <span class="time">:35</span> <span class="open-message">open/close</span>
                <div id="collapsible-content" class="collapsible-content openart">
                  <h5>Dear Alif [Digifarm Farmer],</h5>
<p>
We’re reaching out to express our interest on the project 242871, Please share the history of production and sales in the past years.
Please reach out to us if you have any concern. </p>

<h6><span class="hand-icon">👉 </span>What's changing?</h6>
<p>
  The return on investment percentage has to be revised unless...  &nbsp;<span class="more">..read more</span></p>
                </div>
             
            </td>
          </div>
         
          </tr>
       
          
   
          <tr>
            <td colspan="3" class="row-4"><span class="mail-title">Other mail</span>
            </td>
          </tr>

          <tr>
            <td class="row-1" onclick="toggleCollapsible('collapsible-content-4')"><span class="mail-item-old">&#128237; </span> 
              <span class="mail-start">Stack Overflow</span> <span class="tiny"> info@stackoverflow.com</span> <span class="mail-subject">#How to learn and share
                -</span> <span class="time">10:07</span> <span class="open-message">open/close</span>
                <div id="collapsible-content-4" class="collapsible-content">
                  <h5>Welcome to Stack Overflow</h5>
                  </div>
            </td>
 

        </tbody>
      </table>
    </div>

    

    <div id="Warning" class="tabcontent">
      <div class="warning-container">
        <div class=""><span class="warning-icon">&#9888;</span>&nbsp; You need to reboot your system to finish installing updates</div>
        <div class=""><span class="warning-icon">&#9888;</span>&nbsp; There are updates available for Zorin. Please update.</div>
        <div class=""><span class="warning-icon">&#9888;</span>&nbsp; One program couldnt be started. Check system log for more details. </div>
       


      </div>
 
    </div>
    
  <script>

    
function notifications(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    document.addEventListener('DOMContentLoaded', function () {
      const closeBtn = document.querySelector('.close');
      const container = document.querySelector('.container');

      closeBtn.addEventListener('click', function () {
        container.style.display = 'none';
      });
    });



        document.addEventListener('DOMContentLoaded', function() {
  var header = document.querySelector('.header');
  var notifications = document.querySelector('.notifications');

  header.addEventListener('click', function() {
    toggleNotificationCenter(notifications);
  });
});

function toggleNotificationCenter(notifications) {
  if (notifications.style.display === 'none' || notifications.style.display === '') {
    notifications.style.display = 'block';
  } else {
    notifications.style.display = 'none';
  }
}



function toggleCollapsible(contentId) {
  var content = document.getElementById(contentId);
  if (content) {
    if (content.style.display === 'block') {
      content.style.display = 'none';
    } else {
      content.style.display = 'block';
    }
  } else {
    console.error("Element with ID '" + contentId + "' not found.");
  }
}

  
 
  </script>
</body>
</html>
