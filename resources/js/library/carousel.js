class Carousel
{
  id;
  secondsPerSlide;
  carouselSlide;
  carouselLength;
  prevBtn;
  nextBtn;
  counter;
  automation;
  positions;

  constructor(id, secondsPerSlide, slidesPerView)
  {
    this.id = id;
    this.secondsPerSlide = secondsPerSlide;

    this.carouselSlide = document.querySelector('#carousel-slide-'+this.id);
    if(!this.carouselSlide)
      return;

    this.carouselLength = (this.carouselSlide.children.length - 1);
    this.prevBtn = document.getElementById('prevBtn-'+this.id);
    this.nextBtn = document.getElementById('nextBtn-'+this.id);
    this.positions = [];
    this.counter = 0;

    if(slidesPerView == 1)
    {
      for(let i = 0; i <= this.carouselLength; i++)
        this.positions.push(i*-100);
    }
    else if(slidesPerView == 3)
    {
      let currentValue = (100/3);
      for(let i = 0; i <= this.carouselLength; i++)
      {
        this.positions.push(currentValue);
        currentValue -= (100/3);
      }
    }

    this.carouselSlide.style.transform = 'translateX('+this.positions[0]+'%)';

    this.adjustSize();
    window.addEventListener('resize', this.adjustSize.bind(this));
  }

  adjustSize()
  {
    const pageWidth = document.documentElement.clientWidth;
    this.carouselSlide.style.width = pageWidth+'px';
  }

  slideNext()
  {
    // If the counter is greater than or equal to the length of the carousel, it means it is in the last slide
    if (this.counter >= this.carouselLength)
    {
      this.counter = 0;
      this.carouselSlide.style.transform = 'translateX('+this.positions[0]+'%)';
      this.paintIndicator(this.counter);
      return;
    }

    this.counter++;
    this.carouselSlide.style.transform = 'translateX(' + this.positions[this.counter] + '%)';
    this.paintIndicator(this.counter);
  }

  slidePrev()
  {
    // If the counter is less than or equal to 0, it means it is in the first slide
    if (this.counter <= 0)
    {
      this.counter = this.carouselLength;
      this.carouselSlide.style.transform = 'translateX(' + this.positions[this.counter] + '%)';
      this.paintIndicator(this.counter);
      return;
    }

    this.counter--;
    this.carouselSlide.style.transform = 'translateX(' + this.positions[this.counter] + '%)';
    this.paintIndicator(this.counter);
  }

  clickedNext()
  {
    clearInterval(this.automation);
    this.slideNext();
  }

  clickedPrev()
  {
    clearInterval(this.automation);
    this.slidePrev();
  }

  slideIndicator(indicator)
  {
    clearInterval(this.automation);
    var index = indicator.target.id.split('-')[1];
    this.counter = index;
    this.paintIndicator(index);
    this.carouselSlide.style.transform = 'translateX(' + this.positions[this.counter] + '%)';
  }

  paintIndicator(index)
  {
    let defaultColor = document.getElementById('carousel-default-indicator-color-'+this.id).value;
    let selectedColor = document.getElementById('carousel-selected-indicator-color-'+this.id).value;

    for(var i = 0; i <= this.carouselLength; i++){
      var indicatorClear = document.getElementById('carousel-'+i+'-indicator-'+this.id);
      indicatorClear.classList.add(defaultColor);
      indicatorClear.classList.remove(selectedColor);
    }
    
    var indicator = document.getElementById('carousel-'+index+'-indicator-'+this.id);
    indicator.classList.add(selectedColor);
    indicator.classList.remove(defaultColor);
  }

  /* PUBLIC FUNCTIONS FOR NEEDED FUNCTIONS */

  addSlideAtuomatic()
  {
    if(!this.carouselSlide) return;
    this.automation = setInterval(this.slideNext.bind(this), this.secondsPerSlide);
  }

  addArrows()
  {
    if(!this.carouselSlide) return;
    const carouselButtonsDiv = document.getElementById('carousel-buttons-div-'+this.id);
    carouselButtonsDiv.style.display = 'flex';

    this.nextBtn.addEventListener('click', this.clickedNext.bind(this));
    this.prevBtn.addEventListener('click', this.clickedPrev.bind(this));
  }

  addIndicators()
  {
    if(!this.carouselSlide) return;
    const carouselIndicatorsDiv = document.getElementById('carousel-indicators-div-'+this.id);
    carouselIndicatorsDiv.style.display = 'flex';

    this.paintIndicator(0);

    for(var i = 0; i <= this.carouselLength; i++){
      var indicator = document.getElementById('carousel-'+i+'-indicator-'+this.id);
      indicator.addEventListener('click', this.slideIndicator.bind(this));
    }
  }
}

const example = new Carousel('example', 3000, 1);
example.addSlideAtuomatic();
example.addIndicators();
example.addArrows();

const example2 = new Carousel('example2', 3000, 3);
example2.addSlideAtuomatic();
example2.addIndicators();
