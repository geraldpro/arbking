@extends('layout.front.master')
@section('body')
<body>
		<nav>
					<div class="nav-wrapper"><a class="logo" href="/"><img src="img/logos/transparenttt-logo.png" alt="ARBKING logo"></a>
						<ul>
							<li><a href="#about">Matchbet</a></li>
							<li><a href="#auto-arbitrage">Auto-Arbitrage</a></li>
							<li><a href="#ui">About ArbKing</a></li>
							<li><a href="#contact">contact us</a></li>
							<li><a class="btn" href="{{url('register')}}" >Sign-up</a></li>
							<li id="login-nav"><a class="btn" href="{{url('login')}}">Login</a>
							</li>
						</ul>
					</div>
				
				</nav>
			
		<section id="hero">
			<div id="numbers"></div>
			<header>
				<h1 style="font-family: Acumin Pro,sans-serif;">Matchbet with Arbking, lock-in profit</h1>
				<h2>Place our A.I generated Lay bets, back the bets up   <br>with your favorite bookie and lock-in profit with our  <br> shield  bonus. That Simple!</h2>
				<ul>
					<li><a class="btn sign-up-now" href="#" >Sign Up Now</a></li>
				</ul>
			</header>
		</section>
		<section id="about">
			<div class="wrapper" >
				<h3><span class="blue">Matchbet</span></h3>
				<p>
					Arbking-Matchbet trader is an advanced A.I powered match-betting platform, developed with an inbuilt 'implied probability' matcher software that generates sporting trades based on probable occurrence and distributes the trades to users using a special algorithm that ensures a well balanced Stakes over odds risk hedge. Every users risk is perfectly hedged on the platform.
				</p>
				
				
				<div class="carousel">
					<div class="carousel-btns">
						<div class="carousel-btn prev"></div>
						<div class="carousel-btn next"></div>
					</div>
					<ul>
						<li>
							<div class="img" style="background-image: url(img/icon/mitigated-risk-icon.png)" alt="mitigated-risk-icon.png"></div>
							<div class="title">Mitigated Risk</div>
							<div class="blurb">
								<div>Mitigated Risk</div>
							</div>
						</li>
						<li>
							<div class="img" style="background-image: url(img/icon/steady-ROI-icons.png)" alt="steady-ROI-icons.png"></div>
							<div class="title">Steady ROI</div>
							<div class="blurb">
								<div>Steady ROI</div>
							</div>
						</li>
						<li>
							<div class="img" style="background-image: url(img/icon/multicoin-support.png)" alt="multicoin-support.png"></div>
							<div class="title">multi crypto coins supported</div>
							<div class="blurb">
								<div>
									multi crypto coins supported
								</div>
							</div>
						</li>
						<li>
							<div class="img" style="background-image: url(img/icon/fast-withdrawal-icon.png)" alt="ARBKING is the fastest sports betting software of its kind"></div>
							<div class="title">Fast withdrawal</div>
							<div class="blurb">
								<div>Fast With Drawal Icon.</div>
							</div>
						</li>
						<li>
							<div class="img" style="background-image: url(img/icon/auto-matchbet-calculator-icon.png)" alt="auto-matchbet-calculator-icon.png"></div>
							<div class="title">Auto Matchbet calculator</div>
							<div class="blurb">
								<div>Auto Matchbet calculator</div>
							</div>
						</li>
						<li>
							<div class="img" style="background-image: url(img/icon/global-community-icon.jpeg)" alt="global-community-icon.jpeg"></div>
							<div class="title">Global community</div>
							<div class="blurb">
								<div>Global community</div>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</section>
		<section id="auto-arbitrage">
			<h3><span class="blue">Auto-Arbitrage </span></h3>
			<p>Arbking-Auto Arbitrage is an investment arm of Arbking. An A.I bot designed to trade on arbitrage opportunities on Exchange markets like Betfair. The bot seeks to back and lay odds that guarantees a no loss situation. Its designed to trade on low margin profits 24/7. Users will get  of 0.5% to 1% daily ROI in their arb wallets. Users here do not need to take any actions as Auto-arb bot trades on their behalf.</p>
			<ul>
				<li>
					<div class="img" style="background-image: url(img/icon/High-yielding.png)" alt="High-yielding.png"></div>
					<div class="title">High yielding</div>
				</li>
				<li>
					<div class="img" style="background-image: url(img/icon/auto-trader.png)" alt="auto-trader.png"></div>
					<div class="title">Auto trader</div>
				</li>
				<li>
					<div class="img" style="background-image: url(img/icon/fast-withdrawal-icon.png)" alt="fast-withdrawal-icon.png"></div>
					<div class="title">Fast withdrawal</div>
				</li>
				<li>
					<div class="img" style="background-image: url(img/icon/customer-support.png)" alt="customer-support.png"></div>
					<div class="title">24/7 support</div>
				</li>
				<li>
					<div class="img" style="background-image: url(img/icon/crypto-to-fiat.png)" alt="crypto-to-fiat-support.png"></div>
					<div class="title">Crypto to Fiat support</div>
				</li>
			</ul>
			
		</section>
		<section id="api" style="display: none;">
			<h3>ARBKING<span class="blue"></span></h3>
			<p>
				Arbking Sports Fund Llc is Sports-trade tech company registered in Malta, designed with the average trader in mind. Here every trader has more than 96% chances of growing his/her funds in a risk mitigated match-betting and Auto Arbitrage style. Human emotions has no play in any of the trades. Strictly on machine calls. Arbking Sports Fund Llc has built a global community of thriving sports traders who by Arbking's Matchbet algorithm of risk hedging has helped each other maintain a robust ROI, staying a step ahead of the bookmakers
			</p>
			<ul>
				<li>
					<div class="img" style="background-image: url(img/api/reliability.png)" alt="Live price stream"></div>
					<div class="title">Live price stream</div>
				</li>
				<li>
					<div class="img" style="background-image: url(img/api/free.png)" alt="Free Integration Period"></div>
					<div class="title">Free Integration Period</div>
				</li>
				<li>
					<div class="img" style="background-image: url(img/api/integration.png)" alt="Simple Integration with 40+ bookies"></div>
					<div class="title">Simple Integration with 40+ bookies</div>
				</li>
				<li>
					<div class="img" style="background-image: url(img/api/support.png)" alt="Expert Technical Support"></div>
					<div class="title">Expert Technical Support</div>
				</li>
				<li>
					<div class="img" style="background-image: url(img/api/documentation.png)" alt="Comprehensive Documentation"></div>
					<div class="title">Comprehensive Documentation</div>
				</li>
			</ul>
			<div class="btns"><a class="btn" href="#contact" target="_blank" data-message="I'm writing to you to request documentation for ARBKING API"><span>Request Documentation</span><img src="img/api/download.png" alt="Download API documentation"></a></div>
		</section>
		<section id="ui">
			<div class="wrapper">
				<h3><span class="blue">ABOUT ARBKING</span></h3>
				<p>
				Arbking Sports Fund Llc is Sports-trade tech company registered in Malta, designed with the average trader in mind. Here every trader has more than 96% chances of growing his/her funds in a risk mitigated match-betting and Auto Arbitrage style. Human emotions has no play in any of the trades. Strictly on machine calls. Arbking Sports Fund Llc has built a global community of thriving sports traders who by Arbking's Matchbet algorithm of risk hedging has helped each other maintain a robust ROI, staying a step ahead of the bookmakers.
			</p>
				<ul>	
					<li>
						<div class="img" style="background-image: url(img/ui/working-orders.png)" alt="Auto-placement once order prices match"></div>
						<div class="blurb">Working Orders (auto-placement once order prices match)</div>
					</li>
					<li>
						<div class="img" style="background-image: url(img/ui/cash-money.png)" alt="Multiple currencies"></div>
						<div class="blurb oneline">Multiple currencies</div>
					</li>
					
					<li>
						<div class="img" style="background-image: url(img/ui/accounting.png)" alt="Comprehensive accounting software &amp; full audit history"></div>
						<div class="blurb">Comprehensive accounting software &amp; full audit history</div>
					</li>
					
				</ul>
			</div>
		</section>
		
		<section id="contact">
			<div id="sides">
			<h3>Contact<span class="blue">Us</span></h3>
			<p>Drop us a line. We usually respond within 24 hours of receiving your email.</p>
			<div class="no-error" id="contact-error"></div>
			<div class="no-success" id="contact-success">Thanks for getting in touch. We have received your message and will be in contact with you soon.</div>
			<div id="left">
			<form>
				<div class="row double">
					<input name="name" placeholder="Name">
					<input name="email" placeholder="Email" type="email">
					<input name="language" value="en" type="hidden">
				</div>
				<div class="row">
					<div name="how" placeholder="Your favorite Bookmaker (web address) ?" contenteditable></div>
				</div>
				
				<div id="captcha-container"></div>
				<div class="row">
					<textarea class="messages" rows="50" cols="30" placeholder="Type your text"></textarea>
				</div>
				<input name="submit" type="submit" value="Submit">
				
			</form>
			</div>
			<div id="right">
				<div class="right-div-contact-infor">
				<br> <br>
				<b>Arbking Sports funds.</b> <br> <br> <br>
				<p>Chequers court, Triq Lorenzo  Gatt, Birkirkara, Malta, BKR4020.</p>
				<p>Email Us @...  Hello@arbking.com , trade@arbking.com</p>
				<p><strong>We are social</strong>  <br><br>
					<span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
					<span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
					<span><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
					<span><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
					<span><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></span>
					<span><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></span>
					<span><a href="#"><i class="fa fa-reddit" aria-hidden="true"></i></a></span>
				
				</p>
				</div>
			</div>
		</div> <!-- sides -->
		</section>
		
	</body>

@stop