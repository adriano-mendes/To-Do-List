const button = document.querySelector('.button-add-task')
const input = document.querySelector('.input-task')
const listComplete = document.querySelector('.list-task')

let listItems = []


function addTask() {
  listItems.push({
    task: input.value,
    checked: false
  })

  input.value = ''
  input.focus()

  showTask()
}

function showTask() {
  let newItem = ''
  listItems.forEach((item, position) => {
    newItem = newItem + `
      <li class="task ${item.checked && 'done'}">
        <img src="img/checked.png" alt="Check" onclick='checkItem(${position})'>
        <p>${item.task}</p>
        <img src="img/trash.png" alt="Excluir" onclick='deleteItem(${position})'>
      </li>
    `
  })
  listComplete.innerHTML = newItem

  localStorage.setItem('Lista', JSON.stringify(listItems))
}

button.addEventListener('click', addTask)

function deleteItem(position) {
  listItems.splice(position, 1)

  showTask()
}

function checkItem(position) {
  listItems[position].checked = !listItems[position].checked
  
  showTask()
}

function restartTask() {
  const taskLocalStorage = localStorage.getItem('Lista')

  if(taskLocalStorage){
    listItems = JSON.parse(taskLocalStorage)
  }

  showTask()
}

restartTask()