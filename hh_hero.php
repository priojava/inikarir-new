<div class="section">
	<section id="hero-intro" class="hero-intro min-vh-100 d-flex w-100 align-items-center">
		<div class="container mb-5 pb-5">
			<div class="row align-items-center">
				<div class="col-12 col-sm-12 col-md-6">
					<div class="hero-intro__grid mgrid">
						<div class="mgrid-item">
							<div class="ratio ratio-4x3">
								<div class="bg-light rounded">
									<img src="./assets/images/hero-satu.webp" class="position-absolute h-100 w-100 top-0 start-0 bottom-0 end-0" alt="Image">
								</div>
							</div>
						</div>

						<div class="mgrid-item">
							<div class="ratio ratio-8x6">
								<div class="bg-light rounded">
									<img src="./assets/images/hero-empat.webp" class="position-absolute h-100 w-100 top-0 start-0 bottom-0 end-0" alt="Image">
								</div>
							</div>
						</div>

						<div class="mgrid-item">
							<div class="ratio ratio-4x3">
								<div class="bg-transparent">
									<div class="hero-intro__grid-inner h-100 d-flex">
										<div class="mgrid-item-inner bg-light px-0 rounded">
											<div class="h-100 position-relative">
												<img src="./assets/images/hero-dua.webp" class="position-absolute h-100 w-100 top-0 start-0 bottom-0 end-0" alt="Image">
											</div>
										</div>

										<div class="mgrid-item-inner bg-light px-0 rounded">
											<div class="h-100 position-relative">
												<img src="./assets/images/hero-tiga.webp" class="position-absolute h-100 w-100 top-0 start-0 bottom-0 end-0" alt="Image">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.col-6 -->

				<div class="col-12 col-sm-12 col-md-6">
					<div class="hero-intro__content mt-3 mt-md-0">
						<h1 class="fw-bold fs-1 mb-3">
							Where <span class="text-site">Great Companies</span> And <span class="text-site">Great Employees</span> Meet Up
						</h1>

						<div class="text-muted">
							IniKarir is a technology-based company providing human resources services that focus on recruitment, career development and job matching, specialized on emerging specific industries. 
						</div>
                        
                            <div class="custom-checkbox mt-5">
                                <input id="status" type="checkbox" name="status" onchange="ButtonHero();">
                                <label for="status">
                                    <div class="status-switch"
                                        data-unchecked="Company"
                                        data-checked="Job Seeker">
                                    </div>
                                </label>
                            </div>
						
					</div> <!-- /.content -->
				</div> <!-- /.col-6 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.hero-intro -->
</div> <!-- /.section -->
<script>
    $('a').click(function(e) {
	e.preventDefault();
  var input = $(this).attr('data-input');
  var checkbox = $('input:checkbox[name=' + input + ']');
  checkbox.prop("checked", !checkbox.prop("checked"));;
});

</script>
