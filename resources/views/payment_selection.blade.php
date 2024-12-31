<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Payment Method</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: url('Lazapee.png') no-repeat center center fixed; /* Background image */
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .payment-wrapper {
            text-align: center;
            background: rgba(255, 255, 255, 0.8); /* Slightly transparent background */
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
            font-size: 26px;
            font-weight: 600;
        }

        .payment-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        button {
            padding: 15px 25px;
            margin: 10px 0;
            width: 100%;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            color: white;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }

        button i {
            margin-right: 10px;
            font-size: 20px;
        }

        .paypal {
            background-color: #0070ba;
        }

        .gcash {
            background-color: #00a1e0;
        }

        .paymaya {
            background-color: #ff4b4b;
        }

        button:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .back-link {
            margin-top: 20px;
        }

        .back-link a {
            color: #007bff;
            font-size: 14px;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .payment-wrapper {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="payment-wrapper">
        <h1>Select Payment Method</h1>
        
        <div class="payment-buttons">
            <!-- PayPal Button -->
            <button class="paypal" onclick="window.location.href='payment_page.blade.php'">
                <i class="fab fa-paypal"></i> Pay with PayPal
            </button>
            
            <!-- COD Button -->
            <button class="paymaya" onclick="window.location.href='cod_payment'">
                <i class="fas fa-truck"></i> Cash on Delivery
            </button>
            
            <!-- GCash Button (Inactive) -->
            <button class="gcash" onclick="alert('GCash payment option is not yet implemented.')">
                <i class="fab fa-cc-mastercard"></i> GCash (Coming Soon)
            </button>
        </div>

        <div class="back-link">
            <a href="{{ route('home') }}">Back</a>
        </div>
    </div>
</body>
</html>
