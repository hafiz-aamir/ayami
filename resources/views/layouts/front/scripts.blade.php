<!-- ============================================================== -->
<!-- All SCRIPTS AND JS LINKS BELOW  -->
<!-- ============================================================== -->

<!-- Js Files Start -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<!-- Front Scripts -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://codepen.io/fancyapps/pen/PEqJvL.js"></script>
<script src="https://cdn.jsdelivr.net/npm/round-slider@1.6.1/dist/roundslider.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    AOS.init({
        duration: 1000,
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    
    // Set the options that I want
    toastr.options = {
    "closeButton": true,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "1000",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear", 
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }

</script>


<script>

	function editableContent(){
		$('.editable').each(function(){
			$(this).append('<div class="editable-wrapper"><a href="javascript:" class="edit" title="Edit" onclick="editContent(this)"><i class="far fa-edit"></i></a><a href="javascript:" class="update" title="Update" onclick="updateContent(this)"><i class="far fa-share-square"></i></a></div>');
		});
	}

	function editContent(a){
		$(a).closest('.editable').attr('contenteditable', true);;
		$(a).closest('.editable-wrapper').attr('contenteditable', false);
		$(a).closest('.editable').focus();
	}

	function updateContent(a){
		var editableDiv = $(a).closest('.editable');
		var id = $(editableDiv).attr('data-id');
		var keyword = $(editableDiv).attr('data-name');
		var htmlcontent = $(editableDiv).clone(true);
		$(htmlcontent).find('.editable-wrapper').remove();
		sendData(id, keyword, $(htmlcontent).html());
	}

	function sendData(id, keyword, htmlContent){
		console.log(id);
		console.log(keyword);
		console.log(htmlContent);
		$.ajax({
	        url: "update-content",
	        type: "POST",
	        data: {
	            "_token": "{{ csrf_token() }}",
	            id: id,
	            keyword: keyword,
	            htmlContent:htmlContent,
	        },
	        success: function(response) {
	            if (response.status) {
	            	toastr.success(response.message);
	            } else {
	                toastr.success(response.error);
	            }
	        },
	    });
	}

</script>

<script type="text/javascript">

$('#newForm').on('submit',function(e){
  $('#newsresult').html('');
    e.preventDefault();

    let email = $('#newemail').val();

    $.ajax({
      url: "newsletter-submit",
      type:"POST",
      data:{
        "_token": "{{ csrf_token() }}",
        newsletter_email:email
      },
      success:function(response){
        if(response.status){
          $('#newsresult').html("<div class='alert alert-success'>" + response.message + "</div>");
        }
        else{
          $('#newsresult').html("<div class='alert alert-danger'>" + response.message + "</div>");
        }
      },
     });
    });
  </script>


<script type="text/javascript">

$('#contactform').on('submit',function(e){
  //alert('hogaya');
  $('#contactformsresult').html('');
    e.preventDefault();

    $.ajax({
      url: "{{ route('contactUsSubmit')}}",
      type:"POST",
      data: $("#contactform").serialize(),

      success:function(response){
        if(response.status){
          document.getElementById("contactform").reset();
          $('#contactformsresult').html("<div class='alert alert-success'>" + response.message + "</div>");
        }
        else{
          $('#contactformsresult').html("<div class='alert alert-danger'>" + response.message + "</div>");
        }
      },
     });
    });

</script>

@if (!Auth::guest())
@if(Auth::user()->isAdmin())
<script>editableContent();</script>
@endif
@endif

@if(Session::has('message'))
<script type="text/javascript">
    toastr.success("{{ Session::get('message') }}");
</script>
@endif
