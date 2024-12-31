<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Summary</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
    
        .container {
            background: rgba(255, 255, 255, 0.9); /* Transparent white */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }



         body {
            font-family: Arial, sans-serif;
            background: url('images/Lazapee.png') no-repeat center center fixed; /* Add your GIF URL here */
            background-size: cover; /* Ensures the background covers the entire viewport */
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            transition: opacity 0.5s ease; /* Smooth transition for opacity */
        }

        .center-wrapper {
            max-width: 400px;
            width: 100%;
            background: rgba(255, 255, 255, 0.8); /* Slightly transparent background for better readability */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .icon {
            font-size: 50px;
            color: #28a745;
            margin-bottom: 10px;
        }
        h2 {
            color: #343a40;
            margin-bottom: 20px;
            font-size: 24px;
        }
        p {
            margin: 10px 0;
            font-size: 16px;
            color: #495057;
        }
        p strong {
            color: #212529;
        }
        .amount {
            font-size: 22px;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 20px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            margin-bottom: 15px;
            transition: all 0.3s ease-in-out;
        }
        button:hover {
            background-color: #0056b3;
        }
        .back-button {
            background-color: #6c757d;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            h2 {
                font-size: 20px;
            }
            p {
                font-size: 14px;
            }
            button {
                font-size: 14px;
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Add an icon -->
        <div class="icon">
            <i class="fas fa-receipt"></i>
        </div>

        <h2>Payment Summary</h2>
        <p><strong>Order ID:</strong> {{ $payment->order_id }}</p>
        <p><strong>Payment Method:</strong> {{ $payment->payment_method }}</p>
        <p><strong>Payment Status:</strong> {{ $payment->payment_status }}</p>
        <p class="amount"><strong>Amount:</strong> ₱{{ number_format($payment->amount, 2) }}</p>

        <button onclick="alert('Thank you for confirming your payment!')">
            <i class="fas fa-check"></i> Confirm Payment
        </button>
        
        <div class="back-link">
            <a href="{{ route('cod_payment') }}">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>
</body>
</html>
