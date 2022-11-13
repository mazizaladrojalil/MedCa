function openReminder(){
    document.getElementById("OverlayReminder").style.display = "block";
}

function closeReminder(){
    document.getElementById("OverlayReminder").style.display = "none";
}

function openChatDoc(){
    document.getElementById("OverlayChatDoc").style.display = "block";
}

function closeChatDoc(){
    document.getElementById("OverlayChatDoc").style.display = "none";
}

function openBottom(){
    document.getElementById("addBottom").style.display = "block";
}



function submit(){
    const list = document.getElementsByClassName("list-reminder")[0];
    const newReminder = document.getElementById("newReminder");
    let title = document.querySelector('input').value;
    let date = document.getElementById("reminderDateTime").value;
    let repeatQuestion = document.getElementById("repeatQuestion").value;
    let id = Math.floor(Math.random() * 100);
    let reminder = createReminder(id, title, date, repeatQuestion);
    list.appendChild(reminder);
    document.getElementById("addBottom").style.display = "none";
    document.getElementById("judulRemind").value = "";
    document.getElementById("reminderDateTime").value = "";
    document.getElementById("repeatQuestion").value ="";
}

function getVal() {
    const val = document.querySelector('input').value;
    console.log(val);
  }

function createReminder(id, title, date, repeatQuestion) {
    const list = document.getElementsByClassName("list-reminder")[0];
    const newReminder = document.getElementById("newReminder");
    // Error handling
    if (title && title.length > 45) {
        alert("We only support 45 characters");
        return;
    } else if (!title) {
        alert("Please enter a Reminder");
        return;
    }

    const li = document.createElement("li");
    li.id = id;
    li.className = "reminder";
    const div_1 = document.createElement("div");
    div_1.className = "text";
    const div_2 = document.createElement("div");
    div_2.innerText = title;
    const div_3 = document.createElement("div");
    div_3.innerText = date;
    const div_4 = document.createElement("div");
    div_4.innerText = repeatQuestion;

    // Actions container
    const actionContainer = document.createElement("div");
    actionContainer.className = "actions"

    // Have the check and delete buttons

    const deleteBtn = document.createElement("button");
    deleteBtn.className = "btn-delete";
    deleteBtn.innerText = "Delete";

    // Events handler functions

    deleteBtn.addEventListener("click", function () {
        if (li.id == id) {
            list.removeChild(li);
        }
    });

    // Append the button for actions
    actionContainer.appendChild(deleteBtn);
    // Append all the elements in Li
    li.appendChild(div_1);
    li.appendChild(div_2);
    li.appendChild(div_3);
    li.appendChild(div_4);
    li.appendChild(actionContainer);

    return li;
}