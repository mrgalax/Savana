<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Savana Cafe & Resturent</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<div class="brand">Savana Cafe & Restaurant</div>
<div class="address-bar">Nordre Frihavnsgade 60 | 2100 København Ø | TLF: 35 38 70 12 | Email:restaurant@savana.dk </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Savana</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="menu.html">Menu</a>
                    </li>
                    <li>
                        <a href="anbefaler.html">Vi anbefaler</a>
                    </li>
                    <li>
                        <a href="contact.php">Find os</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Kontakt
                        <strong>Savana Cafe & Restaurant</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8 google-maps">
                    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Savana%20Cafe%20Og%20Pizzeria%2C%20Nordre%20Frihavnsgade%2C%20K%C3%B8benhavn%2C%20Danmark&key=AIzaSyDV_m8nE2xQeRnlRpOE99G1GstiE6FgIAQ"></iframe>
                   
                </div>
                <div class="col-md-4">
                    <p>Tel:
                        <strong>35 38 70 12</strong>
                    </p>
                    <p>Mobil:
                        <strong>28 35 61 12</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">restaurant@savana.dk</a></strong>
                    </p>
                    <p>Address:
                        <strong>Nordre Frihavnsgade 60
                            <br>2100 København Ø</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Send
                        <strong>Email</strong>
                    </h2>
                    <hr>
                    <p>Hvis du har et spørgsmål, så er eu velkommen til at kontakte os.</p>




                

                    <form id="form1" name="form1" method="post" action="form_mailer.php">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for"name">Navn</label>
                                <input type="text" class="form-control" name="name" id="name">

                            </div>

                            <div class="form-group col-lg-4">

                                <label for="email">email</label>
                                 <input type="text" class="form-control" name="email">
                            </div>


                            <div class="form-group col-lg-12">
                                <label for="question">Spørgsmål</label>
                                <textarea name="question" id="question" class="form-control" rows="6"></textarea>
                            </div>


                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Send</button>
                            </div>

                        </div>

                    </form>















                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Nordre Frihavnsgade 60 | 2100 København Ø | TLF: 35 38 70 12 | Email:restaurant@savana.dk</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
