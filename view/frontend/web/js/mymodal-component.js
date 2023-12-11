require(['jquery','mage/url','Magento_Ui/js/modal/modal','mage/validation'], function($,url,modal)  {
	
        	var options = {
			type: 'popup',
			responsive: true,
			innerScroll: false,
			showLoader: true,
			buttons: [{
				text: $.mage.__('Continue'),
				class: 'nds_prd_inquiry',
				click: function () {
					this.closeModal();
				}
			}]
		}; 
        var popup = modal(options, $('#myModal'));

        $("#node_popupButton").on('click',function(){
			$("#myModal").modal("openModal");
				
			    $(document).ready(function() {

			        $('#popup-submit').click(function() {
			        	$('.error-message').text('');
			        	var nameValue = $("input[name='name']").val();
				        var phoneValue = $("input[name='telephone']").val();
				        var emailValue = $("input[name='email-id']").val();
				        var descriptionValue = $('#requirement').val();
				        var isValid = true;

				        if (nameValue.trim() === '') {
				            isValid = false;
				            $('#customer_name_error').text('Name is required.');
				        }

				        if (emailValue.trim() === '') {
				            isValid = false;
				            $('#customer_email_error').text('Email is required.');
				        }

				        if (descriptionValue.trim() === '') {
				            isValid = false;
				            $('#input-textarea_error').text('Description is required.');
				        }
				        if (!isValid) {
				            return false; // Prevent form submission
				        }

				        if (isValid) {

			            var popupData = $('#popup-input').val();
			            var popupEmail = $('#popup-email').val();
			            var popupTel = $('#popup-tel').val();
			            var popupMsg = $('#requirement').val();
			            var factorDiscount = $('#factorDiscount').val();
			            var current_prdidd = $('#current_prdid').val();
			            var current_prdname = $('#current_prdname').val();
			            var current_prdurl = $('#current_prdurl').val();
			           		
							$.ajax({
			                    url: factorDiscount,
			                    data: {
			                        cust_name: popupData,
			                        cust_email: popupEmail,
			                        cust_phn_no: popupTel,
			                        cust_msg: popupMsg,
			                        prd_name: current_prdname,
			                        prd_url: current_prdurl
			                    },
			                    type: 'POST',
			                    //dataType: 'json',
			                    showLoader: true,
			                    success: function (response) {
			                        console.log(response);
			                    },
			                    error: function (xhr, status, error) {
			                        console.log(error);
			                    }

			                });
			        $(".action-close").trigger("click");
			        $('#popup-input').val('');
			        $('#popup-email').val('');
			        $('#popup-tel').val('');
			        $('#requirement').val('');

					}
				}); 
			});
		});
	});
