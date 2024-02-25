@extends('layouts.library')
@section('main')

  <!-- Div Width Default -->
  <div id="divAboveWidth" class="w-full"></div>

  <!-- Reviews -->
  <div id="setWidthScreen" class="w-4">

    <div class="xl:px-margin px-4 py-8 w-full flex flex-col gap-8 h-fit">

      <h2 class="text-center">@lang('home-reviews-title')</h2>

      <!-- Carousel Div For Carsousel And Buttons -->
      <div class="relative z-10 w-full overflow-x-hidden">

        <!-- Carousel Slide -->
        <div id="carousel-slide" class="rounded grid transition-transform duration-500 h-full w-full" style="grid-template-columns: 100% 100%">
        
          <!-- Carousel Item -->
          <div class="w-full bg-neutral-700 flex flex-col justify-between xl:px-32 px-4 text-white xl:py-4 xl:pb-4 pb-12">

            <p class="xl:py-4 py-2">Title</p>

            <div class="py-4 xl:flex items-center justify-start grid grid-cols-2 gap-2">

              <p>Paragraph</p>

            </div>

          </div>

          <!-- Carousel Item -->
          <div class="w-full bg-neutral-700 flex flex-col justify-between xl:px-32 px-4 text-white xl:py-4 xl:pb-4 pb-12">

            <p class="xl:py-4 py-2">Title</p>

            <div class="py-4 xl:flex items-center justify-start grid grid-cols-2 gap-2">

              <p>Paragraph</p>

            </div>

          </div>

        </div>
      
        <!-- Carousel Buttons -->
        <div class="absolute top-0 w-full h-full flex justify-between xl:items-center items-end xl:z-auto z-50">
        
          <!-- Previous Button -->
          <button class="cursor-pointer w-32 flex items-center justify-center" id="prevBtn">
            <div class="p-4 xl:h-auto h-16 w-16">
              Left
            </div>
          </button>
          
          <!-- Next Button -->
          <button class="cursor-pointer w-32 flex items-center justify-center" id="nextBtn">
            <div class="p-4 xl:h-auto h-16 w-16">
              Right
            </div>
          </button>
        
        </div>

        <!-- Carousel Indicator -->
        <div class="absolute bottom-0 w-full flex justify-center items-center gap-2 p-4 xl:z-auto z-40">
        
          <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="review-0-indicator"></div>

          <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="review-1-indicator"></div>

        </div>
          
      </div>

    </div>

  </div>

    <script>

      class Reviews
      {
        carouselSlide;
        carouselLength;
        prevBtn;
        nextBtn;
        counter;
        automation;

        constructor()
        {
          // Get the carousel slide, the length of the carousel, the previous and next buttons and the counter
          this.carouselSlide = document.querySelector('#carousel-slide');

          // If the carousel slide does not exist, return
          if(!this.carouselSlide)
            return;

          this.carouselLength = (this.carouselSlide.children.length - 1);
          this.prevBtn = document.getElementById('prevBtn');
          this.nextBtn = document.getElementById('nextBtn');
          this.counter = 0;

          // Update the width of the carousel
          window.addEventListener('resize', this.updateWidth.bind(this));
          this.updateWidth();

          // Call the slideAutomatic method
          this.slideAtuomatic();

          // Paint the first indicator
          this.paintIndicator(0);
        }

        updateWidth()
        {
          // Get the width of the carousel
          var setWidthScreen = document.getElementById('setWidthScreen');

          // Set the width of the carousel to 0px
          setWidthScreen.style.width = '0px';

          // Get the width of the div above the carousel
          var widthScreen = document.getElementById('divAboveWidth').offsetWidth;

          // Set the width of the carousel to the width of the div above the carousel
          setWidthScreen.style.width = widthScreen+'px';
        }

        slideAtuomatic()
        {
          // Set an interval to move the carousel every 3 seconds
          this.automation = setInterval(this.slideNext.bind(this), 3000);
        }

        slideNext()
        {
          // If the counter is greater than or equal to the length of the carousel, it means it is in the last slide
          if (this.counter >= this.carouselLength){

            // Set the counter to 0
            this.counter = 0;

            // Move the carousel to the first slide
            this.carouselSlide.style.transform = 'translateX(0%)';

            // Paint the first indicator
            this.paintIndicator(this.counter);

            // Return to avoid the next line of code to be executed
            return;
          }

          // Move the carousel to the next slide
          this.counter++;

          // Move the carousel to the next slide
          this.carouselSlide.style.transform = 'translateX(' + (-100 * this.counter) + '%)';

          // Paint the indicator
          this.paintIndicator(this.counter);
        }

        slidePrev()
        {
          // If the counter is less than or equal to 0, it means it is in the first slide
          if (this.counter <= 0){

            // Set the counter to the last slide
            this.counter = this.carouselLength;

            // Move the carousel to the last slide
            this.carouselSlide.style.transform = 'translateX(' + (-100 * (this.carouselSlide.children.length-1)) + '%)';

            // Paint the last indicator
            this.paintIndicator(this.counter);

            // Return to avoid the next line of code to be executed
            return;
          }

          // Move the carousel to the previous slide
          this.counter--;

          // Move the carousel to the previous slide
          this.carouselSlide.style.transform = 'translateX(' + (-100 * this.counter) + '%)';

          // Paint the indicator
          this.paintIndicator(this.counter);
        }

        clickedNext()
        {
          // Clear the interval
          clearInterval(this.automation);

          // Call the slideNext method
          this.slideNext();
        }

        clickedPrev()
        {
          // Clear the interval
          clearInterval(this.automation);

          // Call the slidePrev method
          this.slidePrev();
        }

        addEventListeners()
        {
          // Add event listeners to the next and previous buttons
          this.nextBtn.addEventListener('click', this.clickedNext.bind(this));
          this.prevBtn.addEventListener('click', this.clickedPrev.bind(this));

          // Add event listeners to the indicators
          for(var i = 0; i <= this.carouselLength; i++){
            var indicator = document.getElementById('review-'+i+'-indicator');
            indicator.addEventListener('click', this.slideIndicator.bind(this));
          }
        }

        slideIndicator(indicator)
        {
          // Clear the interval
          clearInterval(this.automation);

          // Get the index of the indicator clicked
          var index = indicator.target.id.split('-')[1];

          // Set the counter to the index of the indicator clicked
          this.counter = index;

          // Paint the indicator
          this.paintIndicator(index);

          // Move the carousel to the index of the indicator clicked
          this.carouselSlide.style.transform = 'translateX(' + (-100 * this.counter) + '%)';
        }

        paintIndicator(index)
        {
          // Paint all indicators white
          for(var i = 0; i <= this.carouselLength; i++){
              var indicatorClear = document.getElementById('review-'+i+'-indicator');
              indicatorClear.style.backgroundColor = 'rgb(255, 255, 255)';
          }

          // Paint the selected indicator yellow
          var indicator = document.getElementById('review-'+index+'-indicator');
          indicator.style.backgroundColor = 'rgb(255, 215, 0)';
        }

        inHomePage()
        {
          // Check if the carousel slide exists
          return this.carouselSlide != null;
        }
      }

      const reviews = new Reviews();
      if(reviews.inHomePage())
          reviews.addEventListeners();

    </script>

@endsection
