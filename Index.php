php: {
	//Recieve variables via Post from Africatalking gateway
	$sessionId = $_POST["$sessionId"]
				 $sessionCode = $_POST["sessionCode"]
								$phoneNumber = $_POST["phoneNumber"]
										$text = $_POST["text"]
}

{
	if ($text = "*384*10330")
		//This is the first request>. Note how we starts with CON
		$response = "CON What would you want to check in"
					$response = "1.My Moola Account balance"
								$response = "2.My Moola Acc Number"
											$response = "3.More information"
	}

{
	else if ($text = "1")
		// business logic for the first level response
		$response = "CON choose balance information you want to view"
					$response = "1.Transactions"
								$response = "2.Currentbalance"
	}

{
	else if ($text = "2")
		//business logic for the
		//this is a terminal request. Note how we starts with End.
		$response = "END Your balance is"
					$phoneNumber = "phonenumber"
	}

{
	else if ($text = "1*1")
		// this is a second level response where the user selected 1 in the first instance
		$transactions = "This month013"

						// This is a terminal request. Note how we starts with END
						$response = "END Your transactions this month are 13".$transactions
	}

{
	else if ($text = "1*2")
		// this is a second level response where the user selected 1 in the first instance
		$transactions = "13 Total Transactions"

						// this is a terminal request. Note how we start with END
						$response = "END 13 Total Transactions".$transaction
	}

{
	else if ($text = "2*1")
		// this is a second level response where the user selected 2 in the first instance
		$Currentbalance = "R100.00"

						  // This is a terminal request. Note how we starts with END
						  $response = "END Your current balance is month are R100.00".$Currentbalance
	}

{
	else if ($text = "2*1")
		// this is a second level response where the user selected 2 in the first instance
		$currentbalance = "R100.00"

						  // this is a terminal request. Note how we start with END
						  $response = "END R100.00".$Currentbalance

									  //echo the response to the API. The responds depends on the statement that is fulfilled in each instance
echo = "$response" $Login="https://moneykings.herokuapp.com" 
     
	}