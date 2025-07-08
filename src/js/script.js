document.addEventListener("DOMContentLoaded", function () {
  // Более надежный выбор элементов
  const carousel = document.querySelector(".postmain")
  if (!carousel) {
    console.error("Карусель не найдена! Проверьте селектор.")
    return
  }

  const imagesContainer = carousel.querySelector(".carousel-images")
  const images = carousel.querySelectorAll(".carousel-images img")
  const prevBtn = document.querySelector(".prev-btn")
  const nextBtn = document.querySelector(".next-btn")

  // Проверка наличия всех элементов
  if (!imagesContainer || !images.length || !prevBtn || !nextBtn) {
    console.error("Не все элементы карусели найдены! Проверьте HTML-структуру.")
    return
  }

  let currentIndex = 0
  const totalImages = images.length

  function updateCarousel() {
    imagesContainer.style.transform = `translateX(-${currentIndex * 100}%)`
  }

  function showNextImage() {
    currentIndex = (currentIndex + 1) % totalImages
    updateCarousel()
  }

  function showPrevImage() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages
    updateCarousel()
  }

  // Назначаем обработчики только если элементы существуют
  nextBtn.addEventListener("click", showNextImage)
  prevBtn.addEventListener("click", showPrevImage)
})

// Инициализация карусели
updateCarousel()
