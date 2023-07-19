<header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="index.php" class="navbar-brand"><b>Admin</b>LTE</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <?php if( $_SESSION['npm_mhs']==''){
								echo"		<li><a href='proses.php?aksi=haldaftar&npm_mhs=$_SESSION[npm_mhs]'>data saya </a></li> "; ?>
                    <li><a href="proses.php?aksi=logoutndaftar">Logout</a><li>
<?php }else{?>
<li><a href="index.php">login </a><li>
	<?php }?>  
               
              </ul>

            </div><!-- /.navbar-collapse -->
           
          </div><!-- /.container-fluid -->
        </nav>
      </header>