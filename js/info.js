const carousel = document.querySelector('.carousel');

const firstImg = carousel.querySelectorAll('article')[0];
const arrowIcons = document.querySelectorAll('.slider-section i')
let isDragStart = false,isDragging = false, prevPageX, prevScrollLeft, positionDiff;


const showHideIcons =()=>{
  let scrollWidth = carousel.scrollWidth - carousel.clientWidth;
  arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : 'block';
  arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? 'none' : 'block';
}
arrowIcons.forEach(icon => {
  icon.addEventListener('click',()=>{
    let firstImgWidth = firstImg.clientWidth + 40;
    carousel.scrollLeft += icon.id == 'left' ? - firstImgWidth : firstImgWidth;
    setTimeout(() => showHideIcons(),60 );
  });
});
const autoSlide = () => {
  if(carousel.scrollLeft == (carousel.scrollWidth-carousel.clientWidth))return;
  positionDiff = Math.abs(positionDiff);
  let firstImgWidth = firstImg.clientWidth +40;
  let valDifference =firstImgWidth - positionDiff;

  if(carousel.scrollLeft > prevScrollLeft){
    return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff; 
  }
  carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff; 
}
const dragStart =(e)=>{
  isDragStart = true;
  prevPageX =e.pageX || e.touches[0].pageX;
  prevScrollLeft= carousel.scrollLeft
}
const dragging = (e) => {
  if(!isDragStart) return;
  e.preventDefault();
  isDragging = true;
  carousel.classList.add('dragging')
  positionDiff= (e.pageX|| e.touches[0].pageX)-prevPageX;
  carousel.scrollLeft=prevScrollLeft-positionDiff;
  showHideIcons()
}
const dragStop =() =>{
  isDragStart =false;
  carousel.classList.remove('dragging');
  if(!isDragging) return;
  isDragging = false;
  autoSlide();
}

carousel.addEventListener('mousedown',dragStart);
carousel.addEventListener('touchstart',dragStart);
carousel.addEventListener('mousemove',dragging);
carousel.addEventListener('touchmove',dragging);
carousel.addEventListener('mouseup',dragStop);
carousel.addEventListener('mouseleave', dragStop);
carousel.addEventListener('touchend', dragStop);

const secondCarousel = document.querySelector('.second-carousel');
const secondArrowIcons = document.querySelectorAll('.second-slider-section i');

let isSecondDragStart = false, isSecondDragging = false, secondPrevPageX, secondPrevScrollLeft, secondPositionDiff;

const showHideSecondIcons = () => {
  let secondScrollWidth = secondCarousel.scrollWidth - secondCarousel.clientWidth;
  secondArrowIcons[0].style.display = secondCarousel.scrollLeft === 0 ? 'none' : 'block';
  secondArrowIcons[1].style.display = secondCarousel.scrollLeft === secondScrollWidth ? 'none' : 'block';
};

secondArrowIcons.forEach(icon => {
  icon.addEventListener('click', () => {
    let secondFirstImgWidth = secondCarousel.querySelectorAll('article')[0].clientWidth + 40;
    secondCarousel.scrollLeft += icon.id === 'left2' ? -secondFirstImgWidth : secondFirstImgWidth;
    setTimeout(() => showHideSecondIcons(), 60);
  });
});

const autoSecondSlide = () => {
  if (secondCarousel.scrollLeft === (secondCarousel.scrollWidth - secondCarousel.clientWidth)) return;
  secondPositionDiff = Math.abs(secondPositionDiff);
  let secondFirstImgWidth = secondCarousel.querySelectorAll('article')[0].clientWidth + 40;
  let secondValDifference = secondFirstImgWidth - secondPositionDiff;

  if (secondCarousel.scrollLeft > secondPrevScrollLeft) {
    return secondCarousel.scrollLeft += secondPositionDiff > secondFirstImgWidth / 3 ? secondValDifference : -secondPositionDiff;
  }
  secondCarousel.scrollLeft -= secondPositionDiff > secondFirstImgWidth / 3 ? secondValDifference : -secondPositionDiff;
};

const secondDragStart = (e) => {
  isSecondDragStart = true;
  secondPrevPageX = e.pageX || e.touches[0].pageX;
  secondPrevScrollLeft = secondCarousel.scrollLeft;
};

const secondDragging = (e) => {
  if (!isSecondDragStart) return;
  e.preventDefault();
  isSecondDragging = true;
  secondCarousel.classList.add('dragging');
  secondPositionDiff = (e.pageX || e.touches[0].pageX) - secondPrevPageX;
  secondCarousel.scrollLeft = secondPrevScrollLeft - secondPositionDiff;
  showHideSecondIcons();
};

const secondDragStop = () => {
  isSecondDragStart = false;
  secondCarousel.classList.remove('dragging');
  if (!isSecondDragging) return;
  isSecondDragging = false;
  autoSecondSlide();
};

secondCarousel.addEventListener('mousedown', secondDragStart);
secondCarousel.addEventListener('touchstart', secondDragStart);
secondCarousel.addEventListener('mousemove', secondDragging);
secondCarousel.addEventListener('touchmove', secondDragging);
secondCarousel.addEventListener('mouseup', secondDragStop);
secondCarousel.addEventListener('mouseleave', secondDragStop);
secondCarousel.addEventListener('touchend', secondDragStop);
