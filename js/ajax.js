document.addEventListener("DOMContentLoaded", function () {
  const addUserBtn = document.getElementById("addUserBtn");

  function fetchUserData(userId) {
    fetch(`api/user.php?id=${userId}`)
      .then((response) => response.json())
      .then((data) => {
        if (data.error) {
          console.error(`Error fetching user ${userId} data:`, data.error);
          appendUserRow(`<tr class="text-center">
                          <td>${userId}</td>
                          <td>Error: ${data.error}</td>
                          <td></td>
                          <td></td>
                        </tr>`);
        } else {
          appendUserRow(`<tr class="text-center">
                          <td>${data.id}</td>
                          <td>${data.name}</td>
                          <td>${data.personal}</td>
                          <td>${data.salary}</td>
                          <td>${data.email}</td>
                          <td>${data.age}</td>
                          <td>${data.status}</td>
                        </tr>`);
        }
      })
      .catch((error) => {
        console.error(`Error fetching user ${userId} data:`, error);
      });
  }

  function appendUserRow(rowHTML) {
    const tableBody = document.getElementById("userTableBody");
    tableBody.insertAdjacentHTML("beforeend", rowHTML);
  }

  

  document
    .getElementById("userTableBody")
    .addEventListener("click", function (event) {
      if (event.target.classList.contains("btn-edit")) {
        const userId = event.target.getAttribute("data-user-id");
        editUser(userId);
      } else if (event.target.classList.contains("btn-delete")) {
        const userId = event.target.getAttribute("data-user-id");
      }
    });

  const userIds = [1, 2, 3, 4, 5 ];
  userIds.forEach((userId) => fetchUserData(userId));
});
