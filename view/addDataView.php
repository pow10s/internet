<html>
<head>
    <title>Black accounting</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body style="background-image:url(/images/money.jpg)">

<form method="POST">
    <h1 >Data update:</h1>
<p>Room:</p>
<input type="text" name="room_snd" size="40">

<p>Name:</p>
<input type = "text" name="name_snd" size = "40">

<p>Period:</p>
<input type = "text" name="period_snd" size = "40">

<p>Price:</p>
<input type="text" name="price_snd" size="40">
<p><input type="submit" name = "send_btn" value = "Send"></p>

    <h1>Data delete:</h1>
<p>Insert period and room:</p>
<input type="text" name="data_delete" size="10"><input type="text" name="data_room_delete" size="10"></p>
<p><input type="submit" name = "send_data_btn" value = "Delete"></p>
    <p><input type="submit" name = "view_data_btn" value = "View"></p>
</form>
</body>
</html>