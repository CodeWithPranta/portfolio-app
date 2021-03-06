<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex items-center -mx-3 sm:-mx-4">
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/img/me1.jpg') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/img/me3.jpg') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
            </div>
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="my-4 relative z-10">
                <img
                  src="{{ url('/img/me2.jpg') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
                <x-about-dots></x-about-dots>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
          <div class="mt-10 lg:mt-0">
            <span class="font-semibold text-lg text-primary mb-2 block">
               <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                   "Everything is achievable with hard work"
               </blockquote>
            </span>
            <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
              About Me
            </h2>
            <p class="text-base dark:text-gray-400 mb-8">
              I have been working as a professional software developer for 6+ years. <br />
              During my career, I have worked on various types of projects with various technologies,
              but very often I feel that I am a junior developer who just started coding. <br />
            </p>
            <p class="text-base dark:text-gray-400 mb-8">
              In 2020 I decided to create a Programming blog and share my knowledge. My blog is mostly focused on
              <span class="text-amber-500 font-bold">PHP</span>, <span class="text-amber-500 font-bold">Dart</span>, <span class="text-amber-500 font-bold">Python</span> and <span class="text-amber-500 font-bold">JavaScript</span>. <br />
              My content is mostly focused on practical examples and projects. This year I have created a YouTube channel for the same purpose. <br />
            </p>
            <x-button-link href="https://webapp99.com" variant="primary" target="_blank"
                class="mr-3 w-full mb-3 text-center lg:w-auto">
              View my blog- Webapp99
            </x-button-link>
            <x-button-link href="https://www.youtube.com/channel/UC433ZbuTKqpdnaTMoSuqb-w" variant="red" target="_blank"
                class="mr-3 w-full mb-3 text-center lg:w-auto">
              View my channel
            </x-button-link>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->
