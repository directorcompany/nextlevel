  <!-- ***** Footer Start ***** -->
  <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">Copyright &copy; 2021 NextLevel</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="{{asset('js/js/jquery-2.1.0.min.js')}}"></script>

  <!-- site.js -->
    <script src="{{asset('js/site.js')}}"></script>
      <!-- user info -->
      <script src="{{asset('js/userInfo.js')}}"></script>

    
     
       @if(request()->getPathInfo()=='/result')
       <script src="{{asset('js/public.js')}}"></script>
       @endif
  

     <!-- timer -->
     <script src="{{asset('js/timer.js')}}"></script>

      <!-- site.js -->
    <script src="{{asset('js/start.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('js/js/popper.js')}}"></script>
<script src="{{asset('js/js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('js/js/scrollreveal.min.js')}}"></script>
<script src="{{asset('js/js/waypoints.min.js')}}"></script>
<script src="{{asset('js/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/js/imgfix.min.js')}}"></script> 

<!-- Global Init -->
<script src="{{asset('js/js/custom.js')}}"></script>

<script src="https://kit.fontawesome.com/d56261bbb9.js"></script>


<!-- user info -->
<script src="{{asset('js/userInfo.js')}}"></script>

</body>
</html>