#  💪 Responsive Gym Website Design
## [Watch it on youtube](https://youtu.be/ddaY0rHqMxM)
### 💪 Responsive Gym Website Design

- Responsive Gym Website Design Using HTML CSS & JavaScript
- Contains animations when scrolling.
- Includes a form to calculate body mass index.
- Includes a form to send emails.
- Developed first with the Mobile First methodology, then for desktop.
- Compatible with all mobile devices and with a beautiful and pleasant user interface.

💙 Join the channel to see more videos like this. [Bedimcode](https://www.youtube.com/c/Bedimcode)

![preview img](/preview.png)


            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <h2 class="home__subtitle">MAKE YOUR</h2>
                        <h1 class="home__title">BODY SHAPE</h1>
                        <p class="home__description">
                            In here we will help you to shape and build your ideal 
                            body and live your life to the fullest.
                        </p>
                        <a href="#" class="button button__flex">
                           Get Started <i class="ri-arrow-right-fill"></i>
                        </a>
                    </div>
                    <div class="home__images">
                        <img src="assets/img/home-img.png" alt="home image" class="home__img">

                        <div class="home__triangle home__triangle-3"></div>
                        <div class="home__triangle home__triangle-2"></div>
                        <div class="home__triangle home__triangle-1"></div>
                    </div>
                </div>
            </section>





//to remove the above displayed message in 3seconds
        setTimeout(() =>{
            calculateMessage.textContent = ''
        }, 3000)
    }else{
        //formula to calculate BMI
        const cm = calculateCm.value/100,
              kg = calculateKg.value,
              bmi = Math.round(kg/(cm * cm))


              // to show the health status of entered value
              if(bmi < 18.5){
                calculateMessage.classList.add('color-green')
                calculateMessage.textContent = 'Your BMI is $(bmi) and you are skinny '
              } else if(bmi <25){
                calculateMessage.classList.add('color-green')
                calculateMessage.textContent = 'Your BMI is $(bmi) and you are healthy '
              }
              else{
                calculateMessage.classList.add('color-green')
                calculateMessage.textContent = 'Your BMI is $(bmi) and you are overwweight '
              }

              //to clear the input field
              calculateCm.value = ''
              calculateKg.value = ''

              //remove message in four seconds

              setTimeout(() =>{
                calculateMessage.textContent = ''
              } ,4000)
    }
}


calculateForm.addEventListener('submit', calculateBmi)