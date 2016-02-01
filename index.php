<?php get_header(); ?>
		<!-- header -->
	<header style="background-image: url('http://www.rezafitriaman.nl/wp-content/uploads/2016/01/bg_header-1.jpg')" id="home">
        <div class="intro-content">
            <img src="http://www.rezafitriaman.nl/wp-content/uploads/2016/01/brand.png" class="img-responsive img-centered" alt="">
            <div class="brand-name"><?php bloginfo( 'name' ); ?></div>
            <hr class="colored">
            <div class="brand-name-subtext"><?php bloginfo( 'description'  ); ?></div>
            <div class="padding-top-80">
            <button type="button" class="btn btn-warning input-lg intro-text center" data-toggle="modal" data-target="#mymodal">
				Voorbeeld Berekening
			</button>
			</div>
        </div>
    </header>		
				
	<!-- Modal voorbeeld berekeningen -->		
				<div class="modal fade woorden" id="mymodal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="text-center bold">Bereken Return on Investment van webshop.nl</h3>
							</div>
							<div class="modal-body">
								<div class="panel panel-default">
									<h3 class="text-center bold">100.000 Bezoekers</h3>
								</div>
									<div class="text-center">
										<span class="glyphicon glyphicon-arrow-down color-blue"></span>
									</div>
									<div class="panel-body">
									<!-- form voorbeeld-->
										<form>
											<div class="form-group text-center">
												<div class="col-md-2 col-sm-2">
													<label for="direct" class="control-label">Direct</label>
													<input type="text" class="form-control" id="direct" placeholder="20%"/>
												</div>
												<div class="col-md-2 col-sm-2">
													<label for="google" class="control-label">Google</label>
													<input type="text" class="form-control" id="google" placeholder="10%"/>
												</div>
												<div class="col-md-2 col-sm-2">
													<label for="adwords" class="control-label">AdWords</label>
													<input type="text" class="form-control" id="adwords" placeholder="35%"/>
												</div>
												<div class="col-md-2 col-sm-2">
													<label for="verwijzende" class="control-label">Sites</label>
													<input type="text" class="form-control" id="verwijzende" placeholder="10%"/>
												</div>
												<div class="col-md-2 col-sm-2">
													<label for="overig" class="control-label">Overig</label>
													<input type="text" class="form-control" id="overig" placeholder="15%"/>
												</div>
												<div class="col-md-2 col-sm-2">
													<label for="onbetaald" class="control-label">Onbetaald</label>
													<input type="text" class="form-control" id="onbetaald" placeholder="10%"/>
												</div>
											</div>
										</form>	
												<div class="row text-center">
													<div class="col-md-12">
														<span class="glyphicon glyphicon-arrow-down color-blue"></span>
													</div>
												</div>
												<div class="row text-center">
													<div class="col-md-12">
														<h5>Betaald verkeer is 35% Adwords + 10% links <h4 class="bold">(Samen 45%)</h4></h5>
													</div>
												</div>
												<div class="row text-center">
													<div class="col-md-12">
														<span class="glyphicon glyphicon-arrow-down color-blue"></span>
													</div>
												</div>
												<div class="row text-center">
													<div class="col-md-12">
														<h5>45% van 100.000 bezoekers is <h4 class="bold">45.000 bezoekers kopen</h4></h5>
													</div>
												</div>
												<div class="row text-center">
													<div class="col-md-12">
														<span class="glyphicon glyphicon-arrow-down color-orange"></span>
													</div>
												</div>
												<div class="row text-center">
													<div class="col-md-12">
														<h5>Voor adwords zijn 35% van 100.000 bezoekers nodig is 35.000. Met de ingevoerde zoektermen zijn er 0 bezoekers mogelijk.</h5>
														<h5 class="color-red"><span class="glyphicon glyphicon-remove-circle"></span> Dit is dus niet mogelijk</h5>
													</div>
												</div>
										<form>
											<div class="row text-center">
												<div class="form-group col-md-6 col-xs-6">
													<label for="doelstelling" class="control-label">Doel/omzet per maand</label>
													<input type="text" class="form-control" id="doelstelling" placeholder="€ 100.000">
												</div>
												<div class="form-group col-md-6 col-xs-6">
													<label for="marge" class="control-label">Marge</label>
													<select id="marge" class="form-control">
														<option value="text">> 15%</option>
														<option value="text">< 15%</option>
													</select>
												</div>
											</div>
										</form>	
										<div class="row text-center">
											<div class="col-md-12 col-xs-12">
												<span class="glyphicon glyphicon-arrow-down"></span>
											</div>
										</div>
										<form>
											<div class="row text-center">
												<div class="form-group col-md-6 col-xs-6">
													<label for="waarde" class="control-label">Gemiddelde bestel waarde</label>
													<input type="text" class="form-control" id="waarde" placeholder="€ 100">
												</div>
												<div class="form-group col-md-6 col-xs-6">
												</div>
											</div>
										</form>
										<div class="row text-center">
											<div class="col-md-6 col-xs-6">
												<span class="glyphicon glyphicon-arrow-down"></span>
											</div>
											<div class="col-md-6 col-xs-6">
													
												
											</div>
										</div>
										<form>
											<div class="row">
												<div class="form-group col-md-6 col-xs-6">
													<label for="benodigde" class="control-label">Benodigde bestellingen (conversie)</label>
													<input type="text" class="form-control" id="benodigde" placeholder="1.000">
												</div>
												<div class="form-group col-md-6 col-xs-6">
												</div>
											</div>
										</form>
										<div class="row text-center">
											<div class="col-md-6 col-xs-6">
												<span class="glyphicon glyphicon-arrow-down"></span>
											</div>
											<div class="col-md-6 col-xs-6">
													
											</div>
										</div>	
										<form>
											<div class="row text-center">
												<div class="form-group col-md-6 col-xs-6">
													<label for="conversie" class="control-label">Conversie</label>
													<input type="text" class="form-control" id="conversie" placeholder="1%">
												</div>
												<div class="form-group col-md-6 col-xs-6">
												</div>
											</div>
										</form>	
										<form>
											<div class="row text-center">
												<div class="form-group col-md-6 col-xs-6">
													
												</div>
												<div class="form-group col-md-6 col-xs-6">
														<label for="marketing" class="control-label">Budget marketing</label>
													<input type="text" class="form-control" id="marketing" placeholder="7,5%">
														<h5>=<h5>
														<input type="text" class="form-control" id="marketing" placeholder="€ 7.500">
												</div>
											</div>
										</form>	
										<div class="row text-center">
											<div class="col-md-12 col-xs-12">
												<span class="glyphicon glyphicon-arrow-down color-orange"></span>
											</div>
										</div>
										<div class="row text-center">
											<div class="col-md-12">
												<h5>Gemiddelde CPC is € 7.500 / 45.000 bezoekers. <h4 class="bold">€ 0,17 budget per bezoek </h4></h5>
												<h5>De ingevoerde zoektermen hebben een gemiddeld CPC van €1</h5>
												<h5 class="color-red"><span class="glyphicon glyphicon-remove-circle"></span> Uw budget is dus ontoereikend.</h5>
											</div>
										</div>
									</div>
									<div class="text-center">
										<h3 class="bold">Analyse zoektermen</h3>
										<h4>Google KeyWord Tool<h4>
									</div>
									<form>
										<div class="form-group text-center">
											<div class="col-md-12 col-xs-12">
												<label for="zoektermen1" class="control-label">Zoektermen</label>
												<input type="text" class="form-control" id="zoektermen1" placeholder="zoekterm 1">
											</div>
											<div class="col-md-12 col-xs-12 padding-top-10">
												<input type="text" class="form-control" id="zoektermen2" placeholder="zoekterm 2">
											</div>
											<div class="col-md-12 col-xs-12 padding-top-10">
												
												<input type="text" class="form-control" id="zoektermen3" placeholder="zoekterm 3">
											</div>
											<div class="col-md-12 col-xs-12 padding-top-10">
												
												<input type="text" class="form-control" id="zoektermen4" placeholder="zoekterm 4">
											</div>
											<div class="col-md-12 col-xs-12 padding-top-10">
												
												<input type="text" class="form-control" id="zoektermen5" placeholder="zoekterm 5">
											</div>
										</div>
									</form>
								<div class="row">
									<div class="col-md-4 col-xs-4 padding-top-10">
										<h5 class="text-center">SEO</h5>
									</div>
									<div class="col-md-4 col-xs-4 padding-top-10">
										<h5 class="text-center">Gemiddelde CPC</h5>
									</div>
									<div class="col-md-4 col-xs-4 padding-top-10">
										<h5 class="text-center">Geschat zoekvolume</h5>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4">
										<h5 class="text-center"><a href="http://www.google-seo-tool.nl/?domein=webshop.nl&keyword[]=" target="_blank">Klik hier voor een uitgebreid SEO rapport</a></h5>
									</div>
									<div class="col-md-4 col-xs-4">
										<h5 class="text-center">Gemiddeld CPC obv totaal zoekvolume: €1</h5>
									</div>
									<div class="col-md-4 col-xs-4">
										<h5 class="text-center">Totaal geschat zoekvolume: 0</h5>
									</div>
								</div>
									
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
							</div>
						</div>
					</div>
				</div><!-- End Modal voorbeeld berekeningen -->
		
			
	<!-- omgekeerderoi form -->
	<div class="container padding-top-40 padding-bottom-50" id="roi-tools">
		<div class="panel panel-default">
			<?php
				$args = array(
					'page_id' => '71',
					);
			
				$wp_query = new WP_Query( $args );
					if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
			
			?>
			<div class="panel-heading"> 
				<h2 class="text-center name"><?php the_title();?></h2>
			
			<?php the_content();?>
			<!--</div>
			<div class="panel-body">
					<form>
						<div class="row padding-top-10 woorden">
							<div class="col-md-4 padding-top-10">
								<label for="gewenste" class="control-label">Gewenste omzet / maand</label>
								<input type="text" class="form-control" id="gewenste" placeholder="100.000 euro" />
							</div>
							<div class="col-md-4 padding-top-10">
								<label for="marge" class="control-label">Marge</label>
								<select id="marge" class="form-control">
									<option value="text">> 15%</option>
									<option value="text">< 15%</option>
								</select>
							</div>
							<div class="col-md-2 padding-top-10">
								<label for="conversie" class="control-label">Conversie %</label>
								<input type="text" class="form-control" id="conversie" placeholder="1 procent" />
							</div>
							<div class="col-md-2 padding-top-10">
								<label for="conversie" class="control-label">Conversie %</label>
									<div class="checkbox">
										<label> 
											<input type="checkbox"/>Weet ik niet
										</label>
									</div>
							</div>
						</div>
						
							
						<div class="row padding-top-10">
							<div class="col-md-10 padding-top-10">
								<label for="gemiddelde" class="control-label woorden">Gemiddelde bestel waarde</label>
								<input type="text" class="form-control woorden" id="gemiddelde" placeholder="100 euro"/>
							</div>
						</div>
						
						<div class="row padding-top-10">
							<div class="col-md-10 padding-top-10">
								<label for="webshop" class="control-label woorden">URL-webshop</label>
								<input type="text" class="form-control woorden" id="webshop" placeholder="webshop.nl"/>
							</div>
						</div>	
						
						
						<div class="row padding-top-10">
							<div class="col-md-10 padding-top-10">
								<label for="email" class="control-label woorden">E-mailadres</label>
								<input type="text" class="form-control woorden" id="email" placeholder="infor@webshop.nl"/>
							</div>
						</div>
						
						
						<div class="row padding-top-10">
							<div class="col-md-10 padding-top-10">
									<label for"zoekterm1" class="control-label">Zoekterm1</label>
									<input type="text" class="form-control woorden" id="zoekterm1" placeholder="zoekterm 1"/>
							</div>
						</div>
						<div class="row padding-top-10">
							<div class="col-md-10 padding-top-10">
								<input type="text" class="form-control woorden" id="zoekterm2" placeholder="zoekterm 2"/>
							</div>
						</div>
						<div class="row padding-top-10">
							<div class="col-md-10 padding-top-10">
								<input type="text" class="form-control woorden" id="zoekterm3" placeholder="zoekterm 3"/>
							</div>
						</div>
						<div class="row padding-top-10">
							<div class="col-md-10 padding-top-10">
								<input type="text" class="form-control woorden" id="zoekterm4" placeholder="zoekterm 4"/>
							</div>
						</div>
						<div class="row padding-top-10">
							<div class="col-md-10 padding-top-10">
								<input type="text" class="form-control woorden" id="zoekterm5" placeholder="zoekterm 5"/>
							</div>
						</div>
						
							
						<div class="row padding-top-10">
							<div class="col-md-10 padding-top-10">
									<div class="checkbox woorden">
										<label>
											<input type="checkbox"/>Ja, ik wil mij graag aanmelden voor de nieuwsbrief
										</label>
									</div>
							</div>
						</div>
						
								
						<div class="row padding-top-10">
							<div class="col-md-2 padding-top-10">
							<button type="button" class="btn btn-success woorden">Genereer ROI</button>
							</div>
						</div>
					</form> 
				</div>-->
			<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
		</div>
	</div> <!-- End omgekeerderoi form -->
					
	<!-- Zij gingen u voor -->
	<div class="bg-color-blue">	
		<div class="container text-center col-md-12 padding-bottom-30 padding-top-40">
			<?php
				$args = array(
					'page_id' => '107',
					);
			
				$wp_query = new WP_Query( $args );
					if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
			
			?>
		<h2 class="name color-white"><?php the_title();?></h2>
			<hr class="colored">
		</div>	
			<div class="container text-center padding-bottom-80">
				<div class="row">
			<?php the_content();?>
			<!--<div class="col-md-3 col-sm-2">
				<p class="woorden">wilsumerberge.nl</p>
			</div>
			<div class="col-md-3 col-sm-2">
				<p class="woorden">bewakingscamera.nl</p>
			</div>
			<div class="col-md-2 col-sm-2">
				<p class="woorden">meinhollandrad.com</p>
			</div>
			<div class="col-md-2 col-sm-2">
				<p class="woorden">house.nl</p>
			</div>
			<div class="col-md-2 col-sm-2">
				<p class="woorden">shoping.com</p>
			</div>-->
				</div>
			</div>
			<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?> 
	</div><!-- End Zij gingen u voor -->
			
	<!-- nieuwsbrief-->
	<div class="bg-color-orange">				
		<div class="container">
			<div class="row padding-top-40">
				<div class="col-md-12 col-sm-12 text-center">
					<h4 class="name">aanmelden voor nieuwsbrief</h4>
				</div>
			</div>
				<div class="container col-md-12 col-sm-12 text-center padding-bottom-80 ">
				<form class="form-inline padding-top-15" role="form">
    				<div class="form-group">
            			<input type="email" class="form-control input-lg margin-right-10" id="email" placeholder="email adres">
    				</div>
       				<button type="submit" class="btn btn-success input-lg">Aanmelden</button>
  				</form>
  				</div>		
			</div>
	</div>

	<!-- Andere tools -->
	<div class="padding-top-80" style="background-image: url('http://www.rezafitriaman.nl/wp-content/uploads/2016/01/bg_header-1.jpg'); background-attachment:fixed;">
		<?php
			$args = array(
				'page_id' => '121',
				);
			
			$wp_query = new WP_Query( $args );
				if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
			
		?>
		<div class="container padding-top-80 padding-bottom-80">
			<div class="row">
			<?php the_content();?>
			<!--<div class="col-md-4 col-sm-4">
					<img class="img-responsive center-block" style="width: 45px" src="<?php echo get_template_directory_uri(); ?>/img/search.png"/>
					<img class="img-responsive center-block padding-top-10" style="width: 45px" src="<?php echo get_template_directory_uri(); ?>/img/streep-rood.png"/>
					<p class="color-white text-center padding-top-10"><a href="http://www.google-seo-tool.nl/" target="_blank" class="color-white tools">Google SEO Tool</a></p>
				</div>
				<div class="col-md-4 col-sm-4">
					<img class="img-responsive center-block" style="width: 45px" src="<?php echo get_template_directory_uri(); ?>/img/back.png"/>
					<img class="img-responsive center-block padding-top-10" style="width: 45px" src="<?php echo get_template_directory_uri(); ?>/img/streep-blauw.png"/>
					<p class="color-white text-center padding-top-10"><a href="http://www.pagerank-backlink-tool.nl/" target="_blank" class="color-white tools">PageRank BackLink Tool</a></p>
				</div>
				<div class="col-md-4 col-sm-4">
					<img class="img-responsive center-block" style="width: 45px" src="<?php echo get_template_directory_uri(); ?>/img/word.png"/>
					<img class="img-responsive center-block padding-top-10" style="width: 45px" src="<?php echo get_template_directory_uri(); ?>/img/streep-bruin.png"/>
					<p class="color-white text-center padding-top-10"><a href="http://www.keyword-tool-google.nl/" target="_blank" class="color-white tools">KeyWord Tool</a></p>
				</div>-->
			</div>
			<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
		</div>
	</div>	<!-- End Andere tools -->
		
	<!-- Info Schelte -->		
	<div class="bg-color-dark padding-bottom-80" id="schelte-meinsma">					
		<div class="container text-center padding-top-80">
			<h2 class="color-white name">SCHELTE MEINSMA</h2>
			<p class="color-white woorden">Strategisch online marketeer</p>
		</div>					
		<div class="container padding-top-80"><!-- foto en gegevens linkerkant -->
			<div class="row">
				<?php // retrieve one post with an ID of 9
					query_posts('p=9');
				?>
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post(); 
					?>
				<!-- col foto, specialismen -->		
				<div class="col-md-6 col-sm-6"><!-- foto, specialisment aan linkerkant -->
					<?php the_post_thumbnail( 'full', array( 'class' => 'img-circle img-responsive center-block' ) );?><!-- <img class="img-circle img-responsive center-block" src="/img/scheltemeinsma.jpg"/> -->
					<p class="color-white text-center padding-top-40 woorden"><?php the_title(); ?></p>
					<div class="row text-center center woorden">
						<?php the_content( array( '' => '' ) );?>
						<!--<span class="label label-info">Online Strategie</span>
							<span class="label label-info">Alles over Google</span>
							<span class="label label-info">Succesvol op internet</span>
							<span class="label label-info">Webwinkels met resultaat</span>-->
					</div>
					<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
				</div ><!-- End col foto, specialismen -->
				
				<!-- over mij -->	
				<div class="col-md-6 col-sm-6"><!-- over mij en tekst aan rechterkant -->
					<?php // retrieve one post with an ID of 49
						query_posts('p=49'); ?>
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post(); 
					?>
					<h4 class="color-white text-center page-header woorden"><?php the_title(); ?></h4>
					<?php the_content( array('' => '' ) );?>
					<!--<p class="color-white text-justify woorden">Ik ben Schelte Meinsma, Online Marketing specialist en adviseur. 
						Mijn passie ligt bij het adviseren, trainen en doceren op het gebied 
						van Online Marketing en Google. Voor diverse bedrijven en instellingen 
						geef ik trainingen en workshops op het gebied van Online Marketing en Internet
						Marketing. Ook verzorg ik workshops en lezingen voor ondernemers in opdracht van de Kamer van Koophandel. 
						Als docent bij Lectric Internetopleidingen train ik marketeers op het gebied van Online Marketing en alles wat daar bij komt kijken.
						Als het gaat om Online Marketing is een strategische visie en een conversiegerichte aanpak zeer belangrijk.
						Daarom adviseer ik in het dagelijks leven veel ondernemers en marketeers over de online strategie van hun bedrijf. 
						Want tegenwoordig is een goede online strategie van levensbelang voor elk bedrijf!</p>--> 
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div> <!-- End Info Schelte -->

	<!-- contact mij form -->	
	<div class="padding-bottom-80 bg-color-white" id="vragen">
		<div class="container text-center padding-top-80">
			<h1 class="name color-blue">VRAGEN</h1>
			<p class="woorden color-blue">Stuur mij e-mail</p>
		</div>
		<div class="container padding-top-40">
			<form rol="form">
			<?php
				$args = array(
					'page_id' => '179',
					);
			
				$wp_query = new WP_Query( $args );
					if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
			?>
			<?php the_content();?>
			<!-- <div class="row">
					<div class="form-group col-md-4 padding-top-10">
						<input type="email" class="form-control woorden" id="email" name="email" placeholder="email adres"/>
					</div>
					<div class="form-group col-md-4 padding-top-10">
						<input type="text" class="form-control woorden" id="naam" name="naam" placeholder="voornaam en achternaam"/>
					</div>
					<div class="form-group col-md-4 padding-top-10">
						<input type="text" class="form-control woorden" id="subject" name="subject" placeholder="subject"/>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-12 padding-top-10">
					<textarea class="form-control woorden" name="bericht" placeholder="type je bericht hier"></textarea>
					</div>
				</div>
				
							
					<div class="row">
						<div class="col-md-2">
						<button type="button" class="btn btn-success">Send</button>
						</div>
				</div>--><!-- End Button send ROI -->
			<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
			</form>
		</div>
	</div><!-- End contact mij form -->
<?php get_footer(); ?>	