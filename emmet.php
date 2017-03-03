<?php include('includes/header.php'); ?>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque architecto ut tempora quos cum nostrum, corporis, facere eos explicabo sunt voluptatibus aut necessitatibus modi placeat eum non, excepturi a asperiores.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae reiciendis necessitatibus at ad incidunt a, omnis quo quas? Expedita, totam aliquam voluptas id, praesentium consectetur inventore veritatis enim fugit nemo eaque aliquid qui fuga odit. Molestiae praesentium nam ullam, assumenda odit cupiditate debitis, quia dignissimos quas iste quo deserunt, quasi veritatis similique saepe vel quos expedita voluptatibus! Magnam tempora sit blanditiis, libero consectetur eos. Vitae tempora aspernatur adipisci sapiente cumque aut reiciendis blanditiis, earum fugiat ab, voluptas consequatur officiis tempore incidunt quisquam quas repellendus laudantium voluptatibus corporis saepe, cum obcaecati voluptatum. Vitae a fugiat cum unde, maiores nemo beatae deserunt.</p>
          <div class="wrapper">
            <div class="myclass" id="testing">
                <div class="anotherclass" id="junk"></div>
                <div>
                    <p><a href=""></a></p>
                    <span></span>
                </div>
            </div>
        </div>
        <nav role="navigation" class="navbar navbar-inverse">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Brand</a>
    </div>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Messages <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Inbox</a></li>
                    <li><a href="#">Drafts</a></li>
                    <li><a href="#">Sent Items</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Trash</a></li>
                </ul>
            </li>
        </ul>
        <form role="search" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control">
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Login</a></li>
        </ul>
    </div>
</nav>
        <ul class="list-group">
            <li class="list-group-item">Pictures</li>
            <li class="list-group-item">Documents</li>        
            <li class="list-group-item">Music</li>
            <li class="list-group-item">Videos</li>
        </ul>
        <a href="" title="Click" me=""></a>
        <form class="form-horizontal">
            <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Email</label>
        <div class="col-xs-10">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Password</label>
        <div class="col-xs-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
    </form>



  <?php
  include('includes/footer.php');
  ?>