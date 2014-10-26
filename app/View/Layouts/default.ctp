<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        My Blog
    </title>
    <?php
        echo $this->Html->meta('icon');
 
        echo $this->Html->css('bootstrap.min.css');
 
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
     
    <style>
        body {
          padding-top: 70px;
        }
    </style>
</head>
<body>
      
    <?php echo $this->element('navigation');?>
   
    <div class="container">
      <div class="alert alert-info" role="alert"><?php echo $this->Session->flash(); ?></div>
 
      <?php echo $this->fetch('content'); ?>
       
      <!--<hr>-->
      <footer>
        <p>Developed by <a href="http://www.jolks.co">John Lau</a></p>
      </footer>
       
    </div> <!-- /container -->
     
     
     
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>
