

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COD Payment</title>
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
            background: url('images/Laza.gif') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 500px;
            width: 100%;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group i {
            font-size: 20px;
            color: #007bff;
            margin-right: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            color: #333;
        }

        input:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            border: none;
            color: white;
            font-size: 14px;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button i {
            margin-right: 8px;
        }

        button:hover {
            background-color: #218838;
        }

        .back-link {
            text-align: center;
            margin-top: 10px;
        }

        .back-link a {
            color: #007bff;
            text-decoration: none;
            font-size: 12px;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>COD Payment</h1>
        
        <form method="POST" action="{{ route('payment-summary') }}">
            @csrf <!-- Add this directive -->
            
            <!-- Customer Name -->
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" name="customer_name" placeholder="Name" required aria-label="Customer Name">
            </div>

            <!-- Address -->
            <div class="form-group">
                <i class="fas fa-map-marker-alt"></i>
                <textarea name="address" rows="3" placeholder="Address" required aria-label="Delivery Address"></textarea>
            </div>

            <!-- Phone Number -->
            <div class="form-group">
                <i class="fas fa-phone-alt"></i>
                <input type="text" name="phone" placeholder="Phone" required aria-label="Phone Number">
            </div>

            <!-- Order ID -->
            <div class="form-group">
                <i class="fas fa-box"></i>
                <input type="number" name="order_id" placeholder="Order ID" required aria-label="Order ID">
            </div>

            <!-- Amount -->
            <div class="form-group">
                <i class="fas fa-credit-card"></i>
                <input type="number" step="0.01" name="amount" placeholder="Amount" required aria-label="Amount">
            </div>

            <!-- Submit Button -->
            <button type="submit">
                <i class="fas fa-arrow-right"></i> Proceed
            </button>
        </form>

        <div class="back-link">
            <a href="{{ route('home') }}">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>
</body>
</html>
