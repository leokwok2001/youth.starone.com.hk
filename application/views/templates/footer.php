<strong>powered by leo kwok &copy; 2014</strong>


  <script language="JavaScript">
    $(document).ready(function(){
      var opt={dayNames:["星期日","星期一","星期二","星期三","星期四","星期五","星期六"],
               dayNamesMin:["日","一","二","三","四","五","六"],
               monthNames:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
               monthNamesShort:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
               prevText:"上月",
               nextText:"次月",
               weekHeader:"週",
               showMonthAfterYear:true,
               dateFormat:"yy-mm-dd"
               };

	   for(count = 0; count < 100; count++){
          	$("#datepicker"+count).datepicker(opt);
           }




      });
  </script>

  	<script type="text/javascript">
	$(document).ready(function() {
		$('.calendar .day').click(function() {
			day_num = $(this).find('.day_num').html();
			day_data = prompt('請輸入事件:', $(this).find('.content').html());
			//document.write(day_num);

			if (day_data != null) {

				$.ajax({
					url: window.location,
					type: 'POST',
					data: {
						day: day_num,
						data: day_data
					},
					success: function(msg) {
						location.reload();
					}
				});

			}

		});

	});
	  </script>

     <script type="text/javascript">
	function confirmation(lcUrl) {
  		var answer = confirm("Delete Record?")
  		if (answer) {


			//alert(lcUrl);
			window.parent.location=lcUrl;
			//window.alert("yes");
			//window.redirect("http://youth.starone.com.hk/index.php/member/edit/67");
		  } else {
			//  window.alert("no");
    			//reloads current page - however it still continues to function
    	return false;
  		}
		}
		</script>




</body>
</html>
