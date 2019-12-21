// Loads function when window is accessed.
window.addEventListener("load", onWindowLoad, false);

function onWindowLoad() {
  sortArray();
}

/**
 *
 * Function to sort scores values which are stored in local storage.
 * Each users have their own scores in local storage.
 *
 */
function sortArray() {
  let user = [];
  for (let i = 0; i < localStorage.length; i++) {
    let key = localStorage.key(i);
    let usrObj = localStorage.getItem(key);
    user[i] = JSON.parse(usrObj);
  }

  // Sorting function by substraction. Higher scores are added in table first.
  user.sort(function(a, b) {
    return b.score - a.score;
  });
  display(user);
}

/**
 * Simple function to getElementById.
 * @param id
 */
function byId(id) {
  return document.getElementById(id);
}

/**
 * createElement menthod to create HTML element by tag name.
 * @param tag
 */
function newElement(tag) {
  return document.createElement(tag);
}

/**
 * Creates the table data HTML tag <td> and stores the result.
 * @param newContent
 */
function newTd(newContent) {
  let result = newElement("td");
  result.innerHTML = newContent;
  return result;
}

/**
 * Function to display rankings, user and score in tables.
 * @param user
 */
function display(user) {
  // Rank starting at 1.
  let rank = 1;
  for (let i = 0; i < user.length; i++) {
    // Get id to table in Leaderboards.php
    var table = byId("generateTable");
    let tr = newElement("tr");

    // Does not add if user' scrore is null.
    if (user[i].score === undefined) {
      tr.append(newTd(null));
    } else {
      // Append <td> to <tr>
      tr.append(newTd(rank));
      tr.append(newTd(user[i].username));
      tr.append(newTd(user[i].score));
      rank++;
    }

    // This method is used to remove duplication of data from table.
    for (var j = table.rows.length - 1; j > 0; j--) {
      table.deleteRow(j);
    }

    // Append <tr> to <tbody> with id="generateTable".
    table.appendChild(tr);
  }
}
