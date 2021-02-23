<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Hendrik's ToDo List</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/album/album.css" rel="stylesheet">
  </head>

  <body>

    <header>
<!--       <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Hendrik's ToDo List</strong>
          </a>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Hendrik's ToDo List</h1>
          <p class="lead text-muted">Let us aspire not to forget anything anymore!</p>
          <p>
            <!-- <a href="#" class="btn btn-primary my-2">Main call to action</a> -->
            <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

	<?php 
		// loop through each task to visualize
		foreach($tasks as $task){
			# code...

			echo '<div class="col-md-4"><div class="card mb-4 box-shadow"><div class="card-body"><p class="card-text">';

			// stripe task if finished
			if($task["task_progress"] == "1"){
				echo "<s>";
			}

			echo $task["task_description"];

			// end stripe task if finished
			if($task["task_progress"] == "1"){
				echo "</s>";
			}

			echo '<div class="d-flex justify-content-between align-items-center"><div class="btn-group">';

			// button to change status
			echo '<form action="'.base_url().'/public/Home/statusTask/'.$task["task_id"].'/'.$task["task_progress"].'"><button type="submit" class="btn btn-sm btn-info">Change Task Status</button></form> ';
			// button to delete task
			echo '<form action="'.base_url().'/public/Home/deleteTask/'.$task["task_id"].'"><button type="submit" class="btn btn-sm btn-danger">Delete Task</button></form>';

			echo '</div></div></div></div></div>';
		}
	?>


			<div class="col-md-4">
				<form method="post" action="<?= base_url() ?>/public/Home/newTask">
					<div class="form-group">
						<label for="Task">Task:</label>
						<input type="text" name="Task" class="form-control" placeholder="Enter Task" id="Task">
					</div>
					<button type="submit" class="btn btn-primary">Add new task</button>
				</form>
			</div>


            

          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Made by <a href="https://www.nanosupport.be">Nano Support</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
  </body>
</html>

