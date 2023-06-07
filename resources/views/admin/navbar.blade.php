<nav class="navbar">
    <a href="#" class="logo">TuneSource </a>
    <form class="search-form">
      <input type="text" placeholder="Search...">
      <button type="submit">Search</button>
    </form>
  </nav>
  <script>
    const searchForm = document.querySelector('.search-form');

searchForm.addEventListener('submit', function(e) {
  e.preventDefault();
  const searchTerm = this.querySelector('input[type="text"]').value;
  // Do something with the search term
});

  </script>
  <style>
    .navbar {
  display: flex;
  justify-content: space-around;
  align-items: center;
  background-color: #333;
  padding: 10px 20px;
}

.logo {
  color: #fff;
  font-size: 24px;
  text-decoration: none;
  float: left;
}

.search-form {
  display: flex;
  justify-content:center;
}

.search-form input[type="text"] {
  padding: 5px;
  border: none;
  border-radius: 3px 0 0 3px;
}

.search-form button[type="submit"] {
  padding: 5px 10px;
  background-color: #ddd;
  border: none;
  border-radius: 0 3px 3px 0;
  cursor: pointer;
}

.search-form button[type="submit"]:hover {
  background-color: #bbb;
}

  </style>