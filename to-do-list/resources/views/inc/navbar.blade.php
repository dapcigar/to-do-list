<nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Play Thang!</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item {{Request::is('todo/create') ? 'active' : ''}}"">
             <a class="nav-link" href="todo/create" >Create</a>

        
          
        </ul>
        
      </div>
    </div>
  </nav>