<style>
    .footer {
        background-color: black;
        color: white;
        padding: 40px 0;
    }

    .footer-logo {
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .footer-logo span {
        color: #0073e6;
    }

    .footer a {
        color: white;
        text-decoration: none;
        font-size: 14px;
    }

    .footer a:hover {
        text-decoration: underline;
    }

    .footer-bottom {
        border-top: 1px solid #ddd;
        margin-top: 20px;
        padding-top: 20px;
        font-size: 12px;
        text-align: center;
        color: #ccc;
    }

    .footer-icons img {
        width: 24px;
        height: 24px;
        margin-right: 10px;
    }

    /* Para garantir que as colunas se ajustem de maneira responsiva */
    .footer .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .footer .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .footer .col-md-3 {
        flex: 1;
        min-width: 220px;
        margin-bottom: 30px;
    }

    /* Melhorias para a responsividade do iframe */
    .footer .col-md-3 iframe {
        width: 100%;
        height: 200px;
        border: 0;
    }

    footer {
        a {
            color: white !important;
        }
    }
</style>

<footer class="footer">
    <div class="container d-flex justify-content-center">
        <img src="./logo-2.png" alt="">
    </div>
    <div class="footer-bottom mx-5">
            <p class="text-info">© 2024 Daily Beauty</p>
            <div class="footer-icons">
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" alt="Instagram"></a>
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/tiktok.png" alt="TikTok"></a>
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/facebook-new.png" alt="Facebook"></a>
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/twitter.png" alt="Twitter"></a>
            </div>
        </div>
</footer>
