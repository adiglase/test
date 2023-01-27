@extends('layouts.main')
   
@section('container')
<div style="font-family: 'Cormorant Garamond', serif; ">
   <div class="container px-4 py-0 pt-2" data-aos="fade-up">
      <p class="text-center display-5 fw-bolder mb-0 text-dark border-bottom pb-2">Hubungi Kami</p>
      <p class="text-center lead fw-semibold my-2">Tolong beri tahu kami tentang rencana anda untuk perjalanan epic anda</p>

      <div class="row g-4 py-2 row-cols-1 row-cols-lg-3 mt-3 mb-4">
         <div class="col d-flex align-items-center justify-content-center">
            <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-6 flex-shrink-0 me-3">
               <svg class="bi" width="45" height="45"><use xlink:href="#facebook"/></svg>
            </div>
            <div class="fs-5">
               <h4 class="m-0 fw-bolder">Facebook</h4>
               <a class="text-decoration-none text-reset" href="">ParadiseTour</a>
            </div>
         </div>

         <div class="col d-flex align-items-center justify-content-center">
            <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-6 flex-shrink-0 me-3">
               <svg class="bi" width="45" height="45"><use xlink:href="#instagram"/></svg>
            </div>
            <div class="fs-5">
               <h4 class="m-0 fw-bolder">Instagram</h4>
               <a class="text-decoration-none text-reset" href="">ParadiseTour</a>
            </div>
         </div>

         <div class="col d-flex align-items-center justify-content-center">
            <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-6 flex-shrink-0 me-3">
               <svg class="bi" width="45" height="45"><use xlink:href="#twitter"/></svg>
            </div>
            <div class="fs-5">
               <h4 class="m-0 fw-bolder">Twitter</h4>
               <a class="text-decoration-none text-reset" href="">ParadiseTour</a>
            </div>
         </div>

         <div class="col d-flex align-items-center justify-content-center">
            <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-6 flex-shrink-0 me-3">
               <svg class="bi" width="45" height="45"><use xlink:href="#telepone"/></svg>
            </div>
            <div class="fs-5">
               <h4 class="m-0 fw-bolder">Telepon</h4>
               <a class="text-decoration-none text-reset" href="tel:+62-812-3456-6789">+62-812-3456-6789</a>
            </div>
         </div>

         <div class="col d-flex align-items-center justify-content-center">
            <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-6 flex-shrink-0 me-3">
               <svg class="bi" width="45" height="45"><use xlink:href="#whatsapp"/></svg>
            </div>
            <div class="fs-5">
               <h4 class="m-0 fw-bolder">whatsapp</h4>
               <a class="text-decoration-none text-reset" href="https://api.whatsapp.com/send?phone=628123456789&text=Hallo%20Paaradise%20Tour">+62-812-3456-6789</a>
            </div>       
         </div>

         <div class="col d-flex align-items-center justify-content-center">
            <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-6 flex-shrink-0 me-3">
               <svg class="bi" width="45" height="45"><use xlink:href="#env"/></svg>
            </div>
            <div class="fs-5">
               <h4 class="m-0 fw-bolder">Email</h4>
               <a  class="text-decoration-none text-reset" href="mailto:Paaradise@gmail.com">Paradise@gmail.com</a>
            </div>
         </div>
      </div>

      <div class="row g-4 pt-2 row-cols-1 row-cols-lg-2 ">
         <div class="col d-flex align-items-center justify-content-center">
            <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-6 flex-shrink-0 me-3">
               <svg class="bi" width="55" height="55"><use xlink:href="#shop"/></svg>
            </div>
            <div class="fs-5">
               <h4 class="m-0 fw-bolder">Alamat</h4>
               <address>
                  Jln. Jend Sudirman No 01<br>
                  Kec. Batam Kota<br> 
                  Batam Kepulauan Riau<br>
                  Indonesia
               </address>
            </div>
         </div>
         
         <div class="col d-flex align-items-center justify-content-center">
            <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-6 flex-shrink-0 me-3">
               <svg class="bi" width="55" height="55"><use xlink:href="#pin"/></svg>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.360728038692!2d104.01312617531732!3d1.1392462621970159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989825a6f4d29%3A0x5ebdc09b9a666942!2sPutera%20Batam%20University%20(Nagoya)!5e0!3m2!1sen!2sid!4v1656549714891!5m2!1sen!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
</div>
@endsection