// HTML Document content load event to manage calendar
document.addEventListener('DOMContentLoaded', function () {

  // Initialize various objects
  var chatForm = document.getElementById("chatinput-form");
  var chatInput = document.querySelector("#chat-input");
  var chatList = document.querySelector('#conversation-list');
  var contactLinks = document.getElementsByClassName('contacts-link');
  var chatBody = document.querySelector('.chat-body');
  var closeChatbox = document.querySelector('[data-close]')
  var userNames = document.getElementsByClassName("username");
  var userAvatars = document.getElementsByClassName("user-avatar");
  var chatItems = document.getElementsByClassName("chat-item");
  var activeChatUser = document.getElementById("active-chat-user");
  
  var chatItemId = 1;
  var dummyMsg = [
    'Hi',
    'Hello !',
    'Hey :)',
    'How do you do?',
    'Are you there?',
    'I am doing good :)',
    'Hi can we meet today?',
    'How are you?',
    'May I know your good name?',
    'I am from codescandy',
    'Where are you from?',
    "What's Up!"
  ];
  
  // Open and close Chatbox in responsive windows
  Array.from(contactLinks).forEach(function (contactLink) {
    contactLink.addEventListener("click", function (e) {
      chatBody.classList.add("chat-body-visible");
    })
  });
  
  closeChatbox.addEventListener("click", function (e) { 
    chatBody.classList.remove("chat-body-visible");
  });

  if (document.body.contains(closeChatbox)) {
    closeChatbox.addEventListener("click", function (e) {
      chatBody.classList.remove("chat-body-visible");
    });
  }
  // Click Event for each user located in sidebar
  Array.from(chatItems).forEach(function (chatItem) {
    chatItem.addEventListener("click", function (e) {
      var status = chatItem.querySelector("img").parentNode.className;
      var image = chatItem.querySelector("img").src;
      var name = chatItem.querySelector("h5").innerHTML;
      var unreadItems = chatItem.querySelector("small");
      var statusText = status.split(" ")
      statusText = statusText[statusText.length - 1].split("-");
      statusText = statusText[1].slice(0, 1).toUpperCase() + statusText[1].slice(1).toLowerCase();
      activeChatUser.querySelector("h4").innerHTML = name;
      activeChatUser.querySelector("img").src = image;
      activeChatUser.querySelector("img").parentNode.className = status;
      activeChatUser.querySelector("p").innerHTML = statusText;
      if (unreadItems !== null) { unreadItems.nextElementSibling && unreadItems.parentElement.removeChild(unreadItems.nextElementSibling); }
      Array.from(userNames).forEach(function (userName) {
        userName.innerHTML = name;
      });
      Array.from(userAvatars).forEach(function (userAvatar) {
        userAvatar.src = image;
      })
    });
  })

  // Event onsubmitting text chat input form
  if (document.body.contains(chatForm)) {
    chatForm.addEventListener('submit', function (ev) {
      ev.preventDefault();
      var currentTime = new Date();
      currentTime = currentTime.getHours() + ":" + currentTime.getMinutes();
      chatList.insertAdjacentHTML(
        "beforeend",
        `<div class="d-flex justify-content-end mb-4" id="chat-item-` + chatItemId + `">
      <div class="d-flex">
          <div class=" me-3 text-end">
              <small>`+ currentTime + `</small>
              <div class="d-flex">
                  <div class="me-2 mt-2">
                      <div class="dropdown dropstart">
                          <a class="btn btn-ghost btn-icon btn-sm rounded-circle" href="#!" role="button"
                              id="dropdownMenuLinkTwo" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                                <i  data-feather="more-vertical" class="icon-xs"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkTwo">
                              <a class="dropdown-item" href="#!">
                                <i class="dropdown-item-icon" data-feather="copy" ></i>Copy</a>
                              <a class="dropdown-item" href="#!"> 
                                <i class="dropdown-item-icon" data-feather="edit" ></i> Edit</a>
                              <a class="dropdown-item" href="#!">
                                <i class="dropdown-item-icon" data-feather="corner-up-right" ></i>Reply</a>
                              <a class="dropdown-item" href="#!">
                                <i class=" dropdown-item-icon" data-feather="corner-up-left" ></i>Forward</a>
                              <a class="dropdown-item" href="#!">
                                <i class="dropdown-item-icon" data-feather="star" ></i>Favourite</a>
                              <a class="dropdown-item" href="#!">
                                <i class="dropdown-item-icon" data-feather="trash" ></i>Delete
                              </a>
                          </div>
                      </div>
                  </div>
                  <div
                      class="card mt-2 rounded-top-md-end-0 bg-primary text-white">
                      <div class="card-body text-start p-3">
                          <p class="mb-0">`+ chatInput.value + `</p>
                      </div>
                  </div>
              </div>
          </div>
          <img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="rounded-circle avatar-md" />
      </div>
  </div>`
      );
      chatList.scrollTop = chatList.scrollHeight;
      feather.replace();
      randomMsg();
      chatItemId++;
    })
  }

  // Function to generate random message.
  var randomMsg = function () {
    newRandomMsg = dummyMsg[Math.floor(Math.random() * dummyMsg.length)];
    chatInput.value = newRandomMsg;
  }

  randomMsg();
});
