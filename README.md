<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع ويب مع نموذج تسجيل</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 0.5rem 0;
            margin-top: auto;
        }
        .container {
            display: flex;
            flex: 1;
        }
        .sidebar {
            background-color: #f4f4f4;
            padding: 1rem;
            width: 20%;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .main-content {
            flex: 1;
            padding: 1rem;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 1rem;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form input, form button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        form button:hover {
            background-color: #45a049;
        }
        .lang-toggle {
            text-align: center;
            margin: 1rem 0;
        }
        .lang-toggle button {
            padding: 0.5rem 1rem;
            margin: 0 0.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <script>
        function toggleLanguage(lang) {
            document.documentElement.lang = lang;
            const elements = document.querySelectorAll('[data-en], [data-ar]');
            elements.forEach(el => {
                if (lang === 'ar') {
                    el.textContent = el.getAttribute('data-ar');
                } else if (lang === 'en') {
                    el.textContent = el.getAttribute('data-en');
                }
            });

            // Update placeholders for inputs
            const placeholders = {
                "username": {
                    "ar": "ادخل اسم المستخدم",
                    "en": "Enter your username"
                },
                "email": {
                    "ar": "ادخل بريدك الإلكتروني",
                    "en": "Enter your email"
                },
                "password": {
                    "ar": "ادخل كلمة المرور",
                    "en": "Enter your password"
                },
                "confirm-password": {
                    "ar": "تأكيد كلمة المرور",
                    "en": "Confirm your password"
                }
            };

            for (const [id, texts] of Object.entries(placeholders)) {
                const input = document.getElementById(id);
                if (input) {
                    input.placeholder = texts[lang];
                }
            }
        }
        window.onload = () => toggleLanguage('ar');
    </script>
</head>
<body>

<header>
    <h1 data-en="Welcome to Our Website" data-ar="مرحباً بكم في موقعنا">مرحباً بكم في موقعنا</h1>
</header>

<div class="lang-toggle">
    <button onclick="toggleLanguage('en')">English</button>
    <button onclick="toggleLanguage('ar')">العربية</button>
</div>

<div class="container">
    <aside class="sidebar">
        <h2 data-en="Sidebar" data-ar="الشريط الجانبي">الشريط الجانبي</h2>
        <ul>
            <li><a href="#" data-en="Home" data-ar="الرئيسية">الرئيسية</a></li>
            <li><a href="#" data-en="About" data-ar="من نحن">من نحن</a></li>
            <li><a href="#" data-en="Services" data-ar="الخدمات">الخدمات</a></li>
            <li><a href="#" data-en="Contact" data-ar="اتصل بنا">اتصل بنا</a></li>
        </ul>
    </aside>
    
    <main class="main-content">
        <form action="save_user.php" method="POST">

        </form>
        <h2 data-en="Register a New User" data-ar="تسجيل مستخدم جديد">تسجيل مستخدم جديد</h2>
        <form action="register.php" method="POST">
            <label for="username" data-en="Username:" data-ar="اسم المستخدم:">اسم المستخدم:</label>
            <input type="text" id="username" name="username" placeholder="ادخل اسم المستخدم" required>

            <label for="email" data-en="Email:" data-ar="البريد الإلكتروني:">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" placeholder="ادخل بريدك الإلكتروني" required>

            <label for="password" data-en="Password:" data-ar="كلمة المرور:">كلمة المرور:</label>
            <input type="password" id="password" name="password" placeholder="ادخل كلمة المرور" required>

            <label for="confirm-password" data-en="Confirm Password:" data-ar="تأكيد كلمة المرور:">تأكيد كلمة المرور:</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="تأكيد كلمة المرور" required>

            <button type="submit" data-en="Register" data-ar="تسجيل">تسجيل</button>
        </form>
    </main>
</div>

<footer>
    <p data-en="&copy; 2025 Your Website. All rights reserved." data-ar="&copy; 2025 موقعك. جميع الحقوق محفوظة.">&copy; 2025 موقعك. جميع الحقوق محفوظة.</p>
</footer>

<script>
    // Set default language to Arabic
    toggleLanguage('ar');
</script>

</body>
</html>
