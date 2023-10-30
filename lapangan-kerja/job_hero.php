<style>

/* CURSOR STYLING WHEN HOVER */
.hover-this {
      transition: all 0.3s ease;
}

.cursor {
      pointer-events: none;
      position: fixed;
      padding: 0.3rem;
      background-color: #075256;
      border-radius: 50%;
      /*mix-blend-mode: difference;*/
      transition: transform 0.3s ease;
}

.hover-this:hover ~ .cursor {
      transform: translate(-50%, -50%) scale(8);
}


@media(max-width: 900px) {
      .hover-this {
            width: 100%;
            padding: 20px 0;
            display: inline-block;
      }
}


</style>

<section id="hero-job-intro" class="hero-job-intro">
	<div class="container">     
	   
		<div class="d-flex justify-content-center align-items-md-center row ">

                  <iframe class="mb-5" width="560" height="515" src="https://www.youtube.com/embed/arAYUv2VG3I?si=q7U3-ISlob319_R9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
           
			<div class="col-8 col-xl-5">
				<div class="hero-job-intro__content">
					<h1 class="fw-bolder fs-1 mb-3">
						Raih <span class="text-site">karir impian</span> dan buka <span class="text-site">potensimu</span>
					</h1>
					<p class="text-muted">IniKarir hadir untuk membantu wujudkan semua karir impianmu</p>
					<div class="custom-checkbox mt-3 mt-md-5">
						<input id="status" type="checkbox" checked="true" name="status" onchange="ButtonHero();">
						<label for="status">
							<div class="status-switch"
								data-unchecked="Company"
								data-checked="Job Seeker">
							</div>
						</label>
					</div>
				</div>
			</div> <!-- /.col -->
			
		
			       
			<div class="col-4 col-xl-5 ">
				<div class="hero-job-intro__image" >
					<img src="../assets/images/ridonew.webp" class="hover-this w-100 h-auto" alt="Image">
					<div class="cursor"></div>
				</div> <!-- /.image -->
			</div> <!-- /.col -->
		</div> <!-- /.flex -->
		
		<!--</div> <!-- /.ball -->
		<!-- </div> <!-- /.anime list -->
		
	</div> <!-- /.container -->
</section> <!-- /.hero job intro -->



<script>
    $(document).ready(function () {
  // Image Animation
  const items = document.querySelectorAll(".anime-list li");
  items.forEach((el) => {
    gsap.set(".hover-img", { xPercent: -50, yPercent: -50 });
    const image = el.querySelector(".hover-img");
    const innerImage = el.querySelector(".hover-img img");
    const pos = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
    const mouse = {
      x: pos.x
    };
    const speed = 0.1;
    const xSet = gsap.quickSetter(image, "x", "px");
    window.addEventListener("mousemove", (e) => {
      mouse.x = e.x;
    });

    gsap.ticker.add(() => {
      const dt = 1.0 - Math.pow(1.0 - speed, gsap.ticker.deltaRatio());
      pos.x += (mouse.x - pos.x) * dt;
      xSet(pos.x);
    });

    var direction = "",
      oldx = 0,
      // Vars
      lastCursorX = null,
      lastCursorY = null,
      cursorThreshold = 150,
      mousemovemethod = function (e) {
        if (e.pageX < oldx && e.clientX <= lastCursorX - cursorThreshold) {
          direction = "left";
          lastCursorX = e.clientX;
          innerImage.style.transform = "rotate(-15deg)";
        } else if (
          e.pageX > oldx &&
          e.clientX >= lastCursorX + cursorThreshold
        ) {
          direction = "right";
          lastCursorX = e.clientX;
          innerImage.style.transform = "rotate(15deg)";
        }
        oldx = e.pageX;
      };
    $(document).on("mousemoveend", function () {
      innerImage.style.transform = "translateX(0%) rotate(0deg)";
    });
    document.addEventListener("mousemove", mousemovemethod);
    (function ($) {
      var timeout;
      $(document).on("mousemove", function (event) {
        if (timeout !== undefined) {
          window.clearTimeout(timeout);
        }
        timeout = window.setTimeout(function () {
          // trigger the new event on event.target, so that it can bubble appropriately
          $(event.target).trigger("mousemoveend");
        }, 100);
      });
    })(jQuery);
  });

  // Mouse Cursor Animation
  gsap.set(".ball", { xPercent: -50, yPercent: -50 });
  const ball = document.querySelector(".ball");
  const pos = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
  const mouse = { x: pos.x, y: pos.y };
  const speed = 0.08;

  const xSet = gsap.quickSetter(ball, "x", "px");
  const ySet = gsap.quickSetter(ball, "y", "px");

  window.addEventListener("mousemove", (e) => {
    mouse.x = e.x;
    mouse.y = e.y;
  });
  gsap.ticker.add(() => {
    const dt = 1.0 - Math.pow(1.0 - speed, gsap.ticker.deltaRatio());
    pos.x += (mouse.x - pos.x) * dt;
    pos.y += (mouse.y - pos.y) * dt;
    xSet(pos.x);
    ySet(pos.y);
  });

  // Hacky Code
  const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  let interval = null;
  const list = document.querySelectorAll(".anime-list li");

  list.forEach((el) => {
    el.onmouseenter = (event) => {
      const target_element = event.target.querySelector("h2");
      let iteration = 0;
      const interval = setInterval(() => {
        target_element.innerText = target_element.innerText
          .split("")
          .map((letter, index) => {
            if (index < iteration) {
              return target_element.dataset.value[index];
            }

            return letters[Math.floor(Math.random() * 26)];
          })
          .join("");

        if (iteration >= target_element.dataset.value.length) {
          clearInterval(interval);
        }
        iteration += 1 / 3;
      }, 20);
    };
  });
});

</script>

<script>
    // CURSOR FUNCTION FOR IMAGE RIDHO
        (function () {
        
              const link = document.querySelectorAll('div > .hero-job-intro__image');
              const cursor = document.querySelector('.cursor');
        
              const animateit = function (e) {
                    const img = this.querySelector('img');
                    const { offsetX: x, offsetY: y } = e,
                    { offsetWidth: width, offsetHeight: height } = this,
        
                    move = 25,
                    xMove = x / width * (move * 2) - move,
                    yMove = y / height * (move * 2) - move;
        
                    img.style.transform = `translate(${xMove}px, ${yMove}px)`;
        
                    if (e.type === 'mouseleave') img.style.transform = '';
              };
        
              const editCursor = e => {
                    const { clientX: x, clientY: y } = e;
                    cursor.style.left = x + 'px';
                    cursor.style.top = y + 'px';
              };
        
              link.forEach(b => b.addEventListener('mousemove', animateit));
              link.forEach(b => b.addEventListener('mouseleave', animateit));
              window.addEventListener('mousemove', editCursor);
        
        })();
</script>