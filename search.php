<?php require_once __DIR__ . '/elements/header.php'; ?>  

<main class="page-content">
    <section class="main-section" data-location="search-form">
        <form class="form" method="GET" action="/">
            <div class="input-group search-input">
                <input class="border-inp" name="search_text" type="text" placeholder="Name or Player ID">
                <button class="buttonSearch" type="button">
                    <svg width="20" height="21" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.626 0.5C23.9812 0.500142 30.751 7.26918 30.751 15.623C30.7509 18.806 29.7628 21.7565 28.0879 24.1924L36.6943 32.8027L36.8828 33.0117C37.7641 34.0922 37.7014 35.6874 36.6943 36.6943C35.6872 37.7013 34.0914 37.7641 33.0107 36.8828L32.8018 36.6943L24.1963 28.084C21.7593 29.7643 18.8083 30.746 15.626 30.7461C7.27069 30.7461 0.500102 23.9769 0.5 15.623C0.5 7.26909 7.27063 0.5 15.626 0.5ZM15.626 5.99902C14.3621 5.99902 13.1101 6.2479 11.9424 6.73145C10.9206 7.15461 9.97993 7.7503 9.16211 8.49121L8.81934 8.81836C7.92563 9.71195 7.2161 10.7729 6.73242 11.9404C6.24882 13.1079 6 14.3594 6 15.623C6.00002 16.8867 6.24876 18.1382 6.73242 19.3057C7.21614 20.4732 7.92554 21.5341 8.81934 22.4277L9.16211 22.7539C9.98 23.4949 10.9205 24.0905 11.9424 24.5137C13.1102 24.9973 14.362 25.2461 15.626 25.2461C16.8899 25.2461 18.1418 24.9973 19.3096 24.5137C20.4772 24.0301 21.538 23.3212 22.4316 22.4277C23.3254 21.5341 24.0348 20.4732 24.5186 19.3057C25.0022 18.1382 25.251 16.8867 25.251 15.623C25.251 14.3594 25.0022 13.1079 24.5186 11.9404C24.0348 10.7729 23.3254 9.71199 22.4316 8.81836C21.5379 7.92476 20.4773 7.21508 19.3096 6.73145C18.1418 6.24784 16.8899 5.99906 15.626 5.99902Z" fill="#776140" stroke="#776140" stroke-linejoin="round"/>
                    </svg>
                </button>
                <span class="msg error" style="display: none;"></span>
            </div>
            <div class="select-group border-inp">
                <select class="select2 dropdown-white" name="sex" data-placeholder="Gender">
                    <option></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <span class="msg error" style="display: none;">Error text</span>
            </div>
            <button class="button yellow" type="submit">Search</button>
        </form>
    </section>
</main>

<?php require_once __DIR__ . '/elements/footer.php'; ?>