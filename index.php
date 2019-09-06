<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="shortcut icon" href="/images/dpfavicon.jpg">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DuelPool - Online Sports</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="fontawesome-free-5.10.2-web/css/fontawesome.css" rel="stylesheet">
        <link href="fontawesome-free-5.10.2-web/css/brands.css" rel="stylesheet">
        <link href="fontawesome-free-5.10.2-web/css/solid.css" rel="stylesheet">
        <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css">
        <link rel="stylesheet" href="css/app.css" >
    </head>
    <body>
        <div class="container">
            <div class="title">
            </div>
            <div class="get-started col-md-8">
                <h1>GET STARTED</h1>
                <ol>
                    <li>
                        Sign Up Today Below! And receive your $5 bonus and use towards any DuelPool contest.
                    </li>
                    <li>
                        Invite Your Friends - Send them your username, they will need it for signing up and the referral.
                    </li>
                    <li>
                        Your Friends Sign Up & Deposit - Your friend signs up and deposits. Make sure they use your correct username!
                    </li>
                    <li>
                        Get Your Bonus - Play with your friends and receive your bonus. You'll receive your referral contest ticket valid for any DuelPool contest.
                    </li>
                </ol>
            </div>
            <div class="knowledge col-md-8">
                <h2>TEST YOUR SPORTS KNOWLEDGE</h2>
                <ul>
                    <li>
                        Just $5 to play!
                    </li>
                    <li>
                        Compete against other sports fans across North America!
                    </li>
                    <li>
                        Predict the outcome of every game in your DuelPool contest.
                    </li>
                    <li>
                        Select the most correct and win or share the contest prize!
                    </li>
                </ul>
            </div>
        </div>
        <div class="icons">
            <div class="row">
                <div class="col-sm text-center">
                    <h3>WIN CASH PRIZES</h3>
                    <i class="far fa-money-bill-alt fa-7x"></i>
                </div>
                <div class="col-sm text-center">
                    <h3>COMPETE AGAINST OTHER SPORTS FANS ACROSS NORTH AMERICA</h3>
                    <i class="fas fa-trophy fa-7x"></i>
                </div>
                <div class="col-sm text-center">
                    <h3>JUST 5$ TO PLAY</h3>
                    <i class="fas fa-money-bill-wave fa-7x"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-sm text-center">
                    <h3>PREDICT THE OUTCOMES AND SELECT THE MOST GAMES CORRECT TO WIN YOUR CONTEST POOL!</h3>
                    <i class="fas fa-vote-yea fa-7x"></i>
                </div>
                <div class="col-sm text-center">
                    <h3>EACH ENTRY IS A DIFFERENT SPORT </h3>
                    <i class="fas fa-football-ball fa-7x"></i>
                </div>
            </div>
        </div>
        <div class="how-to-play-container">
            <div class="container">
                <div class="how-to-play col-sm">
                    <h2>HOW TO <strong>PLAY</strong></h2>
                    <ul>
                        <li>
                            Select your DuelPool contest for the following sports, NFL, NHL, NBA and MLB.
                        </li>
                        <li>
                            Make your predictions by selecting either the Visitor or Home team for each game in your DuelPool contest entry.
                        </li>
                        <li>
                            Make your predictions by selecting either the Visitor or Home team for each game in your DuelPool contest entry.
                        </li>
                        <li>
                            Submit your completed DuelPool entry by the closing period (start of the first game in the contest), you may edit your entry anytime before the closing period.
                        </li>
                    </ul>
                </div>
                <div class="how-to-win col-sm">
                    <h2>HOW TO <strong>WIN</strong></h2>
                    <ul>
                        <li>
                            It’s simple, if you choose the most correct games in your DuelPool contest, you win!
                        </li>
                        <li>
                            The prize for a DuelPool entry will be shared by all selections matching the highest number of correct predictions. For example, if 10 games are in a DuelPool contest,
                            and no player correctly predicted all 10, the prize pool is then shared by all selections matching 9 out of 10. If nobody correctly predicted either 10 or 9,
                             the prize pool goes to all selections matching 8 - and so on. There are no subsidiary prizes.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-container">
            <div class="container">
                <form action="registration.php" method="post">
                    <div class="contianer">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Sign up for 5$ towards your first Duel!</h2>
                                <hr>
                                <label for"firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" required>
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" required>
                                <label for="username">Pick a username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Capital letter, and at least one number required" required>
                                <label for="referall">Referall</label>
                                <input type="referal" class="form-control" id="referall" name="referall" placeholder="The username of the person that referred you">
                                <hr>
                                <input type="submit" id="register" class="btn btn-primary button" name="create" value="Sign Up">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="fontawesome-free-5.10.2-web/js/brands.js"></script>
    <script defer src="fontawesome-free-5.10.2-web/js/solid.js"></script>
    <script defer src="fontawesome-free-5.10.2-web/js/fontawesome.js"></script>
    <script src="fontawesome-free-5.10.2-web/js/all.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
    </body>
</html>
