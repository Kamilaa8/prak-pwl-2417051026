<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 320px;
        }

        .avatar-wrapper {
            width: 170px;
            height: 170px;
            margin-bottom: 28px;
        }

        .avatar-svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        /* Frame kotak dengan warna peach dan teks putih */
        .profile-box {
            width: 100%;
            background-color: #f2847a; /* Warna peach */
            color: #ffffff;            /* Warna teks putih */
            padding: 12px 16px;
            margin-bottom: 14px;
            text-align: center;
            font-size: 1.15rem;
            font-weight: 600;
            border-radius: 6px;
            box-sizing: border-box;
            word-break: break-word;
            box-shadow: 0 3px 6px rgba(242, 132, 122, 0.25);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .profile-box:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(242, 132, 122, 0.35);
        }

        .profile-box:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <div class="profile-container">
        <!-- Circular Avatar with Silhouette -->
        <div class="avatar-wrapper">
            <img src="{{ asset('propic.jpeg') }}" alt="Profile Photo" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; border: 3px solid #f2847a;">
        </div>

        <!-- Nama Box -->
        <div class="profile-box">
            {{ !empty($nama) ? $nama : 'Nama' }}
        </div>

        <!-- Kelas Box -->
        <div class="profile-box">
            {{ !empty($kelas) ? $kelas : 'Kelas' }}
        </div>

        <!-- NPM Box -->
        <div class="profile-box">
            {{ !empty($npm) ? $npm : 'NPM' }}
        </div>
    </div>

</body>
</html>