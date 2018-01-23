@section('topbar')
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">EveCalc</a>
    </div>


    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
	  <li class="dropdown">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Calc Apps<span class="caret"></span></a>
	      <ul class="dropdown-menu">
		<li><a href="#">Lp Calc App</a></li>
		<li><a href="#">Test01</a></li>
		<li><a href="#">Test02</a></li>
	      </ul>
	  </li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
